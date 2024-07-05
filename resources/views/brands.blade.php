@extends("layout")
@section("pageTitle", "Marcas")
@section("content")
<div class="container">
    <h1>Marcas</h1>
    <a href="{{ route('brands.create') }}">Cadastrar Marca</a>
    <table>
        <tr>
            <th>Logo</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        @foreach($brands as $brand)
        <tr>
            <td>
                @if($brand->photo)
                    <img src="{{ asset('storage/' . $brand->photo) }}" alt="{{ $brand->name }}">
                @endif
            </td>
            <td>{{ $brand->name }}</td>
            <td>
                <a href="{{ route('brands.edit', ['id' => $brand->id]) }}">Editar</a>
                <br>
                <form action="{{ route('brands.destroy', ['id' => $brand->id]) }}" method="post">
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