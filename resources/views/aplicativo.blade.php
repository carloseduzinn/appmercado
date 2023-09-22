<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBDConvert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ url('assets/Css/Style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/Css/MQstyle.css') }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ url('assets/IMG/Logo_Header.png') }}"
                        alt="Logo Empresa" width="200px"> <img src="{{ url('assets/IMG/mao_logo.png') }}"
                        width="50px" style="margin-bottom: 3px;"></a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('index') }}">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('aplicativo') }}">INNOVATION</a>
                        </li>
                    </ul>
                </div>
                <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon navbar-toggler"></span>
                </button>
            </div>
        </nav>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close text-reset btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('aplicativo') }}">INNOVATION</a>
                    </li>
            </div>
        </div>
    </header>
    <main id="app">
        <div class="text-intro">
            <p>Não espere mais! A inovação está ao seu alcance.
                Experimente nosso aplicativo agora mesmo e descubra como ele pode tornar sua vida mais fácil e
                eficiente.</p>

            <p>
                <span>Como começar:</span> <br>
                <span>1-</span> Escolha um produto.<br>
                <span>2-</span> Após a escolha, aperte em iniciar.<br>
                <span>3-</span> Veja os valores serem convertidos automaticamente.
            </p>
        </div>
        <div class="container-box-app">
            <div class="app-box">
                <div class="container-preco-bitcoin">
                    <div class="preco-bitcoin">
                        <p>Preço atual do Bitcoin em BRL: <span id="bitcoinPrice">Carrengando..</span></p>
                    </div>
                </div>
                <div class="container-produto">
                    <div class="produto">
                        <label for="itens">Selecione um item:</label>
                        <select id="itens" name="itens">
                            <option value="">Iniciar</option>
                            @foreach ($itens as $item)
                                <option value="{{ $item->nomeproduto }}">{{ $item->nomeproduto }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="container-preco-convertido">
                    <div class="preco-convertido">
                        <div class="preco-convertido-box">
                            <label for="precoProdutoR">Preço do produto em R$</label>
                            <input type="text" name="precoProdutoR" id="precoProdutoR" readonly>
                        </div>
                        <div class="preco-convertido-box">
                            <label for="precoProdutoBTC">Preço do Produto em BTC</label>
                            <input type="text" name="precoProdutoBTC" id="precoProdutoBTC" readonly>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer-custom text-center text-white">
        <div class="container p-4 pb-0">
            <section class="mb-4">
                <a class="btn btn-outline-light btn-floating m-1"
                    href="https://www.linkedin.com/in/projeto-final-a2480a288/" role="button" target="_blank"><i
                        class="bi bi-linkedin"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/GrupoProjeto0" role="button"
                    target="_blank"><i class="bi bi-github"></i></a>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.075);">
            © 2023 CBDConvert. Todos os Direitos Reservados
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('assets/Model/ApiBitcoin.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>
        $('#itens').change(function() {
            var produtoSelecionado = $(this).val();
            $.ajax({
                type: 'GET',
                url: '/buscar-preco',
                data: {
                    produto_id: produtoSelecionado
                },
                success: function(response) {
                    $('#precoProdutoR').val(response.preco.toFixed(
                    2)); 
                },
                error: function() {
                    $('#precoProdutoR').val('N/A');
                }
            });
        });

        $(document).ready(function() {
    
    $('#itens').change(function() {   
        var produtoSelecionado = $(this).val();
        var precoProdutoR = parseFloat($('#precoProdutoR').val()); 
        var precoProdutoBTC = precoProdutoR / bitcoinPriceBRL; 
        $('#precoProdutoBTC').val(precoProdutoBTC.toFixed(8)); 
    });
});


    </script>
</body>

</html>
