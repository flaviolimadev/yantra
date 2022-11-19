@extends('_layouts.dashboard')

@section('titulo', 'Área do usuário')

@section('conteudo')
<style>

  .form-control:disabled {
      background-color: #4b158b !important;
  }

</style>
<div class="conteudo-perfil">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (isset($error_password))

      <div class="alert alert-danger">
          <ul>
              <li>Senha atual inválida</li>
          </ul>
      </div>

    @endif

    <div class="title senha" data-bs-toggle="collapse" href="#collapseSenha">
      <img src="{{ asset('CassinoYantra/Dashboard/img/icones/mudar_senha.png') }}" alt="Mudar Senha" width="30px">
      <span>Mudar senha</span>
    </div>
    
    <div class="conteudo senha collapse" id="collapseSenha">
      <div class="card card-body">
        <form action="{{ route('recover') }}" method="post">

          @csrf
          
          <label for="senha-atual">Digite sua senha atual</label>
          <br>
          <input type="text" class="mb-3" id="senha-atual" name="my_password">

          <br>

          <label for="senha-nova">Digite a nova senha</label>
          <br>
          <input type="text" class="mb-3" id="senha-nova" name="new_password">

          <br>

          <label for="senha-nova2">Repetir senha</label>
          <br>
          <input type="text" class="mb-3" id="senha-nova2" name="confirm_password">

          <p>Por questões de segurança, se você troca sua senha, você ficará impossibilitado de realizar saques nas próximas 48 horas.</p>

          <button class="btn-confirmar" type="submit">Mudar senha</button>
        </form>
      </div>
    </div>


    <div class="title info" data-bs-toggle="collapse" href="#collapseDados">
      <img src="{{ asset('CassinoYantra/Dashboard/img/icones/informacoes_gerais.png') }}" alt="Informações Gerais" width="30px">
      <span>Informações Gerais</span>
    </div>
    
    <div class="conteudo dados collapse" id="collapseDados">
      <div class="card card-body">
        <!-- <h4>Meus Dados</h4> -->
        <form action="#" class="form-dados">
          
          <label for="nome"> Nome Completo</label>
          <input id="nome" class="form-control" type="text" placeholder="Nome Completo: " value="{{ $AuthUser->name }}" aria-label="Disabled input example" disabled="">  
          
          <label for="user"> Usuário</label>
          <input id="user" class="form-control" type="text" placeholder="Usuáro: " value="{{ $AuthUser->user }}" aria-label="Disabled input example" disabled="">
          
          <label for="data-nas"> Data de Nascimento</label>
          <input id="data-nas" class="form-control" type="text" placeholder="Data de nascimento: " value="{{ $AuthUser->birth_date }}" aria-label="Disabled input example" disabled="">
          
          <label for="phone"> Whatsapp</label>
          <input id="phone" class="form-control" type="tel" placeholder="Telefone: " value="{{ $AuthUser->telephone }}" aria-label="Disabled input example" disabled="">
          
          <label for="email"> E-mail</label>
          <input id="email" class="form-control" type="email" placeholder="E-mail: " value="{{ $AuthUser->email }}" aria-label="Disabled input example" disabled="">

          <br>
        </form>
      </div>
    </div>

    <div class="title google" data-bs-toggle="collapse" href="#collapseExtrato">
      <img src="{{ asset('CassinoYantra/Dashboard/img/icones/extrato.png') }}" alt="Google Authenticator" width="30px">
      <span>DADOS FINANCEIRO</span>
    </div>
    
    <div class="conteudo collapse" id="collapseExtrato">
      <div class="card card-body">
        <h4>Disponível em breve . . .</h4>
      </div>
    </div>

    <div class="title conta" data-bs-toggle="collapse" href="#collapseVerificarConta">
      <img src="{{ asset('CassinoYantra/Dashboard/img/icones/verificar_conta.png') }}" alt="Verificar Conta" width="30px">
      <span>Verificar Conta</span>
    </div>

    <div class="conteudo collapse" id="collapseVerificarConta">
      <div class="card card-body">
          <div>
            <form action="#" class="validar-documents" method="POST" enctype="multipart/form-data">
              <h4 style="text-align: initial;">Enviar Fotos do Documento</h4>
              <div class="box-enviardocuments">
                <div style="width: 210px;">
                  <label class="input-file">
                    <img src="{{ asset('CassinoYantra/Dashboard/img/icones/documento.png') }}" width="50px" alt="Foto da frente do documento">
                    Frente
                    <input type="file" class="form-control" id="" name="doc">
                  </label>
                </div>

                <div style="width: 210px;">
                  <label class="input-file">
                    <img src="{{ asset('CassinoYantra/Dashboard/img/icones/documento-verso.png') }}" width="50px" alt="Foto do verso do documento">
                    Verso
                    <input type="file" class="form-control" id="" name="doc1">
                  </label>
                </div>

                <div style="width: 210px;">
                  <label class="input-file">
                    <img src="{{ asset('CassinoYantra/Dashboard/img/icones/selfie.png') }}" width="50px" alt="Selfie segurando o documento">
                    Selfie c/ documento
                    <input type="file" class="form-control" id="" name="doc2">
                  </label>
                </div>

                <div style="width: 210px;"> 
                  <label class="input-file">
                    <img src="{{ asset('CassinoYantra/Dashboard/img/icones/comprovante.png') }}" width="50px" alt="Comprovante de residência">
                    Comp de Residência
                    <input type="file" class="form-control" id="" name="doc3">
                  </label>
                </div>
                
                
                <ol>
                  <li>1-	Frente - Documento de Identificação original com Foto e Válido (Exemplos: Identidade, Passaporte ou Carteira de Motorista).</li>

                  <li>2-	Fundo - Documento de Identificação original e Válido (Exemplos: Identidade, Passaporte ou Carteira de Motorista).</li>

                  <li>3-	Selfie segurando o documento de identificação e uma folha escrita com a DATA DE HOJE, o nome e seu USUÁRIO. (Como exemplificado na imagem acima).</li>

                  <li>4-	Comprovante de Residência com a data, em nome do titular da conta com emissão dos últimos 3 meses. * Caso o comprovante seja em nome dos pais/filhos/irmãos ou do cônjuge, enviar documento que comprove o vínculo, via Ticket.  (Exemplos: conta de água, conta de luz, conta de TV por assinatura, conta de internet, conta de telefone).</li>
                </ol>
              </div>

              <br>

              <div class="col-auto" style="text-align: center; margin-top: 0 !important;">
                <button type="submit" class="btn-padrao btn btn-primary mb-3">Enviar</button>
              </div>
            </form>
        </div>
      </div>
    </div>
</div>
@endsection