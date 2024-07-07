@extends("layout")
@section("pageTitle", "Novo Produto")
@section("style")
<link rel="stylesheet" href="{{ asset('asset/css/home.css') }}" type="text/css" />
@endsection
@section("content")
<div class="container">
    <h1>@if($product->id)
            Edição de Produto
        @else
            Novo Produto
        @endif
    </h1>
    <a href="{{ route('products.index') }}">Voltar</a>
    @if($product->id)
    <form action="{{ route('products.update', ['id'=>$product->id]) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @else
        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
            @endif
            @csrf

            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" value="{{ $product->name }}">

            <label for="description">Descrição:</label>
            <input type="text" name="description" id="description" value="{{ $product->description }}">

            @if(!$product->id)
            <label for="stock">Estoque:</label>
            <input type="text" name="stock" id="stock" value="{{ $product->stock }}">
            @endif
            <label for="price">Preço:</label>
            <input type="text" name="price" id="price" value="{{ $product->price }}">

            <select name="category_id" id="category_id">
                @foreach($categories as $category)
                <option value="{{ $category->id }}"
                    {{ $category->id == $product->category_id ? 'selected': '' }} 
                >{{ $category->name }}</option>
                @endforeach
            </select>
            <br>
            <select name="brand_id" id="brand_id">
                @foreach($brands as $brand)
                <option value="{{ $brand->id }}" 
                    {{ $brand->id == $product->brand_id ? 'selected': '' }}
                >{{ $brand->name }}</option>
                @endforeach
            </select>

            <label for="photo">Foto:</label>
            <input type="file" name="photo" id="photo">

            <button type="submit">Salvar</button>
        </form>
</div>
@endsection