@extends('_layouts.dashboard')

@section('titulo', 'Verifique o status de suas apostas')

@section('conteudo')

<style type="text/css">
    .encerraraposta-bilhete {
        color: #FFF;
        background-color: #ce9513;
        font-weight: 600;
        font-size: 12px;
        padding: 10px 50px !important;
        border: 2px solid #FFF;
        border-radius: 5px;
    }
    .main-meusbilhetes {
    width: 80vw;
    min-height: 400px;
    }

    .main-meusbilhetes .header-meusbilhetes {
    margin-top: 1%;
    background-color: rgba(0, 0, 0, 0.3);
    border-radius: 10px;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 5px;
    position: relative;
    padding: 0px;
    }

    .main-meusbilhetes .header-meusbilhetes .left {
    background-color: rgba(0, 0, 0, 0.3);
    width: 100%;
    display: flex;
    align-items: center;
    padding: 0.75rem;
    border-radius: 10px;
    }

    .main-meusbilhetes .header-meusbilhetes ul {
    display: flex;
    }

    .main-meusbilhetes .header-meusbilhetes ul li {
    margin-right: 10px !important;
    font-size: 12px;
    font-weight: 500;
    padding-bottom: 10px !important;
    }

    .main-meusbilhetes .header-meusbilhetes ul li a {
    white-space: nowrap;

    top: 6px;
    color: #FFF;
    display: block;
    padding: 9px 5px !important;
    }

    .header-meusbilhetes ul .item.selected {
    border-bottom: 3px solid #f7b207;
    }

    .title-meusbilhetes {
    display: flex;
    flex-direction: column;
    font-size: 14px;
    color: #FFF;
    border-radius: 5px;
    padding: 7px 5px !important;
    top: 10px;
    }

    .title-tiposbilhetes {

    font-size: 15px;
    font-weight: 600;
    color: #FFF;
    padding: 10px 0px !important;
    margin-left: 13px !important;

    }
    .bilhetes-aovoivo .collapse .title-tiposbilhetes{
    display: flex;
    flex-direction: column;
    }

    .conteudo-bilhetes {
        margin: 10px;
        border-radius: 5px;
        color: #FFF;
        font-size: 12px;
        background-color: rgba(0, 0, 0, 0.2);
        position: relative;
    }

    .valoretipo-apostabilhete {
    font-weight: 600;
    font-size: 15px;
    padding: 10px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.3);
    cursor: pointer;
    display: flex;
    align-items: center;
    position: relative;
    }

    .subtitle-valoretipo {
        font-size: 11px;
        font-weight: normal;
        margin-left: 1%;
        display: flex;
        align-items: center;
    }

    .subtitle-valoretipo span {
        margin: 0 !important;
        position: absolute;
        right: 10px;
        border-radius: 5px;
        font-weight: 600;
        color: #FFF !important;
        padding: 2px 5px;
        min-width: 80px;
        text-align: center;
        border-width: medium;
        border-style: solid;
        border-color: transparent;
        font-size: 13px;
    }

    .titulo-aposta {
    padding: 10px;
    }

    .titulo-aposta div {
    font-size: 14px;
    font-weight: 600;
    }

    .titulo-aposta.odd {
    margin-left: 15%;
    }

    .condicoes-aposta {
    padding: 10px;
    border-bottom: 1px solid #323b45;
    }

    .item-condicoes {
    margin-bottom: 2%;
    }

    .subtitle-condicoes {
    font-size: 11px;
    }

    .resultado-bilhete {
    display: flex;
    align-items: center;
    padding: 10px;
    }

    .resultado-bilhete div {
    width: 50%;
    }

    .valor-footerbilhete {
    font-size: 15px;
    font-weight: 600;
    }

    .encerraraposta-bilhete-cima {
    color: #FFF;
    background-color: #ce9513;
    font-weight: 600;
    font-size: 12px;
    padding: 6px 10px !important;
    border: 2px solid #FFF;
    border-radius: 5px;
    display: block;
    }

    .encerraraposta-bilhete {
    color: #FFF;
    background-color: #f12c4c;
    font-weight: 600;
    font-size: 12px;
    padding: 10px 50px !important;
    border: 2px solid #FFF;
    border-radius: 5px;
    }

    .valor-encerraraposta {
    font-size: 14px;
    }
</style>

<section class="main-meusbilhetes">
    <div class="header-meusbilhetes">
        <div class="left">
            <ul>            
                <li class="item">
                    <a href="#multiCollapsePendentes" data-bs-toggle="collapse" aria-expanded="false" class="true">Pendentes</a>
                </li>
                <li class="item">
                    <a href="#multiCollapseResolvidos" data-bs-toggle="collapse" class="" aria-expanded="collapsed">Resolvidos</a>
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
        <div class="collapse multi-collapse" id="multiCollapseAovivo">
        <p class="title-tiposbilhetes">Ao vivo</p>
                        </div>
    </div>
    
    <div class="bilhetes-aovoivo">
        <div class="multi-collapse collapse" id="multiCollapseResolvidos" style="">
            <p class="title-tiposbilhetes">Resolvidos</p>


            @foreach ($chests_fechados as $chest_fechado)

            <div class="conteudo-bilhetes">
                <div class="valoretipo-apostabilhete" data-bs-toggle="collapse" data-bs-target="#collapseAovivo{{$chest_fechado->id}}">
                <span>USD {{ number_format($chest_fechado->chest / 100, 2, ',', '.') }}</span>
                
                <span class="subtitle-valoretipo"><span style="background-color: #218529;color: black;">BRL {{ number_format(($chest_fechado->num_01 + $chest_fechado->num_02 + $chest_fechado->num_03 + $chest_fechado->num_04)/ 100, 2, ',', '.') }}</span></span>
                </div>

                <div class="collapse" id="collapseAovivo{{$chest_fechado->id}}">

                    
                    <div class="titulo-aposta">
                        <div>
                            <span>Baú encerrado com sucesso!!</span>
                        </div>
                        <span>Numero 01 - USD {{ number_format($chest_fechado->num_01 / 100, 2, ',', '.') }}</span><br>
                        <span>Numero 02 - USD {{ number_format($chest_fechado->num_02 / 100, 2, ',', '.') }}</span><br>
                        <span>Numero 03 - USD {{ number_format($chest_fechado->num_03 / 100, 2, ',', '.') }}</span><br>
                        <span>Numero 04 - USD {{ number_format($chest_fechado->num_04 / 100, 2, ',', '.') }}</span><br><br>
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
                        <span>Numero 01 - USD {{ number_format($chest_aberto->num_01 / 100, 2, ',', '.') }}</span><br>
                        <span>Numero 02 - USD {{ number_format($chest_aberto->num_02 / 100, 2, ',', '.') }}</span><br>
                        <span>Numero 03 - USD {{ number_format($chest_aberto->num_03 / 100, 2, ',', '.') }}</span><br>
                        <span>Numero 04 - USD {{ number_format($chest_aberto->num_04 / 100, 2, ',', '.') }}</span><br><br>
                        <span>Cods: 00YAN0{{$chest_aberto->id}}</span><hr>
                    </div>

                </div>
            </div>
                
            @endforeach

        </div>
    </div>
</section>

@endsection