<h1>Listagem de Usuários e Produtos</h1>
<div>
    <span><strong>Usuário</strong></span>
    <span><strong>Categoria</strong></span>
    <span><strong>Produto</strong></span>
</div>
@foreach($dados as $dado)
<div>
    <span>{{ $dado->name }}</span>
    <span>{{ $dado->categoria }}</span>
    <span>{{ $dado->nome }}</span>
</div>
@endforeach

{{ $dados->links() }}

<style>
    div span {
        color: red;
        display: inline-block;
        width: 100px;
        background-color: bisque;
        margin-bottom: 3px;
        margin-left: 3px;
        padding: 10px;
    }

    li {
        list-style: none;
        display: inline;
    }
</style>