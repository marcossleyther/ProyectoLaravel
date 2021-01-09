@extends('layouts.app')

@section('content')


    <h1>Editar Heroe</h1>

    <form action="{{ route('heroes.update', ['hero'=> $hero->id]) }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name='name' value="{{ $hero->name }}" placeholder="...Nombre"
                required>
        </div>

        <div class="form-group">
            <label for="hp">HP</label>
            <input type="number" class="form-control" id="hp" name='hp' value="{{ $hero->hp }}" placeholder="...Vida"
                required>
        </div>

        <div class="form-group">
            <label for="atq">Ataque</label>
            <input type="number" class="form-control" id="atq" name='atq' value="{{ $hero->atq }}" placeholder="...Ataque"
                required>
        </div>

        <div class="form-group">
            <label for="def">Defensa</label>
            <input type="number" class="form-control" id="def" name='def' value="{{ $hero->def }}" placeholder="...Defensa"
                required>
        </div>

        <div class="form-group">
            <label for="luck">Suerte</label>
            <input type="number" class="form-control" id="luck" name='luck' value="{{ $hero->luck }}"
                placeholder="...Suerte" required>
        </div>

        <div class="form-group">
            <label for="coins">Monedas</label>
            <input type="number" class="form-control" id="coins" name='coins' value="{{ $hero->coins }}"
                placeholder="...Monedas" required>
        </div>

        <button type="submit" class="btn btn-warning">Editar</button>
    </form>
@endsection
