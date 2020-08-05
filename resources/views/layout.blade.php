<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Página - @yield('title')</title>
    <style>
        .header {
            color: green;
        }

        .content {
            background-color: lightcoral;
            font-size: 16px;
            color: white;
            padding: 30px;
        }
    </style>
</head>
<body>
    <div class="header">
        @section('header')
        <h1>Cabeçalho padrão</h1>
        @show
    </div>
    <div class="content">
        @section('content')
        <h1>Cabeçalho da página</h1>
        @show
    </div>
</body>
</html>