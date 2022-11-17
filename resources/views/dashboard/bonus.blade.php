@extends('_layouts.dashboard')

@section('titulo', 'Ativo bônus e alavanque seus resultados')

@section('conteudo')

<div class="conteudo-perfil">
    <section class="box-bonus">
        <div class="card-bonus mb-4">
            <div class="left">
            <img src="/img/icones/primeiro-deposito.png" alt="" width="100%">  
            </div>

            <div class="right">
                <h2>Bônus de Primeiro depósito!</h2>
            
                <h4>Ganhe o 100% de bônus no seu primeiro depósito na Yantra Club.</h4>
                
                <form class="mb-2">
                    <label style="position: relative;left: 0px;">
                        <input id="term" type="checkbox" name="termos">
                        Eu confirmo que li e aceito os <strong style="color: #bf8513;"><a href="https://help.latinbets.com/pt/article/termos-bonus-de-primeiro-deposito-14emoy1/" target="popup" style="color: #bf8513;">Termos e Condições </a></strong> e <a href="https://help.latinbets.com/pt/article/regras-gerais-de-apostas-y6pw2o/" target="_blank"><strong style="color: #bf8513;">Regras Gerais</strong></a>.
                    </label>
                </form>
                
                
            
                <a href="modules/atv_bonus_01.php" id="atvv" class="atv-bons" style="display:none; padding: 6px 43px;"> Ativar </a> 
                
            </div>
        </div>
        
        <div class="card-bonus mb-4">
            <div class="left">
            <img src="/img/icones/boas-vindas.png" alt="" width="130%">
            </div>

            <div class="right">
                <h2>Bônus de boas-vindas! <u>(Inativo)</u></h2>
            
                <h4>Ganhe USD 5,00 ao se registrar na Yantra Club.</h4>
                
                <!--
                
                <form class="mb-2">
                    <label style="position: relative;left: 0px;">
                        <input id="term" type="checkbox" name="termos">
                        Eu confirmo que li e aceito os <strong style="color: #bf8513;"><a href="https://help.latinbets.com/pt/article/termos-e-condicoes-bonus-de-boas-vindas-10smoqh/" target="popup" style="color: #bf8513;">Termos e Condições 
                        </a></strong> e <a href="https://help.latinbets.com/pt/article/regras-gerais-de-apostas-y6pw2o/" target="_blank"><strong style="color: #bf8513;">Regras Gerais</strong></a>.
                    </label>
                </form>
                
                -->
            
                <!-- <a href="#" class="atv-bons"> Ativar </a>  -->
            </div>
        </div>
        

        <div class="card-bonus mb-4">
            <div class="left">
            <img src="/img/icones/copa-do-mundo.png" alt="" width="100%">  
            </div>

            <div class="right">
                <h2>Bônus copa do mundo! <u>(Inativo)</u></h2>
            
                <h4>Ganhe bônus para fazer apostas nos jogos da copa do mundo.</h4>
                
                <!--
                
                <form class="mb-2">
                    <label style="position: relative;left: 0px;">
                        <input id="term" type="checkbox" name="termos">
                        Eu confirmo que li e aceito os <strong style="color: #bf8513;"><a co="" href="http://seulinkaqui.com" target="popup" onclick="window.open('TERMOS E CONDIÇÕES.pdf','popup','width=600,height=600'); return false;" style="color: #bf8513;">Termos e Condições </a></strong> e <a href="https://help.latinbets.com/pt/article/regras-gerais-de-apostas-y6pw2o/" target="_blank"><strong style="color: #bf8513;">Regras Gerais</strong></a>.
                    </label>
                </form>
                
                -->
            
                <!-- <a href="#" class="atv-bons"> Ativar </a>  -->
            </div>
        </div>


        <div class="card-bonus mb-4">
            <div class="left">
            <img src="/img/icones/liga-dos-campeoes.png" alt="" width="130%">  
            </div>

            <div class="right">
                <h2>Bônus Liga dos Campeões da UEFA! <u>(Inativo)</u></h2>
            
                <h4>Ganhe bônus para fazer apostas nos jogos da Liga dos Campeões da UEFA.</h4>
                
                <!--
                
                <form class="mb-2">
                    <label style="position: relative;left: 0px;">
                        <input id="term" type="checkbox" name="termos">
                        Eu confirmo que li e aceito os <strong style="color: #bf8513;"><a co="" href="http://seulinkaqui.com" target="popup" onclick="window.open('TERMOS E CONDIÇÕES.pdf','popup','width=600,height=600'); return false;" style="color: #bf8513;">Termos e Condições </a></strong> e <a href="https://help.latinbets.com/pt/article/regras-gerais-de-apostas-y6pw2o/" target="_blank"><strong style="color: #bf8513;">Regras Gerais</strong></a>.
                    </label>
                </form>
                
                -->
            
                <!-- <a href="#" class="atv-bons"> Ativar </a>  -->
            </div>
        </div>
    </section>
</div>  

<script>
    setInterval(function () {
        if(document.getElementById('term').checked){
            document.getElementById('atvv').style.display = 'block';
        }
        else{
            document.getElementById('atvv').style.display = 'none';  
        }
    }, 300);
</script>

@endsection