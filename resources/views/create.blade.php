@extends('layouts.layout')

@section('title', 'Crear Poble')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4">Afegir un nou Poble</h1>

        <form action="{{ route('store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="municipi" class="block text-sm font-medium text-gray-700">Municipi</label>
                <input type="text" id="municipi" name="municipi" 
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" 
                    value="{{ old('municipi') }}" required>
                @error('municipi')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="comarca" class="block text-sm font-medium text-gray-700">Comarca</label>
                <input type="text" id="comarca" name="comarca" 
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" 
                    value="{{ old('comarca') }}" required>
                @error('comarca')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="imatge" class="block text-sm font-medium text-gray-700">Imatge (URL)</label>
                <input type="url" id="imatge" name="imatge" 
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" 
                    value="{{ old('imatge') }}">
                @error('imatge')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="descripcio" class="block text-sm font-medium text-gray-700">Descripció</label>
                <textarea id="descripcio" name="descripcio" 
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" 
                    rows="4">{{ old('descripcio') }}</textarea>
                @error('descripcio')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="provincia" class="block text-sm font-medium text-gray-700">Província</label>
                <input type="text" id="provincia" name="provincia" 
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" 
                    value="{{ old('provincia') }}" required>
                @error('provincia')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit" 
                    class="bg-blue-600 text-white px-4 py-2 rounded-md shadow hover:bg-blue-700">Desar</button>
            </div>
        </form>
    </div>
@endsection
