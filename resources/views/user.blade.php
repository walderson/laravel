<form action="users" method="post">
    {{ @csrf_field() }}
    <input type="email" name="email">
    <input type="text" name="endereco">
    <button type="submit">Enviar requisição</button>
</form>