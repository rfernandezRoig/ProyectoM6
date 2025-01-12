@extends('layouts.app')

@section("content")

<div class="container mt-5">
        <div class="text-center">
            <h1>{{ __("Llistat d'alumnes") }}</h1>
            <a href="{{ route("tarragona.create") }}" class="btn btn-primary">
                {{ __("Afegir alumne") }}
            </a>
        </div>
        <form action="{{ route('tarragonas.index') }}" method="GET">
            <input type="text" name="search" placeholder="Buscar por nombre..." value="{{ request('search') }}">
            <button type="submit">Buscar</button>
        </form>
        <table class="table table-bordered mb-5 mt-5">
            <thead>
                <tr class="table-success">
                <th>{{ __("Id") }}</th>
                <th>{{ __("Nom") }}</th>
                <th>{{ __("Comarca") }}</th>
                <th>{{ __("Provincia") }}</th>
                <th>{{ __("Descripció") }}</th>
                <th>{{ __("Imatge") }}</th>
                </tr>
            </thead>
            <tbody>
                @forelse($tarragona as $pobles)
                <tr>
                    <th scope="row">{{ $pobles->id }}</th>
                    <td>{{ $pobles->nom }}</td>
                    <td>{{ $pobles->comarca }}</td>
                    <td>{{ $pobles->provincia }}</td>
                    <td>{{ $pobles->descripcio }}</td>
                    <td>{{ $pobles->imatge }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4">
                        <div class="text-center" role="alert">
                            <p><strong class="font-bold">{{ __("No hi ha alumnes") }}</strong></p>
                            <span>{{ __("No hi ha cap dada a mostrar") }}</span>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection