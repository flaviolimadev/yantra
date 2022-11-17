@extends('_layouts.dashboard')

@section('titulo', 'Área de suporte ao usuário')

@section('conteudo')

<div class="conteudo-perfil">
    <section class="box-bonus">
        <div class="card-bonus mb-4" style="align-items: center;">
            <div class="left">
            <img src="img/icones/faq.png" alt="" width="70px">
            </div>
            <div class="right">
                <h3>FAQ</h3>
                <h6>Veja as dúvidas mais frequentes.</h6>
                <a href="https://help.latintech.site/es/category/preguntas-frecuentes-yqaa6o/" class="btn-padrao suporte"> IR PARA O FAQ </a>
            </div>
        </div>
        <div class="card-bonus mb-4" style="align-items: center;">
            <div class="left">
            <img src="img/icones/suporte.png" alt="" width="70px">
            </div>
            <div class="right">
                <h3>Ticket</h3>
                <h6>Dúvidas ? Abra um ticket para falar com um de nossos atendentes.</h6>
                <a href="https://help.latinbets.com/es/" class="btn-padrao suporte"> ABRIR TICKET </a>
            </div>
        </div>
        <div class="card-bonus mb-4" style="align-items: center;">
        <div class="left">
            <img src="img/icones/atendimento.png" alt="" width="70px">
        </div>
        <div class="right">
            <h3>Contato</h3>
            <h6>Entre em contato conosco.</h6>
            <a href="https://help.latinbets.com/es/article/contacto-1kmrh41/?bust=1658964357119/" class="btn-padrao suporte"> ENTRAR EM CONTATO </a>
        </div>
    </div>
    </section>
</div> 

@endsection