@extends("layout")
@section("pageTitle", "Categorias")
@section("content")
<div class="container">
    <h1>Categorias</h1>
    <a href="{{ route('categories.create') }}">Cadastrar Categoria</a>
    <table>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>{{ $category->description }}</td>
            <td>
                <a href="{{ route('categories.edit', ['id' => $category->id]) }}">Editar</a>
                <br>
                <form action="{{ route('categories.destroy', ['id' => $category->id]) }}" method="post">
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