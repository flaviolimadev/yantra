<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('CassinoYantra/game/sucess/css/style.css') }}">
    <title>Yantra club</title>
</head>
<body>
    <header class="header-desk">
        <div class="left">
            <a href="{{ route('casino') }}">
                <img src="{{ asset('CassinoYantra/game/token/img/btn-home.png') }}" alt="Home" width="50px">
            </a>
            <a href="#" class="saldo">
                <img src="{{ asset('CassinoYantra/game/token/img/bg-saldo.png') }}" alt="Saldo" width="250px">
                <span>
                    <span class="tag-saldo">saldo USD</span>
                    <span>{{ number_format($saldo / 100, 2, ',', '.') }}</span>
                </span>
            </a>
        </div>

        <div class="center">
            <img src="{{ asset('CassinoYantra/game/token/img/logo-yandra.png') }}" alt="Logo" width="220px">
        </div>

        <div class="right">
           

            <div>
                <a class="btn-menu" data-bs-toggle="collapse" href="#collapseMenuDesk" role="button" aria-expanded="false" aria-controls="collapseMenuDesk">
                    <img src="{{ asset('CassinoYantra/game/token/img/menu.png') }}" alt="Menu" width="50px">
    
                    @include('_sections/menu_game')
                </a>
            </div>
        </div>
    </header>

    <header class="header-mobile" id="header">
        <a id="logo" href="#">
            <img src="{{ asset('CassinoYantra/game/sucess/img/logo-yandra.png') }} " alt="Logo" width="150px">
        </a>

        <nav id="nav">
          <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
            <span id="hamburger"></span>
          </button>
          <ul id="menu" role="menu">
            <div class="infos-mobile">
                <a href="#" class="saldo mobile">
                    <img src="{{ asset('CassinoYantra/game/sucess/img/bg-saldo.png') }} " alt="Saldo" width="250px">
                    <span>
                        <span class="tag-saldo">saldo</span>
                        <span>20.670.000</span>
                    </span>
                </a>
                <a href="#" class="ganhos mobile">
                    <img src="{{ asset('CassinoYantra/game/sucess/img/bg-ganhos.png') }} " alt="Ganhos" width="250px">
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
        <div class="setor-bonus">
            <img src="{{ asset('CassinoYantra/game/sucess/img/bonus.png') }} " alt="B??nus" width="600px">
            <span class="valor-bonus">$ {{ $valor }}</span>
        </div>
    </main>

    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js') }} " integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="{{ asset('CassinoYantra/game/sucess/js/script.js') }} "></script>

    <script>
        setTimeout(function() {
            window.location.href = "{{ route('yantra.chest', ['id' => $id]) }}";
        }, 5000);
    </script>
</body>
</html>