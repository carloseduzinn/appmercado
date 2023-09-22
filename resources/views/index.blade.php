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
    <main>
        <div class="box-left box">
            <div class="test2">
                <p><span>A CBDConvert</span> é uma plataforma inovadora e abrangente projetada para atender às necessidades
                    de todos os
                    entusiastas de cirptomoedas e investidores. Nosso site oferece uma experiência intuitiva e segura,
                    permitindo que os usuários mergulhem no emocionante mundo das criptomoedas.</p>
            </div>
            <div class="test">
                <p>Siga o botão abaixo para conhecer o nosso app e faça um teste para dar início ao seu negócio.</p>
                <a href="{{route('aplicativo')}}">TEST HERE</a>
            </div>
        </div>
        <div class="box-right box">
            <img src= "{{url('assets/IMG/Coin.png')}}" alt="Moeda">
            <img src="{{url('assets/IMG/Pessoa.gif')}}" alt="Gif">
        </div>
    </main>
    <footer class="footer-custom text-center text-white">
        <div class="container p-4 pb-0">
            <section class="mb-4">
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/projeto-final-a2480a288/" role="button" target="_blank"><i
                        class="bi bi-linkedin"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/GrupoProjeto0" role="button" target="_blank"><i
                        class="bi bi-github"></i></a>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.075);">
            © 2023 CBDConvert. Todos os Direitos Reservados
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>