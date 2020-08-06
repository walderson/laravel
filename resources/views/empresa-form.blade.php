<html>
<head>
    <title>Dados da Empresa</title>
</head>
<body>
    <form action="empresas" method="post">
        @csrf
        <input type="text" name="nome" placeholder="Nome da Empresa">
        <input type="text" name="endereco" placeholder="Endereço da Empresa">
        <button type="submit">Gravar</button>
    </form>
</body>
</html>