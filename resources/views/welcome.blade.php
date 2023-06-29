<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Premio al Jugador FULL ELECTRIC, FULL POWER</title>

    <meta name="description" content="MARCA y Hyundai buscan al JUGADOR FAVORITO DE LA AFICIÓN de la temporada 2022/23" />
    <!-- Schema.org markup (Google) -->
    <meta itemprop="name" content="Premio al Jugador Full Electric, Full Power, MARCA y Hyundai" />
    <meta itemprop="description" content="MARCA y Hyundai buscan al JUGADOR FAVORITO DE LA AFICIÓN de la temporada 2022/23" />
    <meta itemprop="image" content="https://elfavoritodelaaficion.marca.com/assets/images/jugador.png" />
    <!-- Twitter Card markup-->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@Marca" />
    <meta name="twitter:title" content="Premio al Jugador Full Electric, Full Power, MARCA y Hyundai" />
    <meta name="twitter:description" content="MARCA y Hyundai buscan al JUGADOR FAVORITO DE LA AFICIÓN de la temporada 2022/23" />
    <meta name="twitter:creator" content="Marca" />
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image" content="https://elfavoritodelaaficion.marca.com/assets/images/jugador-mobile.png" />
    <meta name="twitter:image:alt" content="MARCA y Hyundai buscan al JUGADOR FAVORITO DE LA AFICIÓN de la temporada 2022/23" />
    <!-- Open Graph markup (Facebook, Pinterest) -->
    <meta property="og:title" content="Premio al Jugador Full Electric, Full Power, MARCA y Hyundai" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://elfavoritodelaaficion.marca.com/" />
    <meta property="og:image" content="https://elfavoritodelaaficion.marca.com/assets/images/jugador.png" />
    <meta property="og:description" content="MARCA y Hyundai buscan al JUGADOR FAVORITO DE LA AFICIÓN de la temporada 2022/23." />

    <meta property="og:site_name" content="El Favorito de la Afición" />

    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/android-icon-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png" />
    <link rel="manifest" href="manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="assets/images/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Lato CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <link href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" rel="stylesheet" />

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            font-family: 'Lato', 'helvetica neue', Arial, sans-serif;
            color: #fff;
            font-size: 17px;
            background: #cc0000;
            overflow-x: hidden;
        }

        header {
            background: #fff;
        }

        header .container {
            position: relative;
        }

        header .content {
            position: absolute;
            top: 0;
            left: 0;
            padding: 0 15px;
        }

        header a.cta {
            position: absolute;
            bottom: -15px;
            left: calc(50% - 117px);
            display: block;
            margin: 0 auto;
        }

        header .cup {
            margin-top: 40px;
            padding: 80px 0
        }

        header .content p {
            font-size: 0.9em;
        }

        header .cup img {
            max-width: 100px;
        }

        header .login {
            color: #fff;
            margin-right: 20px;
        }

        nav {
            margin-top: 0px;
            padding: 10px 0;
        }
        .icono {
            margin-left: 30px;
        }
        h1 {
            color: #fff;
            font-size: 23px;
            font-weight: 400;
            line-height: 50px;
        }

        h1 span,
        h1 strong {
            background-color: #5a0846;
            padding: 0 20px;
        }
        .link {
            color: #5a0846;

        }
        .social {
            margin-bottom: 30px;
        }

        .social a {
            margin: 0 10px;
        }

        .social a img {
            transition: all 0.2s ease-in-out;
        }

        .social a:hover img {
            transform: scale(0.9);
        }

        .share a {
            background-color: #fff;
            color: #e00109;
            margin: 0 10px;
        }

        .share a.facebook {
            border-radius: 50px;
            padding: 0.5em 0.8em;
        }

        .share a.twitter {
            border-radius: 50px;
            padding: 0.5em 0.6em;
        }

        .share a:hover {
            transform: scale(1.5);
        }

        main {
            padding: 30px 0 80px;
            position: relative;
            z-index: 2;
        }

        section {
            visibility: visible;
            opacity: 1;
            transition: visibility 0s, opacity 0.5s linear;
            height: auto;
        }

        #thanks {
            margin-bottom: 40px;
        }

        #claim p,
        #thanks p,
        #ie11 p {
            padding: 20px 0 0;
        }

        #form .alert {
            display: none;
        }

        #form.error .alert {
            display: block;
        }

        button>.loading {
            display: none;
        }

        button.loading>.quiet {
            display: none;
        }

        button.loading>.loading {
            display: block;
        }

        h2 {
            font-size: 25px;
        }

        .custom-select {
            width: auto;
        }

        label {
            font-weight: 300;
        }

        @media (min-width: 576px) {

            label.form-check-label,
            label.custom-control-label {
                text-align: left;
            }
        }

        .btn {
            padding: 0.2rem 0.75rem;
            margin-top: 3px;
            border-radius: 20px
        }

        .btn-light {
            background: #fff;
            color: #e00109;
            padding-left: 80px;
            padding-right: 80px;
        }

        .btn-light:hover {
            background: #fff;
        }

        footer {
            background-color: #fff;
            padding: 35px 0;
        }

        footer .container {
            position: relative;
        }

        footer img {
            max-width: 100%;
        }

        footer p {
            position: relative;
            z-index: 1;
            color: #e00109;
        }

        footer a {
            color: #e00109;
        }

        footer p.car-text {
            color: #002b5e;
            margin-top: 100px;
        }


        footer p.text-center {
            line-height: 30px;
            margin-top: 120px;
        }
        .aclaration {
            text-align: center; 
            line-height: 30px;
            font-size: 12px;
            color: #002b5e;
        }
        .car {
            position: absolute;
            z-index: 0;
            top: -110px;
            right: 15px;
            max-width: 600px
        }

        footer a.legal {
            color: #002b5e;
            font-size: 0.9rem;
            text-decoration: underline;
        }

        .dropdown {
            display: inline;
        }

        @media (max-width: 960px) {
            header .cup {
                padding: 40px 0;
                margin-top: 0px;
            }
        }
        @media (min-width: 960px) {
            .dropdown {
                display: block;
            }

            main {
                padding: 50px 0 80px;
            }

            header .cup {
                margin-top: 40px;
            }

            header .cup img {
                max-width: auto;
            }

            header .content p {
                font-size: 1em;
            }

            /* header a.cta::before {
                animation: bounce 1s ease infinite;
                bottom: -4rem;
                color: #fff;
                content: '╲╱';
                font-size: 2rem;
                height: 4rem;
                left: 50%;
                letter-spacing: -1px;
                line-height: 4rem;
                margin-left: -3rem;
                opacity: 0.8;
                position: absolute;
                text-align: center;
                width: 6rem;
            } */

            header .social {
                position: fixed;
                z-index: 2;
                right: 20px;
                top: 30%;
            }

            header .social a {
                display: block;
                margin-bottom: 10px;
            }

            h1 {
                font-size: 30px;
            }

            footer p.car-text {
                margin-left: 180px;
                margin-top: 0;
            }
        }

        @media (min-width: 576px) {
            footer img {
                max-width: 100%;
            }

            .car {
                position: absolute;
                top: -130px;
                right: 0;
            }

            .car img {
                max-width: 100%;
            }
        }
        @media (max-width: 768px) {
            footer p.car-text {
                color: #002b5e;
                margin-top: 160px;
            }
        }
        @media (max-width: 576px) {
            
            header .cup {
                padding: 10px 0;
                margin-top: 0px;
            }

            footer p.car-text {
                color: #002b5e;
                margin-top: 150px;
            }

            footer p.text-center {
                margin-top: 60px;
            }
            .icono{
                margin-left: 0px;
            }
        }
        @media (max-width: 400px) {

            footer p.car-text {
                color: #002b5e;
                margin-top: 100px;
            }

        }
        @keyframes bounce {
            50% {
                transform: translateY(-20%);
            }

            100% {
                transform: translateY(0);
            }
        }

        .select2-results__option,
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #e00109;
        }

        .select2-container--default .select2-selection--single {
            border-radius: 20px;
        }

        .select2-container--default .select2-selection--single {
            border: 0 none;
        }

        .dropdown-item {
            display: inline;
            padding: .25rem 1rem;
        }
    </style>

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            'form' => $form,
        ]) !!};
    </script>

    <script src="//e00-apps-ue.uecdn.es/tms/js/tms-branded.js"></script>
    <script src="https://tags.tiqcdn.com/utag/unidadeditorial/marca/prod/utag.sync.js"></script>
