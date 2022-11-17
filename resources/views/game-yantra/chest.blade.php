<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yantra Club</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('CassinoYantra/game/game/css/style.css') }}">
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
    
                    <div class="collapse" id="collapseMenuDesk">
                        <div class="card card-body">
                          <li><a href="{{ route('yantra') }}" class="item">Meus Baús</a></li>
                          <li><a href="#" class="item">Indicação</a></li>
                          <li><a href="#" class="item">Plano de carreira</a></li>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </header>

    <header class="header-mobile" id="header">
        <a id="logo" href="#">
            <img src=" {{ asset('CassinoYantra/game/game/img/logo-yandra.png') }}" alt="Logo" width="150px">
        </a>

        <nav id="nav">
          <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
            <span id="hamburger"></span>
          </button>
          <ul id="menu" role="menu">
            <div class="infos-mobile">
                <a href="#" class="saldo mobile">
                    <img src=" {{ asset('CassinoYantra/game/game/img/bg-saldo.png') }}" alt="Saldo" width="250px">
                    <span>
                        <span class="tag-saldo">saldo</span>
                        <span>20.670.000</span>
                    </span>
                </a>
                <a href="#" class="ganhos mobile">
                    <img src=" {{ asset('CassinoYantra/game/game/img/bg-ganhos.png') }}" alt="Ganhos" width="250px">
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
        <div class="area-principal">
            <div class="numero pedras raspar">
                <p class="title-colunas">raspar</p>
                <ul class="pedras">
                    <a href="#" onclick="scrape({{ $Chests->id }},1)">
                        <li class="item-pedra-n 1">
                            <img src=" {{ asset('CassinoYantra/game/game/img/p-nleft1.png') }}" height="41px">
                            <span class="numero-visto">Raspar</span>
                        </li>
                    </a>
                    
                    <a href="#" onclick="scrape({{ $Chests->id }},2)">
                        <li class="item-pedra-n 2">
                            <img src=" {{ asset('CassinoYantra/game/game/img/p-nleft1.png') }}" height="41px">
                            <span class="numero-visto">Raspar</span>
                        </li>
                    </a>

                    <a href="#" onclick="scrape({{ $Chests->id }},3)">
                        <li class="item-pedra-n 3">
                            <img src=" {{ asset('CassinoYantra/game/game/img/p-nleft1.png') }}" height="41px">
                            <span class="numero-visto">Raspar</span>
                        </li>
                    </a>

                    <a href="#" onclick="scrape({{ $Chests->id }},4)">
                        <li class="item-pedra-n 4">
                            <img src=" {{ asset('CassinoYantra/game/game/img/p-nleft1.png') }}" height="41px">
                            <span class="numero-visto">Raspar</span>
                        </li>
                    </a>
                    
                </ul>
            </div>

            <div class="numero pedras">
                <p class="title-colunas">número</p>
                <ul class="pedras" style="top: 12px;">

                    <li class="item-pedra-n 5">
                        <img src=" {{ asset('CassinoYantra/game/game/img/p-nleft.png') }}" height="40px">
                        <span class="numero-visto" style="font-size: 14px;">{{ $nums['num_01'] }}</span>
                    </li>

                    <li class="item-pedra-n 6">
                        <img src=" {{ asset('CassinoYantra/game/game/img/p-nleft.png') }}" height="40px">
                        <span class="numero-visto" style="font-size: 14px;">{{ $nums['num_02'] }}</span>
                    </li>

                    <li class="item-pedra-n 7">
                        <img src=" {{ asset('CassinoYantra/game/game/img/p-nleft.png') }}" height="40px">
                        <span class="numero-visto" style="font-size: 14px;">{{ $nums['num_03'] }}</span>
                    </li>

                    <li class="item-pedra-n 8">
                        <img src=" {{ asset('CassinoYantra/game/game/img/p-nleft.png') }}" height="40px">
                        <span class="numero-visto" style="font-size: 14px;">{{ $nums['num_04'] }}</span>
                    </li>
                </ul>
            </div>

            <div class="vendido pedras">
                <p class="title-colunas">vendido</p>
                <ul class="pedras">
                    
    
                    <li class="item-pedra 5">
                        <img src=" {{ asset('CassinoYantra/game/game/img/p-branca.png') }}" width="40px">
                        <img class="cor-pedra" src=" {{ asset('CassinoYantra/game/game/img/p-verde.png') }}" width="40px">
                    </li>
    
                    <li class="item-pedra 6">
                        <img src=" {{ asset('CassinoYantra/game/game/img/p-branca.png') }}" width="40px">
                        <img class="cor-pedra" src=" {{ asset('CassinoYantra/game/game/img/p-verde.png') }}" width="40px">
                    </li>
    
                    <li class="item-pedra 7">
                        <img src=" {{ asset('CassinoYantra/game/game/img/p-branca.png') }}" width="40px">
                        <img class="cor-pedra" src=" {{ asset('CassinoYantra/game/game/img/p-verde.png') }}" width="40px">
                    </li>
    
                    <li class="item-pedra 8">
                        <img src=" {{ asset('CassinoYantra/game/game/img/p-branca.png') }}" width="40px">
                        <img class="cor-pedra" src=" {{ asset('CassinoYantra/game/game/img/p-verde.png') }}" width="40px">
                    </li>
                </ul>
            </div>

            <div class="atencao pedras">
                <p class="title-colunas">utilizado</p>
                <ul class="pedras">
                    
    
                    <li class="item-pedra 5">
                        <img src=" {{ asset('CassinoYantra/game/game/img/p-branca.png') }}" width="40px">
                        <img class="cor-pedra" src=" {{ asset('CassinoYantra/game/game/img/p-laranja.png') }}" width="40px" style="display:{{ $nums['num_01'] != '****' ? 'block' : 'none'}}">
                    </li>
    
                    <li class="item-pedra 6">
                        <img src=" {{ asset('CassinoYantra/game/game/img/p-branca.png') }}" width="40px">
                        <img class="cor-pedra" src=" {{ asset('CassinoYantra/game/game/img/p-laranja.png') }}" width="40px" style="display:{{ $nums['num_02'] != '****' ? 'block' : 'none'}}">
                    </li>
    
                    <li class="item-pedra 7">
                        <img src=" {{ asset('CassinoYantra/game/game/img/p-branca.png') }}" width="40px">
                        <img class="cor-pedra" src=" {{ asset('CassinoYantra/game/game/img/p-laranja.png') }}" width="40px" style="display:{{ $nums['num_03'] != '****' ? 'block' : 'none'}}">
                    </li>
    
                    <li class="item-pedra 8">
                        <img src=" {{ asset('CassinoYantra/game/game/img/p-branca.png') }}" width="40px">
                        <img class="cor-pedra" src=" {{ asset('CassinoYantra/game/game/img/p-laranja.png') }}" width="40px" style="display:{{ $nums['num_04'] != '****' ? 'block' : 'none'}}">
                    </li>
                </ul>
            </div>
        
            <div class="on-off">
                <p class="title-colunas">
                    <span>disponível</span>
                    <br>
                    <span>para venda</span>
                </p>
                <ul class="pedras-radio">
                    

                    <div class="toggle-wrapper 5">
                        <label class="switch">
                          <input type="checkbox" class="hidden-toggle" {{ $status_venda['num_01'] }} onclick="atv_nums({{ $Chests->id }},1)" {{ $nums['num_01'] != '****' ? 'disabled' : ''}}/>
                          <div class="slider">
                            <div class="button"></div>
                          </div>
                        </label>
                    </div>
    
                    <div class="toggle-wrapper 6">
                        <label class="switch">
                          <input type="checkbox" class="hidden-toggle" {{ $status_venda['num_02'] }} onclick="atv_nums({{ $Chests->id }},2)" {{ $nums['num_02'] != '****' ? 'disabled' : ''}}/>
                          <div class="slider">
                            <div class="button"></div>
                          </div>
                        </label>
                    </div>

                    <div class="toggle-wrapper 7">
                        <label class="switch">
                          <input type="checkbox" class="hidden-toggle" {{ $status_venda['num_03'] }} onclick="atv_nums({{ $Chests->id }},3)" {{ $nums['num_03'] != '****' ? 'disabled' : ''}}/>
                          <div class="slider">
                            <div class="button"></div>
                          </div>
                        </label>
                    </div>
    
                    <div class="toggle-wrapper 8">
                        <label class="switch">
                          <input type="checkbox" class="hidden-toggle" {{ $status_venda['num_04'] }} onclick="atv_nums({{ $Chests->id }},4)" {{ $nums['num_04'] != '****' ? 'disabled' : ''}}/>
                          <div class="slider">
                            <div class="button"></div>
                          </div>
                        </label>
                    </div>
                </ul>
            </div>

            <div class="redirect-roleta">
                <div class="cima">
                    <img src=" {{ asset('CassinoYantra/game/game/img/roleta.png') }}" alt="Roleta" width="350px">
                </div>

                <div class="baixo">
                    <a href="{{ route('yantra.roulette', ['id' => $Chests->id]) }}">
                        <span>ir para roletas</span>
                        <img src=" {{ asset('CassinoYantra/game/game/img/seta-roleta.png') }}" alt="Ir para roletas" width="25px">
                    </a>
                </div>
            </div>
        </div>

        <div class="redirect-roleta mobile">
            <div class="cima">
                <img src=" {{ asset('CassinoYantra/game/game/img/roleta.png') }}" alt="Roleta" width="350px">
            </div>

            <div class="baixo">
                <a href="{{ route('yantra.roulette', ['id' => $Chests->id]) }}">
                    <span>ir para roletas</span>
                    <img src=" {{ asset('CassinoYantra/game/game/img/seta-roleta.png') }}" alt="Ir para roletas" width="25px">
                </a>
            </div>
        </div>
    </main>

    
    <script src=" {{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src=" {{ asset('CassinoYantra/game/game/js/main.js') }}"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript">

        function atv_nums(id, num){

            $.ajax({
            url: "{{ route('yantra.buyOrSell') }}",
            type: "POST",
            data: "_token={{ csrf_token() }}&id="+id+"&num="+num,
            dataType: "html"

            });
        }

        function scrape(id, num){

            $.ajax({
            url: "{{ route('yantra.scrape') }}",
            type: "get",
            data: "_token={{ csrf_token() }}&id="+id+"&num="+num,
            dataType: "html"

            }).done(function(resposta) {
                console.log(resposta);

            });

            setTimeout(function(){
                window.location.href = "{{ route('yantra.chest', ['id' => $Chests->id]) }}";
            },500);
        }

    </script>
</body>
</html>