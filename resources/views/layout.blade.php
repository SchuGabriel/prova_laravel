<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("pageTitle") - ERP</title>
    @yield("style")    
</head>
<header class="cabecalho">
    <nav class="menu">
        <ul class="colunas">
            <li><a href="{{ route('home.index') }}" class="lista">Home</a></li>
            <li><a href="{{ route('products.index') }}" class="lista">Produtos</a></li>
            <li><a href="{{ route('brands.index') }}" class="lista">Marcas</a></li>
            <li><a href="{{ route('categories.index') }}" class="lista">Categorias</a></li>
            <li><a href="{{ route('stock.index') }}" class="lista">Ajuste de Estoque</a></li>
        </ul>
    </nav>
</header>
<body>
    @include("includes.errors")
    @yield("content")
    <footer class="footer">
        <p>© 2024 - Desenvolvido por Gabriel Schu</p>
    </footer>
</body>
</html>