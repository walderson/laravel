<html>
<head>
    <title>Dados da Empresa</title>
</head>
<body>
    <form action="{{ route('empresa.update', ['id'=>$id]) }}" method="post">
        @method('PATCH')
        <x-empresa-form :empresa="$empresa" />
    </form>
</body>
</html>