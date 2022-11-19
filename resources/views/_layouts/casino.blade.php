<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yantra club</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('sass/style.scss') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="{{ asset('https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js') }} "></script>

    <style>
        .user-off {
            display: {{ isset($AuthUser->name) ? 'none' : 'flex' }} !important;
        }

        .user-on {
            display: {{ isset($AuthUser->name) ? 'flex' : 'none' }};
        }


        .btn-formlogin button {
            background-image: linear-gradient(to right, #f0a416 , #f0a416, #e8961e);
            color: #230041;
            display: block;
            font-size: 2rem;
            font-weight: 700;
            padding: 0.5rem 3rem;
            border-radius: 25px;
            margin-bottom: 1rem;
            box-shadow: rgb(100 100 111 / 20%) 0px 7px 29px 0px;
        }
    </style>
</head>
<body>
    <header class="header-desk">
        <div class="left">
            <div class="area-logo">
                <a href="{{ route('casino') }}">
                    <img src="{{ asset('assets/logos/cassino_yantra.png') }} " alt="Yantra club" width="200px">
                </a>
            </div>

            <div class="categorias-header">
                <a href="{{ route('casino') }}">
                    <img src="{{ asset('assets/icones/icone_cassino.png') }} " alt="Cassino" width="80px">
                    <span>Cassino</span>
                </a>

                <a href="{{ route('casino.live') }}">
                    <img src="{{ asset('assets/icones/icone_cassino_ao_vivo.png') }} " alt="Cassino ao vivo" width="70px">
                    <span>Cassino Ao Vivo</span>
                </a>

                <a href="{{ route('casino.games') }}">
                    <img src="{{ asset('assets/icones/icone_yantra.png') }} " alt="Cassino" width="80px">
                    <span>Games</span>
                </a>
            </div>

            <div class="area-pesquisar">
                <form action="#">
                    <input type="text" placeholder="Pesquisar">
                    
                    <button type="submit">
                        <img src="{{ asset('assets/icones/icone_pesquisa.png') }} " alt="Pesquisar" width="15px">
                    </button>
                </form>
            </div>

            <div class="area-idioma user-off">
                <span>Idioma</span>
                <ul>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/bandeiras/brasil.png') }} " alt="Português" width="25px">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/bandeiras/usa.png') }} " alt="Inglês" width="25px">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/bandeiras/espanha.png') }} " alt="Espanhol" width="25px">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="right">
            <div class="user-off">
                <a href="#" class="btn-login" data-bs-toggle="modal" data-bs-target="#loginModal">Entrar</a>

                <a href="{{ route('register') }}" class="btn-cadastro">Faça seu cadastro</a>
            </div>

            <div class="user-on">
                <div class="area-idioma user-on">
                    <span>Idioma</span>
                    <ul>
                        <li>
                            <a href="#">
                                <img src="{{ asset('assets/bandeiras/brasil.png') }} " alt="Português" width="20px">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('assets/bandeiras/usa.png') }} " alt="Inglês" width="20px">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('assets/bandeiras/espanha.png') }} " alt="Espanhol" width="20px">
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="nome-user">
                    <div>
                        <span>{{ isset($AuthUser->user) ? $AuthUser->user : 0 }}</span>
                    </div>
                    <div class="perfil">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/icones/user-branco.png') }} " alt="Perfil" width="15px">
                        </a>
                    </div>
                </div>

                <div class="apostas">
                    <div>
                        <a href="#"> + $ {{ isset($AuthUser->balance) ? number_format($AuthUser->balance / 100, 2, ',', '.') : 0 }} </a>
                    </div>

                    <div class="my-apostas">
                        <a href="{{ route('bets') }}">
                            <span class="qt-aposts">0</span>
                            <span>Minhas Apostas</span>
                        </a>
                    </div>
                </div>

                <div class="btns-on">
                    <a href="{{ route('notifications') }}" class="btn-notificacoes">
                        <img src="{{ asset('assets/icones/notificacao.png') }} " alt="Notificações" width="20px">
                    </a>

                    <a href="{{ route('deposit') }}" class="btn-depositar">
                        <span class="tag-mais">+</span>
                        <span>Depositar</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <header class="header-mobile" id="header">
        <a id="logo" href="#">
            <img src="{{ asset('assets/logos/cassino_yantra.png') }} " alt="Yantra club" width="120px">
        </a>
        
        <nav class="user-off">
            <a href="#" class="btn-login" data-bs-toggle="modal" data-bs-target="#loginModal">Entrar</a>

            <a href="{{ route('register') }}" class="btn-cadastro">Faça seu cadastro</a>
        </nav>

        <nav id="nav" class="user-on">
            <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
                <span id="hamburger"></span>
            </button>
            
            <ul id="menu" role="menu">
                <li class="info-mobile">
                    <span>{{ isset($AuthUser->user) ? $AuthUser->user : 0  }}</span>
                    <span> $ {{ isset($AuthUser->balance) ? number_format($AuthUser->balance / 100, 2, ',', '.') : 0 }}</span>
                </li>

                <li class="perfil-mobile">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/icones/user-branco.png') }} " alt="Perfil" width="15px">
                    </a>
                    <a href="{{ route('notifications') }}">
                        <img src="{{ asset('assets/icones/notificacao.png') }} " alt="Notificações" width="20px">
                    </a>
                </li>

                <li class="apostas-mobile">
                    <a href="{{ route('bets') }}">
                        <span class="qt-apostas">0</span>
                        <span>Minhas Apostas</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('deposit') }}" class="btn-depositar">
                        <span class="tag-mais">+</span>
                        <span>Depositar</span>
                    </a>
                </li>
                
                <li class="area-pesquisar-mobile">
                    <form action="#">
                        <input type="text" placeholder="Pesquisar">
                        
                        <button type="submit">
                            <img src="{{ asset('assets/icones/icone_pesquisa.png') }} " alt="Pesquisar" width="15px">
                        </button>
                    </form>
                </li>

                <li class="categoria-mobile">
                    <a href="{{ route('casino') }}">
                        <img src="{{ asset('assets/icones/icone_cassino.png') }} " alt="Cassino" width="40px">
                        <span>Cassino</span>
                    </a>
                </li>

                <li class="categoria-mobile">
                    <a href="{{ route('casino') }}">
                        <img src="{{ asset('assets/icones/icone_cassino.png') }} " alt="Cassino" width="40px">
                        <span>Cassino</span>
                    </a>
                </li>

                <li class="categoria-mobile">
                    <a href="{{ route('casino.live') }}">
                        <img src="{{ asset('assets/icones/icone_cassino_ao_vivo.png') }} " alt="Cassino ao vivo" width="30px">
                        <span>Cassino Ao Vivo</span>
                    </a>
                </li>

                <li class="categoria-mobile">
                    <a href="{{ route('casino.games') }}">
                        <img src="{{ asset('assets/icones/icone_yantra.png') }} " alt="Cassino" width="40px">
                        <span>Games</span>
                    </a>
                </li>

                <li class="idiomas-mobile">
                    <a href="#">
                        <img src="{{ asset('assets/bandeiras/brasil.png') }} " alt="Português" width="25px">
                    </a>

                    <a href="#">
                        <img src="{{ asset('assets/bandeiras/usa.png') }} " alt="Inglês" width="25px">
                    </a>

                    <a href="#">
                        <img src="{{ asset('assets/bandeiras/espanha.png') }} " alt="Espanhol" width="25px">
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    
    <main class="principal">
        <div class="collapse fav-dois" id="collapseFav">
            <div class="card card-body">
                <li>
                    <a href="{{ route('yantra') }}">
                        <img src="{{ asset('assets/icones/icone_yantra.png') }} " alt="Yantra" width="30px">
                        <span>Yantra</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <img src="{{ asset('assets/icones/icone_aviator.png') }} " alt="Aviator" width="30px">
                        <span>Aviator</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <img src="{{ asset('assets/icones/icone_monopoly.png') }} " alt="Monopoly" width="30px">
                        <span>Monopoly</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <img src="{{ asset('assets/icones/icone_crazy_time.png') }} " alt="Crazy Time" width="30px">
                        <span>Crazy Time</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <img src="{{ asset('assets/icones/icone_dream_catcher.png') }} " alt="Dream catcher" width="30px">
                        <span>Dream catcher</span>
                    </a>
                </li>
            </div>
        </div>

        <div class="menu-left">
            <nav>
                <ul>
                    <li>
                        <a href="#collapseFav" class="item-menu" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseFav">
                            <img src="{{ asset('assets/icones/icone_favorito.png') }} " alt="Favoritos" width="25px">
                            <span>Favoritos</span>
                            <img class="seta-menu" src="{{ asset('assets/icones/seta-menu.png') }} " alt="Menu" width="12px">
                        </a>
                    </li>

                    <div class="collapse show fav-um" id="collapseFav">
                        <div class="card card-body">
                            <li>
                                <a href="{{ route('yantra') }}">
                                    <img src="{{ asset('assets/icones/icone_yantra.png') }} " alt="Yantra" width="30px">
                                    <span>Yantra</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="{{ asset('assets/icones/icone_aviator.png') }} " alt="Aviator" width="30px">
                                    <span>Aviator</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="{{ asset('assets/icones/icone_monopoly.png') }} " alt="Monopoly" width="30px">
                                    <span>Monopoly</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="{{ asset('assets/icones/icone_crazy_time.png') }} " alt="Crazy Time" width="30px">
                                    <span>Crazy Time</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="{{ asset('assets/icones/icone_dream_catcher.png') }} " alt="Dream catcher" width="30px">
                                    <span>Dream catcher</span>
                                </a>
                            </li>
                        </div>
                    </div>

                    <li>
                        <a href="{{ route('casino') }}" class="item-menu">
                            <img src="{{ asset('assets/icones/icone_cassino_2.png') }} " alt="Cassino" width="25px">
                            <span>Cassino</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('casino.live') }}" class="item-menu">
                            <img src="{{ asset('assets/icones/icone_cassino_ao_vivo_2.png') }} " alt="Cassino ao vivo" width="25px">
                            <span>Cassino Ao Vivo</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('yantra') }}" class="item-menu">
                            <img src="{{ asset('assets/icones/icone_yantra.png') }} " alt="Yantra" width="25px">
                            <span>Yantra</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="area-criptos">
                <p class="title-criptos">
                    <span>Somos</span>
                    <span>descentralizados</span>
                </p>
                <div>
                    <img src="{{ asset('assets/criptos/bitcoin.png') }} " alt="Bitcoin" width="60px">

                    <img src="{{ asset('assets/criptos/etherium.png') }} " alt="Ethereum" width="60px">

                    <img src="{{ asset('assets/criptos/usdt.png') }} " alt="Tether" width="60px">
                </div>
            </div>
        </div>

        <div class="center-principal">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            @if ($error_login)
                <div class="alert alert-danger">
                    <ul> 
                        <li>Error - Login ou senha invalidos</li>
                    </ul>
                </div>
            @endif

          
            @yield('conteudo')
            
            

            <div class="area-provedores">
                <div class="banners-carrossel provedores">
                    <article class="c-carousel c-carousel--responsive">
                        <div class="c-carousel__slides js-carousel--responsive5">
                            <article class="c-carousel__slide">
                                <img src="{{ asset('assets/logos/evolution_gaming.png') }} " alt="Evolution gaming" width="120px">
                            </article>

                            <article class="c-carousel__slide">
                                <img src="{{ asset('assets/logos/habanero.png') }} " alt="Habanero" width="120px">
                            </article>

                            <article class="c-carousel__slide">
                                <img src="{{ asset('assets/logos/novomatic.png') }} " alt="Novomatic" width="120px">
                            </article>

                            <article class="c-carousel__slide">
                                <img src="{{ asset('assets/logos/evolution_gaming.png') }} " alt="Evolution gaming" width="120px">
                            </article>

                            <article class="c-carousel__slide">
                                <img src="{{ asset('assets/logos/habanero.png') }} " alt="Habanero" width="120px">
                            </article>

                            <article class="c-carousel__slide">
                                <img src="{{ asset('assets/logos/novomatic.png') }} " alt="Novomatic" width="120px">
                            </article>

                            <article class="c-carousel__slide">
                                <img src="{{ asset('assets/logos/evolution_gaming.png') }} " alt="Evolution gaming" width="120px">
                            </article>

                            <article class="c-carousel__slide">
                                <img src="{{ asset('assets/logos/habanero.png') }} " alt="Habanero" width="120px">
                            </article>

                            <article class="c-carousel__slide">
                                <img src="{{ asset('assets/logos/novomatic.png') }} " alt="Novomatic" width="120px">
                            </article>
                        </div>
                      
                        <div class="area-buttons">
                            <button class="js-carousel--responsive-prev5 carousel-control-prev-icon prev" aria-label="Anterior"></button>
                            <button class="js-carousel--responsive-next5 carousel-control-next-icon next" aria-label="Próximo"></button>  
                        </div>
                    </article> 
                </div>
            </div>
        </div>
    </main>

    <footer>
        <section class="footer-desk">
            <div class="left principal">
                <div class="area-logo-footer">
                    <a href="#">
                        <img src="{{ asset('assets/logos/cassino_cinza.png') }} " alt="Yantra club" width="150px">
                    </a>

                    <a href="#">
                        <img src="{{ asset('assets/icones/download_android.png') }} " alt="Download android" width="150px">
                    </a>
                </div>

                <div class="area-links-footer">
                    <div class="left">
                        <li>
                            <a href="#">Sobre nós</a>
                        </li>
                        <li>
                            <a href="#">FAQ - Perguntas Frequentes</a>
                        </li>
                        <li>
                            <a href="#">The Revolution</a>
                        </li>
                        <li>
                            <a href="#">Contato</a>
                        </li>
                    </div>
                    <div class="right">
                        <li>
                            <a href="#">Termos e Condições</a>
                        </li>
                        <li>
                            <a href="#">Regras Gerais</a>
                        </li>
                        <li>
                            <a href="#">Políticas de Privacidade e Segurança</a>
                        </li>
                        <li>
                            <a href="#">Políticas de Proteção ao Jogador</a>
                        </li>
                    </div>
                </div>

                <div class="direitos">
                    <span>© 2018 á 2022 Yantra Club Todos os direitos resevados.</span>
                </div>

                <div class="redes-sociais-footer">
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/icones/facebook.png') }} " alt="Facebook" width="20px">
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/icones/instagram.png') }} " alt="Instagram" width="20px">
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/icones/telegram.png') }} " alt="Telegram" width="20px">
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/icones/youtube.png') }} " alt="Youtube" width="20px">
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/icones/twitter.png') }} " alt="Twitter" width="20px">
                        </a>
                    </li>
                </div>
            </div>

            <div class="separador-footer"></div>

            <div class="right principal">
                <p>Viva a experiência Yantra Club onde quer que esteja, com nosso site mobile e aplicação de celular para android.</p>

                <div>
                    <a href="#">
                        <img src="{{ asset('assets/icones/jogo_responsavel.png') }} " alt="Jogo responsável" width="180px">
                    </a>
                </div>

                <p>A participação de menores de 18 anos nos jogos oferecidos pela Yantra Club é estritamente proibida.</p>

                <ul>
                    <li>
                        <a href="https://www.gamcare.org.uk">
                            <img src="{{ asset('https://d1ygf46rsya1tb.cloudfront.net/prod/uploads/2019/07/GamCare-SGSCMYK-Copy.png') }} " alt="gordon_moody" width="100px" style="filter: grayscale(100%); filter: gray; /* IE */;">
                        </a>
                    </li>

                    <li>
                        <a href="https://ecogra.org/">
                            <img src="{{ asset('assets/icones/ecogra.png') }} " alt="ecogra" width="100px">
                        </a>
                    </li>

                    <li>
                        <a href="https://www.gamblingcommission.gov.uk">
                            <img src="{{ asset('assets/icones/gambling_commission.png') }} " alt="gambling_commission" width="100px">
                        </a>
                    </li>

                    <li>
                        <a href="https://www.gamblingtherapy.org">
                            <img src="{{ asset('assets/icones/gambling_therapy.png') }} " alt="gambling_therapy" width="50px">
                        </a>
                    </li>
                </ul>
            </div>

        </section>
    </footer>

    <!-- Modal Login -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">

        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content login">
                <div class="modal-header">
                    <img src="{{ asset('assets/logos/cassino_yantra.png') }} " alt="Yantra club" width="200px">

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    @if ($error_login)
                        <div class="alert alert-danger">
                            <ul> 
                                <li>Error - Login ou senha invalidos</li>
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('login') }}" class="form-login" method="post">
                        @csrf
                        <div class="input-login">
                            <label for="user">
                                <img src="{{ asset('assets/icones/user.png') }} " alt="Usuário" width="30px">
                                <span>Login</span>
                            </label>
                            
                            <input type="text" id="user" placeholder="usernameaqui" name="user" value="{{ old('user') }}">
                        </div>

                        <div class="input-login">
                            <label for="password">
                                <img src="{{ asset('assets/icones/cadeado.png') }} " alt="Senha" width="30px">
                                <span>Senha</span>
                            </label>
                            
                            <input type="password" id="password" placeholder="**********" name="password" value="{{ old('password') }}">

                            <a href="#" class="ver-senha">
                                <img src="{{ asset('assets/icones/olho.png') }} " alt="Ver senha" width="30px">
                            </a>
                        </div>

                        <div>
                            <a href="#" class="btn-recoverypass">Esqueci minha senha.</a>
                        </div>
                        
                        <div class="btn-formlogin">
                            <button type="submit">Entrar</button>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <p>Não tem conta ? <a href="{{ route('register') }}">Cadastre-se agora!</a></p>
                </div>
            </div>

        </div>

    </div>

    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js') }} " integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script type="text/javascript"> 

        

        const $responsiveCarousel5 = document.querySelector(".js-carousel--responsive5");

        new Glider($responsiveCarousel5, {
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: true,
        duration: 0.25,
        dots: ".js-carousel--responsive-dots4",
        arrows: {
            prev: ".js-carousel--responsive-prev5",
            next: ".js-carousel--responsive-next5",
        },
        responsive: [
            {
            breakpoint: 300,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            },
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
            },
            },
            {
            breakpoint: 900,
            settings: {
                slidesToShow: 6,
                slidesToScroll: 1,
            },
            },
        ],
        });
    </script>

    <script src="{{ asset('js/script.js') }} "></script>
</body>
</html>