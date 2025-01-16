@extends('layouts.layout')

@section('title', 'Llista de Pobles')

@section('content')
    <div class="bg-white shadow-md rounded-lg overflow-hidden p-4">
        <h1 class="text-3xl font-bold mb-6">Llista de Pobles</h1>
        <ul class="space-y-4">
        <form method="GET" action="{{ route('index') }}" class="mb-6">
            <input type="text" name="search" placeholder="Buscar poble..." class="border p-2 rounded" value="{{ request('search') }}">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Buscar</button>
        </form>
            @foreach($pobles as $poble)
        <div class="bg-white shadow-md rounded-lg overflow-hidden p-4 border-2 border-gray-300">
            <li class="flex justify-between items-center">
                    <!-- Poble Name -->
                    <a href="{{ route('show', $poble->id) }}" class="bg-purple-500 text-white px-3 py-1 rounded hover:bg-purple-600 font-semibold text-lg">
                        {{ $poble->municipi }}
                    </a>

                    <!-- Edit and Delete Buttons for Authenticated Users -->
                    @auth
                        <div class="flex space-x-2">
                            <!-- Edit Button -->
                            <a href="{{ route('edit', $poble->id) }}" 
                               class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">
                                Edita
                            </a>

                            <!-- Delete Form -->
                            <form action="{{ route('destroy', $poble->id) }}" method="POST" 
                                  onsubmit="return confirm('Estàs segur que vols eliminar aquest poble?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                    Elimina
                                </button>
                            </form>
                        </div>
                    @endauth
                </li>
            </div>
            @endforeach
        </ul>
    </div>
@endsection
