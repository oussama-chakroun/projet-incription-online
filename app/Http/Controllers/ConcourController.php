<?php

namespace App\Http\Controllers;

use App\Mail\SendRejectedCondidature;
use App\Mail\SendValidationCondidature;
use App\Models\Concour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ConcourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Concour::all();
        return view("concour.index", compact('items'));
    }

    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'choix' => 'required|string',
            'file.*' => 'nullable|file|mimes:jpg,png,pdf', // 10MB max
        ]);

        // Sauvegarde des informations dans la base de données
        $concour = new Concour();
        $concour->choix = $validated['choix'];
        $concour->user_id = auth()->user()->id;

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
            $concour->file = implode(',', $filePaths);
        }

        $concour->save(); // Sauvegarde les données dans la base de données

        return redirect()->back()->with('success', 'Inscription réussie');
    }

    public function rejectConcour(Concour $concour)
    {

        $concour->status = 0;


        $concour->save();


        Mail::to($concour->user->email)
            ->send(new SendRejectedCondidature($concour->user->name));


        return redirect()->back()->with('success', 'concour rejected !');
    }

    public function validateConcour(Concour $concour)
    {


        if ($concour->status != 1) {

            $concour->status = 1;

            $concour->save(); // Sauvegarde les données dans la base de données
        }

        Mail::to($concour->user->email)
            ->send(new SendValidationCondidature($concour->user->name, $concour->user->email, "tets"));


        return redirect()->back()->with('success', 'concour validated !');
    }


    public function create()
    {
        return view('concour.concour-register');
    }

    /**
     * Display the specified resource.
     */
    public function show(Concour $concour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Concour $concour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Concour $concour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Concour $concour)
    {
        $concour->delete();

        return redirect()->back()->with('success', 'concour deleted !');
    }
}
