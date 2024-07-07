@extends("layout")
@section("pageTitle", "Ajuste de Estoque")
@section("style")
<link rel="stylesheet" href="{{ asset('asset/css/home.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('asset/css/stock.css') }}" type="text/css" />
@endsection
@section("content")
<div class="container">
    <h1>Ajuste de Estoque</h1>
    <form action="{{ route('stock.update') }}" method="POST">
        @method('PUT')
        @csrf        

        <label for="product-name">Produto:</label>
        <select name="product_id" id="product_id">
            @foreach($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>
        
        <br>
        <br>
        
        <label>Operação:</label>
        <div class="radio-group">
            <input type="radio" id="entrada" name="operation" value="1">
            <label for="entrada">Entrada</label>
            
            <input type="radio" id="saida" name="operation" value="2">
            <label for="saida">Saída</label>
            
            <input type="radio" id="balanco" name="operation" value="3">
            <label for="balanco">Balanço</label>
        </div>
        
        <br>
        
        <label for="stock">Quantidade:</label>
        <input type="text" id="stock" name="stock">
        
        <button type="submit">Salvar</button>
    </form>
</div>
@endsection