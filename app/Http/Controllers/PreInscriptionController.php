<?php

namespace App\Http\Controllers;

use App\Models\PreInscription;
use Illuminate\Http\Request;

class PreInscriptionController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:pre_inscriptions,email',
            'date_naissance' => 'required|date',
            'file' => 'nullable|file|mimes:jpg,png,pdf,docx|max:10240', // 10MB max
        ]);

        // Sauvegarde des informations dans la base de données
        $preInscription = new PreInscription();
        $preInscription->nom = $validated['nom'];
        $preInscription->prenom = $validated['prenom'];
        $preInscription->email = $validated['email'];
        $preInscription->date_naissance = $validated['date_naissance'];

        // Si un fichier est téléchargé, on le sauvegarde
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('uploads', 'public');
            $preInscription->file = $path;
        }

        $preInscription->save(); // Sauvegarde les données dans la base de données

        return redirect()->back()->with('success', 'Inscription réussie');
    }
}
