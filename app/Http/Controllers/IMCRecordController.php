<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\IMCRecord;
use App\Http\Controllers\Controller; 


class IMCRecordController extends Controller
{
    public function index()
    {
        // Récupérer tous les enregistrements IMC de la table IMC_Records
        $imcRecords = IMCRecord::all();

        // Ajouter un test temporaire pour afficher le contenu de $imcRecords
        //dd($imcRecords);

        // Passer les données à la vue pour les afficher
        return view('index', ['imcRecords' => $imcRecords]);
    }

    public function imc()
    {
        // Récupérer tous les enregistrements IMC de la table IMC_Records
        $imcRecords = IMCRecord::all();

        // Passer les données à la vue pour les afficher
        return view('imc', ['imcRecords' => $imcRecords]);
    }

    public function store(Request $request)
{
    // Valider les données soumises
    $request->validate([
        'user' => 'required|string|max:255',
        'weight' => 'required|numeric|min:1',
        'height' => 'required|numeric|min:1'
    ]);

    // Créer un nouvel enregistrement IMCRecord
    $imcRecord = new IMCRecord();
    $imcRecord->user = $request->user;
    $imcRecord->weight_kg = $request->weight;
    $imcRecord->height_cm = $request->height;
    $imcRecord->IMC_value = $request->weight / (($request->height / 100) ** 2);

    // Enregistrer l'enregistrement dans la base de données
    $imcRecord->save();

    // Rediriger l'utilisateur vers la page d'accueil avec un message de succès
    return redirect('/')->with('success', 'Votre IMC a été calculé avec succès !');
}

}
