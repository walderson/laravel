<h1>Validações de formulário</h1>
@if($errors->any())
<div>
    <p>Os seguintes erros ocorreram:</p>
    <ul>
    @foreach($errors->all() as $err)
    <li>{{ $err }}</li>
    @endforeach
    </ul>
</div>
@endif
<form action="users" method="post">
    @csrf
    <input type="email" name="email" placeholder="e-mail"><br>
    @error('email')
    <span style="color: red;">{{ $message }}</span><br>
    @enderror
    <input type="text" name="endereco" placeholder="endereco"><br>
    @error('endereco')
    <span style="color: red;">{{ $message }}</span><br>
    @enderror
    <button type="submit">Enviar dados</button>
</form>