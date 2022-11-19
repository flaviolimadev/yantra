
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casino Yantra club</title>
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
        <img src="{{ asset('mails/img') }}/@yield('img')" alt="Título do e-mail" width="100%">
    </header>
    
    <main>
        @yield('conteudo')
    </main>

    <footer>
        <section class="footer-desk">
            <div class="left principal">
                

                <div class="direitos">
                    <span>© 2018 á 2022 Yantra Club Todos os direitos resevados.</span>
                </div>

                
            </div>

            <div class="separador-footer"></div>


        </section>
    </footer>
</body>
</html>