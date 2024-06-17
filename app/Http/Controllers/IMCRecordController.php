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

        // Ajouter un test temporaire pour afficher le contenu de $imcRecords
        //dd($imcRecords);

        // Passer les données à la vue pour les afficher
        return view('imc', ['imcRecords' => $imcRecords]);
    }
}
