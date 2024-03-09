@extends('layouts.master')

@section('title', 'Detalle del Producto')

@section('header', 'Detalle del Producto')

@section('content')
    <div>
        <p><strong>ID:</strong> {{ $product->id }}</p>
        <p><strong>Nombre:</strong> {{ $product->name }}</p>
        <p><strong>Descripción:</strong> {{ $product->description }}</p>
        <p><strong>Precio:</strong> {{ $product->price }}</p>
    </div>
    <div>
        <a href="{{ route('product.edit', ['id' => $product->id]) }}">Editar</a>
        <form action="{{ route('product.destroy', ['id' => $product->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </div>
@endsection
