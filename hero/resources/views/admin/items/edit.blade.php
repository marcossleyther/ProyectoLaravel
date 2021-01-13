@extends('layouts.app')

@section('content')

    <h1>Editar - {{ $item->name }}</h1>

    <form action="{{ route('item.update', ['item' => $item->id]) }}" method="post">
        @method('PUT')

        @include('admin.items.form')

        <button type="submit" class="btn btn-warning">Editar</button>
    </form>
@endsection