</head>

<body onload="isIE11()">
    <script language="JavaScript" type="text/javascript">
        var ueDataLayer = ueDataLayer || {};
        ueDataLayer.be_date_first_publication = new Date().getTime();
        ueDataLayer.be_page_article_title = document.title;
        ueDataLayer.be_page_section = "home";
        ueDataLayer.be_page_subsection1 = "";
        ueDataLayer.be_page_subsection2 = "";
        ueDataLayer.be_page_subsection3 = "";
        ueDataLayer.be_page_subsection4 = "";
        ueDataLayer.be_page_subsection5 = "";
        ueDataLayer.be_page_subsection6 = "";
        ueDataLayer.be_page_url = document.location.href.split('?')[0];
        ueDataLayer.be_page_url_qs = document.location.href;
        ueDataLayer.be_page_domain = "marca.com";
        ueDataLayer.be_page_subdomain = "elfavoritodelaaficion";
        ueDataLayer.be_page_hierarchy = "marca.com|elfavoritodelaaficion|home||||||";
        ueDataLayer.be_text_seoTags = "";
        ueDataLayer.be_page_site_version = "web";
        ueDataLayer.be_page_content_type = "otros";
        ueDataLayer.be_navigation_type = "origen";
        ueDataLayer.be_content_premium_detail = "abierto";
        ueDataLayer.be_content_premium = "0";
        ueDataLayer.be_content_signwall_detail = "abierto";
        ueDataLayer.be_content_signwall = "0";
    </script>
    <script>
        var utag_data={}
    </script>
    <script type="text/javascript">
        (function(a,b,c,d){
    a='https://tags.tiqcdn.com/utag/unidadeditorial/marca/prod/utag.js';
    b=document;c='script';d=b.createElement(c);d.src=a;d.type='text/java'+c;d.async=true;
    a=b.getElementsByTagName(c)[0];a.parentNode.insertBefore(d,a);
    })();
    </script>
    <header>
        <div class="container">
            <img src="assets/images/jugador.png" alt="El Favorito de la Afición" class="img-fluid d-none d-md-block" />
            <img src="assets/images/jugador-mobile.png" alt="El Favorito de la Afición" class="img-fluid d-sm-block d-md-none" />
            <div class="content">
                <div class="row" style="background-color: #5a0846">
                    <div class="col-lg-8 offset-lg-2">
                        <nav>
                            <div class="text-center d-sm-block d-md-none" style="margin-bottom: 15px">
                                @if (!$is_logged)
                                <a class="login" href="https://seguro.marca.com/registro/v3/?view=login&url_redirect=https%3A%2F%2Fseguro.marca.com%2Fueregistro%2Fv1%2Foauth%2Fservidor%2Fsolicitud-autorizacion%3Fresponse_type%3Dcode%26client_id%3D{{ env('OAUTH_CLIENT_ID') }}%26redirect_uri%3D{{ urlencode(env('APP_URL')) }}%2Flogin&csp={{ env('OAUTH_CLIENT_ID') }}">Login</a>
                                @endif
                                <div class="dropdown">
                                    <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="text-white"><i class="fas fa-bars"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="https://es-es.facebook.com/MARCA/" target="_blank"><i class="fab fa-facebook"></i></a>
                                        <a class="dropdown-item" href="https://twitter.com/marca?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a class="dropdown-item" href="https://www.instagram.com/marca/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="https://marca.com" target="_blank">
                                <img src="assets/images/marca-white.png" alt="MARCA.COM">
                            </a>
                            <a href="https://hyundai.com" target="_blank" class="icono">
                                <img src="assets/images/hyunday-01.png" width="170" alt="Hyundai">
                            </a>
                            <div class="dropdown float-right d-none d-md-block">
                                <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="text-white"><i class="fas fa-bars"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="https://es-es.facebook.com/MARCA/" target="_blank"><i class="fab fa-facebook"></i></a>
                                    <a class="dropdown-item" href="https://twitter.com/marca?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a class="dropdown-item" href="https://www.instagram.com/marca/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            @if (!$is_logged)
                            <a class="float-right login d-none d-md-block" href="https://seguro.marca.com/registro/v3/?view=login&url_redirect=https%3A%2F%2Fseguro.marca.com%2Fueregistro%2Fv1%2Foauth%2Fservidor%2Fsolicitud-autorizacion%3Fresponse_type%3Dcode%26client_id%3D{{ env('OAUTH_CLIENT_ID') }}%26redirect_uri%3D{{ urlencode(env('APP_URL')) }}%2Flogin&csp={{ env('OAUTH_CLIENT_ID') }}">Login</a>
                            @endif
                        </nav>
                    </div>
                </div>
                <p class="text-center cup">
                    <!-- <img src="assets/images/cup.png" alt="CUP"> -->
                </p>
                <h1 class="text-center"><span>PREMIO AL JUGADOR</span><br><strong>FULL ELECTRIC, FULLPOWER</strong></h1>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2" style="background-color: #5a0846">
                        <p class="text-center" style="margin-bottom: 0; padding: 10px"><strong>MARCA</strong> y <strong>Hyundai</strong> buscan al <strong>JUGADOR FAVORITO DE LA AFICIÓN</strong> de la temporada 2022/23. Vota por el jugador que crees que más se identifica con los valores de Hyundai en el terreno de juego: Potencia, reflejos, destreza, precisión y, por supuesto, Juego limpio. Entre todos los participantes <strong>sortearemos una entrada doble para acudir a la Gala de los Premios MARCA</strong>.</p>
                    </div>
                </div>
            </div>
            <a href="#form" class="cta btn btn-light" onclick="envioSC('elfavoritodelaaficion | participa')">PARTICIPA</a>
        </div>
    </header>

    <main class="container">
        <section id="ie11" class="d-none">
            <div class="row">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <h2>Navegador no Soportado</h2>
                    <p class="text-center">Por favor, utiliza un navegador más moderno, por ejemplo, Edge, Chrome o Firefox.</p>
                </div>
            </div>
        </section>
        <section id="form">
            <div class="row">
                <div class="col-md-12 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <h2>¡VAMOS A POR ELLO!</h2>
                    <form name="premio" id="form">
                        <input type="hidden" name="nil" value="{{ $user['nil'] }}">
                        <input type="hidden" name="email" value="{{ $user['email'] }}">
                        <input type="hidden" name="name" value="{{ $user['name'] }}">
                        <input type="hidden" name="last_name" value="{{ $user['last_name'] }}">
                        <input type="hidden" name="last_name2" value="{{ $user['last_name2'] }}">
                        <input type="hidden" name="zip" value="{{ $user['zip'] }}">

                        <div class="form-group">
                            <label for="team">Selecciona el equipo al que pertenece el jugador que quieres votar</label><br>
                            <select class="js-teams custom-select" id="team" name="team" required></select>
                        </div>

                        <div class="form-group">
                            <label for="player">Selecciona el nombre del jugador</label><br>
                            <select class="js-players custom-select {{ $form['team'] ? '' : 'd-none' }}" id="player" name="player" required></select>
                        </div>

                        <div class="form-group reason {{ $form['player'] && $form['team'] ? '' : 'd-none' }}">
                            <label for="reason">Cuéntanos porqué crees que se lo merece</label><br>
                            <textarea name="reason" class="form-control" id="reason" placeholder="Máximo 140 caracteres" maxlength="140" required>{{ $form['reason'] }}</textarea>
                        </div>

                        <p class="submit text-center {{ $form['player'] && $form['team'] ? '' : 'd-none' }}">
                            @if (!$is_logged)
                            <a class="btn btn-light" href="https://seguro.marca.com/registro/v3/?view=login&url_redirect=https%3A%2F%2Fseguro.marca.com%2Fueregistro%2Fv1%2Foauth%2Fservidor%2Fsolicitud-autorizacion%3Fresponse_type%3Dcode%26client_id%3D{{ env('OAUTH_CLIENT_ID') }}%26redirect_uri%3D{{ urlencode(env('APP_URL')) }}%2Flogin&csp={{ env('OAUTH_CLIENT_ID') }}">VOTAR</a>
                            @else
                            <button class="btn btn-light" id="sendButton" type="submit" id="sendButton" onclick="envioSC('elfavoritodelaaficion | votar');">
                                <div class="quiet">
                                    VOTAR
                                </div>
                                <div class="loading">
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    VOTANDO...
                                </div>
                            </button>
                            @endif
                            <br>
                            <small>
                                Para poder votar es necesario estar <u>registrado</u> en <a href="https://marca.com" target="_blank" class="text-white">MARCA.COM</a>
                            </small>
                        </p>
                    </form>
                    <div class="alert alert-danger">
                        <p>Ha habido un error al enviar el formulario, inténtalo de nuevo mas tarde.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="thanks" class="d-none">
            <div class="row">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">
                    <h2 class="text-center">¡GRACIAS POR PARTICIPAR!</h2>
                    <p class="text-center">Comparte la votación en tus RRSS y consigue más<br>opciones de ganar el premio.</p>
                    <p class="text-center share">
                        <a href="#0" target="_blank" rel="nofollow" onclick="envioEventoRedSocial('facebook');" title="Compártelo en Facebook" itemprop="sameAs" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#0" target="_blank" rel="nofollow" onclick="envioEventoRedSocial('twitter');" title="Compártelo en Twitter" itemprop="sameAs" class="twitter"><i class="fab fa-twitter"></i></a>
                    </p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            
            <a href="https://www.hyundai.com/es/modelos/tucson.html" target="_blank" class="car"><img src="/assets/images/car-tucson.png?v3" alt="HYUNDAI TUCSON" /></a>
            <p class="car-text float-left">
                <u>Descubre la Gama</u><br>
                <span>Hyundai TUCSON</span><br>
                Nº1 en ventas en España*.
            </p>
            <div class="clearfix"></div>
            <p class="text-center">
                <a href="https://marca.com" target="_blank" rel="noopener">
                    <img src="assets/images/marca.png" alt="Marca" /></a><br>
                <a href="assets/pdf/bases-legales.pdf?v2" target="_blank" rel="noopener" class="legal">Bases legales</a>
            </p>
            <div>
                <p class="aclaration">
                *Datos DGT según número de matriculaciones para canal particulares hasta el 31/12/2022 <a href="https://www.dgt.es/inicio/" class="link" target="_blank">www.dgt.es</a>
                </p>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        TMSBottom();
            
        const data = {
            'Almería': [
                "Fernando",
                "Mariño",
                "Ely",
                "Babic",
                "Pozo",
                "Akieme",
                "Chumi",
                "Centelles",
                "Mendes",
                "Kaiky",
                "Robertone",
                "Samú Costa",
                "Melero",
                "Portillo",
                "César de la Hoz",
                "Eguaras",
                "Arnau Puigmal",
                "Curro",
                "Ramazani",
                "Embarba",
                "Leo Baptistao",
                "Luis Suárez",
                "El Bilal",
                "Dyego Sousa",
                "Lázaro",
                "Milovanovic",
            ],
            'Athletic Club': [
                "Unai Simón",
                "Agirrezabala",
                "De Marcos",
                "Yuri",
                "Vivian",
                "Yeray",
                "Lekue",
                "Aitor Paredes",
                "Íñigo Martínez",
                "Capa",
                "Balenziaga",
                "Berenguer",
                "Sancet",
                "Vesga",
                "Raúl García",
                "Zarraga",
                "Dani García",
                "Ander Herrera",
                "Vencedor",
                "Morcillo",
                "Iñaki Williams",
                "Nico Williams",
                "Muniain",
                "Guruzeta",
                "Adu Ares",
                "Villalibre",
            ],
            'Atletico de Madrid': [
                "Oblak",
                "Grbic",
                "Gomis",
                "Nahuel Molina",
                "Giménez",
                "Hermoso",
                "Reinildo",
                "Savic",
                "Reguilón",
                "Felipe",
                "Doherty",
                "Carrasco",
                "Koke",
                "Witsel",
                "Saúl",
                "De Paul",
                "Lemar",
                "Marcos Llorente",
                "Pablo Barrios",
                "Kondogbia",
                "Griezmann",
                "Morata",
                "Correa",
                "Joao Felix",
                "Cunha",
                "Memphis",
                "Carlos Martín",
            ],
            'Barcelona': [
                "Ter Stegen",
                "Iñaki Peña",
                "Balde",
                "Kounde",
                "Eric García",
                "Jordi Alba",
                "Marcos Alonso",
                "Christensen",
                "Araujo",
                "Piqué",
                "Bellerín",
                "Chadi",
                "Gavi",
                "De Jong",
                "Busquets",
                "Kessié",
                "Pedri",
                "Sergi Roberto",
                "Pablo Torre",
                "Garrido",
                "Raphinha",
                "Ansu Fati",
                "Lewandowski",
                "Ferran",
                "Dembélé",
                "Alarcón",
                "Lamine Yamal",
                "Aubameyang",
            ],
            'Betis': [
                "Rui Silva",
            "Claudio Bravo",
            "Pezzella",
            "Luiz Felipe",
            "Sabaly",
            "Miranda",
            "Álex Moreno",
            "Abner",
            "Víctor Ruiz",
            "Montoya",
            "Félix Garreta",
            "Fran Delgado",
            "Guido Rodríguez",
            "William Carvalho",
            "Canales",
            "Rodri",
            "Guardado",
            "Edgar González",
            "Joaquín",
            "Fekir",
            "Paul",
            "Borja Iglesias",
            "Luiz Henrique",
            "Willian José",
            "Aitor Ruibal",
            "Juanmi",
            "Ayoze",
            "Juan Cruz",
            "Loren",
            "Rober",
            ],
            'Cádiz': [
                "Ledesma",
            "David Gil",
            "Espino",
            "Luis Hernández",
            "Iza",
            "Fali",
            "Chust",
            "Momo Mbaye",
            "Arzamendia",
            "Zaldua",
            "Jorge Meré",
            "Raúl Parra",
            "Cala",
            "Carlos García",
            "Fede San Emeterio",
            "Rubén Alcaraz",
            "Iván Alejo",
            "Álex Fernández",
            "José Mari",
            "Escalante",
            "Mamady Diarra",
            "Tomás Alarcón",
            "Antonio Blanco",
            "Youba Diarra",
            "De la Rosa",
            "Perea",
            "Sobrino",
            "Bongonda",
            "Lozano",
            "Negredo",
            "Ocampo",
            "Sergi Guardiola",
            "Chris Ramos",
            "Roger",
            "Lucas Pérez",
            "Mabil",
            "Álvaro Giménez",
            "Mwepu",
            ],
            'Celta de Vigo': [
                "Iván Villar",
            "Marchesín",
            "Javi Galán",
            "Núñez",
            "Aidoo",
            "Hugo Mallo",
            "Mingueza",
            "Kevin",
            "Carlos Domínguez",
            "Fernando Medrano",
            "Fran Beltrán",
            "Veiga",
            "Cervi",
            "Óscar",
            "Luca de la Torre",
            "Tapia",
            "Solari",
            "Swedberg",
            "Hugo Sotelo",
            "Iago Aspas",
            "Carles Pérez",
            "Strand Larsen",
            "Gonçalo Paciencia",
            "Seferovic",
            "Miguel Rodríguez",
            "Pablo Durán",
            ],
            'Elche': [
                "Edgar Badía",
            "Werner",
            "Clerc",
            "Bigas",
            "Palacios",
            "Enzo Roco",
            "Nico Fernández",
            "Blanco",
            "Gonzalo Verdú",
            "Diego González",
            "John",
            "Magallán",
            "Lirola",
            "José Ángel",
            "Fede",
            "Gumbau",
            "Omar Mascarell",
            "Raúl Guti",
            "Fidel",
            "Collado",
            "Quina",
            "Pape Cheikh",
            "Pastore",
            "Alfaro",
            "Lucas Boyé",
            "Ezequiel Ponce",
            "Tete Morente",
            "Pere Milla",
            "Josan",
            "Nteka",
            ],
            'Espanyol': [
                "Fernando Pacheco",
            "Álvaro Fernández",
            "Lecomte",
            "Joan García",
            "Óscar Gil",
            "Cabrera",
            "Brian Oliván",
            "Sergi Gómez",
            "Calero",
            "César Montes",
            "Rubén Sánchez",
            "Pierre-Gabriel",
            "Pedrosa",
            "Simo",
            "Omar",
            "Darder",
            "Vinicius Souza",
            "Nico Melamed",
            "Edu Expósito",
            "Aleix Vidal",
            "Denis Suárez",
            "Keidi Bare",
            "José Gragera",
            "Pol Lozano",
            "Roger Martínez",
            "Puado",
            "Joselu",
            "Braithwaite",
            "Lazo",
            "Dani Gómez",
            "Luca Koleosho",
            "Nabil Touaizi",
            ],
            'Getafe': [
                "David Soria",
            "Djené",
            "Iglesias",
            "Duarte",
            "Damián Suárez",
            "Alderete",
            "Mitrovic",
            "Gastón Álvarez",
            "Angileri",
            "Amavi",
            "Álex Revuelta",
            "Aleñà",
            "Maksimovic",
            "Luis Milla",
            "Algobia",
            "Gonzalo Villar",
            "Seoane",
            "Arambarri",
            "Enes Ünal",
            "Borja Mayoral",
            "Portu",
            "Munir",
            "Mata",
            "Latasa",
            "Moi Parra",
            ],
            'Girona': [
                "Gazzaniga",
            "Juan Carlos",
            "Santi Bueno",
            "Miguel Gutiérrez",
            "Arnau Martínez",
            "Javi Hernández",
            "Yan Couto",
            "David López",
            "Bernardo",
            "Juanpe",
            "Callens",
            "Oriol Romeu",
            "Aleix García",
            "Valery",
            "Iván Martín",
            "Yangel Herrera",
            "Reinier",
            "Borja García",
            "Artero",
            "Taty Castellanos",
            "Riquelme",
            "Stuani",
            "Toni Villa",
            "Tsygankov",
            "Samu Saiz",
            "Manu Vallejo",
            "Joel Roca",
            "Ureña",
            ],
            'Mallorca': [
                "Rajkovic",
            "Leo Román",
            "Greif",
            "Maffeo",
            "Jaume Costa",
            "Raíllo",
            "Valjent",
            "Copete",
            "Gio González",
            "Nastasic",
            "Hadzikadunic",
            "Cufré",
            "Augustinsson",
            "Russo",
            "Gayà",
            "Kang In",
            "Dani Rodríguez",
            "Antonio Sánchez",
            "Ruiz de Galarreta",
            "Baba",
            "Grenier",
            "Battaglia",
            "Manu Morlanes",
            "Quintanilla",
            "Muriqi",
            "Amath",
            "Abdón Prats",
            "Ángel",
            "Kadewere",
            "Lago Junior",
            "Llabrés",
            ],
            'Osasuna': [
                "Aitor Fernández",
            "Sergio Herrera",
            "David García",
            "Manu Sánchez",
            "Juan Cruz",
            "Pablo Ibáñez",
            "Aridane",
            "Unai García",
            "Nacho Vidal",
            "Rubén Peña",
            "Diego Moreno",
            "Herrando",
            "Moncayola",
            "Lucas Torró",
            "Moi Gómez",
            "Aimar",
            "Abde",
            "Brasanac",
            "Iker Muñoz",
            "Roberto Torres",
            "Kike García",
            "Budimir",
            "Chimy Ávila",
            "Rubén García",
            "Kike Barja",
            "Benito",
            ],
            'Rayo Vallecano': [
                "Dimitrievski",
            "Diego López",
            "Fran García",
            "Ivan Balliu",
            "Catena",
            "Lejeune",
            "Abdul Mumin",
            "Chavarría",
            "Mario Hernández",
            "Mario Suárez",
            "Saveljich",
            "Diego Méndez",
            "Isi",
            "Álvaro García",
            "Santi Comesaña",
            "Óscar Valentín",
            "Trejo",
            "Unai López",
            "Ciss",
            "Salvi",
            "Pozo",
            "Bebe",
            "Camello",
            "Falcao",
            "Raúl de Tomás",
            "Andrés",
            "Pablo Muñoz",
            ],
            'Real Madrid': [
                "Courtois",
            "Lunin",
            "Militao",
            "Rüdiger",
            "Carvajal",
            "Nacho",
            "Alaba",
            "Mendy",
            "Odriozola",
            "Jesús Vallejo",
            "Camavinga",
            "Valverde",
            "Tchouaméni",
            "Modric",
            "Kroos",
            "Dani Ceballos",
            "Lucas Vázquez",
            "Hazard",
            "Arribas",
            "Casemiro",
            "Rodrygo",
            "Vinicius",
            "Asensio",
            "Benzema",
            "Mariano",
            "Álvaro",
            ],
            'Real Sociedad': [
                "Remiro",
            "Le Normand",
            "Zubeldia",
            "Gorosabel",
            "Aritz Elustondo",
            "Aihen",
            "Rico",
            "Jon Pacheco",
            "Álex Sola",
            "Zubimendi",
            "Kubo",
            "Brais Méndez",
            "Mikel Merino",
            "Silva",
            "Illarramendi",
            "Oyarzabal",
            "Robert Navarro",
            "Pablo Marín",
            "Guevara",
            "Turrientes",
            "Olasagasti",
            "Maguna",
            "Sorloth",
            "Carlos Fernández",
            "Barrenetxea",
            "Momo Cho",
            "Karrikaburu",
            "Ander Martín",
            "Isak",
            "Sadiq",
            ],
            'Sevilla': [
                "Bono",
            "Dmitrovic",
            "Jesús Navas",
            "Acuña",
            "Montiel",
            "Alex Telles",
            "Nianzou",
            "Bade",
            "Rekik",
            "Kike Salas",
            "Marcao",
            "Diego Hormigo",
            "Gudelj",
            "Óliver",
            "Rakitic",
            "Jordán",
            "Fernando",
            "Papu Gómez",
            "Pape Gueye",
            "Isco",
            "Delaney",
            "Tecatito",
            "Manu Bueno",
            "Carlos Álvarez",
            "Pedro Ortiz",
            "Lamela",
            "En-Nesyri",
            "Rafa Mir",
            "Suso",
            "Ocampos",
            "Bryan",
            "Dolberg",
            "Januzaj",
            "Iván",
            ],
            'Valencia': [
                "Mamardashvili",
            "Gayà",
            "Foulquier",
            "Diakhaby",
            "Thierry Correia",
            "Hugo Guillamón",
            "Lato",
            "Comert",
            "Gabriel Paulista",
            "Cenk",
            "Jesús Vázquez",
            "Mosquera",
            "Almeida",
            "Musah",
            "Nico",
            "Ilaix Moriba",
            "Javier Guerra",
            "Carlos Soler",
            "Lino",
            "Hugo Duro",
            "Kluivert",
            "Cavani",
            "Samu Castillejo",
            "Marcos Andre",
            "Diego López",
            "Fran Pérez",
            "Alberto Marí",
            "Maxi Gómez",
            ],
            'Valladolid': [
                "Masip",
            "Asenjo",
            "Aceves",
            "Javi Sánchez",
            "Joaquín",
            "El Yamiq",
            "Escudero",
            "Olaza",
            "Iván Fresneda",
            "Luis Pérez",
            "Lucas Rosa",
            "Hongla",
            "Feddal",
            "Torres",
            "Manu",
            "Kike Pérez",
            "Aguado",
            "Monchu",
            "Óscar Plano",
            "Roque Mesa",
            "Iván Sánchez",
            "Kenedy",
            "Amallah",
            "Malsa",
            "Anuar",
            "Tunde",
            "Gonzalo Plata",
            "Sergio León",
            "Larin",
            "Weissman",
            "Machís",
            "Narváez",
            "Toni Villa",
            "Arroyo",
            "Sekou",
            ],
            'Villarreal': [
                "Reina",
            "Rulli",
            "Jorgensen",
            "Pau Torres",
            "Pedraza",
            "Albiol",
            "Foyth",
            "Alberto Moreno",
            "Mandi",
            "Kiko Femenía",
            "Mojica",
            "Cuenca",
            "Mbacke",
            "Parejo",
            "Álex Baena",
            "Capoue",
            "Trigueros",
            "Lo Celso",
            "Terrats",
            "Coquelin",
            "Hassan",
            "Del Moral",
            "Chukwueze",
            "Yeremy Pino",
            "Morales",
            "Nico Jackson",
            "Gerard",
            "Danjuma",
            "Fer Niño",
            "Pascual",
            "Collado"
            ]

        };

        $(document).ready(function() {
            var teams = Object.keys(data);
            teams = $.map(teams, function (obj) {
                var addTeam = {};
                addTeam.id = obj;
                addTeam.text = obj;

                if (obj === Laravel.form.team) {
                    addTeam['selected'] = true;
                }

                return addTeam;
            });
            if (!Laravel.form.team) {
                teams.unshift({
                    id: 0,
                    text: '-- Elige equipo --',
                    "selected": true,
                    "disabled": true
                });
            } else {
                teamSelected(Laravel.form.team);
            }
            $('.js-teams').select2({
                placeholder: "Selecciona equipo",
                allowClear: true,
                data: teams,
                width: '100%'
            });
            $('.js-teams').on('select2:select', function (e) {
                teamSelected(e.params.data.text);
            });
            $('.js-players').on('select2:select', function (e) {
                $('.reason, .submit').removeClass('d-none');
                var formdata = new FormData(form);
                formdata.append( "_token", Laravel.csrfToken);
                formdata.append('key', 'player');
                formdata.append('value', e.params.data.text);
                fetch('/auth/save-session', { method: 'POST', body: formdata, headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }})
                .catch(error => console.error('Error!', error.message))
            });
            $('#reason').bind('input propertychange', function() {
                var formdata = new FormData(form);
                formdata.append( "_token", Laravel.csrfToken);
                formdata.append('key', 'reason');
                formdata.append('value', this.value);
                fetch('/auth/save-session', { method: 'POST', body: formdata})
                .catch(error => console.error('Error!', error.message))
            });
            // if ($('.reason').hasClass('d-none')) {
            //     $('.submit').addClass('d-none');
            // }
        });

        var teamSelected = function (team) {
            $(".js-players").empty();
            $(".js-players").select2({
                placeholder: "Selecciona jugador",
                allowClear: true,
                data: null,
                width: '100%'
            }); // clear out values selected
            $('.js-players').val(null).trigger('change');
            showPlayers(team);
            var formdata = new FormData(form);
            formdata.append( "_token", Laravel.csrfToken);
            formdata.append('key', 'team');
            formdata.append('value', team);
            fetch('/auth/save-session', { method: 'POST', body: formdata})
            .catch(error => console.error('Error!', error.message))
        }

        var showPlayers = function (team) {
            $('.js-players').removeClass('d-none');
            var teamPlayers = data[team];
            teamPlayers = $.map(teamPlayers, function (obj) {
                var addPlayer = {};
                addPlayer.id = obj;
                addPlayer.text = obj;

                if (obj === Laravel.form.player) {
                    addPlayer['selected'] = true;
                }

                return addPlayer;
            });
            if (!Laravel.form.team) {
                teamPlayers.unshift({
                    id: 0,
                    text: '-- Elige jugador --',
                    "selected": true,
                    "disabled": true
                });
            }
            $('.js-players').select2({
                placeholder: "Selecciona jugador",
                allowClear: true,
                data: teamPlayers,
                width: '100%'
            });
        }

        const scriptURL = 'https://script.google.com/macros/s/AKfycbyf_evHkW895t6ZyXiB081dKX0avGB1n2PnFc-ex6eT7NbMBXik/exec';
        const form = document.forms['premio'];

        form.addEventListener('submit', e => {
            var formdata = new FormData(form);
            $('#sendButton').addClass('loading');

            e.preventDefault()
            fetch(scriptURL, { method: 'POST', body: formdata})
            .then(response => {
                $('#claim').addClass('d-none');
                $('#form').addClass('d-none');
                $('#thanks').removeClass('d-none');
                $('#sendButton').removeClass('loading');
                $('.share a.facebook').attr('href', 'https://www.facebook.com/dialog/share?app_id=1067563583641276&href=https://elfavoritodelaaficion.marca.com/?cid=SMBOSO22801&s_kw=BC-facebook&quote=Yo ya he votado a mi jugador favorito de la temporada 22/23&redirect_uri=https://elfavoritodelaaficion.marca.com/?cid=SMBOSO22801&s_kw=BC-facebook');
                $('.share a.twitter').attr('href', 'https://twitter.com/intent/tweet?url=https://elfavoritodelaaficion.marca.com/?cid=SMBOSO22801&s_kw=BC-twitter&amp;text=Yo ya he votado a mi jugador favorito de la temporada 22/23&amp;wrap_links=true');
            })
            .catch(error => console.error('Error!', error.message))
        });

        function isIE11() {
            if (!!window.MSInputMethodContext && !!document.documentMode) {
                $('#claim').addClass('d-none');
                $('#form').addClass('d-none');
                $('#ie11').removeClass('d-none');
            }
        }
    </script>
</body>

</html>