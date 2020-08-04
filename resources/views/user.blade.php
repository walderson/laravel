<h1>Conta de Usuário</h1>
<form action="users" method="post">
    {{ @csrf_field() }}
    <input type="text" name="email" placeholder="e-mail">
    <input type="password" name="senha" placeholder="senha">
    <button type="submit">Confirmar</button>
</form>