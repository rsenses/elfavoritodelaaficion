<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Premio al Jugador FULL ELECTRIC, FULL POWER</title>

    <meta name="description" content="MARCA y Hyundai buscan al JUGADOR FAVORITO DE LA AFICIÓN de la temporada 2021/22" />
    <!-- Schema.org markup (Google) -->
    <meta itemprop="name" content="Premio al Jugador Full Electric, Full Power, MARCA y Hyundai" />
    <meta itemprop="description" content="MARCA y Hyundai buscan al JUGADOR FAVORITO DE LA AFICIÓN de la temporada 2021/22" />
    <meta itemprop="image" content="https://elfavoritodelaaficion.marca.com/assets/images/img-main.jpg" />
    <!-- Twitter Card markup-->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@Marca" />
    <meta name="twitter:title" content="Premio al Jugador Full Electric, Full Power, MARCA y Hyundai" />
    <meta name="twitter:description" content="MARCA y Hyundai buscan al JUGADOR FAVORITO DE LA AFICIÓN de la temporada 2021/22" />
    <meta name="twitter:creator" content="Marca" />
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image" content="https://elfavoritodelaaficion.marca.com/assets/images/img-main.jpg" />
    <meta name="twitter:image:alt" content="MARCA y Hyundai buscan al JUGADOR FAVORITO DE LA AFICIÓN de la temporada 2021/22" />
    <!-- Open Graph markup (Facebook, Pinterest) -->
    <meta property="og:title" content="Premio al Jugador Full Electric, Full Power, MARCA y Hyundai" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://elfavoritodelaaficion.marca.com/" />
    <meta property="og:image" content="https://elfavoritodelaaficion.marca.com/assets/images/img-main.jpg" />
    <meta property="og:description" content="Lo último en implantes para una sonrisa perfecta. Todo lo que debes saber para lucir una boca perfecta con la mayor seguridad y los mejores profesionales." />

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
            background: #e00109;
            overflow-x: hidden;
        }

        header {
            background: #061939;
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
            margin-top: 15px;
        }

        h1 {
            color: #002b5e;
            font-size: 23px;
            font-weight: 400;
            line-height: 50px;
        }

        h1 span,
        h1 strong {
            background-color: #fff;
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
                top: -157px;
                right: 0;
            }

            .car img {
                max-width: 100%;
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
            <img src="assets/images/img-main.png" alt="El Favorito de la Afición" class="img-fluid d-none d-md-block" />
            <img src="assets/images/img-main-mobile.png" alt="El Favorito de la Afición" class="img-fluid d-sm-block d-md-none" />
            <div class="content">
                <div class="row">
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
                            <a href="https://hyundai.com" target="_blank" style="margin-left: 30px">
                                <img src="assets/images/hyundai.png" alt="Hyundai">
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
                    <img src="assets/images/cup.png" alt="CUP">
                </p>
                <h1 class="text-center"><span>PREMIO AL JUGADOR</span><br><strong>FULL ELECTRIC, FULLPOWER</strong></h1>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <p class="text-center"><strong>MARCA</strong> y <strong>Hyundai</strong> buscan al <strong>JUGADOR FAVORITO DE LA AFICIÓN</strong> de la temporada 2021/22. Vota por el jugador que crees que más se identifica con los valores de Hyundai en el terreno de juego: Potencia, reflejos, destreza, precisión y, por supuesto, Juego limpio. Entre todos los participantes <strong>sortearemos una entrada doble para acudir a la Gala de los Premios MARCA</strong>.</p>
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
            <a href="https://www.hyundai.com/es/modelos/kona.html" target="_blank" class="car"><img src="/assets/images/car.png?v2" alt="HYUNDAI BAYON" /></a>
            <p class="car-text float-left">
                <u>Descubre el</u><br>
                <span>HYUNDAI KONA</span><br>
                Cargado de dinamismo e impulsado<br>por la emoción.
            </p>
            <div class="clearfix"></div>
            <p class="text-center" style="line-height:30px; margin-top: 60px">
                <a href="https://marca.com" target="_blank" rel="noopener">
                    Nadie como tú para dar el mejor premio<br>
                    <img src="assets/images/marca.png" alt="Marca" /></a><br>
                <a href="assets/pdf/bases-legales.pdf?v2" target="_blank" rel="noopener" class="legal">Bases legales</a>
            </p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        TMSBottom();
            
        const data = {
            'Alavés': [
                'Alex Tirlea',
'De la Fuente',
'Edgar',
'Escalante',
'Fernando Pacheco',
'Guidetti',
'Iván Martín',
'Jason',
'Javi López',
'Jesús Owono',
'Joselu',
'Laguardia',
'Lejeune',
'Loum',
'Luis Rioja',
'Manu García',
'Manu Vallejo',
'Martín',
'Miazga',
'Pellistri',
'Pere Pons',
'Pina',
'Rubén Duarte',
'Sivera',
'Sylla',
'Tachi',
'Tenaglia',
'Toni Moya',
'Ximo Navarro',
            ],
            'Athletic Club': [
                'Agirrezabala',
'Balenziaga',
'Berenguer',
'Capa',
'Dani García',
'De Marcos',
'I. Williams',
'Íñigo Martínez',
'Lekue',
'Morcillo',
'Muniain',
'Nico Serrano',
'Nico Williams',
'Núñez',
'Pecharroman',
'Raúl García',
'Sancet',
'Unai Simón',
'Vencedor',
'Vesga',
'Villalibre',
'Vivian',
'Yeray',
'Yuri',
'Zarraga',
            ],
            'Atlético de Madrid': [
                'Carlos Martín',
'Carrasco',
'Correa',
'Cunha',
'De Paul',
'Felipe',
'Giménez',
'Giuliano',
'Griezmann',
'Héctor Herrera',
'Hermoso',
'Javi Serrano',
'Joao Felix',
'Koke',
'Kondogbia',
'Lemar',
'Lodi',
'Luis Suárez',
'Marcos Llorente',
'Oblak',
'Reinildo',
'Saúl',
'Savic',
'Trippier',
'Vrsaljko',
'Wass',
            ],
            'Barcelona': [
                'Abde',
'Adama',
'Agüero',
'Álvaro Sanz',
'Ansu Fati',
'Araujo',
'Aubameyang',
'Balde',
'Braithwaite',
'Busquets',
'Coutinho',
'Dani Alves',
'Dembele',
'Demir',
'Depay',
'Dest',
'Emerson',
'Eric García',
'F. De Jong',
'Ferran',
'Gavi',
'Ilias',
'Jordi Alba',
'Jutglá',
'L. De Jong',
'Lenglet',
'Mingueza',
'Neto',
'Nico',
'Pedri',
'Piqué',
'Riqui Puig',
'Sergi Roberto',
'Ter Stegen',
'Umtiti',
            ],
            'Betis': [
                'Aitor Ruibal',
'Álex Moreno',
'Bartra',
'Bellerín',
'Borja Iglesias',
'Calderón',
'Camarasa',
'Canales',
'Claudio Bravo',
'Edgar González',
'Fekir',
'Guardado',
'Guido Rodríguez',
'Joaquín',
'Juanmi',
'Kike Hermoso',
'Lainez',
'Miranda',
'Montoya',
'Paul',
'Pezzella',
'Rober',
'Rodri',
'Rui Silva',
'Sabaly',
'Tello',
'Víctor Ruiz',
'William Carvalho',
'Willian Jose',
            ],
            'Cádiz': [
                'Akapo',
'Álex Fernández',
'Álvaro Jiménez',
'Andone',
'Arzamendia',
'Bastida',
'Cala',
'Calderón',
'Chapela',
'Chust',
'Espino',
'Fali',
'Fede San Emeterio',
'Haroyan',
'Idrissi',
'Iván Alejo',
'Iza',
'Jonsson',
'José Mari',
'Ledesma',
'Lozano',
'Lucas Pérez',
'Luis Hernández',
'Marcos Mauro',
'Negredo',
'Osmajic',
'Pedro Benito',
'Perea',
'Raúl Parra',
'Rubén Alcaraz',
'Salvi',
'Sobrino',
'Tomás Alarcón',
            ],
            'Celta de Vigo': [
                'Aidoo',
'Brais Méndez',
'Carlos Domínguez',
'Cervi',
'Denis Suárez',
'Dituro',
'Fontán',
'Fran Beltrán',
'Hugo Mallo',
'Iago Aspas',
'Javi Galán',
'Kevin',
'Murillo',
'Néstor Araujo',
'Nolito',
'Pineda',
'Santi Mina',
'Solari',
'Tapia',
'Thiago Galhardo',
'Veiga',
            ],
            'Elche': [
                'Barragán',
'Benedetto',
'Bigas',
'Carrillo',
'Casilla',
'Diego González',
'Edgar Badía',
'Enzo Roco',
'Ezequiel Ponce',
'Fidel',
'Gonzalo Verdú',
'Gumbau',
'John',
'Josan',
'Josema',
'Kike Pérez',
'Lucas Boyé',
'Marcone',
'Mascarell',
'Mojica',
'Olaza',
'Palacios',
'Pastore',
'Pere Milla',
'Piatti',
'Raúl Guti',
'Tete Morente',
            ],
            'Espanyol': [
                'Aleix Vidal',
'Álvaro Vadillo',
'Cabrera',
'Calero',
'Darder',
'David López',
'Dídac Vilá',
'Diego López',
'Dimata',
'Embarba',
'Fran Mérida',
'Joan García',
'Jofre Carreras',
'Keidi Bare',
'Loren',
'Manu Morlanes',
'Melendo',
'Miguelón',
'Nico Melamed',
'Oier',
'Óscar Gil',
'Pedrosa',
'Puado',
'Raúl de Tomás',
'Recasens',
'Rubén',
'Sergi Gómez',
'Tonny Vilhena',
'Wu Lei',
'Yangel Herrera',
            ],
            'Getafe': [
                'Aleñá',
'Arambarri',
'Borja Mayoral',
'Cabaco',
'Chema',
'Cucurella',
'Cuenca',
'Damián Suárez',
'David Soria',
'Diego Conde',
'Djene',
'Enes Unal',
'Florentino',
'Gonzalo Villar',
'Hugo Duro',
'Iglesias',
'Jankto',
'Macías',
'Maksimovic',
'Mata',
'Mitrovic',
'Nyom',
'Okay',
'Olivera',
'Óscar',
'Poveda',
'Sandro Ramírez',
'Silva',
'Timor',
'Vitolo',
            ],
            'Granada CF': [
                'Aarón',
'Abram',
'Alberto Soro',
'Antonio Puertas',
'Arezo',
'Arias',
'Bacca',
'Collado',
'Duarte',
'Escudero',
'Foulquier',
'Germán',
'Gonalons',
'Isma',
'Jorge Molina',
'Luis Maximiano',
'Luis Milla',
'Luis Suárez',
'Machís',
'Monchu',
'Montoro',
'Neva',
'Petrovic',
'Quini',
'Raba',
'Raúl Torrente',
'Rochina',
'Sergio',
'Uzuni',
'Víctor Díaz',
'Yan Eteki',
            ],
            'Levante': [
                'Aitor Fernández',
'Bardhi',
'Campaña',
'Cantero',
'Cárdenas',
'Clerc',
'Coke',
'Dani Gómez',
'De Frutos',
'Franquesa',
'Malsa',
'Marc Pubill',
'Martín Cáceres',
'Melero',
'Miramón',
'Morales',
'Mustafi',
'Óscar Duarte',
'Pablo Martínez',
'Pepelu',
'Postigo',
'Primo',
'Radoja',
'Róber Pier',
'Roger',
'Rúben Vezo',
'Saracchi',
'Soldado',
'Son',
'Vukcevic',
            ],
            'Mallorca': [
                'Abdón Prats',
'Amath',
'Ángel',
'Antonio Sánchez',
'Baba',
'Battaglia',
'Brian Oliván',
'Dani Rodríguez',
'Febas',
'Fer Niño',
'Gayá',
'Gio González',
'Greif',
'Grenier',
'Hoppe',
'Jaume Costa',
'Kang In',
'Kubo',
'Lago Junior',
'Leo Román',
'Llabrés',
'Maffeo',
'Manolo Reina',
'Mboula',
'Muriqi',
'Raíllo',
'Ruiz de Galarreta',
'Russo',
'Salva Sevilla',
'Sastre',
'Sedlar',
'Sergio Rico',
'Valjent',
            ],
            'Osasuna': [
                'Areso',
'Aridane',
'Barbero',
'Benito',
'Brasanac',
'Budimir',
'Chimy Ávila',
'Cote',
'David García',
'Íñigo Pérez',
'Javi Martínez',
'Juan Cruz',
'Juan Pérez',
'Kike Barja',
'Kike García',
'Lucas Torró',
'Manu Sánchez',
'Moncayola',
'Nacho Vidal',
'Oier',
'Ontiveros',
'Ramalho',
'Rober Ibáñez',
'Roberto Torres',
'Rubén García',
'Sergio Herrera',
'Unai Dufur',
'Unai García',
            ],
            'Rayo Vallecano': [
                'Álvaro García',
'Andrés',
'Bebe',
'Catena',
'Ciss',
'Dimitrievski',
'Falcao',
'Fran García',
'Isi',
'Iván Balliu',
'Kevin Rodrigues',
'Luca',
'Maras',
'Mario Hernández',
'Mario Suárez',
'Merquelanz',
'Nteka',
'Óscar Valentín',
'Pozo',
'Santi Comesaña',
'Saveljich',
'Sergi Guardiola',
'Trejo',
'Unai López',
            ],
            'Real Madrid': [
                'Alaba',
'Antonio Blanco',
'Bale',
'Benzema',
'Camavinga',
'Carvajal',
'Casemiro',
'Courtois',
'Dani Ceballos',
'Gila',
'Hazard',
'Isco',
'Jesús Vallejo',
'Jovic',
'Kroos',
'Lucas Vázquez',
'Lunin',
'Marcelo',
'Marco Asensio',
'Mariano',
'Mendy',
'Miguel Gutiérrez',
'Militao',
'Modric',
'Nacho',
'Peter',
'Rodrygo',
'Santos',
'Valverde',
'Vinicius',
            ],
            'Real Sociedad': [
                'Aihen',
'Ander Martín',
'Aritz Elustondo',
'Barrenetxea',
'Bautista',
'Cristo',
'Djouahra',
'Germán Valera',
'Gorosabel',
'Guevara',
'Guridi',
'Illarramendi',
'Isak',
'Januzaj',
'Jon Pacheco',
'Le Normand',
'Lobete',
'Mikel Merino',
'Oyarzabal',
'Portu',
'Rafinha',
'Remiro',
'Rico',
'Robert Navarro',
'Ryan',
'Silva',
'Sorloth',
'Turrientes',
'Zaldua',
'Zubeldia',
'Zubimendi',
            ],
            'Sevilla': [
                'Acuña',
'Augustinsson',
'Bono',
'Delaney',
'Diego Carlos',
'Dmitrovic',
'En-Nesyri',
'Fernando',
'Gudelj',
'Iván',
'Javi Díaz',
'Jesús Navas',
'Jordán',
'Juanlu',
'Kounde',
'Lamela',
'Luismi Cruz',
'Martial',
'Montiel',
'Munir',
'Ocampos',
'Óliver',
'Papu Gómez',
'Rafa Mir',
'Rakitic',
'Rekik',
'Suso',
'Tecatito',
            ],
            'Valencia CF': [
                'Alderete',
'Bryan',
'Carlos Soler',
'Cheryshev',
'Cillessen',
'Comert',
'Diakhaby',
'Gabriel Paulista',
'Gayá',
'Guedes',
'Helder Costa',
'Hugo Guillamón',
'Ilaix Moriba',
'Jaume',
'Jesús Vázquez',
'Koba',
'Lato',
'Mamardashvili',
'Marcos Andre',
'Maxi Gómez',
'Mosquera',
'Musah',
'Piccini',
'Racic',
'Rubén Iranzo',
'Thierry Correia',
'Yellu',
            ],
            'Villarreal': [
                'Alberto Moreno',
'Albiol',
'Asenjo',
'Aurier',
'Boulaye Dia',
'Capoue',
'Chukwueze',
'Coquelin',
'Danjuma',
'Estupiñán',
'Foyth',
'Gerard',
'Iborra',
'Lo Celso',
'Mandi',
'Mario',
'Moi Gómez',
'Nico Jackson',
'Paco Alcácer',
'Parejo',
'Pau Torres',
'Pedraza',
'Rubén Peña',
'Rulli',
'Trigueros',
'Yeremi Pino',
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
                $('.share a.facebook').attr('href', 'https://www.facebook.com/dialog/share?app_id=1067563583641276&href=https://elfavoritodelaaficion.marca.com/?cid=SMBOSO22801&s_kw=BC-facebook&quote=Yo ya he votado al mejor jugador de la temporada&redirect_uri=https://elfavoritodelaaficion.marca.com/?cid=SMBOSO22801&s_kw=BC-facebook');
                $('.share a.twitter').attr('href', 'https://twitter.com/intent/tweet?url=https://elfavoritodelaaficion.marca.com/?cid=SMBOSO22801&s_kw=BC-twitter&amp;text=Yo ya he votado al mejor jugador de la temporada&amp;wrap_links=true');
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