@extends("layouts.master")

@section("title", "Inserción de productos")

@section("header", "Inserción de productos")

@section("content")
    <form action="{{ isset($product) ? route('product.update', ['id' => $product->id]) : route('product.store') }}" method="POST">
        @csrf
        @isset($product)
            @method("PUT")
        @endisset
        <label for="name">Nombre del producto:</label><br>
        <input type="text" id="name" name="name" value="{{ $product->name ?? '' }}"><br>
        <label for="description">Descripción:</label><br>
        <input type="text" id="description" name="description" value="{{ $product->description ?? '' }}"><br>
        <label for="price">Precio:</label><br>
        <input type="text" id="price" name="price" value="{{ $product->price ?? '' }}"><br>
        <input type="submit" value="Guardar">
    </form>
@endsection
