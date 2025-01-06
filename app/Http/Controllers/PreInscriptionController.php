<?php

namespace App\Http\Controllers;

use App\Mail\SendRejectedCondidature;
use App\Mail\SendValidationCondidature;
use App\Models\PreInscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class PreInscriptionController extends Controller
{

    public function index()
    {
        $items = PreInscription::all();
        return view("preinscription.index", compact('items'));
    }
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:pre_inscriptions,email',
            'date_naissance' => 'required|date',
            'file.*' => 'nullable|file|mimes:jpg,png,pdf', // 10MB max
        ]);

        // Sauvegarde des informations dans la base de données
        $preInscription = new PreInscription();
        $preInscription->nom = $validated['nom'];
        $preInscription->prenom = $validated['prenom'];
        $preInscription->email = $validated['email'];
        $preInscription->date_naissance = $validated['date_naissance'];

        // Si des fichiers sont téléchargés, on les sauvegarde
        if ($request->hasFile('file')) {
            $files = $request->file('file'); // Get the array of files
            $filePaths = [];

            foreach ($files as $file) {
                // Store each file and get the path
                $path = $file->store('uploads', 'public');
                $filePaths[] = $path; // Add the path to the array
            }

            // Join the paths with a comma
            $preInscription->file = implode(',', $filePaths);
        }

        $preInscription->save(); // Sauvegarde les données dans la base de données

        return redirect()->back()->with('success', 'Inscription réussie');
    }

    public function rejectCondidature(PreInscription $preInscription)
    {

        $preInscription->status = 0;


        $preInscription->save();



        // Retrieve the associated user
        $user = $preInscription->user;

        // Check if the user is not null
        if ($user) {
            $user->delete(); // Delete the user
        }

        Mail::to($preInscription->email)
            ->send(new SendRejectedCondidature($preInscription->prenom . " " . $preInscription->nom));


        return redirect()->back()->with('success', 'Pre-Inscription rejected !');
    }

    public function validateCondidature(PreInscription $preInscription)
    {


        if ($preInscription->status != 1) {

            $preInscription->status = 1;

            $user = $this->createUser($preInscription);


            $preInscription->user()->save($user);

            $preInscription->save(); // Sauvegarde les données dans la base de données
        }


        return redirect()->back()->with('success', 'Pre-Inscription validated !');
    }

    private function createUser(PreInscription $preInscription)
    {

        $password = Str::random(10);
        // Create or retrieve the first user with specific email
        $user = User::firstOrCreate([
            'email' => $preInscription->email
        ], [
            'name' => $preInscription->nom . " " . $preInscription->prenom, // Use dot (.) for string concatenation
            'email' => $preInscription->email,
            'password' => Hash::make($password), // Generate a random password
        ]);

        // Assign a role to the user (make sure to specify the role)
        $user->assignRole('bachelier'); // Replace 'admin' with the appropriate role name

        Mail::to($user->email)
            ->send(new SendValidationCondidature($user->name, $user->email, $password));

        return $user;
    }

    public function delete(PreInscription $preInscription)
    {
        if($preInscription->user){

            $preInscription->user()->delete();
        }

        $preInscription->delete();

        return redirect()->back()->with('success', 'Inscription deleted !');

    }
}
