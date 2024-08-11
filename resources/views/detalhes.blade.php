<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
</head>

<body>

    <div class="container">
        <h1>Detalhes do Produto</h1>

        @if (isset($mensagem))
            <p>{{ $mensagem }}</p>
        @else
            <div class="produto-imagem">
                @if ($produto->imagem)
                    <img src="{{ asset('storage/' . $produto->imagem) }}" alt="Imagem de {{ $produto->nome }}">
                @else
                    <img src="https://via.placeholder.com/400x300" alt="Imagem não disponível">
                @endif
            </div>

            <div class="produto-detalhes">
                <p><span>Nome:</span> {{ $produto->nome }}</p>
                <p><span>Descrição:</span> {{ $produto->descricao }}</p>
                <p><span>Preço:</span> {{ $produto->preco }}</p>
                <p><span>Quantidade em Estoque:</span> {{ $produto->quantidade_estoque }}</p>
                <p><span>SKU:</span> {{ $produto->sku }}</p>
                <p><span>Status:</span> {{ $produto->status }}</p>
                @if ($produto->data_validade)
                    <p><span>Data de Validade:</span> {{ $produto->data_validade }}</p>
                @endif
                @if ($produto->peso)
                    <p><span>Peso:</span> {{ $produto->peso }} kg</p>
                @endif
                @if ($produto->dimensoes)
                    <p><span>Dimensões:</span> {{ $produto->dimensoes }}</p>
                @endif
                <p><span>Código de Barras:</span> {{ $produto->codigo_barras }}</p>
            </div>
        @endif

        <div class="btn-voltar">
            <a href="{{ route('produtos.lista') }}"><i class="fas fa-arrow-left"></i> Voltar à Lista</a>
        </div>
    </div>

</body>

</html>
