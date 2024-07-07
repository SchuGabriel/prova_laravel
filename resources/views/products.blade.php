@extends("layout")
@section("pageTitle", "Produtos")
@section("style")
<link rel="stylesheet" href="{{ asset('asset/css/products.css') }}" type="text/css" />
@endsection
@section("content")
<div class="container">
    <h1>Produtos</h1>
    <a href="{{ route('products.create') }}">Cadastrar Produto</a>
    <table>
        <tr>
            <th>Foto</th>
            <th>Categoria</th>
            <th>Marca</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Estoque</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>
                @if($product->photo)
                <img src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->name }}">
                @endif
            </td>
            <td>{{ $product->category->name }}</td>
            <td>{{ $product->brand->name }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->stock }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <a href="{{ route('products.edit', ['id' => $product->id]) }}">Editar</a>
                <br>
                <form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="post">
                    @method("delete")
                    @csrf
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection