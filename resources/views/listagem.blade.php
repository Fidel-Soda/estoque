<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
    <h1>Listagem de Produtos</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Descrição</th>
                <th>Quantidade em Estoque</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $p)
                <tr>
                    <td>{{ $p->nome }}</td>
                    <td>{{ $p->preco }}</td>
                    <td>{{ $p->descricao }}</td>
                    <td>{{ $p->quantidade_estoque }}</td>
                                        <td><a href="{{ route('produtos.detalhes', ['id' => $p->id]) }}"> <i
                                class="fas fa-eye">Visualizar</i></a>

                   
                    </td>


                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
