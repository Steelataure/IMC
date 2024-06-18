<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\IMCRecord;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;

class IMCRecordController extends Controller
{
    public function index()
    {
        // Récupérer tous les enregistrements IMC de la table IMC_Records
        $imcRecords = IMCRecord::all();

        // Passer les données à la vue pour les afficher
        return view('index', ['imcRecords' => $imcRecords]);
    }

    public function create()
    {
        // Récupérer tous les enregistrements IMC de la table IMC_Records
        $imcRecords = IMCRecord::all();

        // Passer les données à la vue pour les afficher
        return view('create', ['imcRecords' => $imcRecords]);
    }

    public function store(Request $request)
    {
        // Valider les données soumises
        $request->validate([
            'user' => 'required|string|max:255',
            'weight' => 'required|numeric|min:1',
            'height' => 'required|numeric|min:1'
        ]);

        // Calculer la valeur de l'IMC
        $imcValue = $request->weight / (($request->height / 100) ** 2);

        // Déterminer la catégorie de l'IMC
        $categorie = $this->determineIMCCategorie($imcValue);

        // Créer un nouvel enregistrement IMCRecord
        $imcRecord = new IMCRecord();
        $imcRecord->user = $request->user;
        $imcRecord->weight_kg = $request->weight;
        $imcRecord->height_cm = $request->height;
        $imcRecord->IMC_value = $imcValue;
        $imcRecord->categorie = $categorie;

        // Enregistrer l'enregistrement dans la base de données
        $imcRecord->save();
        $message = "Votre IMC a été calculé avec succès ! Nom: {$imcRecord->user}, IMC: {$imcRecord->IMC_value}, Catégorie: {$imcRecord->categorie}";

        // Rediriger l'utilisateur vers la page d'accueil avec un message de succès
        return redirect('/')->with('success', "Votre IMC a été calculé avec succès !
         Nom: {$imcRecord->user}, IMC: {$imcRecord->IMC_value}, Catégorie: {$imcRecord->categorie}");
    }

    private function determineIMCCategorie($imcValue)
    {
        if ($imcValue < 18.5) {
            return 'sous-poids';
        } elseif ($imcValue >= 18.5 && $imcValue <= 24.9) {
            return 'normal';
        } elseif ($imcValue >= 25 && $imcValue <= 29.9) {
            return 'surpoids';
        } elseif ($imcValue >= 30) {
            return 'obésité';
        } else {
            return 'inconnu';
        }
    }
}
