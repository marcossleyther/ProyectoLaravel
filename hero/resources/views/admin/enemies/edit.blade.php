@extends('layouts.app')

@section('content')


    <h1>Editar - {{$enemy->name}}</h1>

    <form action="{{ route('enemy.update', ['enemy'=> $enemy->id]) }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name='name' value="{{ $enemy->name }}" placeholder="...Nombre"
                required>
        </div>

        <div class="form-group">
            <label for="hp">HP</label>
            <input type="number" class="form-control" id="hp" name='hp' value="{{ $enemy->hp }}" placeholder="...Vida"
                required>
        </div>

        <div class="form-group">
            <label for="atq">Ataque</label>
            <input type="number" class="form-control" id="atq" name='atq' value="{{ $enemy->atq }}" placeholder="...Ataque"
                required>
        </div>

        <div class="form-group">
            <label for="def">Defensa</label>
            <input type="number" class="form-control" id="def" name='def' value="{{ $enemy->def }}" placeholder="...Defensa"
                required>
        </div>

        <div class="form-group">
            <label for="coins">Monedas</label>
            <input type="number" class="form-control" id="coins" name='coins' value="{{ $enemy->coins }}"
                placeholder="...Monedas" required>
        </div>

        <div class="form-group">
            <label for="xp">Experiencia</label>
            <input type="number" class="form-control" id="xp" name='xp' value="{{ $enemy->xp }}"
                placeholder="...Monedas" required>
        </div>

        <button type="submit" class="btn btn-warning">Editar</button>
    </form>
@endsection
