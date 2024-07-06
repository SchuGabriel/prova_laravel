@extends("layout")
@section("pageTitle", "Home")
@section("content")
<div class="container">
    <h1>Bem vindo</h1>
    <ul class="link-list">
        <li><a href="{{ route('brands.index') }}">Listar Marcas</a></li>
        <li><a href="{{ route('categories.index') }}">Listar Categorias</a></li>
    </ul>
</div>
@endsection