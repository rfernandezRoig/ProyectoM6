@extends('layouts.layout')

@section('title', $poble->municipi)

@section('content')
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <!-- Set the image height to 100% of the parent container -->
        <img src="{{ $poble->imatge }}" alt="Imatge de {{ $poble->municipi }}" class="w-full h-full object-cover max-w-screen-md mx-auto">
        <div class="p-6">
            <h2 class="text-3xl font-bold mb-4">{{ $poble->municipi }}</h2>
            <p class="text-gray-600 mb-2"><strong>Comarca:</strong> {{ $poble->comarca }}</p>
            <p class="text-gray-600 mb-2"><strong>Província:</strong> {{ $poble->provincia }}</p>
            <p class="text-gray-800 leading-relaxed">{{ $poble->descripcio }}</p>
        </div>
        <div class="p-6 border-t">
            <a href="{{ route('pobles.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">
                Tornar a la llista
            </a>
        </div>
    </div>
@endsection
