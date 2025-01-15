@extends('layouts.app')
@section("content")

<div class="container mt-5">
        <div class="text-center">
            <h1>{{ __("Llistat de Pobles") }}</h1>
            <a href="{{ route("catalunya.create") }}" class="btn btn-primary">
                {{ __("Afegir alumne") }}
            </a>
        </div>

        <table class="table table-bordered mb-5 mt-5">
            <thead>
                <tr class="table-success">
                <th>{{ __("Id") }}</th>
                <th>{{ __("Nom") }}</th>
                <th>{{ __("Comarca") }}</th>
                <th>{{ __("Provincia") }}</th>
                <th>{{ __("Descripció") }}</th>
                <th>{{ __("Fotos") }}</th>
                </tr>
            </thead>
            <tbody>
                @forelse($catalunya as $pobles)
                <tr>
                    <th scope="row">{{ $pobles->id }}</th>
                    <td>{{ $pobles->nom }}</td>
                    <td>{{ $pobles->comarca }}</td>
                    <td>{{ $pobles->comarca }}</td>
                    <td>{{ $pobles->comarca }}</td>
                    <td>{{ $pobles->comarca }}</td>
                    <td>
                        <a href="{{ route("catalunya.edit", ["catalunya" => $pobles]) }}" class="btn btn-warning">{{ __("Editar") }}</a> 
                        <a href="#" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-project-{{ $pobles->id }}-form').submit();">{{ __("Eliminar") }}</a>
                        <form id="delete-project-{{ $pobles->id }}-form" action="{{ route("catalunya.destroy", ["catalunya" => $pobles]) }}" method="POST" class="hidden">
                            @method("DELETE")
                            @csrf
                        </form>
                </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4">
                        <div class="text-center" role="alert">
                            <p><strong class="font-bold">{{ __("No hi ha Pobles") }}</strong></p>
                            <span>{{ __("No hi ha cap dada a mostrar") }}</span>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
        {{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {!! $catalunya->links() !!}
        </div>
    </div>

@endsection