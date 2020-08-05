<form action="login" method="post">
    @csrf
    <input type="text" name="usuario" placeholder="Nome de usuário">
    <input type="password" name="senha" placeholder="Senha">
    <button type="submit">Entrar</button>
</form>