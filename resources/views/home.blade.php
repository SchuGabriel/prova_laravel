@extends("layout")
@section("pageTitle", "Home")
@section("style")
<link rel="stylesheet" href="{{ asset('asset/css/home.css') }}" type="text/css" />
@endsection
@section("content")
<div class="container">
    <h1>Bem vindo</h1>
    <ul class="link-list">
        <li><a href="{{ route('products.index') }}">Listar Produtos</a></li>
        <li><a href="{{ route('brands.index') }}">Listar Marcas</a></li>
        <li><a href="{{ route('categories.index') }}">Listar Categorias</a></li>
        <li><a href="{{ route('stock.index') }}">Ajuste de Estoque</a></li>
    </ul>
</div>
@endsection