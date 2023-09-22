<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBDConvert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{url('assets/Css/Style.css')}}">
    <link rel="stylesheet" href="{{url('assets/Css/MQstyle.css')}}">
</head>



<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('index')}}"><img src="{{url('assets/IMG/Logo_Header.png')}}" alt="Logo Empresa"
                        width="200px"> <img src="{{url('assets/IMG/mao_logo.png')}}" width="50px" style="margin-bottom: 3px;"></a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('index')}}">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about')}}">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('aplicativo')}}">INNOVATION</a>
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
                        <a class="nav-link active" aria-current="page" href="{{route('index')}}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('aplicativo')}}">INNOVATION</a>
                    </li>
            </div>
        </div>
    </header>
    <main id="menu2">
        <section id="introducao">
            <h1>Introdução</h1>
            <div class="box-content">
                <p>Com a crescente popularidade das criptomoedas como meio de troca e investimento tem motivado muitos
                    empreendedores a explorar maneiras inovadoras de integrá-las ao cenário econômico atual.
                </p>
            </div>
            <div class="box-content">
                <img src="{{url('assets/IMG/homem-carteira.png')}}" alt="Mulher com sua carteira digital" width="50%">
            </div>
            <div class="box-content">
                <p>Um desses empreendimentos é o desenvolvimento de um conversor automatizado de criptomoeda, que
                    permite aos usuários realizar transações em um mercado online ou local usando o real (R$) para ser
                    convertida em BitCoin (BTC).</p>
            </div>
        </section>
        <section id="how-it-work">
            <h1>Como Funciona</h1>
            <div class="box-content">
                <p>O conversor de criptomoeda é integrado à todo tipo de mercado, onde os produtos são precificados em
                    reais brasileiros (R$). Quando um cliente escolhe um produto e passa para o processo de pagamento, o
                    valor é automaticamente convertido para Bitcoin, com base na taxa de câmbio atual entre R$ e BTC.
                </p>
            </div>
            <div class="box-content">
                <img src="{{url('assets/IMG/mulher-carteira.png')}}" alt="Mulher com sua carteira digital" width="50%">
            </div>
            <div class="box-content">
                <p>Isso é feito em tempo real, garantindo que o cliente veja o valor exato em BTC que será debitado de
                    sua carteira digital.</p>
            </div>
        </section>

        <section id="devs">
            <h1>Desenvolvedores</h1>
            <div class="box-devs">
                <div class="persona">
                    <img src="{{url('assets/IMG/Catharine.png')}}" alt="Tata">
                    <p>Catharine</p>
                </div>
                <div class="box-about-dev">
                    <p>Responsável pela criação e estilização do projeto. O seu papel vai além da criação estática de
                        designs. Ela é uma colaborador ativa, envolvendo-se em discussões sobre a experiência do
                        usuário, a acessibilidade e os desafios técnicos.</p>
                </div>
            </div>
            <div class="box-devs">
                <div class="box-about-dev">
                    <p>Responsável por desenvolver o projeto e o aplicativo da CBDC. Ele é o arquiteto por trás da
                        concepção, criação e implementação do aplicativo.</p>
                </div>
                <div class="persona">
                    <img src="{{url('assets/IMG/Bruno.png')}}" alt="Bubu">
                    <p>Bruno</p>
                </div>
            </div>
            <div class="box-devs">
                <div class="persona">
                    <img src="{{url('assets/IMG/Diogo.png')}}" alt="Didi">
                    <p>Diogo</p>
                </div>
                <div class="box-about-dev">
                    <p>Responsável por desenvolver as linhas de código do nosso site. Ele é o arquiteto por trás da
                        estrutura do site, transformando designs e conceitos em páginas interativas e funcionais.</p>
                </div>
            </div>
            <div class="box-devs carlin">
                <div class="box-about-dev">
                    <p>Responsável por criar e organizar o sistema de banco de dados. Como o cérebro por trás da
                        estrutura de dados e documentação em nosso projeto. Seu papel é fundamental para garantir que
                        nossos dados sejam gerenciados eficientemente e que as informações essenciais estejam ao alcance
                        quando necessário.</p>
                </div>
                <div class="persona">
                    <img src="{{url('assets/IMG/Carlos.png')}}" alt="Carlinhos">
                    <p>Carlos</p>
                </div>
            </div>
        </section>
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
</body>
</html>