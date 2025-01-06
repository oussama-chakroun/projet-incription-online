<?php

namespace App\Http\Controllers;

use App\Mail\ConvocationDetailsMail;
use App\Mail\SendRejectedCondidature;
use App\Mail\SendValidationCondidature;
use App\Models\Concour;
use App\Models\Convocation;
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
        $convocations = Convocation::where('status', 1)->get();
        return view("concour.index", compact('items' , 'convocations'));
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

    public function validateConcour(Concour $concour ,Request $request)
    {

        if($request->convocation_id){
            $concour->convocation_id = $request->convocation_id;

        }

        if ($concour->status != 1) {

            $concour->status = 1;

        }
        $concour->save(); // Sauvegarde les données dans la base de données

        $convocation = Convocation::findOrFail($concour->convocation_id);
        Mail::to($concour->user->email)
            ->send(new ConvocationDetailsMail($convocation , $concour->user->name));


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
