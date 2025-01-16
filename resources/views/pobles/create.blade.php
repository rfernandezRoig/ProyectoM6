@extends('layouts.layout')

@section('title', 'Crear Poble')

@section('content')
    <div class="bg-white shadow-md rounded-lg overflow-hidden p-4">
        <h1 class="text-3xl font-bold mb-6">Crear un nuevo Poble</h1>

        <form action="{{ route('pobles.store') }}" method="POST">
            @csrf

            <label for="municipi" class="block text-sm font-medium text-gray-700">Municipi:</label>
            <input type="text" name="municipi" id="municipi" class="mt-1 p-2 w-full border rounded-lg" required>

            <button type="submit" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-lg">Guardar</button>
        </form>
    </div>
@endsection