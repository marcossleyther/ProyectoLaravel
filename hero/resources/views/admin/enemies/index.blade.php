@extends('layouts.app')

@section('content')
    <div class="row">
        <h1>Lista de Enemigos</h1>
    </div>

    <div class="col">
        <a href="{{ route('enemy.create') }}" class="btn btn-primary mb-4 mt-2 ">Crear Enemigo</a>
    </div>

    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">HP</th>
                    <th scope="col">Ataque</th>
                    <th scope="col">Defensa</th>
                    <th scope="col">Monedas</th>
                    <th scope="col">Experiencia</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($enemies as $enemy)
                    <tr>
                        <th scope="row"> {{ $enemy->id }}</th>
                        <td>{{ $enemy->name }}</td>
                        <td>{{ $enemy->hp }}</td>
                        <td>{{ $enemy->atq }}</td>
                        <td>{{ $enemy->def }}</td>
                        <td>{{ $enemy->coins }}</td>
                        <td>{{ $enemy->xp }}</td>
                        <td>
                            <div class="row">
                                
                                <div class="col">
                                    <a href="{{ route('enemy.edit', ['enemy'=> $enemy->id]) }}" class="btn btn-warning">Editar</a>
                                </div>

                                <div class="col">
                                    
                                    <form action="{{route('enemy.destroy', ['enemy'=> $enemy->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Borar</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
