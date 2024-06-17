@extends('layouts.layout')

@section('content')
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-semibold mb-4">Calculateur d'IMC</h1>
        <form action="/simulateur" method="POST">
            @csrf
            <div class="mb-4">
                <label for="user" class="block text-gray-700 font-semibold mb-2">Nom d'utilisateur</label>
                <input type="text" name="user" id="user" class="border border-gray-400 p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="weight" class="block text-gray-700 font-semibold mb-2">Poids (kg)</label>
                <input type="number" step="1" name="weight" id="weight" class="border border-gray-400 p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="height" class="block text-gray-700 font-semibold mb-2">Taille (cm)</label>
                <input type="number" step="1" name="height" id="height" class="border border-gray-400 p-2 w-full" required>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Calculer mon IMC</button>
        </form>
    </div>
@endsection
