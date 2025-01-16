@extends('layouts.layout')

@section('title', $poble->municipi)

@section('content')
    <div class="bg-white shadow-lg rounded-lg overflow-hidden max-w-screen-md mx-auto">
    <h2 class="text-4xl font-extrabold mb-6 p-4 text-center text-blue-900">{{ $poble->municipi }}</h2>
        <img src="{{ $poble->imatge }}" alt="Imatge de {{ $poble->municipi }}" class="w-full h-full object-cover rounded-t-lg shadow-md">
        <div class="p-8">
            <p class="text-gray-700 mb-4"><strong class="font-semibold text-gray-900">Comarca:</strong> {{ $poble->comarca }}</p>
            <p class="text-gray-700 mb-4"><strong class="font-semibold text-gray-900">Província:</strong> {{ $poble->provincia }}</p>
            <p class="text-gray-800 leading-relaxed mb-6">{{ $poble->descripcio }}</p>
        </div>
        <div class="p-6 border-t border-gray-200">
            <a href="{{ route('index') }}" class="bg-gradient-to-r from-blue-500 to-blue-700 text-white px-6 py-3 rounded-full hover:from-blue-600 hover:to-blue-800 transition duration-300 ease-in-out transform hover:scale-105">
                Tornar a la llista
            </a>
        </div>
    </div>
@endsection