@extends('layouts.layout')

@section('content')

@if (session('success'))
    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
        <p class="font-bold">Succès</p>
        <p>{{ session('success') }}</p>
    </div>
    <br>
@endif

<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <!-- <th>ID</th> -->
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
                <!-- <td>{{ $imcRecord->id }}</td> -->
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
