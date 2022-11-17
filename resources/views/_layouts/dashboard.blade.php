<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latinbets - A melhor casa de apostas da america latina</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="{{ asset('CassinoYantra/Dashboard/css/style.css') }}">

</head>
<body>
    <header>
        <div class="area-logo">
        <a href="#">
            <img src="{{ asset('CassinoYantra/Dashboard/img/logo.png') }}" alt="Latinbets" width="250px">
        </a>
        </div>

        <div class="title-perfil">
        <div class="left">
            <span>@yield('titulo')</span>
        </div>

        <div class="right">
            <a href="../" class="btn-fechar">
            <div>
                <img src="{{ asset('CassinoYantra/Dashboard/img/icones/x.png') }}" alt="Fechar" width="20px">
            </div>
            <span class="esc">ESC</span>
            </a>
        </div>
        </div>

        <nav id="nav">
          <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">Menu
              <span id="hamburger"></span>
          </button>
          <ul id="menu" role="menu">
              <li data-bs-toggle="collapse" data-bs-target="#collapseCart" aria-expanded="false" aria-controls="collapseCart">
                  <a href="#" class="">
                      <img src="{{ asset('CassinoYantra/Dashboard/img/icones/carteira.png') }}" alt="Sua Carteira" width="20px">
                      Carteira
                  </a>
              </li>

              <ul class="collapse" id="collapseCart" style="border-radius: 25px; background-color: rgba(0, 0, 0, 0.3); padding: 10px;">
                  <li>
                      <a href="{{ route('wallet') }}">
                          <img src="{{ asset('CassinoYantra/Dashboard/img/icones/saldo.png') }}" alt="Sua Carteira" width="20px">
                          Saldo
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('deposit') }}" class="">
                          <img src="{{ asset('CassinoYantra/Dashboard/img/icones/deposito.png') }}" alt="Depósito" width="20px">
                          Depósito
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('withdraw') }}" class="">
                          <img src="{{ asset('CassinoYantra/Dashboard/img/icones/saque.png') }}" alt="Saque" width="20px">
                          Saque
                      </a>
                  </li>
              </ul>

              <li>
                  <a href="{{ route('bonus') }}" class="">
                      <img src="{{ asset('CassinoYantra/Dashboard/img/icones/bonus.png') }}" alt="Seus Bônus" width="20px">
                      Bônus
                  </a>
              </li>

              <li>
                  <a href="{{ route('bets') }}" class="">
                      <img src="{{ asset('CassinoYantra/Dashboard/img/icones/apostas.png') }}" alt="Suas Apostas" width="20px">
                      Apostas
                  </a>
              </li>

              <li>
                  <a href="{{ route('home') }}" class="">
                      <img src="{{ asset('CassinoYantra/Dashboard/img/icones/perfil.png') }}" alt="Dados da sua Conta" width="20px">
                      Conta
                  </a>
              </li>

              <li>
                  <a href="{{ route('notifications') }}" class="">
                      <img src="{{ asset('CassinoYantra/Dashboard/img/icones/notificacao.png') }}" alt="Suas Notificações" width="20px">
                      Notificações
                  </a>
              </li>

              <li>
                  <a href="{{ route('faq') }}" class="">
                      <img src="{{ asset('CassinoYantra/Dashboard/img/icones/suporte.png') }}" alt="Suporte" width="20px">
                      Suporte
                  </a>
              </li>

              <li>
                  <a href="{{ route('logout') }}" class="btn-sair">
                      Sair
                  </a>
              </li>
          </ul>
        </nav>
    </header>

    <main>
        <div class="menu-perfil">
            <ul class="mb-5">
                <li data-bs-toggle="collapse" data-bs-target="#collapseCart" aria-expanded="false" aria-controls="collapseCart">
                    <a href="#">
                        <img src="{{ asset('CassinoYantra/Dashboard/img/icones/carteira.png') }}" alt="Sua Carteira" width="20px">
                        Carteira
                    </a>
                </li>

                <ul class="collapse" id="collapseCart" style="border-radius: 25px; background-color: rgba(0, 0, 0, 0.3); padding: 10px;">
                    <li>
                        <a href="{{ route('wallet') }}">
                            <img src="{{ asset('CassinoYantra/Dashboard/img/icones/saldo.png') }}" alt="Sua Carteira" width="20px">
                            Saldo
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('deposit') }}" class="">
                            <img src="{{ asset('CassinoYantra/Dashboard/img/icones/deposito.png') }}" alt="Depósito" width="20px">
                            Depósito
                         </a>
                    </li>
                    <li>
                        <a href="{{ route('withdraw') }}" class="">
                            <img src="{{ asset('CassinoYantra/Dashboard/img/icones/saque.png') }}" alt="Saque" width="20px">
                            Saque
                        </a>
                    </li>
                </ul>

                <li>
                    <a href="{{ route('bonus') }}" class="">
                        <img src="{{ asset('CassinoYantra/Dashboard/img/icones/bonus.png') }}" alt="Seus Bônus" width="20px">
                        Bônus
                    </a>
                </li>

                <li>
                    <a href="{{ route('bets') }}" class="">
                        <img src="{{ asset('CassinoYantra/Dashboard/img/icones/apostas.png') }}" alt="Suas Apostas" width="20px">
                        Apostas
                    </a>
                </li>

                <li>
                    <a href="{{ route('home') }}" class="">
                        <img src="{{ asset('CassinoYantra/Dashboard/img/icones/perfil.png') }}" alt="Dados da sua Conta" width="20px">
                        Conta
                    </a>
                </li>

                <li>
                    <a href="{{ route('notifications') }}" class="">
                        <img src="{{ asset('CassinoYantra/Dashboard/img/icones/notificacao.png') }}" alt="Suas Notificações" width="20px">
                        Notificações
                    </a>
                </li>

                <li>
                    <a href="{{ route('faq') }}" class="">
                        <img src="{{ asset('CassinoYantra/Dashboard/img/icones/suporte.png') }}" alt="Suporte" width="20px">
                        Suporte
                    </a>
                </li>
            </ul>

            <div>
                <a href="{{ route('logout') }}" class="btn-sair">
                Sair
                </a>
            </div>
        </div>

        @yield('conteudo')

    </main>

    <script src="{{ asset('CassinoYantra/Dashboard/js/script.js') }}"></script>

    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript">
            function metodo_winpay(){
            
            
            metodo = "winpay";
            
    
            document.getElementById("wire_metodo").style.display = "none";
            document.getElementById("pix_metodo").style.display = "none";
            document.getElementById("usdt_metodo").style.display = "none";
            document.getElementById("btc_metodo").style.display = "none";
            document.getElementById("eth_metodo").style.display = "none";
            
        }
        
        function metodo_wire(){
            
            metodo = "wire";
            

            document.getElementById("wire_metodo").style.display = "block";
            document.getElementById("pix_metodo").style.display = "none";
            document.getElementById("usdt_metodo").style.display = "none";
            document.getElementById("btc_metodo").style.display = "none";
            document.getElementById("eth_metodo").style.display = "none";
            
        }
        
        function metodo_pix(){
            
            metodo = "pix";
            
        
            document.getElementById("wire_metodo").style.display = "none";
            document.getElementById("pix_metodo").style.display = "block";
            document.getElementById("usdt_metodo").style.display = "none";
            document.getElementById("btc_metodo").style.display = "none";
            document.getElementById("eth_metodo").style.display = "none";
            
        }
        
        
        function metodo_usdt(){
            
            metodo = "usdt";
            
        
            document.getElementById("wire_metodo").style.display = "none";
            document.getElementById("pix_metodo").style.display = "none";
            document.getElementById("usdt_metodo").style.display = "block";
            document.getElementById("btc_metodo").style.display = "none";
            document.getElementById("eth_metodo").style.display = "none";
            
        }
        
        
        function metodo_btc(){
            
            metodo = "btc";
            
        
            document.getElementById("wire_metodo").style.display = "none";
            document.getElementById("pix_metodo").style.display = "none";
            document.getElementById("usdt_metodo").style.display = "none";
            document.getElementById("btc_metodo").style.display = "block";
            document.getElementById("eth_metodo").style.display = "none";
            
        }
        
        function metodo_eth(){
            
            metodo = "eth";
            
            
            document.getElementById("wire_metodo").style.display = "none";
            document.getElementById("pix_metodo").style.display = "none";
            document.getElementById("usdt_metodo").style.display = "none";
            document.getElementById("btc_metodo").style.display = "none";
            document.getElementById("eth_metodo").style.display = "block";
            
        }

    </script>

</body>
</html>