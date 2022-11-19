
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fjalla+One">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('CassinoYantra/game/carreira/css/style.css') }}">
    
    <title>Yantra club</title>
</head>
<body>
    <header class="header-desk">
        <div class="left">
            <a href="#">
                <img src="{{ asset('CassinoYantra/game/carreira/img/btn-home.png') }}" alt="Home" width="50px">
            </a>
            <a href="#" class="saldo">
                <img src="{{ asset('CassinoYantra/game/carreira/img/bg-saldo.png') }}" alt="Saldo" width="250px">
                <span>
                    <span class="tag-saldo">saldo</span>
                    <span>20.670.000</span>
                </span>
            </a>
        </div>

        <div class="center">
            <img src="{{ asset('CassinoYantra/game/carreira/img/logo-yandra.png') }}" alt="Logo" width="220px">
        </div>

        <div class="right">
            <a href="#" class="ganhos">
                <img src="{{ asset('CassinoYantra/game/carreira/img/bg-ganhos.png') }}" alt="Ganhos" width="250px">
                <span>
                    <span class="tag-saldo">ganhos</span>
                    <span>20.670.000</span>
                </span>
            </a>

            <div>
                <a class="btn-menu" data-bs-toggle="collapse" href="#collapseMenuDesk" role="button" aria-expanded="false" aria-controls="collapseMenuDesk">
                    <img src="{{ asset('CassinoYantra/game/carreira/img/menu.png') }}" alt="Menu" width="50px">
    
                    @include('_sections/menu_game')
                </a>
            </div>
        </div>
    </header>

    <header class="header-mobile" id="header">
        <a id="logo" href="#">
            <img src="{{ asset('CassinoYantra/game/carreira/img/logo-yandra.png') }}" alt="Logo" width="150px">
        </a>

        <nav id="nav">
          <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
            <span id="hamburger"></span>
          </button>
          <ul id="menu" role="menu">
            <div class="infos-mobile">
                <a href="#" class="saldo mobile">
                    <img src="{{ asset('CassinoYantra/game/carreira/img/bg-saldo.png') }}" alt="Saldo" width="250px">
                    <span>
                        <span class="tag-saldo">saldo</span>
                        <span>20.670.000</span>
                    </span>
                </a>
                <a href="#" class="ganhos mobile">
                    <img src="{{ asset('CassinoYantra/game/carreira/img/bg-ganhos.png') }}" alt="Ganhos" width="250px">
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
            <div class="item-principal">
                <img src="{{ asset('CassinoYantra/game/carreira/img/1_premio.png') }}" class="title-premio" alt="1º Prêmio" width="150px">
                <div class="area-botoes">
                    <button>
                        <img src="{{ asset('CassinoYantra/game/carreira/img/caixa_1.png') }}" width="200px">
                        <span class="valor-botoes">$ 1.000</span>
                    </button>
                    <button>
                        <img src="{{ asset('CassinoYantra/game/carreira/img/caixa_2.png') }}" width="200px">
                        <div>
                            <span>yantra</span>
                            <span>coins</span>
                        </div>
                        <span class="valor-botoes">$ 1.000</span>
                    </button>
                </div>
            </div>

            <div class="item">
                <div class="title-imgs">
                    <div>
                        <img src="{{ asset('CassinoYantra/game/carreira/img/2_premio.png') }}" class="title-premio" alt="2º Prêmio" width="150px">
                    </div>
                    
                    <div>
                        <img src="{{ asset('CassinoYantra/game/carreira/img/3_premio.png') }}" class="title-premio" alt="3º Prêmio" width="150px">
                    </div>                    
                </div>
                
                <div class="area-botoes">
                    <div class="cima">
                        <button>
                            <img src="{{ asset('CassinoYantra/game/carreira/img/caixa_1.png') }}" width="200px">
                            <span class="valor-botoes">$ 3.000</span>
                        </button>

                        <button>
                            <img src="{{ asset('CassinoYantra/game/carreira/img/caixa_2.png') }}" width="200px">
                            <div>
                                <span>yantra</span>
                                <span>coins</span>
                            </div>
                            <span class="valor-botoes">$ 30.000</span>
                        </button>
                    </div>
                    
                    <div class="baixo">
                        <button>
                            <img src="{{ asset('CassinoYantra/game/carreira/img/caixa_1.png') }}" width="200px">
                            <span class="valor-botoes">$ 5.000</span>
                        </button>
                        
                        <button>
                            <img src="{{ asset('CassinoYantra/game/carreira/img/caixa_2.png') }}" width="200px">
                            <div>
                                <span>yantra</span>
                                <span>coins</span>
                            </div>
                            <span class="valor-botoes">$ 50.000</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="title-imgs">
                    <div>
                        <img src="{{ asset('CassinoYantra/game/carreira/img/4_premio.png') }}" class="title-premio" alt="4º Prêmio" width="150px">
                    </div>
                    
                    <div>
                        <img src="{{ asset('CassinoYantra/game/carreira/img/5_premio.png') }}" class="title-premio" alt="5º Prêmio" width="150px">
                    </div>                    
                </div>
                
                <div class="area-botoes">
                    <div class="cima">
                        <button>
                            <img src="{{ asset('CassinoYantra/game/carreira/img/caixa_1.png') }}" width="200px">
                            <span class="valor-botoes">$ 7.000</span>
                        </button>

                        <button>
                            <img src="{{ asset('CassinoYantra/game/carreira/img/caixa_2.png') }}" width="200px">
                            <div>
                                <span>yantra</span>
                                <span>coins</span>
                            </div>
                            <span class="valor-botoes">$ 70.000</span>
                        </button>
                    </div>
                    
                    <div class="baixo">
                        <button>
                            <img src="{{ asset('CassinoYantra/game/carreira/img/caixa_1.png') }}" width="200px">
                            <span class="valor-botoes">$ 10.000</span>
                        </button>
                        
                        <button>
                            <img src="{{ asset('CassinoYantra/game/carreira/img/caixa_2.png') }}" width="200px">
                            <div>
                                <span>yantra</span>
                                <span>coins</span>
                            </div>
                            <span class="valor-botoes">$ 100.000</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <div class="center-principal">
            <img src="{{ asset('CassinoYantra/game/carreira/img/bg-mulher.png') }}" alt="Premiação Cassino" height="100%">
        </div>


        <div class="right-principal">
            <div class="item-principal">
                <img src="{{ asset('CassinoYantra/game/carreira/img/6_premio.png') }}" class="title-premio" alt="6º Prêmio" width="150px">
                <div class="area-botoes">
                    <button>
                        <img src="{{ asset('CassinoYantra/game/carreira/img/caixa_1.png') }}" width="200px">
                        <span class="valor-botoes">$ 20.000</span>
                    </button>
                    <button>
                        <img src="{{ asset('CassinoYantra/game/carreira/img/caixa_2.png') }}" width="200px">
                        <div>
                            <span>yantra</span>
                            <span>coins</span>
                        </div>
                        <span class="valor-botoes">$ 200.000</span>
                    </button>
                </div>
            </div>

            <div class="item">
                <div class="title-imgs">
                    <div>
                        <img src="{{ asset('CassinoYantra/game/carreira/img/7_premio.png') }}" class="title-premio" alt="7º Prêmio" width="150px">
                    </div>
                    
                    <div>
                        <img src="{{ asset('CassinoYantra/game/carreira/img/8_premio.png') }}" class="title-premio" alt="8º Prêmio" width="150px">
                    </div>                    
                </div>
                
                <div class="area-botoes">
                    <div class="cima">
                        <button>
                            <img src="{{ asset('CassinoYantra/game/carreira/img/caixa_1.png') }}" width="200px">
                            <span class="valor-botoes">$ 40.000</span>
                        </button>
                        
                        <button>
                            <img src="{{ asset('CassinoYantra/game/carreira/img/caixa_2.png') }}" width="200px">
                            <div>
                                <span>yantra</span>
                                <span>coins</span>
                            </div>
                            <span class="valor-botoes">$ 400.000</span>
                        </button>
                    </div>
                    
                    <div class="baixo">
                        <button>
                            <img src="{{ asset('CassinoYantra/game/carreira/img/caixa_1.png') }}" width="200px">
                            <span class="valor-botoes">$ 60.000</span>
                        </button>
                        
                        <button>
                            <img src="{{ asset('CassinoYantra/game/carreira/img/caixa_2.png') }}" width="200px">
                            <div>
                                <span>yantra</span>
                                <span>coins</span>
                            </div>
                            <span class="valor-botoes">$ 600.000</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="title-imgs">
                    <div>
                        <img src="{{ asset('CassinoYantra/game/carreira/img/9_premio.png') }}" class="title-premio" alt="9º Prêmio" width="150px">
                    </div>
                    
                    <div>
                        <img src="{{ asset('CassinoYantra/game/carreira/img/10_premio.png') }}" class="title-premio" alt="10º Prêmio" width="150px">
                    </div>                    
                </div>
                
                <div class="area-botoes">
                    <div class="cima">
                        <button>
                            <img src="{{ asset('CassinoYantra/game/carreira/img/caixa_1.png') }}" width="200px">
                            <span class="valor-botoes">$ 80.000</span>
                        </button>
                        
                        <button>
                            <img src="{{ asset('CassinoYantra/game/carreira/img/caixa_2.png') }}" width="200px">
                            <div>
                                <span>yantra</span>
                                <span>coins</span>
                            </div>
                            <span class="valor-botoes">$ 800.000</span>
                        </button>
                    </div>
                    
                    <div class="baixo">
                        <button>
                            <img src="{{ asset('CassinoYantra/game/carreira/img/caixa_1.png') }}" width="200px">
                            <span class="valor-botoes">$ 100.000</span>
                        </button>
                        
                        <button>
                            <img src="{{ asset('CassinoYantra/game/carreira/img/caixa_2.png') }}" width="200px">
                            <div>
                                <span>yantra</span>
                                <span>coins</span>
                            </div>
                            <span class="valor-botoes">$ 1.000.000</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="setor-progress">
        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-label="Success striped example" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div>
            <img src="{{ asset('CassinoYantra/game/carreira/img/1_milhao.png') }}" alt="1 milhão" width="250px">
        </div>
    </div>
    


    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="{{ asset('CassinoYantra/game/carreira/js/script.js') }}"></script>
</body>
</html>