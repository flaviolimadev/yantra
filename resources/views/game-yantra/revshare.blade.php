
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fjalla+One">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('CassinoYantra/game/revshare/css/style.css') }}">
    
    <title>Yantra club</title>
</head>
<body>
    <header class="header-desk">
        <div class="left">
            <a href="#">
                <img src="{{ asset('CassinoYantra/game/revshare/img/btn-home.png') }}" alt="Home" width="50px">
            </a>
            <a href="#" class="saldo">
                <img src="{{ asset('CassinoYantra/game/revshare/img/bg-saldo.png') }}" alt="Saldo" width="250px">
                <span>
                    <span class="tag-saldo">saldo</span>
                    <span>20.670.000</span>
                </span>
            </a>
        </div>

        <div class="center">
            <img src="{{ asset('CassinoYantra/game/revshare/img/logo-yandra.png') }}" alt="Logo" width="220px">
        </div>

        <div class="right">
            <a href="#" class="ganhos">
                <img src="{{ asset('CassinoYantra/game/revshare/img/bg-ganhos.png') }}" alt="Ganhos" width="250px">
                <span>
                    <span class="tag-saldo">ganhos</span>
                    <span>20.670.000</span>
                </span>
            </a>

            <div>
                <a class="btn-menu" data-bs-toggle="collapse" href="#collapseMenuDesk" role="button" aria-expanded="false" aria-controls="collapseMenuDesk">
                    <img src="{{ asset('CassinoYantra/game/revshare/img/menu.png') }}" alt="Menu" width="50px">
    
                    @include('_sections/menu_game')
                </a>
            </div>
        </div>
    </header>

    <header class="header-mobile" id="header">
        <a id="logo" href="#">
            <img src="{{ asset('CassinoYantra/game/revshare/img/logo-yandra.png') }}" alt="Logo" width="150px">
        </a>

        <nav id="nav">
          <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
            <span id="hamburger"></span>
          </button>
          <ul id="menu" role="menu">
            <div class="infos-mobile">
                <a href="#" class="saldo mobile">
                    <img src="{{ asset('CassinoYantra/game/revshare/img/bg-saldo.png') }}" alt="Saldo" width="250px">
                    <span>
                        <span class="tag-saldo">saldo</span>
                        <span>20.670.000</span>
                    </span>
                </a>
                <a href="#" class="ganhos mobile">
                    <img src="{{ asset('CassinoYantra/game/revshare/img/bg-ganhos.png') }}" alt="Ganhos" width="250px">
                    <span>
                        <span class="tag-saldo">ganhos</span>
                        <span>20.670.000</span>
                    </span>
                </a>
            </div>

            <li><a href="/">Conta</a></li>
            <li><a href="/">Dados</a></li>
            <li><a href="/">Conta</a></li>
            <li><a href="/">Dados</a></li>
          </ul>
        </nav>
    </header>

    <main>
        <div class="left-principal">
            <a href="#">
                <img src="{{ asset('CassinoYantra/game/revshare/img/banner_1.png') }}" width="350px">
            </a>
            <a href="#">
                <img src="{{ asset('CassinoYantra/game/revshare/img/banner_2.png') }}" width="350px">
            </a>
            <a href="#">
                <img src="{{ asset('CassinoYantra/game/revshare/img/banner_3.png') }}" width="350px">
            </a>
        </div>

        <div class="center-principal">
            <div class="title-rev">
                <img src="{{ asset('CassinoYantra/game/revshare/img/caixa_de_texto.png') }}" alt="Fature com o cassino até 40%" width="700px">
                <span>Fature com o cassino até 40%</span>
            </div>

            <div class="meio-principal">
                <img src="{{ asset('CassinoYantra/game/revshare/img/crupier.png') }}" width="65%">
            </div>

            <div class="setor-cartas">
                <div class="item-carta um">
                    <div class="carta">
                        <img src="{{ asset('CassinoYantra/game/revshare/img/carta_normal.png') }}" width="100%">
                        <img src="{{ asset('CassinoYantra/game/revshare/img/carta_brilhosa.png') }}" width="120%">
                        <span class="tag-cima">5%</span>
                        <span class="tag-baixo">5%</span>
                        <div class="title-carta">
                            <span>nivel</span>
                            <br>
                            <span class="numero-carta">1</span>
                        </div>
                    </div>
                    <button>
                        <img src="{{ asset('CassinoYantra/game/revshare/img/botao-roxo.png') }}" width="100%">
                        <span>R$ 10</span>
                    </button>
                </div>

                <div class="item-carta dois">
                    <div class="carta">
                        <img src="{{ asset('CassinoYantra/game/revshare/img/carta_normal.png') }}" width="100%">
                        <span class="tag-cima">5%</span>
                        <span class="tag-baixo">5%</span>
                        <div class="title-carta">
                            <span>nivel</span>
                            <br>
                            <span class="numero-carta">2</span>
                        </div>
                    </div>
                    <button>
                        <img src="{{ asset('CassinoYantra/game/revshare/img/botao-roxo.png') }}" width="100%">
                        <span>R$ 20</span>
                    </button>
                </div>

                <div class="item-carta tres">
                    <div class="carta">
                        <img src="{{ asset('CassinoYantra/game/revshare/img/carta_normal.png') }}" width="100%">
                        <span class="tag-cima">5%</span>
                        <span class="tag-baixo">5%</span>
                        <div class="title-carta">
                            <span>nivel</span>
                            <br>
                            <span class="numero-carta">3</span>
                        </div>
                    </div>
                    <button>
                        <img src="{{ asset('CassinoYantra/game/revshare/img/botao-roxo.png') }}" width="100%">
                        <span>R$ 30</span>
                    </button>
                </div>

                <div class="item-carta quatro">
                    <div class="carta">
                        <img src="{{ asset('CassinoYantra/game/revshare/img/carta_normal.png') }}" width="100%">
                        <span class="tag-cima">5%</span>
                        <span class="tag-baixo">5%</span>
                        <div class="title-carta">
                            <span>nivel</span>
                            <br>
                            <span class="numero-carta">4</span>
                        </div>
                    </div>
                    <button>
                        <img src="{{ asset('CassinoYantra/game/revshare/img/botao-roxo.png') }}" width="100%">
                        <span>R$ 40</span>
                    </button>
                </div>

                <div class="item-carta quatro">
                    <div class="carta">
                        <img src="{{ asset('CassinoYantra/game/revshare/img/carta_normal.png') }}" width="100%">
                        <span class="tag-cima">5%</span>
                        <span class="tag-baixo">5%</span>
                        <div class="title-carta">
                            <span>nivel</span>
                            <br>
                            <span class="numero-carta">5</span>
                        </div>
                    </div>
                    <button>
                        <img src="{{ asset('CassinoYantra/game/revshare/img/botao-roxo.png') }}" width="100%">
                        <span>R$ 40</span>
                    </button>
                </div>

                <div class="item-carta tres">
                    <div class="carta">
                        <img src="{{ asset('CassinoYantra/game/revshare/img/carta_normal.png') }}" width="100%">
                        <span class="tag-cima">5%</span>
                        <span class="tag-baixo">5%</span>
                        <div class="title-carta">
                            <span>nivel</span>
                            <br>
                            <span class="numero-carta">6</span>
                        </div>
                    </div>
                    <button>
                        <img src="{{ asset('CassinoYantra/game/revshare/img/botao-roxo.png') }}" width="100%">
                        <span>R$ 30</span>
                    </button>
                </div>

                <div class="item-carta dois">
                    <div class="carta">
                        <img src="{{ asset('CassinoYantra/game/revshare/img/carta_normal.png') }}" width="100%">
                        <img src="{{ asset('CassinoYantra/game/revshare/img/carta_brilhosa.png') }}" width="120%">
                        <span class="tag-cima">5%</span>
                        <span class="tag-baixo">5%</span>
                        <div class="title-carta">
                            <span>nivel</span>
                            <br>
                            <span class="numero-carta">7</span>
                        </div>
                    </div>
                    <button>
                        <img src="{{ asset('CassinoYantra/game/revshare/img/botao-roxo.png') }}" width="100%">
                        <span>R$ 20</span>
                    </button>
                </div>

                <div class="item-carta um">
                    <div class="carta">
                        <img src="{{ asset('CassinoYantra/game/revshare/img/carta_normal.png') }}" width="100%">
                        <span class="tag-cima">5%</span>
                        <span class="tag-baixo">5%</span>
                        <div class="title-carta">
                            <span>nivel</span>
                            <br>
                            <span class="numero-carta">10</span>
                        </div>
                    </div>
                    <button>
                        <img src="{{ asset('CassinoYantra/game/revshare/img/botao-roxo.png') }}" width="100%">
                        <span>R$ 10</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="right-principal">
            <a href="#">
                <img src="{{ asset('CassinoYantra/game/revshare/img/banner_4.png') }}" width="350px">
            </a>
            <a href="#">
                <img src="{{ asset('CassinoYantra/game/revshare/img/banner_5.png') }}" width="350px">
            </a>
            <a href="#">
                <img src="{{ asset('CassinoYantra/game/revshare/img/banner_6.png') }}" width="350px">
            </a>
        </div>
    </main>


    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="{{ asset('CassinoYantra/game/revshare/js/script.js') }}"></script>
</body>
</html>