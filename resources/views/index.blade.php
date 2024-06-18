@extends('layouts.layout')

@section('content')
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Poids (kg)</th>
                <th>Taille (cm)</th>
                <th>IMC Valeur</th>
                <th>Catégorie</th>

            </tr>
        </thead>
        <tbody>
            @foreach($imcRecords as $imcRecord)
                <tr>
                    <td>{{ $imcRecord->id }}</td>
                    <td>{{ $imcRecord->user }}</td>
                    <td>{{ $imcRecord->weight_kg }}</td>
                    <td>{{ $imcRecord->height_cm }}</td>
                    <td>{{ $imcRecord->IMC_value }}</td>
                    <td>{{ $imcRecord->categorie }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

