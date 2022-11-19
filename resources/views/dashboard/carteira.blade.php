@extends('_layouts.dashboard')

@section('titulo', 'Área de Saldo')

@section('conteudo')
  <style>
    .menu-superior-right div {
        padding: 10px;
        font-size: 12px;
        margin-left: 5px;
        position: relative;
    }
    .perfil-superior {
        margin-left: 0px !important;
        padding: 0 !important;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .perfil-inferior {
        margin-left: 0 !important;
        padding: 0px !important;
        display: flex;
        align-items: center;
        gap: 15px;
        text-align: left;
    }
    .perfil-superior a {
        color: #FFF;
        white-space: nowrap;
        font-weight: 700;
    }
    @media screen {
        main {
            padding: 0rem 1rem;
        }
        .conteudo-perfil .card.card-body {
            padding: 1rem;
        }
    }
  </style>

<div class="conteudo-perfil">
    <div class="title extrato" data-bs-toggle="collapse" href="#collapseCarteira">
        <img src="{{ asset('CassinoYantra/Dashboard/img/icones/extrato.png') }}" alt="Carteira do Usuário" width="30px" />
        <span>Carteira</span>
    </div>

    <div class="conteudo collapse show" id="collapseCarteira">
        <div class="card card-body menu-superior-right">
            <div class="perfil-superior">
                <div class="left" style="text-align: left;">
                    <span>Olá, {{ $AuthUser->user }}</span>
                    <div style="display: flex; align-items: center; padding: 0px !important; margin-left: 0 !important; gap: 7px; font-weight: 700;">
                        <span style="font-size: 1.5rem;">USD <span>{{ number_format($AuthUser->balance / 100, 2, ',', '.'); }}</span> </span>
                        <a href="#" style="position: relative; top: 2px; font-size: 16px;"> <i class="fa-solid fa-arrow-rotate-right"></i> </a>
                    </div>
                </div>
                <!--
                <div class="right">
                    <a href="#">
                        <img src="{{ asset('CassinoYantra/Dashboard/assets/img/icones/deposit.png') }}" width="25px">
                        <span>Depositar</span>
                    </a>
                </div>
                -->
            </div>
            <div class="perfil-inferior">
                <div>
                    <span style="display: block;" translate="no">Créditos de Bônus</span>
                    <span style="font-size: 1.5rem; font-weight: 700;">USD <span>0,00</span> </span>
                </div>
                <div>
                    <span style="display: block;" translate="no">Prêmios de Bônus</span>
                    <span style="font-size: 1.5rem; font-weight: 700;">USD {{ number_format($AuthUser->balance / 100, 2, ',', '.'); }}</span>
                </div>

                <img class="img-cadeado" src="{{ asset('CassinoYantra/Dashboard/img/icones/cadeado.png') }}" width="16px" />
            </div>
            <div style="padding-top: 0; text-align: left;">
                <span>Rollover Atual 1x</span>
            </div>
        </div>
    </div>

    <div class="title extrato" data-bs-toggle="collapse" href="#collapseExtrato">
        <img src="{{ asset('CassinoYantra/Dashboard/img/icones/extrato.png') }}" alt="Extrato Financeiro" width="30px" />
        <span>EXTRATO FINANCEIRO</span>
    </div>

    <div class="conteudo collapse show" id="collapseExtrato">
        <div class="card card-body">
            <div class="boxmainpgcaixa">
                <div class="gestao-caixa">
                    <br />
                    <h2>Resumo da conta</h2>

                    <div class="cardscaixa">
                        <div>
                            <p>Apostas em Aberto</p>
                            <h3 style="font-size: 20px;">0</h3>
                        </div>
                        <div>
                            <p>Apostas</p>
                            <h3 style="font-size: 20px;">USD 0,00</h3>
                        </div>
                        <div>
                            <p>Prêmios</p>
                            <h3 style="font-size: 20px;">USD 0,00</h3>
                        </div>
                        <div>
                            <p>Cassino</p>
                            <h3 style="font-size: 20px;">USD 0,00</h3>
                        </div>
                        <div id="total">
                            <p>Total</p>
                            <h3 style="font-size: 20px;">USD 0,00</h3>
                        </div>
                    </div>
                </div>
                
                <div class="mainpgextrato">
                    <div>
                        <br>
                        <h2>Transações</h2><br>
                    </div>

                    <div class="table-transacoes">
                        <div class="filtro-transacoes">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Último mês</option>
                                <option value="1">Últimas 24 Horas</option>
                                <option value="2">Últimos 7 dias</option>
                                <option value="3">Últimos 30 dias</option>
                                <option value="4">Últimos 90 dias</option>
                            </select>

                            <select class="form-select" aria-label="Default select example">
                                <option selected>Todas</option>
                                <option value="1">Apostas</option>
                                <option value="2">Depósitos</option>
                                <option value="3">Saques</option>
                            </select>
                        </div>

                        <div class="title-transacoes">
                            <div class="tipo-transacao">
                                <span>Tipo e trans. ID</span>
                            </div>

                            <div class="data-transacao">
                                <span>Data da</span>
                                <br>
                                <span>transação</span>
                            </div>

                            <div class="montante-transacao">
                                <span>Montante</span>
                            </div>

                            <div class="saldo-transacao">
                                <span>Novo Saldo</span>
                            </div>

                            <div class="estado-transacao">
                                <span>Estado</span>
                            </div>
                        </div>

                        @foreach ($extracts as $extrato)

                        <div class="item-transacao">
                            <div class="title-item">
                                <div class="icone">
                                    <img src="{{ asset('CassinoYantra/Dashboard/img/icones/fichas-de-cassino.png') }}" width="35px">
                                </div>
    
                                <div class="area-titulo">
                                    <span class="titulo">{{ $extrato->about }}</span>
                                    
                                    <span class="sub-titulo">Trans. ID: YC9100{{ $extrato->id }}</span>
                                </div>    
                            </div>

                            <div class="data-item">
                                <span><strong>{{ $extrato->updated_at->isoFormat('D/M/Y'); }}</strong></span>
                                <br>
                                <span>{{ $extrato->updated_at->isoFormat('H:mm'); }}</span>
                            </div>

                            <div class="montante-item">
                                <div class="mont-sald-mob">
                                    <span>Montante</span>
                                </div>
                                <span>USD {{ number_format($extrato->value / 100, 2, ',', '.'); }}</span>
                            </div>

                            <div class="saldo-item">
                                <div class="mont-sald-mob">
                                    <span>Novo Saldo</span>
                                </div>
                                <span>USD {{ $extrato->referent  }}</span>
                            </div>

                            <div class="estado-item">
                                @if($extrato->status == 0)

                                <i class="fa-sharp fa-solid fa-ban"></i>

                                @elseif($extrato->status == 1)

                                <i class="fa-solid fa-check"></i>

                                @else()

                                 <i class="fa-solid fa-spinner"></i>

                                @endif
                            </div>
                        </div>

                         @endforeach


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


    
@endsection