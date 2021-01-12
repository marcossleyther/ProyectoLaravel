@extends('layouts.app')

@section('content')


    <h1>Editar - {{$item->name}}</h1>

    <form action="{{ route('item.update', ['item'=> $item->id]) }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name='name' value="{{ $item->name }}" placeholder="...Nombre"
                required>
        </div>

        <div class="form-group">
            <label for="hp">HP</label>
            <input type="number" class="form-control" id="hp" name='hp' value="{{ $item->hp }}" placeholder="...Vida"
                required>
        </div>

        <div class="form-group">
            <label for="atq">Ataque</label>
            <input type="number" class="form-control" id="atq" name='atq' value="{{ $item->atq }}" placeholder="...Ataque"
                required>
        </div>

        <div class="form-group">
            <label for="def">Defensa</label>
            <input type="number" class="form-control" id="def" name='def' value="{{ $item->def }}" placeholder="...Defensa"
                required>
        </div>

        <div class="form-group">
            <label for="luck">Suerte</label>
            <input type="number" class="form-control" id="luck" name='luck' value="{{ $item->luck }}"
                placeholder="...Suerte" required>
        </div>

        <div class="form-group">
            <label for="cost">Monedas</label>
            <input type="number" class="form-control" id="cost" name='cost' value="{{ $item->cost }}"
                placeholder="...Monedas" required>
        </div>

        <button type="submit" class="btn btn-warning">Editar</button>
    </form>
@endsection