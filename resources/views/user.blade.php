<h1>View de Usuário</h1>

Nome: {{ $dados['nome'].' '.$dados['sobrenome'] }}

@if($dados['nome'] == 'Albert')
<h2>Status: Gênio</h2>
@else
<h2>Status: Normal</h2>
@endif

<h2>Dados recebidos:</h2>
<ul>
    @foreach($dados as $key=>$value)
    <li>{{ $key }}: {{ $value }}</li>
    @endforeach
</ul>

<h2>Contando até dez:</h2>
@for($i = 1; $i <= 10; $i++)
{{ $i }}
@endfor

@include('form')

<x-componente />