@extends('layouts.layout')

@section('title', 'Editar Poble')

@section('content')
    <div class="bg-white shadow-md rounded-lg overflow-hidden p-4">
        <h1 class="text-3xl font-bold mb-6">Editar Poble</h1>

        <form action="{{ route('pobles.update', $poble->id) }}" method="PUT">
            @csrf
            @method('PUT')

            <label for="municipi" class="block text-sm font-medium text-gray-700">Municipi:</label>
            <input type="text" name="municipi" id="municipi" value="{{ $poble->municipi }}" class="mt-1 p-2 w-full border rounded-lg" required>

            <button type="submit" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-lg">Actualizar</button>
        </form>
    </div>
@endsection
