@extends('layouts.app')

@section('content')
    

    <h1>Crear Enemigo</h1>
    <form action="{{ route('enemy.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name='name' placeholder="...Nombre" required>
        </div>

        <div class="form-group">
            <label for="hp" >HP</label>
            <input type="number" class="form-control" id="hp" name='hp' placeholder="...Vida" required>
        </div>

        <div class="form-group">
            <label for="atq" >Ataque</label>
            <input type="number" class="form-control" id="atq" name='atq' placeholder="...Ataque" required>
        </div>
        
        <div class="form-group">
            <label for="def">Defensa</label>
            <input type="number" class="form-control" id="def" name='def' placeholder="...Defensa" required>
        </div>
       
        <div class="form-group">
            <label for="coins">Monedas</label>
            <input type="number" class="form-control" id="coins" name='coins' placeholder="...Monedas" required>
        </div>
       
        <div class="form-group">
            <label for="xp">Experiencia</label>
            <input type="number" class="form-control" id="xp" name='xp' placeholder="...Experiencia" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
    @endsection