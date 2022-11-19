
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fjalla+One">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{ asset('CassinoYantra/game/indicacao/css/style.css') }}">
    
    <title>Yantra club</title>
</head>
<body>
    <header class="header-desk">
        <div class="left">
            <a href="#">
                <img src="{{ asset('CassinoYantra/game/indicacao/img/btn-home.png') }}" alt="Home" width="50px">
            </a>
            <a href="#" class="saldo">
                <img src="{{ asset('CassinoYantra/game/indicacao/img/bg-saldo.png') }}" alt="Saldo" width="250px">
                <span>
                    <span class="tag-saldo">saldo</span>
                    <span>20.670.000</span>
                </span>
            </a>
        </div>

        <div class="center">
            <img src="{{ asset('CassinoYantra/game/indicacao/img/logo-yandra.png') }}" alt="Logo" width="220px">
        </div>

        <div class="right">
            <a href="#" class="ganhos">
                <img src="{{ asset('CassinoYantra/game/indicacao/img/bg-ganhos.png') }}" alt="Ganhos" width="250px">
                <span>
                    <span class="tag-saldo">ganhos</span>
                    <span>20.670.000</span>
                </span>
            </a>

            <div>
                <a class="btn-menu" data-bs-toggle="collapse" href="#collapseMenuDesk" role="button" aria-expanded="false" aria-controls="collapseMenuDesk">
                    <img src="{{ asset('CassinoYantra/game/indicacao/img/menu.png') }}" alt="Menu" width="50px">
    
                    @include('_sections/menu_game')
                </a>
            </div>
        </div>
    </header>

    <header class="header-mobile" id="header">
        <a id="logo" href="#">
            <img src="{{ asset('CassinoYantra/game/indicacao/img/logo-yandra.png') }}" alt="Logo" width="150px">
        </a>

        <nav id="nav">
          <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
            <span id="hamburger"></span>
          </button>
          <ul id="menu" role="menu">
            <div class="infos-mobile">
                <a href="#" class="saldo mobile">
                    <img src="{{ asset('CassinoYantra/game/indicacao/img/bg-saldo.png') }}" alt="Saldo" width="250px">
                    <span>
                        <span class="tag-saldo">saldo</span>
                        <span>20.670.000</span>
                    </span>
                </a>
                <a href="#" class="ganhos mobile">
                    <img src="{{ asset('CassinoYantra/game/indicacao/img/bg-ganhos.png') }}" alt="Ganhos" width="250px">
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
        <div class="title-baus">
            <img src="{{ asset('CassinoYantra/game/indicacao/img/caixa_de_texto.png') }}" alt="Monetize até 266% sobre o valor do seu baú" width="800px">
            <span>Monetize até 266% sobre o valor do seu baú!</span>
        </div>

        <div class="setor-baus">
            <div class="item um">
                <img src="{{ asset('CassinoYantra/game/indicacao/img/bau60.png') }}" alt="Baú" width="150px">
                <button>R$ 10</button>
            </div>
            <div class="item dois">
                <img src="{{ asset('CassinoYantra/game/indicacao/img/bau120.png') }}" alt="Baú" width="150px">
                <button>R$ 20</button>
            </div>
            <div class="item tres">
                <img src="{{ asset('CassinoYantra/game/indicacao/img/bau240.png') }}" alt="Baú" width="150px">
                <button>R$ 30</button>
            </div>
            <div class="item quatro">
                <img src="{{ asset('CassinoYantra/game/indicacao/img/bau360.png') }}" alt="Baú" width="150px">
                <button>R$ 40</button>
            </div>
            <div class="item quatro">
                <img src="{{ asset('CassinoYantra/game/indicacao/img/bau480.png') }}" alt="Baú" width="150px">
                <button>R$ 50</button>
            </div>
            <div class="item tres">
                <img src="{{ asset('CassinoYantra/game/indicacao/img/bau600.png') }}" alt="Baú" width="150px">
                <button>R$ 60</button>
            </div>
            <div class="item dois">
                <img src="{{ asset('CassinoYantra/game/indicacao/img/bau840.png') }}" alt="Baú" width="150px">
                <button>R$ 70</button>
            </div>
            <div class="item um">
                <img src="{{ asset('CassinoYantra/game/indicacao/img/bau1200.png') }}" alt="Baú" width="150px">
                <button>R$ 120</button>
            </div>
        </div>

        <div class="area-botoes">
            <div class="left">
                <img src="{{ asset('CassinoYantra/game/indicacao/img/seta-left.png') }}" class="seta-left" alt="Salto total" width="200px">
                
                <button>
                    <img src="{{ asset('CassinoYantra/game/indicacao/img/saldo.png') }}" alt="Saldo total" width="500px">

                    <div>
                        <span>saldo</span>
                        <br>
                        <span>total</span>
                    </div>

                    <span class="valor-botoes">R$ 25.000</span>
                </button>
            </div>
            <div class="right">
                <button>
                    <img src="{{ asset('CassinoYantra/game/indicacao/img/saldo.png') }}" alt="Saldo total" width="500px">

                    <div>
                        <span>cash</span>
                    </div>

                    <span class="valor-botoes">R$ 15.000</span>
                </button>
                
                <img src="{{ asset('CassinoYantra/game/indicacao/img/seta-right.png') }}" class="seta-right" alt="Cash" width="200px">
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="{{ asset('CassinoYantra/game/indicacao/js/script.js') }}"></script>
</body>
</html>