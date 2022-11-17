
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yantra club</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('CassinoYantra/game/token/css/style.css') }}">
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
            <img src="{{ asset('CassinoYantra/game/token/img/logo-yandra.png') }}" alt="Logo" width="150px">
        </a>

        <nav id="nav">
          <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
            <span id="hamburger"></span>
          </button>
          <ul id="menu" role="menu">
            <div class="infos-mobile">
                <a href="#" class="saldo mobile">
                    <img src="{{ asset('CassinoYantra/game/token/img/bg-saldo.png') }}" alt="Saldo" width="250px">
                    <span>
                        <span class="tag-saldo">saldo</span>
                        <span>20.670.000</span>
                    </span>
                </a>
                <a href="#" class="ganhos mobile">
                    <img src="{{ asset('CassinoYantra/game/token/img/bg-ganhos.png') }}" alt="Ganhos" width="250px">
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

    <main class="area-mapa">
        <div class="left-principal">
            <p class="title-mapa">MAPA <span>da</span> MINA</p>

            <div class="mapa">
                <img src="{{ asset('CassinoYantra/game/token/img/caminho-baus.png') }}" class="img-trilha" alt="Trilha dos baús" height="75%">

                <div class="left">
                    <div class="item-bau um">
                        <div class="left">
                            <img src="{{ asset('CassinoYantra/game/token/img/bau.png') }}" alt="Baú" width="120px">
                        </div>
                        <div class="right">
                          <a href="{{ route('yantra.buy', ['id' => 4]) }}">
                            <button>
                                <img src=" {{ asset('CassinoYantra/game/token/img/p-roxa.png ') }}" height="55px">
                                <span>$ 1.200</span>

                            </button>
                        </a>

                            <div class="cashback">
                                <div>
                                    <span>cashback</span>
                                    <span>de <span class="tag-cash">$</span></span>
                                </div>
                                <div>
                                    <span class="valor">3.200</span>
                                </div>
                            </div>

                            <li>
                                <img src="{{ asset('CassinoYantra/game/token/img/icone-bau.png') }}" alt="Baú" width="30px">
                                <span>seus baus</span>
                            </li>
                        </div>
                    </div>

                    <div class="item-bau dois">
                        <div class="left">
                            <img src="{{ asset('CassinoYantra/game/token/img/bau.png') }}" alt="Baú" width="120px">
                        </div>
                        <div class="right">
                          <a href="{{ route('yantra.buy', ['id' => 4]) }}">
                            <button>
                                <img src=" {{ asset('CassinoYantra/game/token/img/p-roxa.png ') }}" height="55px">
                                <span>$ 600</span>

                            </button>
                        </a>

                            <div class="cashback">
                                <div>
                                    <span>cashback</span>
                                    <span>de <span class="tag-cash">$</span></span>
                                </div>
                                <div>
                                    <span class="valor">1.600</span>
                                </div>
                            </div>

                            <li>
                                <img src="{{ asset('CassinoYantra/game/token/img/icone-bau.png') }}" alt="Baú" width="30px">
                                <span>seus baus</span>
                            </li>
                        </div>
                    </div>

                    <div class="item-bau tres">
                        <div class="left">
                            <img src="{{ asset('CassinoYantra/game/token/img/bau.png') }}" alt="Baú" width="120px">
                        </div>
                        <div class="right">
                            <a href="{{ route('yantra.buy', ['id' => 4]) }}">
                                <button>
                                    <img src=" {{ asset('CassinoYantra/game/token/img/p-roxa.png ') }}" height="55px">
                                    <span>$ 360</span>

                                </button>
                            </a>

                            <div class="cashback">
                                <div>
                                    <span>cashback</span>
                                    <span>de <span class="tag-cash">$</span></span>
                                </div>
                                <div>
                                    <span class="valor">960</span>
                                </div>
                            </div>

                            <li>
                                <img src="{{ asset('CassinoYantra/game/token/img/icone-bau.png') }}" alt="Baú" width="30px">
                                <span>seus baus</span>
                            </li>
                        </div>
                    </div>

                    <div class="item-bau quatro">
                        <div class="left">
                            <img src="{{ asset('CassinoYantra/game/token/img/bau.png') }}" alt="Baú" width="120px">
                        </div>
                        <div class="right">
                          <a href="{{ route('yantra.buy', ['id' => 4]) }}">
                            <button>
                                <img src=" {{ asset('CassinoYantra/game/token/img/p-roxa.png ') }}" height="55px">
                                <span>$ 120</span>

                            </button>
                        </a>

                            <div class="cashback">
                                <div>
                                    <span>cashback</span>
                                    <span>de <span class="tag-cash">$</span></span>
                                </div>
                                <div>
                                    <span class="valor">320</span>
                                </div>
                            </div>

                            <li>
                                <img src="{{ asset('CassinoYantra/game/token/img/icone-bau.png') }}" alt="Baú" width="30px">
                                <span>seus baus</span>
                            </li>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="item-bau cinco">
                        <div class="left">
                            <img src="{{ asset('CassinoYantra/game/token/img/bau.png') }}" alt="Baú" width="120px">
                        </div>
                        <div class="right">
                          <a href="{{ route('yantra.buy', ['id' => 4]) }}">
                            <button>
                                <img src=" {{ asset('CassinoYantra/game/token/img/p-roxa.png ') }}" height="55px">
                                <span>$ 840</span>

                            </button>
                        </a>

                            <div class="cashback">
                                <div>
                                    <span>cashback</span>
                                    <span>de <span class="tag-cash">$</span></span>
                                </div>
                                <div>
                                    <span class="valor">2.240</span>
                                </div>
                            </div>

                            <li>
                                <img src="{{ asset('CassinoYantra/game/token/img/icone-bau.png') }}" alt="Baú" width="30px">
                                <span>seus baus</span>
                            </li>
                        </div>
                    </div>

                    <div class="item-bau seis">
                        <div class="left">
                            <img src="{{ asset('CassinoYantra/game/token/img/bau.png') }}" alt="Baú" width="120px">
                        </div>
                        <div class="right">
                          <a href="{{ route('yantra.buy', ['id' => 4]) }}">
                            <button>
                                <img src=" {{ asset('CassinoYantra/game/token/img/p-roxa.png ') }}" height="55px">
                                <span>$ 480</span>

                            </button>
                        </a>

                            <div class="cashback">
                                <div>
                                    <span>cashback</span>
                                    <span>de <span class="tag-cash">$</span></span>
                                </div>
                                <div>
                                    <span class="valor">1.280</span>
                                </div>
                            </div>

                            <li>
                                <img src="{{ asset('CassinoYantra/game/token/img/icone-bau.png') }}" alt="Baú" width="30px">
                                <span>seus baus</span>
                            </li>
                        </div>
                    </div>

                    <div class="item-bau sete">
                        <div class="left">
                            <img src="{{ asset('CassinoYantra/game/token/img/bau.png') }}" alt="Baú" width="120px">
                        </div>
                        <div class="right">
                          <a href="{{ route('yantra.buy', ['id' => 4]) }}">
                            <button>
                                <img src=" {{ asset('CassinoYantra/game/token/img/p-roxa.png ') }}" height="55px">
                                <span>$ 240</span>

                            </button>
                        </a>

                            <div class="cashback">
                                <div>
                                    <span>cashback</span>
                                    <span>de <span class="tag-cash">$</span></span>
                                </div>
                                <div>
                                    <span class="valor">610</span>
                                </div>
                            </div>

                            <li>
                                <img src="{{ asset('CassinoYantra/game/token/img/icone-bau.png') }}" alt="Baú" width="30px">
                                <span>seus baus</span>
                            </li>
                        </div>
                    </div>

                    <div class="item-bau oito">
                        <div class="left">
                            <img src="{{ asset('CassinoYantra/game/token/img/bau.png') }}" alt="Baú" width="120px">
                        </div>
                        <div class="right">
                          <a href="{{ route('yantra.buy', ['id' => 1]) }}">
                            <button>
                                <img src=" {{ asset('CassinoYantra/game/token/img/p-roxa.png ') }}" height="55px">
                                <span>$ 60</span>

                            </button>
                        </a>

                            <div class="cashback">
                                <div>
                                    <span>cashback</span>
                                    <span>de <span class="tag-cash">$</span></span>
                                </div>
                                <div>
                                    <span class="valor">160</span>
                                </div>
                            </div>

                            <li>
                                <img src="{{ asset('CassinoYantra/game/token/img/icone-bau.png') }}" alt="Baú" width="30px">
                                <span>seus baus</span>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-principal">
            <section class="main-meusbilhetes">
                <div class="header-meusbilhetes">
                    <div class="left">
                      <ul>                        
                        <li class="item">
                          <a href="#multiCollapsePendentes" data-bs-toggle="collapse" aria-expanded="false" class="collapsed">Pendentes</a>
                        </li>
                        <li class="item">
                          <a href="#multiCollapseResolvidos" data-bs-toggle="collapse" class="" aria-expanded="true">Resolvidos</a>
                        </li>
                        <!--
                        <li class="item">
                          <a href="#" data-bs-toggle="collapse" data-bs-target=".multi-collapse">Todos</a>
                        </li>
                        <li class="item">
                          <a href="#" data-bs-toggle="collapse" data-bs-target="">Cassino</a>
                        </li>
                        -->
                      </ul>
                    </div>
                </div>
            
                <div class="bilhetes-aovoivo">
                  <div class="multi-collapse collapse" id="multiCollapseResolvidos" style="">
                      <p class="title-tiposbilhetes">Resolvidos</p>
          
          
                      @foreach ($chests_fechados as $chest_fechado)
          
                      <div class="conteudo-bilhetes">
                          <div class="valoretipo-apostabilhete" data-bs-toggle="collapse" data-bs-target="#collapseAovivo{{$chest_fechado->id}}">
                          <span>USD {{ number_format($chest_fechado->chest / 100, 2, ',', '.') }}</span>
                          
                          <span class="subtitle-valoretipo"><span style="background-color: #218529;color: black;">Fechado</span></span>
                          </div>
          
                          <div class="collapse" id="collapseAovivo{{$chest_fechado->id}}">
          
                              
                              <div class="titulo-aposta">
                                  <div>
                                      <span>Baú encerrado com sucesso!!</span>
                                  </div>
                                  <span>Numero 01 - USD {{ $chest_fechado->num_01 }}</span><br>
                                  <span>Numero 02 - USD {{ $chest_fechado->num_02 }}</span><br>
                                  <span>Numero 03 - USD {{ $chest_fechado->num_03 }}</span><br>
                                  <span>Numero 04 - USD {{ $chest_fechado->num_04 }}</span><br><br>
                                  <span>Cods: 00YAN0{{$chest_fechado->id}}</span><hr>
                              </div>
          
                          </div>
                      </div>
                          
                      @endforeach
                  
                      
          
                  </div>
              </div>
          
              <div class="bilhetes-aovoivo">
                  <div class="multi-collapse collapse show" id="multiCollapsePendentes" style="">
                      <p class="title-tiposbilhetes">Pendentes</p>
          
                      @foreach ($chests_abertos as $chest_aberto)
          
                      <div class="conteudo-bilhetes">
                          <div class="valoretipo-apostabilhete" data-bs-toggle="collapse" data-bs-target="#collapseAovivo{{$chest_aberto->id}}">
                          <span>USD {{ number_format($chest_aberto->chest / 100, 2, ',', '.') }}</span>
                          
                          <a href="{{ route('yantra.chest', ['id' => $chest_aberto->id ]) }}"><span class="subtitle-valoretipo"><span style="background-color: #ffaa00;color: black;">ACESSAR BAÚ</span></span></a>
                          </div>
          
                          <div class="collapse" id="collapseAovivo{{$chest_aberto->id}}">
          
                              
                              <div class="titulo-aposta">
                                  <div>
                                      <span>Baú está aberto!!</span>
                                  </div>
                                  <span>Numero 01 - {{ $chest_aberto->num_01 }}</span><br>
                                  <span>Numero 02 - {{ $chest_aberto->num_02 }}</span><br>
                                  <span>Numero 03 - {{ $chest_aberto->num_03 }}</span><br>
                                  <span>Numero 04 - {{ $chest_aberto->num_04 }}</span><br><br>
                                  <span>Cods: 00YAN0{{$chest_aberto->id}}</span><hr>
                              </div>
          
                          </div>
                      </div>
                          
                      @endforeach
          
                  </div>
              </div>
            </section>
        </div>
    </main>

    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="{{ asset('CassinoYantra/game/token/js/script.js') }}"></script>
</body>
</html>