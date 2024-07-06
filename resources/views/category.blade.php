@extends("layout")
@section("pageTitle", "Nova Categoria")
@section("content")
<div class="container">
    <h1>Nova Categoria</h1>
    <a href="{{ route('categories.index') }}">Voltar</a>
    @if($category->id)
    <form action="{{ route('categories.update', ['id'=>$category->id]) }}" method="post">
        @method('PUT')
        @else
        <form action="{{ route('categories.store') }}" method="post">
            @endif
            @csrf

            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" value="{{ $category->name }}">

            <label for="description">Descrição:</label>
            <input type="text" name="description" id="description" value="{{ $category->description }}">

            <button type="submit">Salvar</button>
        </form>
</div>
@endsection