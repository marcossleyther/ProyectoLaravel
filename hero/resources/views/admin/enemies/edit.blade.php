@extends('layouts.app')

@section('content')


    <h1>Editar - {{ $enemy->name }}</h1>

    <form action="{{ route('enemy.update', ['enemy' => $enemy->id]) }}" method="post" enctype="multipart/form-data">
        @method('PUT')

        @include('admin.enemies.form')

        <button type="submit" class="btn btn-warning">Editar</button>
    </form>
@endsection
