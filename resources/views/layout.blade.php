<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("pageTitle") - ERP</title>
    @yield("style")
</head>
<body>
    @include("includes.errors")
    @yield("content")
</body>
</html>