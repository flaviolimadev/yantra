<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yantra club</title>

    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<style>
.btn-formcadastro button {
    background-image: linear-gradient(to right, #f0a416 , #f0a416, #e8961e);
    color: #230041;
    font-size: 2rem;
    font-weight: 700;
    padding: 0.5rem 3rem;
    border-radius: 25px;
    margin-bottom: 1rem;
    box-shadow: rgb(100 100 111 / 20%) 0px 7px 29px 0px;
}
</style>
<body>
    <header class="header-cadastro">
        <div class="left">
            <div class="area-logo">
                <a href="{{ route('casino') }}">
                    <img src="{{ asset('assets/logos/cassino_yantra.png') }}" alt="Yantra club" width="200px">
                </a>
            </div>
        </div>
        <div class="right">
            <div class="area-idioma">
                <ul>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/bandeiras/brasil.png') }}" alt="Português" width="25px">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/bandeiras/usa.png') }}" alt="Inglês" width="25px">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/bandeiras/espanha.png') }}" alt="Espanhol" width="25px">
                        </a>
                    </li>
                </ul>
            </div>

            <div class="btns-off">
                <a href="{{ route('casino') }}" class="btn-login">Voltar</a>
            </div>
        </div>
    </header>

    <main>

        <section class="area-cadastro">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('register') }}" method="post" class="form-cadastro">
                @csrf
                <div class="title-registro">
                    <span>Registro</span>
                </div>

                <div class="input-cadastro">
                    <label for="nome-completo">
                        <span>Nome Completo</span>
                    </label>

                    <input type="text" id="nome-completo" name="name" value="{{ old('name') }}">
                </div>

                <div class="input-cadastro">
                    <label for="usuario">
                        <span>Usuário</span>
                    </label>
                    
                    <input type="text" id="usuario" name="user" value="{{ old('user') }}">
                </div>

                <div class="input-cadastro">
                    <span class="tag-espaco">* Não utilizar espaço.</span>

                    <label for="email">
                        <span>E-mail</span>
                    </label>
                    
                    <input type="email" id="email" name="email" value="{{ old('email') }}">
                </div>

                <div class="area-dtnascimento">
                    <span class="title-nascimento">Data de Nascimento</span>

                    <div>
                        <select class="form-select" name="day" value="{{ old('day') }}">
                            <option selected>Dia</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                        </select>

                        <select class="form-select" name="month" value="{{ old('month') }}">
                            <option selected>Mês</option>
                            <option value="1">Jan</option>
                            <option value="2">Fev</option>
                            <option value="3">Mar</option>
                            <option value="4">Abr</option>
                            <option value="5">Mai</option>
                            <option value="6">Jun</option>
                            <option value="7">Jul</option>
                            <option value="8">Ago</option>
                            <option value="9">Set</option>
                            <option value="10">Out</option>
                            <option value="11">Nov</option>
                            <option value="12">Dez</option>
                        </select>

                        <input type="text" placeholder="Ano" name="year" value="{{ old('year') }}">
                    </div>
                </div>

                <div class="area-numerocadastro">
                    <div>
                        <span class="title-numero">Cód. do País</span>
                        <select class="form-select" name="code_pais" value="{{ old('code_pais') }}">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                    </div>

                    <div>
                        <span class="title-numero">Cód. Adicional</span>
                        <select class="form-select" name="ddd" value="{{ old('ddd') }}">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>

                    <div class="cadastro-wpp">
                        <span class="title-numero">Whatsapp</span>
                        <input type="text" name="phone" value="{{ old('phone') }}">
                    </div>
                </div>

                <div class="input-cadastro senha">
                    <label for="password">
                        <img src="{{ asset('assets/icones/cadeado.png') }}" alt="Senha" width="25px">
                        <span>Senha</span>
                    </label>

                    <input type="password" id="password" placeholder="**********" name="password" value="{{ old('password') }}">

                    <a href="#" class="ver-senha">
                        <img src="{{ asset('assets/icones/olho.png') }}" alt="Ver senha" width="30px">
                    </a>
                </div>

                <div class="area-checkboxs">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Eu confirmo que li e aceito os <a href="#" class="links-checkboxs">Termos e Condições</a> e <a href="#" class="links-checkboxs">Regras Gerais</a>.
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Eu confirmo que li e aceito as <a href="#" class="links-checkboxs">Políticas de Privacidade</a> e <a href="#" class="links-checkboxs">Segurança e Proteção ao Jogador</a>.
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Eu confirmo que atingi a idade mínima legal <strong>(18 anos)</strong> necessária para realizar apostas esportivas na plataforma Yantra Club. Autorizo o uso dos meus dados pessoais para otimizar a oferta e a experiência como usuário na plataforma.
                        </label>
                    </div>
                </div>

                <div class="btn-formcadastro">
                    <button type="submit">Cadastrar</button>
                </div>
            </form>

        </section>

    </main>

    <!-- Modal Login -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">

        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content login">
                <div class="modal-header">
                    <img src="{{ asset('assets/logos/cassino_yantra.png') }}" alt="Yantra club" width="200px">

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="#" class="form-login">
                        <div class="input-login">
                            <label for="user">
                                <img src="{{ asset('assets/icones/user.png') }}" alt="Usuário" width="30px">
                                <span>Login</span>
                            </label>
                            
                            <input type="text" id="user" placeholder="usernameaqui">
                        </div>

                        <div class="input-login">
                            <label for="password">
                                <img src="{{ asset('assets/icones/cadeado.png') }}" alt="Senha" width="30px">
                                <span>Senha</span>
                            </label>
                            
                            <input type="password" id="password" placeholder="**********">

                            <a href="#" class="ver-senha">
                                <img src="{{ asset('assets/icones/olho.png') }}" alt="Ver senha" width="30px">
                            </a>
                        </div>

                        <div>
                            <a href="#" class="btn-recoverypass">Esqueci minha senha.</a>
                        </div>
                        
                        <div class="btn-formlogin">
                            <a href="#">Entrar</a>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <p>Não tem conta ? <a href="#">Cadastre-se agora!</a></p>
                </div>
            </div>

        </div>

    </div>

    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>