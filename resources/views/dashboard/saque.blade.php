@extends('_layouts.dashboard')

@section('titulo', 'Área para solicitar saque')

@section('conteudo')
<style>
        div#collapseValor {
            margin-bottom: 100px;
        }
        .card.card-body {
            padding: 0px !important;    
        }
        .infos-deposito .btn-padrao {
            background-image: none;
            background-color: #dc3545 !important;
            color: #FFF;
            padding: 10px 20px;
        }
        
        #formaDeposito {
            display: block;
            padding: 10px;
            border-radius: 10px 10px 0 0px;
            border-bottom: 4px solid rgba(0, 0, 0, 0.2);
            font-size: 18px;
            font-weight: bold;
            background-color: rgba(0, 0, 0, 0.2);
        }
    </style>

    <div class="conteudo-perfil">
            <div class="title" data-bs-toggle="collapse" href="#collapsePagamento">
                <img src="{{ asset('CassinoYantra/Dashboard/img/icones/passo1.png') }}" alt="Etapa 1" width="30px">
                <span>Métodos de Saque</span>
            </div>
            <div class="conteudo collapse" id="collapsePagamento">
                <div class="card card-body" style="padding: 0px;">
                    <div class="metodos-deposito">
                        
                        
                        <a href="#collapseValor" data-bs-toggle="collapse">
                            <div class="metodo">
                              <div class="superior">
                                
                                <img src="{{ asset('CassinoYantra/Dashboard/img/pagamento/pix.png') }}" alt="Pix" width="135px">
                              </div>
                              <div class="inferior">
                                <span class="title-metodo">Pix</span>
                                <br>
                                <span class="subtitle-metodo">Até 7 dias</span>
                              </div>             
                            </div>
                        </a>
                        
                    <!--    
                        <a href="#collapseValor" data-bs-toggle="collapse">
                            <div class="metodo">
                              <div class="superior">
                                
                                <img src="{{ asset('https://f.donkhunter.com/_example/Payment_Wallet/2-ebb47-fill-1200-0.png') }}" alt="Neteller" width="120px">
                              </div>
                              <div class="inferior">
                                <span class="title-metodo">Neteller</span>
                                <br>
                                <span class="subtitle-metodo">Até 7 dias</span>
                              </div>             
                            </div>
                        </a>
                        
                         <a href="#collapseValor" data-bs-toggle="collapse">
                            <div class="metodo">
                              <div class="superior">
                                
                                <img src="{{ asset('https://www.skrill.com/typo3conf/ext/theme2020/Resources/Public/images/Skrill-Logo.svg') }}" alt="Neteller" width="120px">
                              </div>
                              <div class="inferior">
                                <span class="title-metodo">Skrill</span>
                                <br>
                                <span class="subtitle-metodo">Até 7 dias</span>
                              </div>             
                            </div>
                        </a>
                        
                        <a href="#collapseValor" data-bs-toggle="collapse">
                            <div class="metodo winpay">
                              <div class="superior">
                                
                                <img src="{{ asset('CassinoYantra/Dashboard/img/pagamento/winpay.png') }}" alt="Winpay" width="100px">
                              </div>
                              <div class="inferior">
                                <span class="title-metodo">Win Pay</span>
                                <br>
                                <span class="subtitle-metodo">Até 7 dias</span>
                              </div> 
                            </div>
                        </a>
                        
                        -->
                        
        
                        <a href="#collapseValor" data-bs-toggle="collapse">
                            <div class="metodo usdt">
                              <div class="superior">
                                <img src="{{ asset('CassinoYantra/Dashboard/img/pagamento/usdt.png') }}" alt="USDT" width="60px">
                              </div>
                              <div class="inferior">
                                <span class="title-metodo">USDT</span>
                                <br>
                                <span class="subtitle-metodo">Até 7 dias</span>
                              </div> 
                            </div>
                         </a>
                    </div>
                </div>
            </div>
            
            
            <div class="title" data-bs-toggle="collapse" href="#collapseValor">
                <img src="{{ asset('CassinoYantra/Dashboard/img/icones/passo2.png') }}" alt="Etapa 2" width="30px">
                <span>Valor</span>
            </div>
            
            <div class="conteudo collapse" id="collapseValor">
                <div class="card card-body">
                    <div class="valor-deposito">
                        <div class="infos-deposito">
                                <div class="box-saque">
                                    <span id="formaDeposito">Solicitar saque</span>
                                    <br>
                                    
      
                                    <input id="cods" type="text" placeholder="Digite: Valor de Saque" name="cod">
                                    <h6>*Certifique-se de inserir o usuário correto de sua conta.</h6>
                                    <br>
                                    <div>
                                        <button class="btn-padrao" type="submit" onclick="saque()">Sacar</button>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>    
        </div> 
        
    
@endsection