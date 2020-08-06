@csrf
<input type="text" name="nome" placeholder="Nome da Empresa" value="{{ isset($empresa) ? $empresa->nome : '' }}">
<input type="text" name="endereco" placeholder="Endereço da Empresa"  value="{{ isset($empresa) ? $empresa->endereco : '' }}">
<button type="submit">Gravar</button>
