@extends('layouts.app')

@section('content')
    <div class="row">
        <h1>Sistema de Batalla</h1>
    </div>

    <div class="row text-center text-white mt-2">

        <div class="col bg-primary">
            <h2>Hero</h2>
        </div>

        <div class="col bg-warning">
            <h2>-- Vs --</h2>
        </div>

        <div class="col bg-danger">
            <h2>Enemy</h2>
        </div>
    </div>

    <div class="row text-center text-white mt-4 bg-info">
        <h2>Eventos de Batalla</h2>
    </div>

    <div class="mt-2">
        <div class="alert alert-success" role="alert">
            Heroe atacando... hua hua hua
        </div>
    
        <div class="alert alert-danger" role="alert">
            Enemgo atacando... fiu fiu fiu
        </div>
    </div>

@endsection
