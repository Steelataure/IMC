@extends('layouts.layout')

@section('content')
    <table id="datatable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Weight (kg)</th>
                <th>Height (cm)</th>
                <th>IMC Value</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
