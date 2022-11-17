@extends('_layouts.dashboard')

@section('titulo', 'Área de Desposito')

@section('conteudo')
<div class="conteudo-perfil">
            <div>
              <span class="subtitle-perfil mobile">Dólar do dia <span>BRL 5,33</span> </span>
            </div>
      
            <div class="title" data-bs-toggle="collapse" href="#collapsePagamento">
              <img src="{{ asset('CassinoYantra/Dashboard/img/icones/passo1.png') }}" alt="Etapa 1" width="30px">
              <span>Métodos de Pagamento</span>
            </div>

            <div class="conteudo collapse show" id="collapsePagamento">
              <div class="card card-body">
                <div class="metodos-deposito">
                   
                  
                <a href="#collapseValor" data-bs-toggle="collapse" onclick="metodo_pix()">
                  <div class="metodo">
                    <div class="superior">
                      <span class="tag">Grátis</span>
                      <img src="{{ asset('CassinoYantra/Dashboard/img/pagamento/pix.png') }}" alt="Pix" width="90px">
                    </div>
                    <div class="inferior">
                      <span class="title-metodo">Pix</span>
                      <br>
                      <span class="subtitle-metodo">Imediato</span>
                    </div>             
                  </div>
                </a>
                

                <a href="#collapseValor" data-bs-toggle="collapse" onclick="metodo_btc()">
                  <div class="metodo bitcoin">
                    <div class="superior">
                      <img src="{{ asset('CassinoYantra/Dashboard/img/pagamento/bitcoin.png') }}" alt="Bitcoin" width="60px">
                    </div>
                    <div class="inferior">
                      <span class="title-metodo">Bitcoin</span>
                      <br>
                      <span class="subtitle-metodo">Imediato</span>
                    </div> 
                  </div>
                </a>
                <a href="#collapseValor" data-bs-toggle="collapse" onclick="metodo_eth()">
                  <div class="metodo">
                    <div class="superior">
                      <img src="{{ asset('CassinoYantra/Dashboard/img/pagamento/ethereum.png') }}" alt="Ethereum (ETH)" width="40px">
                    </div>
                    <div class="inferior">
                      <span class="title-metodo">Etherium</span>
                      <br>
                      <span class="subtitle-metodo">Imediato</span>
                    </div> 
                  </div>
                </a>
                
                <a href="#collapseValor" data-bs-toggle="collapse" onclick="metodo_usdt()">
                  <div class="metodo usdt">
                    <div class="superior">
                      <img src="{{ asset('CassinoYantra/Dashboard/img/pagamento/usdt.png') }}" alt="USDT" width="60px">
                    </div>
                    <div class="inferior">
                      <span class="title-metodo">USDT</span>
                      <br>
                      <span class="subtitle-metodo">Imediato</span>
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
                      <div id="winpay_metodo" style="display:none;">
                              <span id="formaDeposito">- Forma de depósito: Winpay Transfer
                       
                      </span>
                       <br><br><br>
      
                       <span id="prazoDeposito">- Prazo: <small>Imediato</small></span>
                      <br><br>
      
                      <input id="cods" type="text" placeholder="Digite: Código Winpay Transfer" name="cod">
                      <h6>*Todas as transações devem ser feitas para @latinbets</h6>
                      <br>
      
                      <span id="acesse">- Acesse:
                        <a href="https://winpay.digital" target="_blank">Winpay</a>
                      </span>
                      <br><br>
      
                      <span>Formas de depósito na Winpay:<small>  Pix | Boleto | Tranferência bancária | Criptomoedas | Winpay Transfer</span>
                      <br><br>
                       <div class="btn-deposito">
                        <button class="btn-padrao" type="submit">Depositar</a>
                              </div>
                          </div>
                          
                          
                          <div id="wire_metodo" style="display:none;">
                              
                           <span id="formaDeposito">- Forma de depósito: Wire Transfer</span>
                              <br><br><br>
                          <span id="prazoDeposito">- Prazo: 15 Dias úteis</span>
                              <br><br>
                              
                          <span>- Depósito mínimo: 50 USD</span>
                              <hr>
                          <div id="informacoesDeposito">
                              <span>- Código Swift: <small>MIDLPAPA</small></span><br>
                              <span>- Nome da agência: <small>TORRE BANISTIMO, SOHO MALL, CALLE 50 Y 54, PANAMA REP OF PANAMA</small></span><br>
                              <span>- Código da agência: <small>XXX</small></span><br>
                              <span>- Nome do banco: <small>BANISTIMO S.A</small></span><br>
                              <span>- Cidade: <small>Cidade do Panama</small></span><br>
                              <span>- Pais:<small>Panama</small> </span><br>
                              <span>- Favorecido: <small>LatinTech Corp.</small></span><br>
                              <span>- Conta Corrente:<small> 0118323261.</small></span>
                          </div>
                          <form action="payment/index.php?chave=11591670446&beneficiario=WINPAY&cidade=S%C3%83O%20PAULO&identificador=***&">
                          
                               <br><br>
                  
                              <input id="cods" type="number" placeholder="VALOR" name="valor">
                              
                              <br><br>
                  
                           </form>
                          <div class="inserir-valor">
                                  <button class="btnconfirmar-deposito" data-bs-toggle="collapse" data-bs-target="#collapseVisao">Continuar</button>
                              </div>
                          
                          </div>
                          
                          
                          <div id="pix_metodo" style="display:none;">
                              
                              <span id="formaDeposito">- Forma de depósito: Pix</span>
                              <br><br><br>
                              <span id="prazoDeposito">- Prazo: <small>Imediato</small></span>
                        
                              <form action="payment/index.php?chave=11591670446&beneficiario=WINPAY&cidade=S%C3%83O%20PAULO&identificador=***&">
                              
                                   <br><br>
          
                                  <input id="pix_valor" type="number" placeholder="VALOR" name="valor">
                                  
                                  <br><br>
                                  
                                   <div class="btn-deposito">
                                <button class="btn-padrao" type="submit">Depositar</a>
                              </div>
      
                               </form>
                               
                              
                              
                          
                          </div>
      
                          <div id="usdt_metodo" style="display: none;">
                              
                              <span id="formaDeposito">- Forma de depósito: USDT TheterUS</span>
                              <br><br><br>
                              <span id="prazoDeposito">- Prazo: <small>Imediato</small></span>
                              
                              <hr>
                              <img src="{{ asset('CassinoYantra/Dashboard/img/pagamento/usdt.png') }}" width="25px" style="position: relative;left: 2%;margin-bottom: 13px;border-radius: 5px;"><br>
                              <span>- Rede: <small>ETH Ethereum (ERC20)</small></span><br>
                              <span>- Endereço:<strong>  0x02f14cad853fc1192ff11b6c742bf2d0a72a8707</strong></span><br><br>
                              
                              <span>Enviar apenas USDT para este endereço de depósito.
                              Certifique-se de que a rede é Ethereum (ERC20).</span><br>
                                  
                              
                              <form action="payment/index.php?chave=11591670446&beneficiario=WINPAY&cidade=S%C3%83O%20PAULO&identificador=***&">
                              
                                   <br><br>
                      
                                  <input id="pix_valor" type="number" placeholder="VALOR" name="valor">
                                  
                                  <br><br>
                      
                               </form>
                              <div class="inserir-valor">
                                  <button class="btnconfirmar-deposito" data-bs-toggle="collapse" data-bs-target="#collapseVisao">Confirmar depósito</button>
                              </div>
                          
                          </div>
                          
                          
                          <div id="btc_metodo" style="display:none;">
                                  
                              <span id="formaDeposito">- Forma de depósito: BTC Bitcoin</span>
                              <br><br><br>
                              <span id="prazoDeposito">- Prazo: Imediato</span>
                              <hr>
                              <div id="informacoesDeposito">
                                  <img src="{{ asset('CassinoYantra/Dashboard/img/pagamento/bitcoin.png') }}" width="40px" style="position: relative;left: 0%;margin-bottom: 13px;border-radius: 5px;"><br>
                                  <span>- Rede: <small>BTC Bitcoin</small></span><br>
                                  <span>- Endereço: <strong>1ACDPZPfKD1mS1XsoqRPatpc1m5uDSCETA</strong></span><br><br>
                                  
                                  <span>Enviar apenas BTC para este endereço de depósito.
                                      Certifique-se de que a rede é Bitcoin.</span><br>
                              </div>
                              
                              <form action="payment/index.php?chave=11591670446&beneficiario=WINPAY&cidade=S%C3%83O%20PAULO&identificador=***&">
                              
                                   <br><br>
                      
                                  <input id="pix_valor" type="number" placeholder="VALOR" name="valor">
                                  
                                  <br><br>
                      
                               </form>
                              <div class="inserir-valor">
                                  <button class="btnconfirmar-deposito" data-bs-toggle="collapse" data-bs-target="#collapseVisao">Confirmar depósito</button>
                              </div>
                          
                          </div>
                          
                          
                          <div id="eth_metodo" style="display:none;">
                              
                          <span id="formaDeposito">- Forma de depósito: ETH Ethereum</span>
                              <br><br><br>
                              <span id="prazoDeposito">- Prazo: Imediato</span>
                              
                              <hr>
                              <div id="informacoesDeposito">
                                  <img src="{{ asset('CassinoYantra/Dashboard/img/pagamento/ethereum.png') }}" width="40px" style="position: relative;left: 0%;margin-bottom: 13px;border-radius: 5px;"><br>
                                  <span>- Rede: <small>ETH Ethereum (ERC20)</small></span><br>
                                  <span>- Endereço: <strong>0x02f14cad853fc1192ff11b6c742bf2d0a72a8707</strong></span><br><br>
                                  
                                  <span>Enviar apenas ETH para este endereço de depósito.
                                      Certifique-se de que a rede é Ethereum (ERC20).</span><br>
                              </div>
                              
                              <form action="payment/index.php?chave=11591670446&beneficiario=WINPAY&cidade=S%C3%83O%20PAULO&identificador=***&">
                              
                                   <br><br>
                      
                                  <input id="pix_valor" type="number" placeholder="VALOR" name="valor">
                                  
                                  <br><br>
                      
                               </form>
                               <div class="inserir-valor">
                                  <button class="btnconfirmar-deposito" data-bs-toggle="collapse" data-bs-target="#collapseVisao">Confirmar depósito</button>
                              </div>
                          </div>
                          </div>
      
                  <br><br>
      
                  
                </div>
                
              </div>
            </div>
        </div

        
    
@endsection