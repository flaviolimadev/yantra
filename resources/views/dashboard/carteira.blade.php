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
</style>

<div class="conteudo-perfil">
    
    <div class="title extrato" data-bs-toggle="collapse" href="#collapseCarteira">
        <img src="{{ asset('CassinoYantra/Dashboard/img/icones/extrato.png') }}" alt="Carteira do Usuário" width="30px">
        <span>Carteira</span>
    </div>

    <div class="conteudo collapse show" id="collapseCarteira">
        <div class="card card-body menu-superior-right">
            <div class="perfil-superior">
                <div class="left" style="text-align: left">
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
                    <span style="font-size: 1.5rem; font-weight: 700;">USD 0,00</span></span>
                </div>
                
                <img class="img-cadeado" src="{{ asset('CassinoYantra/Dashboard/img/icones/cadeado.png') }}" width="16px">
            </div>
            <div style="padding-top: 0; text-align: left;">
                <span>Rollover Atual 1x</span>
            </div>
        </div>
    </div>

    <div class="title extrato" data-bs-toggle="collapse" href="#collapseExtrato">
        <img src="{{ asset('CassinoYantra/Dashboard/img/icones/extrato.png') }}" alt="Extrato Financeiro" width="30px">
        <span>EXTRATO FINANCEIRO</span>
    </div>

    <div class="conteudo collapse show" id="collapseExtrato">
    <div class="card card-body">
        <div class="boxmainpgcaixa">
            <div class="gestao-caixa">
            <br>
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
            <div class="table-responsive">
            <br>
            <h2>Extrato da conta</h2><br>
            <table class="table-dark" style="text-align:left;">
                <thead>
                    <tr>
                        <th scope="col">Data</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($extracts as $extrato)

                    <tr>
                        <th scope="row" width="20%">{{ $extrato->updated_at->isoFormat('D/M/Y H:mm:ss'); }}</th>
                        <td width="10%">USD {{ number_format($extrato->value / 100, 2, ',', '.'); }}</td>
                        <td width="60%"> - {{ $extrato->about }}</td>

                        @if($extrato->status == 0)

                        <td width="10%" style="text-align:center;">❌</td>

                        @elseif($extrato->status == 1)

                        <td width="10%" style="text-align:center;">✔️</td>

                        @else()
                        <td width="10%" style="text-align:center;">⚠️</td>
                        @endif
                        
                    </tr>
                        
                    @endforeach
                
                
                </tbody>
        </table>
        </div>
        <br><br>
    </div>
    </div>
    </div>
    </div>
</div>

    
@endsection