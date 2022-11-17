<form action="{{ route('register') }}" class="form-cadastro" method='post'>

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
        <label for="user">
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
            <select class="form-select" name="day">
                <option selected>Dia</option>
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">3</option>
                <option value="04">4</option>
                <option value="05">5</option>
                <option value="06">6</option>
                <option value="07">7</option>
                <option value="08">8</option>
                <option value="09">9</option>
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
            </select>

            <select class="form-select" name="month">
                <option selected>Mês</option>
                <option value="01">Jan</option>
                <option value="02">Fev</option>
                <option value="03">Mar</option>
                <option value="04">Abr</option>
                <option value="05">Mai</option>
                <option value="06">Jun</option>
                <option value="07">Jul</option>
                <option value="08">Ago</option>
                <option value="09">Set</option>
                <option value="10">Out</option>
                <option value="11">Nov</option>
                <option value="12">Dez</option>
            </select>

            <select class="form-select" name="year">
                
                @for ($i = 1904; $i <= 2004; $i++)
                    <option>{{ $i }}</option>
                @endfor

            </select>
        </div>
    </div>

    <div class="area-numerocadastro" name="code_pais">
        <div>
            <span class="title-numero">Cód. do País</span>
            <select class="form-select">
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">3</option>
            </select>
        </div>

        <div>
            <span class="title-numero"> DDD </span>
            <select class="form-select" name="ddd">
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">3</option>
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
       <button type="submit"> Cadastrar </button>
    </div>
</form>