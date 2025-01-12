@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <div class="container text-center mt-5">
                        <div class="row">
                            <div class="col">
                                <a href="{{ url('barcelona') }}" class="btn btn-outline-primary btn-lg">Pobles de Barcelona</a>
                            </div>
                            <div class="col">
                                <a href="{{ url('tarragona') }}" class="btn btn-outline-primary btn-lg">Pobles de Tarragona</a>
                            </div>
                        </div>
                    </div>
                    <div class="container text-center mt-5">
                        <div class="row">
                            <div class="col">
                                <a href="{{ url('girona') }}" class="btn btn-outline-primary btn-lg">Pobles de Girona</a>
                            </div>
                            <div class="col">
                                <a href="{{ url('lleida') }}" class="btn btn-outline-primary btn-lg">Pobles de Lleida</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection