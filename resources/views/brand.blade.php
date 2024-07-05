@extends("layout")
@section("pageTitle", "Nova Marca")
@section("content")
<div class="container">
    <h1>Marca Nova</h1>
    <a href="{{ route('brands.index') }}">Voltar</a>
    @if($brand->id)
    <form action="{{ route('brands.update', ['id'=>$brand->id]) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @else
        <form action="{{ route('brands.store') }}" method="post" enctype="multipart/form-data">
            @endif
            @csrf

            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" value="{{ $brand->name }}">

            <label for="photo">Logo:</label>
            <input type="file" name="photo" id="photo">

            <button type="submit">Salvar</button>
        </form>
</div>
@endsection