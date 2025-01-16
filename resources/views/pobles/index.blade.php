@extends('layouts.layout')

@section('title', 'Llista de Pobles')

@section('content')
    <div class="bg-white shadow-md rounded-lg overflow-hidden p-4">
        <h1 class="text-3xl font-bold mb-6">Llista de Pobles</h1>

        <!-- Loop through each població and create a link -->
        <ul class="space-y-4">
            @foreach($pobles as $poble)
                <li>
                    <a href="{{ route('pobles.show', $poble->id) }}" class="text-blue-600 hover:underline font-medium transition duration-300 ease-in-out transform hover:scale-105">
                        {{ $poble->municipi }}
                    </a>
                    <a href="{{ route('pobles.update', $poble->id) }}" class="btn btn-primary">{{ __("Editar") }}</a>
                    
                    <a href="#" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-poble-{{ $poble->id }}-form').submit();">{{ __("Eliminar") }}</a>
                    <form id="delete-poble-{{ $poble->id }}-form" action="{{ route('pobles.destroy', $poble->id) }}" method="POST" class="hidden">
                        @method("DELETE")
                        @csrf
                    </form>
                    <form id="edit-poble-{{ $poble->id }}-form" action="{{ route('pobles.update', $poble->id) }}" method="PUT" class="hidden">
                         @method("PUT")
                        @csrf
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
