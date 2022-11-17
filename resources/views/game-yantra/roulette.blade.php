
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roleta Yantra</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{ asset('CassinoYantra/game/roletas/css/style.css') }}">
</head>
<style>

.menu-roletas .left li span {
    z-index: 1;
    position: relative;
    font-size: 1.5rem;
    font-weight: 600;
}

.btn-selecionado {
    border: 4px solid #e0d08c;
    border-radius: 32px;
}

</style>
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
            <img src="{{ asset('CassinoYantra/game/roletas/img/logo-yandra.png') }}" alt="Logo" width="150px">
        </a>

        <nav id="nav">
          <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
            <span id="hamburger"></span>
          </button>
          <ul id="menu" role="menu">
            <div class="infos-mobile">
                <a href="#" class="saldo mobile">
                    <img src="{{ asset('CassinoYantra/game/roletas/img/bg-saldo.png') }}" alt="Saldo" width="250px">
                    <span>
                        <span class="tag-saldo">saldo</span>
                        <span>20.670.000</span>
                    </span>
                </a>
                <a href="#" class="ganhos mobile">
                    <img src="{{ asset('CassinoYantra/game/roletas/img/bg-ganhos.png') }}" alt="Ganhos" width="250px">
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

    <div class="setor-roletas">
        <iframe src="{{ asset('CassinoYantra/game/roletas/roleta1/index.html') }}" title="Yantra Club" id="if01"></iframe>
        <iframe src="{{ asset('CassinoYantra/game/roletas/roleta2/index.html') }}" title="Yantra Club" id="if02"></iframe>
        <iframe src="{{ asset('CassinoYantra/game/roletas/roleta3/index.html') }}" title="Yantra Club" id="if03"></iframe>
    </div>

    <div class="menu-roletas">
        <div class="left">
            <ul>
                <li style="cursor: pointer;" onclick="select_numero(1, '{{ $nums['num_01'] }}')">
                    <img src="{{ asset('CassinoYantra/game/roletas/img/p-nleft.png') }}" height="70px" id="num_01" class="">
                    <span>{{ $nums['num_01'] }}</span>
                </li>
                <li style="cursor: pointer;" onclick="select_numero(2, '{{ $nums['num_02'] }}')">
                    <img src="{{ asset('CassinoYantra/game/roletas/img/p-nleft.png') }}" height="70px" id="num_02" class="">
                    <span>{{ $nums['num_02'] }}</span>
                </li>
                <li style="cursor: pointer;" onclick="select_numero(3, '{{ $nums['num_03'] }}')">
                    <img src="{{ asset('CassinoYantra/game/roletas/img/p-nleft.png') }}" height="70px" id="num_03" class="">
                    <span>{{ $nums['num_03'] }}</span>
                </li>
                <li style="cursor: pointer;" onclick="select_numero(4, '{{ $nums['num_04'] }}')">
                    <img src="{{ asset('CassinoYantra/game/roletas/img/p-nleft.png') }}" height="70px" id="num_04" class="">
                    <span>{{ $nums['num_04'] }}</span>
                </li>
            </ul>
        </div>

        <!--
        
        <div class="center">
            <div class="btns">
                <div class="cima">
                    <button class="red">0</button>
                    <button class="green">1</button>
                    <button class="orange">2</button>
                    <button class="blue">3</button>
                    <button class="pink">4</button>
                </div>
                <div class="baixo">
                    <button class="red">5</button>
                    <button class="green">6</button>
                    <button class="orange">7</button>
                    <button class="blue">8</button>
                    <button class="pink">9</button>
                </div>
            </div>
            <div class="btns-baixo">
                <li class="oculto">
                    <img src="{{ asset('CassinoYantra/game/roletas/img/p-nleft.png') }}" height="50px">
                    <span></span>
                </li>
                <button class="red">OK</button>
            </div>
        </div>

        -->

        <div class="right">
            <ul class="last-results">
                <li class="color-one">1</li>
                <li class="color-two">2</li>
                <li class="color-tree">10</li>
                <li class="color-for">5</li>
                <li class="color-one">1</li>
                <li class="color-two">2</li>
                <li class="color-tree">10</li>
                <li class="color-for">5</li>
                <li class="color-one">1</li>
                <li class="color-two">2</li>
                <li class="color-tree">10</li>
                <li class="color-for">5</li>
                <li class="color-one">1</li>
                <li class="color-two">2</li>
                <li class="color-tree">10</li>
                <li class="color-for">5</li>
                <li class="color-one">1</li>
                <li class="color-two">2</li>
                <li class="color-tree">10</li>
                <li class="color-for">5</li>
                <li class="color-one">1</li>
                <li class="color-two">2</li>
                <li class="color-tree">10</li>
                <li class="color-for">5</li>
                <li class="color-one">1</li>
                <li class="color-two">2</li>
                <li class="color-tree">10</li>
                <li class="color-for">5</li>
                <li class="color-one">1</li>
                <li class="color-two">2</li>
                <li class="color-tree">10</li>
                <li class="color-for">5</li>
                <li class="color-one">1</li>
                <li class="color-two">2</li>
                <li class="color-tree">10</li>
                <li class="color-for">5</li>
                <li class="color-one">1</li>
                <li class="color-two">2</li>
                <li class="color-tree">10</li>
                <li class="color-for">5</li>
                <li class="color-one">1</li>
                <li class="color-two">2</li>
                <li class="color-tree">10</li>
                <li class="color-for">5</li>
            </ul>
        </div>
    </div>

    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="{{ asset('CassinoYantra/game/roletas/js/script.js') }}"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script>

        var code_x = 0;

        function select_numero(num, code){

            code_x = code;

            var iframe = document.getElementById('if01').contentWindow.document;

            const element1 = document.querySelector("#num_01");
            const element2 = document.querySelector("#num_02");
            const element3 = document.querySelector("#num_03");
            const element4 = document.querySelector("#num_04");

            if(num == 1){

                element1.classList.add('btn-selecionado');
                element2.classList.remove('btn-selecionado');
                element3.classList.remove('btn-selecionado');
                element4.classList.remove('btn-selecionado');

            }

            if(num == 2){

                element1.classList.remove('btn-selecionado');
                element2.classList.add('btn-selecionado');
                element3.classList.remove('btn-selecionado');
                element4.classList.remove('btn-selecionado');

            }

            if(num == 3){

                element1.classList.remove('btn-selecionado');
                element2.classList.remove('btn-selecionado');
                element3.classList.add('btn-selecionado');
                element4.classList.remove('btn-selecionado');

            }

            if(num == 4){

                element1.classList.remove('btn-selecionado');
                element2.classList.remove('btn-selecionado');
                element3.classList.remove('btn-selecionado');
                element4.classList.add('btn-selecionado');

            }


             $.ajax({

                url: "{{ route('yantra.checkCode') }}",
                type: "post",
                data: "_token={{ csrf_token() }}&code="+code,
                dataType: "html"

            }).done(function(resposta) {

                console.log(resposta);

                if(resposta == 400){

                    swal({
                        title: "Código Invalido",
                        text: "Selecione um código valido!",
                        icon: "error",
                    });

                    iframe.getElementById("bnt_click01").style.display = "none";

                }else{

                    iframe.getElementById("bnt_click01").style.display = "flex";
                }

            });



        }

        function star_btn(){

            setTimeout(function() {
                window.location.href = "{{ route('yantra.awardCode') }}?code="+code_x;
            }, 15000);

        }
    </script>
</body>
</html>