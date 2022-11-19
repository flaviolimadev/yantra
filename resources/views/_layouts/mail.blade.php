
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cassino Yantra club</title>
</head>
<body>
    <style>

    @font-face {
    font-family: SofiaPro;
    src: url('../fonts/sofiapro-light.otf') format('truetype');
    font-weight: normal;
    }

    * {
        font-family: 'SofiaPro', 'Roboto', 'sans-serif' !important;
    }

    a {
        text-decoration: none;
    }

    body, ul, li, p {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    body {
        background-image: url("../img/bg-email.png");
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        color: #fff;
        overflow-x: hidden;
    }


    main {
        padding: 2rem;
    }

    footer {
        background-color: #16101c;
        padding: 3rem;
    }

    section.footer-desk {
        display: flex;
        gap: 5%;
        align-items: center;
        justify-content: center;
        font-size: 14px;
    }

    section.footer-desk .left.principal {
        width: 33%;
    }

    section.footer-desk .right.principal {
        width: 20%;
        font-weight: 500;
        color: #a7a7a7;
        display: grid;
        gap: 1rem;
    }

    .separador-footer {
        height: 330px;
        border: 1px solid #808080;
    }

    .area-logo-footer  {
        display: flex;
        justify-content: space-between;
        margin-bottom: 2rem;
    }

    .area-links-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 10%;
        margin-bottom: 1rem;
    }

    .area-links-footer a {
        display: block;
        font-weight: 600;
        color: #d9d9d9;
        white-space: nowrap;
        margin: 0.25rem 0;
    }

    .area-links-footer a:hover {
        color: #a7a7a7;
    }

    section.footer-desk .direitos {
        color: #d9d9d9;
        font-weight: 600;
        margin-bottom: 2rem;
    }

    .redes-sociais-footer {
        display: flex;
        align-items: center;
        justify-content: left;
        gap: 0.75rem;
    }

    .redes-sociais-footer a {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .footer-desk .right.principal ul {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }

    .footer-desk .right.principal ul li {
        margin: 0.5rem 0.5rem 0.5rem 0;
    }

    @media screen and (max-width: 1360px) {
        section.footer-desk {
            gap: 15%;
        }
    }

    @media screen and (max-width: 1100px) {
        .area-links-footer {
            align-items: initial;
        }
        .area-links-footer a {
            white-space: normal;
            margin: 0.5rem 0;
        }
    }

    @media screen and (max-width: 1060px) {
        section.footer-desk {
            gap: 5%;
        }
        section.footer-desk .left.principal {
            width: 50%;
        }
        section.footer-desk .right.principal {
            width: 40%;
        }
    }

    @media screen and (max-width: 750px) {
        section.footer-desk {
            flex-direction: column-reverse;
        }
        .separador-footer {
            height: 0px;
            width: 100%;
            margin: 5% auto;
        }
        section.footer-desk .left.principal, section.footer-desk .right.principal {
            width: 100%;
        }
    }

    @media screen and (max-width: 450px) {
        footer {
            padding: 2rem 1.5rem;
        }
    }

    @media screen and (max-width: 380px) {
        section.footer-desk .left.principal, section.footer-desk .right.principal {
            font-size: 12px;
        }
        .area-logo-footer img {
            width: 100px;
        }
    }

    </style>
    <header>
        <img src="{{ asset('mails/img/') }}@yield('img')" alt="Título do e-mail" width="100%">
    </header>
    
    <main>
        @yield('conteudo')
    </main>

    <footer>
        <section class="footer-desk">
            <div class="left principal">
                <div class="area-logo-footer">
                    <a href="#">
                        <img src="{{ asset('mails/assets/logos/cassino_cinza.png') }}" alt="Yantra club" width="150px">
                    </a>

                    <a href="#">
                        <img src="{{ asset('mails/assets/icones/download_android.png') }}" alt="Download android" width="150px">
                    </a>
                </div>

                <div class="area-links-footer">
                    <div class="left">
                        <li>
                            <a href="#">Sobre nós</a>
                        </li>
                        <li>
                            <a href="#">FAQ - Perguntas Frequentes</a>
                        </li>
                        <li>
                            <a href="#">The Revolution</a>
                        </li>
                        <li>
                            <a href="#">Contato</a>
                        </li>
                    </div>
                    <div class="right">
                        <li>
                            <a href="#">Termos e Condições</a>
                        </li>
                        <li>
                            <a href="#">Regras Gerais</a>
                        </li>
                        <li>
                            <a href="#">Políticas de Privacidade e Segurança</a>
                        </li>
                        <li>
                            <a href="#">Políticas de Proteção ao Jogador</a>
                        </li>
                    </div>
                </div>

                <div class="direitos">
                    <span>© 2018 á 2022 Yantra Club Todos os direitos resevados.</span>
                </div>

                <div class="redes-sociais-footer">
                    <li>
                        <a href="#">
                            <img src="{{ asset('mails/assets/icones/facebook.png') }}" alt="Facebook" width="20px">
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="{{ asset('mails/assets/icones/instagram.png') }}" alt="Instagram" width="20px">
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="{{ asset('mails/assets/icones/telegram.png') }}" alt="Telegram" width="20px">
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="{{ asset('mails/assets/icones/youtube.png') }}" alt="Youtube" width="20px">
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="{{ asset('mails/assets/icones/twitter.png') }}" alt="Twitter" width="20px">
                        </a>
                    </li>
                </div>
            </div>

            <div class="separador-footer"></div>

            <div class="right principal">
                <p>Viva a experiência Yantra Club onde quer que esteja, com nosso site mobile e aplicação de celular para android.</p>

                <div>
                    <a href="#">
                        <img src="{{ asset('mails/assets/icones/jogo_responsavel.png') }}" alt="Jogo responsável" width="180px">
                    </a>
                </div>

                <p>A participação de menores de 18 anos nos jogos oferecidos pela Yantra Club é estritamente proibida.</p>

                <ul>
                    <li>
                        <a href="https://www.gamcare.org.uk">
                            <img src="{{ asset('mails/https://d1ygf46rsya1tb.cloudfront.net/prod/uploads/2019/07/GamCare-SGSCMYK-Copy.png') }}" alt="gordon_moody" width="100px" style="filter: grayscale(100%); filter: gray; /* IE */;">
                        </a>
                    </li>

                    <li>
                        <a href="https://ecogra.org/">
                            <img src="{{ asset('mails/assets/icones/ecogra.png') }}" alt="ecogra" width="100px">
                        </a>
                    </li>

                    <li>
                        <a href="https://www.gamblingcommission.gov.uk">
                            <img src="{{ asset('mails/assets/icones/gambling_commission.png') }}" alt="gambling_commission" width="100px">
                        </a>
                    </li>

                    <li>
                        <a href="https://www.gamblingtherapy.org">
                            <img src="{{ asset('mails/assets/icones/gambling_therapy.png') }}" alt="gambling_therapy" width="50px">
                        </a>
                    </li>
                </ul>
            </div>

        </section>
    </footer>
</body>
</html>