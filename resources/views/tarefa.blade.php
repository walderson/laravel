<div>{{ session('mensagem') }}</div>
<form action="tarefas" method="post">
    @csrf
    <input type="text" name="tarefa" required>
    <button type="submit">Adicionar</button>
</form>
@if(session()->has('tarefas'))
<p>Lista de tarefas:</p>
<ul>
    @foreach(session('tarefas') as $tarefa)
    <li>{{ $tarefa }}</li>
    @endforeach
</ul>
@endif