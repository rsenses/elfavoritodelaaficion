<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Premio al Jugador FULL ELECTRIC, FULL POWER</title>

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

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
            /* background: url(assets/images/bg-header.jpg) no-repeat top center; */
            background: #051939;
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

        h1 span, h1 strong {
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
            text-align: center;
            margin-bottom: 30px;
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

        @media (min-width: 960px) {
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

        .select2-results__option, .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #e00109;
        }
        .select2-container--default .select2-selection--single {
            border-radius: 20px;
        }

        .select2-container--default .select2-selection--single {
            border: 0 none;
        }
    </style>

    <script>
        window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
                'form' => $form,
            ]) !!};
    </script>

    <script src="//e00-apps-ue.uecdn.es/tms/js/tms-branded.js"></script>
</head>

<body onload="isIE11()">
    <header>
        <div class="container">
            <img src="assets/images/img-main.jpg" alt="El Favorito de la Afición" class="img-fluid d-none d-md-block" />
            <img src="assets/images/img-main-mobile.jpg" alt="El Favorito de la Afición" class="img-fluid d-sm-block d-md-none" />
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <nav>
                            <p class="text-center d-sm-block d-md-none">
                                @if (!$is_logged)
                                    <a class="login" href="https://seguro.marca.com/registro/v2/?url_redirect=https%3A%2F%2Fseguro.marca.com%2Fueregistro%2Fv1%2Foauth%2Fservidor%2Fsolicitud-autorizacion%3Fresponse_type%3Dcode%26client_id%3D{{ env('OAUTH_CLIENT_ID') }}%26redirect_uri%3D{{ urlencode(env('APP_URL')) }}%2Flogin&csp={{ env('OAUTH_CLIENT_ID') }}">Login</a>
                                @endif
                            </p>
                            <a href="https://marca.com" target="_blank">
                                <img src="assets/images/marca-white.png" alt="MARCA.COM">
                            </a>
                            <a href="https://hyundai.com" target="_blank" style="margin-left: 30px">
                                <img src="assets/images/hyundai.png" alt="Hyundai">
                            </a>
                            @if (!$is_logged)
                                <a class="float-right login d-none d-md-block" href="https://seguro.marca.com/registro/v2/?url_redirect=https%3A%2F%2Fseguro.marca.com%2Fueregistro%2Fv1%2Foauth%2Fservidor%2Fsolicitud-autorizacion%3Fresponse_type%3Dcode%26client_id%3D{{ env('OAUTH_CLIENT_ID') }}%26redirect_uri%3D{{ urlencode(env('APP_URL')) }}%2Flogin&csp={{ env('OAUTH_CLIENT_ID') }}">Login</a>
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
                        <p class="text-center"><strong>MARCA</strong> y <strong>Hyundai</strong> buscan al <strong>JUGADOR FAVORITO DE LA AFICIÓN</strong> de la temporada 2019/20. Vota por el jugador que crees que más se identifica con los valores de Hyundai en el terreno de juego: Potencia, reflejos, destreza, precisión y, por supuesto, Juego limpio. Podrás  acudir a la <strong>Gala de los Premios MARCA</strong>pañante.</p>
                    </div>
                </div>
            </div>
            <a href="#claim" class="cta btn btn-light">PARTICIPA</a>
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
        <section id="claim">
            {{-- <div class="row d-sm-block d-md-none">
                <div class="col social text-center">
                    <a href="#claim" target="_blank" rel="nofollow noopener"><img src="assets/images/icon-twitter.png" alt="Twitter" /></a>
                    <a href="#claim" target="_blank" rel="nofollow noopener"><img src="assets/images/icon-ig.png" alt="Instagram" /></a>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-md-12 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <p>¡VAMOS A POR ELLO!</p>
                </div>
            </div>
        </section>
        <section id="form">
            <div class="row">
                <div class="col-md-12 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
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
                            <textarea name="reason" class="form-control" id="reason" placeholder="Máximo 140 caracteres" required>{{ $form['reason'] }}</textarea>
                        </div>

                        <p class="submit text-center {{ $form['player'] && $form['team'] ? '' : 'd-none' }}">
                            @if (!$is_logged)
                                <a class="btn btn-light" href="https://seguro.marca.com/registro/v2/?url_redirect=https%3A%2F%2Fseguro.marca.com%2Fueregistro%2Fv1%2Foauth%2Fservidor%2Fsolicitud-autorizacion%3Fresponse_type%3Dcode%26client_id%3D{{ env('OAUTH_CLIENT_ID') }}%26redirect_uri%3D{{ urlencode(env('APP_URL')) }}%2Flogin&csp={{ env('OAUTH_CLIENT_ID') }}">VOTAR</a>
                            @else
                                <button class="btn btn-light" id="sendButton" type="submit" id="sendButton">
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
                    <h2>¡Gracias!</h2>
                    <p class="text-center">TU REGISTRO SE HA COMPLETADO CON ÉXITO<br />AHORA YA PUEDES PARTICIPAR</p>
                    <a href="https://discord.gg/6UAfQMs" class="btn btn-success" target="_blank" rel="nofollow noopener">COMIENZA AQUÍ</a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <a href="https://www.hyundai.com" target="_blank" class="car"><img src="assets/images/car.png" alt="HYUNDAI TUCSON N Line" /></a>
            <p class="car-text float-left">
                <u>Descubre el NUEVO</u><br>
                <span>HYUNDAI TUCSON N Line</span><br>
                Cargado de dinamismo e impulsado<br>por la emoción.
            </p>
            <div class="clearfix"></div>
            <p class="text-center" style="line-height:30px; margin-top: 60px">
                <a href="https://marca.com" target="_blank" rel="noopener">
                    Nadie como tú para dar el mejor premio<br>
                    <img src="assets/images/marca.png" alt="Marca" /></a><br>
                    <a href="assets/bases-fornite.pdf" target="_blank" rel="noopener" class="legal">Bases legales</a>
            </p>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        TMSBottom();
            
        const players = {
            'Alavés': [
                'John Guidetti',
                'Aleix Vidal',
                'Rubén Duarte',
                'Manu García',
                'Tomás Pina',
                'Rodrigo Ely',
                'Fernando Pacheco',
                'Olivier Verdon',
                'Víctor Laguardia',
                'Tachi',
                'Rafa Navarro',
                'Paulino De la Fuente',
                'Ljubomir Fejsa',
                'Oliver Burke',
                'Martín Aguirregabiria',
                'Roberto Jiménez',
                'Ximo Navarro',
                'Patrick Twumasi',
                'Luis Rioja',
                'Borja Sainz',
                'Adrián Marín',
                'Lisandro Magallán',
                'Joselu',
                'Aritz Castro',
                'Lucas Pérez',
                'Mahmoud Abdallahi',
                'Víctor Camarasa',
                'Ismael Gutiérrez',
                'Javier López',
                'José Luis Rodríguez',
                'Pere Pons',
                'Edgar Méndez',
            ],
            'Athletic Club': [
                'Dani García',
                'Unai López',
                'Ibai Gómez',
                'Iñaki Williams',
                'Iago Herrerín',
                'Mikel San José',
                'Gaizka Larrazabal',
                'Jokin Ezkieta',
                'Íñigo Martínez',
                'Íñigo Lekue',
                'Unai Núñez',
                'Iker Muniain',
                'Unai Vencedor',
                'Yeray Álvarez',
                'Jon Sillero',
                'Oihan Sancet',
                'Mikel Balenziaga',
                'Óscar De Marcos',
                'Beñat Etxebarria',
                'Jesús Areso',
                'Yuri',
                'Iñigo Córdoba',
                'Ander Capa',
                'Raúl García',
                'Asier Villalibre',
                'Cristian Ganea',
                'Mikel Vesga',
                'Ander Iru',
                'Dani Vivian',
                'Kenan Kodro',
                'Unai Simón',
            ],
            'Atlético de Madrid': [
                'Rodrigo Riquelme',
                'Thomas Lemar',
                'Toni Moya',
                'Álex dos Santos',
                'Marcos Llorente',
                'Kieran Trippier',
                'Jan Oblak',
                'João Félix',
                'Santiago Arias',
                'Ángel Correa',
                'Felipe',
                'Yannick Carrasco',
                'Vitolo',
                'Stefan Savic',
                'Darío Poveda',
                'Antonio Adán',
                'Sergio Camello',
                'José Giménez',
                'Óscar Clemente',
                'Saúl Ñíguez',
                'Manuel Sánchez',
                'Sime Vrsaljko',
                'Diego Costa',
                'Renan Lodi',
                'Thomas Partey',
                'Álvaro García',
                'Mario Hermoso',
                'German Valera',
                'Ricard Sánchez',
                'Ivan Saponjic',
                'Koke',
                'Álvaro Morata',
                'Héctor Herrera',
            ],
            'Barcelona': [
                'Monchu',
                'Lionel Messi',
                'Marc-André ter Stegen',
                'Luis Suárez',
                'Samuel Umtiti',
                'Arthur',
                'Arturo Vidal',
                'Neto',
                'Oriol Busquets',
                'Clément Lenglet',
                'Antoine Griezmann',
                'Iñaki Peña',
                'Ousmane Dembélé',
                'Frenkie de Jong',
                'Ivan Rakitic',
                'Sergio Busquets',
                'Martin Braithwaite',
                'Nélson Semedo',
                'Moussa Wague',
                'Sergio Akieme',
                'Jorge Cuenca',
                'Arnau Tenas',
                'Ansu Fati',
                'Sergi Roberto',
                'Jordi Alba',
                'Jean-Clair Todibo',
                'Gerard Piqué',
                'Junior Firpo',
                'Riqui Puig',
                'Dani Morer',
                'Ronald Araújo',
                'Rey Manaj',
                'Álex Collado',
            ],
            'Celta de Vigo': [
                'Player Name',
                'Okay Yokuslu',
                'Fran Beltrán',
                'Juan Hernández',
                'Joseph Aidoo',
                'Brais Méndez',
                'Gabriel Fernández',
                'Jozabed',
                'Rubén Blanco',
                'Lucas Olaza',
                'Hugo Mallo',
                'Sergio Carreira',
                'Brais Rodríguez',
                'Iago Aspas',
                'David Juncà',
                'Néstor Araújo',
                'Kevin Vázquez',
                'Sergio Bermejo',
                'Iván Villar',
                'Robert Mazán',
                'Fran Vieites',
                'Jeison Murillo',
                'Pape Cheikh',
                'Sergio Álvarez',
                'Jacobo González',
                'José Manuel Fontán',
                'Pione Sisto',
                'Jorge Sáenz',
                'Dragan Rosic',
                'Nolito',
                'Iker Losada',
                'Filip Bradaric',
                'Rafinha',
                'Santi Mina',
                'Iago Domínguez',
                'Emre Mor',
                'Fedor Smolov',
                'Denis Suárez',
            ],
            'Eibar': [
                'Paulo Oliveira',
                'Takashi Inui',
                'Álvaro Tejero',
                'Ekhi Bravo',
                'Pape Diop',
                'Pablo De Blasis',
                'Anaitz Arbilla',
                'Charles',
                'Yoel Rodríguez',
                'Sergio Cubero',
                'Rober Correa',
                'Sebastián Cristóforo',
                'Miguel Ángel Atienza',
                'Sergi Enrich',
                'Quique González',
                'Marko Dmitrovic',
                'Iván Ramis',
                'Esteban Burgos',
                'Pedro León',
                'Miguel Marí',
                'Cote',
                'Rafa Soares',
                'Unai Dufur',
                'Edu Expósito',
                'Sergio Álvarez',
                'Pedro Bigas',
                'Kike García',
            ],
            'Espanyol': [
                'Víctor Campuzano',
                'Facundo Ferreyra',
                'Nicolás Melamed',
                'Naldo',
                'Óscar Melendo',
                'Ander Iturraspe',
                'Bernardo Espinosa',
                'David López',
                'Víctor Sánchez',
                'Pol Lozano',
                'Ferrán Jutglà',
                'Roman Tugarinov',
                'Dídac Vilá',
                'Jonathan Calleri',
                'Leandro Cabrera',
                'Ricard Pujol',
                'Fernando Calero',
                'Pipa',
                'Sergi Darder',
                'Andrés Prieto',
                'Diego López',
                'Adrián Embarba',
                'Kevin Soni',
                'Oier Olazábal',
                'Daniel Villahermosa',
                'Raúl de Tomás',
                'Mohamed Ezzarfani',
                'Adrián López',
                'Matías Vargas',
                'Javi López',
                'Víctor Gómez',
                'Marc Roca',
                'Wu Lei',
                'Adrià Pedrosa',
            ],
            'Getafe': [
                'Mauro Arambarri',
                'Jaime Mata',
                'Ángel Rodríguez',
                'Nemanja Maksimovic',
                'Mathías Olivera',
                'Damián Suárez',
                'Hugo Duro',
                'Amath Ndiaye',
                'Oghenekaro Etebo',
                'Faycal Fajr',
                'Leandro Chichizola',
                'Florent Poulolo',
                'David Timor',
                'Jason',
                'Marc Cucurella',
                'Djené Dakonam',
                'Xabier Etxeita',
                'Allan-Roméo Nyom',
                'Jorge Molina',
                'Chema Rodríguez',
                'Filip Manojlovic',
                'Marcos Lavin',
                'Erick Cabaco',
                'David Soria',
                'Francisco Portillo',
            ],
            'Granada CF': [
                'Antonio Puertas',
                'José Antonio González',
                'Domingos Duarte',
                'Yangel Herrera',
                'Darwin Machís',
                'Neyder Lozano',
                'Quini',
                'Rui Silva',
                'Unai Etxebarria',
                'Antonio Montoro',
                'Dimitri Foulquier',
                'Roberto Soldado',
                'Adrián Butzke',
                'Álvaro Vadillo',
                'Aarón Escandell',
                'Fede Vico',
                'Isma Ruiz',
                'Yan Eteki',
                'Maxime Gonalons',
                'Víctor Díaz',
                'Gil Dias',
                'Andorinha',
                'Carlos Neva',
                'Ángel Montoro',
                'Antonio Aranda',
                'Mario Rodríguez',
                'Carlos Fernández',
                'Ramón Azeez',
                'Ismail Köybasi',
                'Germán Sánchez',
                'José Antonio Martínez',
                'Jesús Vallejo',
                'Álex Martínez',
                'Antoñin',
                'Pepe Sanchez',
            ],
            'Leganés': [
                'Recio',
                'Dimitrios Siovas',
                'Unai Bustinza',
                'Javier Eraso',
                'Mamadou Koné',
                'Jonathan Silva',
                'Marc Navarro',
                'Juan Soriano',
                'Iván Cuéllar',
                'Alexander Szymanowski',
                'Daniel Plomer',
                'Roberto Rosales',
                'Manuel Garrido',
                'Roque Mesa',
                'André Grandi',
                'Roger Assalé',
                'Aymane Mourid',
                'Iván Amores',
                'Iván López',
                'Facundo García',
                'Aitor Ruibal',
                'Javier Avilés',
                'Kenneth Omeruo',
                'Mario del Campo',
                'Rubén Pérez',
                'José Arnáiz',
                'Ibrahim Amadou',
                'Miguel Ángel Guerrero',
                'Óscar Rodríguez',
                'Guido Carrillo',
                'Kévin Rodrigues',
                'Chidozie Awaziem',
                'Pablo Lombo',
                'Bryan Gil',
                'Rodrigo Tarín',
            ],
            'Levante': [
                'Hernâni',
                'José Campaña',
                'Coke',
                'Iván López',
                'Sergio León',
                'Carlos Clerc',
                'Koke Vegas',
                'Aitor Fernández',
                'Sergio Postigo',
                'Nikola Vukcevic',
                'Daniel Cárdenas',
                'Eliseo Falcón',
                'Toño',
                'Gonzalo Melero',
                'Pablo Martínez',
                'Giorgi Kochorashvili',
                'Enis Bardhi',
                'Rúben Vezo',
                'Rubén Rochina',
                'José Luis Morales',
                'Jorge Miramón',
                'Nemanja Radoja',
                'Roger Martí',
                'Raphael Dwamena',
                'Rubén García',
                'Joan Monterde',
                'Rober Pier',
                'Gonzalo Pereira',
                'Borja Mayoral',
                'Álex Blesa',
                'Óscar Duarte',
            ],
            'Mallorca': [
                'Lago Junior',
                'Bryan Reyna',
                'Pablo Chavarria',
                'Miquel Parera',
                'Abdón Prats',
                'Salva Sevilla',
                'Martin Valjent',
                'Marc Pedraza',
                'Aleix Febas',
                'Fran Gámez',
                'Juan Hernández',
                'Lumor Agbenyenu',
                'Aleksander Sedlar',
                'Rafael Obrador',
                'Luka Romero',
                'Antonio Raíllo',
                'Pere García Bauzá',
                'Joan Sastre',
                'Takefusa Kubo',
                'Yannis Salibur',
                'Alejandro Pozo',
                'Aleksandar Trajkovski',
                'Fran González',
                'Dani Rodríguez',
                'Xisco Campos',
                'Sergio Moyita',
                'Ante Budimir',
                'Josep Señé',
                'Manolo Reina',
                'Iddrisu Baba',
                'Jesus Ruiz',
            ],
            'Osasuna': [
                'Endika Irigoyen',
                'Aridane Hernández',
                'Nacho Vidal',
                'Rubén García',
                'Iñigo Pérez',
                'Jon Moncayola',
                'David García',
                'Rubén Martínez',
                'Marc Cardona',
                'Juan Pérez',
                'Fran Mérida',
                'Unai García',
                'Adrián López',
                'Aimar Oroz',
                'Enric Gallego',
                'Chimy Avila',
                'Darko Brasanac',
                'Raúl Navas',
                'Oier Sanjurjo',
                'Robert Ibáñez',
                'Kike Barja',
                'Sergio Herrera',
                'José Arnáiz',
                'Toni Lato',
                'Gorka Zabarte',
                'Facundo Roncaglia',
                'Iñaki Álvarez',
                'Jose Javier Hualde',
                'Pervis Estupiñán',
                'Javi Martínez',
                'Roberto Torres',
            ],
            'Real Betis': [
                'Antonio Barragán',
                'Diego Lainez',
                'Loren Morón',
                'Zouhair Feddal',
                'Daniel Rebollo',
                'Emerson',
                'Joel Robles',
                'Alfonso Pedraza',
                'Carles Aleñá',
                'Álex Moreno',
                'José Luis Trápaga',
                'Sergio Canales',
                'Sidnei',
                'William Carvalho',
                'Juanmi',
                'Ricardo Visus',
                'Joaquín',
                'Nabil Fekir',
                'Juan Moreno',
                'Nil Garrido',
                'Carlos Marín',
                'Marc Bartra',
                'Guido Rodríguez',
                'Dani Martín',
                'Borja Iglesias',
                'Jime',
                'Ángel Baena',
                'Edgar González',
                'David Ramos',
                'Aissa Mandi',
                'Andrés Guardado',
                'Cristian Tello',
                'Javi García',
                'Rodrigo Sánchez',
                'Alejandro Meléndez',
                'Raul García',
            ],
            'Real Madrid': [
                'Brahim Díaz',
                'Mariano',
                'Marcelo',
                'Gareth Bale',
                'Javi Hernández',
                'Lucas Vázquez',
                'Thibaut Courtois',
                'Marco Asensio',
                'Raphael Varane',
                'Nacho',
                'Karim Benzema',
                'Luka Modric',
                'Federico Valverde',
                'Miguel Gutiérrez',
                'Casemiro',
                'Rodrygo',
                'Alphonse Areola',
                'Sergio Ramos',
                'Vinícius Júnior',
                'Eden Hazard',
                'Eder Militão',
                'Toni Kroos',
                'Luka Jovic',
                'Isco',
                'Adrián De la Fuente',
                'Luis López',
                'Daniel Carvajal',
                'Ferland Mendy',
                'Diego Altube',
                'James Rodríguez',
            ],
            'Real Sociedad': [
                'Andoni Gorosabel',
                'Näis Djouahra',
                'Mikel Oyarzabal',
                'Jon Bautista',
                'Aritz Elustondo',
                'Roberto López',
                'Willian José',
                'David Zurutuza',
                'Robin Le Normand',
                'Gerónimo Rulli',
                'Portu',
                'Joseba Zaldua',
                'Martín Zubimendi',
                'Álex Remiro',
                'Diego Llorente',
                'Julen Lobete',
                'Miguel Ángel Moyá',
                'Ander Guevara',
                'Nacho Monreal',
                'Jon Pacheco Dozagarat',
                'Ander Barrenetxea',
                'Igor Zubeldia',
                'Adnan Januzaj',
                'Asier Illarramendi',
                'Aritz Arambarri',
                'Mikel Merino',
                'Aihen Muñoz',
                'Martin Ødegaard',
                'Luca Sangalli',
                'Andoni Zubiaurre',
                'Alexander Isak',
            ],
            'Real Valladolid': [
                'Stiven Plaza',
                'Toni Villa',
                'Joaquín Fernández',
                'Rubén Alcaraz',
                'Óscar Plano',
                'Nacho',
                'Antoñito',
                'Mohammed Salisu',
                'Sergi Guardiola',
                'Fede San Emeterio',
                'Javi Sánchez',
                'Sandro Ramírez',
                'Míchel',
                'Javi Moyano',
                'Pablo Hervías',
                'Matheus Fernandes',
                'Pedro Porro',
                'Kike Pérez',
                'Raúl García',
                'Víctor García',
                'Waldo Rubio',
                'Kiko Olivas',
                'Enes Ünal',
                'Samu Pérez',
                'Álvaro Aguado',
                'Jordi Masip',
                'Roberto Corral',
                'Diego Alende',
                'José Antonio Caro',
                'Hatem Ben Arfa',
                'Miguel De la Fuente',
            ],
            'Sevilla': [
                'Joan Jordán',
                'Franco Vázquez',
                'Nemanja Gudelj',
                'Munir El Haddadi',
                'Marc Gual',
                'Sergio Reguilón',
                'Lucas Ocampos',
                'Jules Koundé',
                'José Mena',
                'Diego Carlos',
                'Genaro Rodríguez',
                'Javi Díaz',
                'Jesús Navas',
                'Sergi Gómez',
                'Sébastien Corchia',
                'Luuk de Jong',
                'Pablo Pérez Rico',
                'Suso',
                'Felipe Chacartegui',
                'Rony Lopes',
                'Éver Banega',
                'Fernando',
                'Alfonso Pastor',
                'José Lara',
                'Youssef En-Nesyri',
                'Tomás Vaclik',
                'Juanlu Sanchez',
                'Sergio Escudero',
                'Yassine Bounou',
                'Óliver Torres',
            ],
            'Valencia CF': [
                'Cristian Rivero',
                'Jasper Cillessen',
                'Cristiano Piccini',
                'Mouctar Diakhaby',
                'Àlex Carbonell',
                'Toni Lato',
                'Jaume Doménech',
                'Daniel Parejo',
                'Francis Coquelin',
                'Lee Kang-In',
                'Manu Vallejo',
                'Ferran Torres',
                'Gonçalo Guedes',
                'José Gayà',
                'Rubén Sobrino',
                'Koba Koindredi',
                'Vicente Esquerdo',
                'Thierry Correia',
                'Pablo Gozálbez',
                'Daniel Wass',
                'Jaume Costa',
                'Maxi Gómez',
                'Carlos Soler',
                'Eliaquim Mangala',
                'Kevin Gameiro',
                'Rodrigo Moreno',
                'Adrià Guerrero',
                'Javi Jiménez',
                'Hugo Guillamón',
                'Alessandro Florenzi',
                'Denis Cheryshev',
                'Guillem Molina',
                'Geoffrey Kondogbia',
                'Gabriel Paulista',
            ],
            'Villarreal': [
                'Carlos Bacca',
                'Manu Trigueros',
                'André-Frank Zambo Anguissa',
                'Santi Cazorla',
                'Sergio Asenjo',
                'Vicente Iborra',
                'Raúl Albiol',
                'Manuel Morlanes',
                'Andrés Fernández',
                'Filip Jorgensen',
                'Fernando Niño',
                'Miguel Angel Leal',
                'Moi Gómez',
                'Ramiro Funes Mori',
                'Bruno Soriano',
                'Samuel Chukwueze',
                'Álex Baena',
                'Xavi Quintillá',
                'Iván Martín',
                'Alberto Moreno',
                'Sergio Lozano',
                'Gerard Moreno',
                'Mariano Barbosa',
                'Pau Torres',
                'Andrei Ratiu',
                'Sofian Chakla',
                'Mario Gaspar',
                'Javier Ontiveros',
                'Paco Alcácer',
                'Rubén Peña',
                'Ramiro Guerra',
            ]
        };
        $(document).ready(function() {
            var teams = Object.keys(players);
            teams = $.map(teams, function (obj) {
                var team = {};
                team.id = obj;
                team.text = obj;

                if (obj === Laravel.form.team) {
                    team['selected'] = true;
                }

                return team;
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
                data: teams,
                width: '100%'
            });
            $('.js-teams').on('select2:select', function (e) {
                console.log(e.params.data.text);
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
            console.log(team);
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
            console.log(players);
            var teamPlayers = players[team];
            teamPlayers = $.map(teamPlayers, function (obj) {
                var player = {};
                player.id = obj;
                player.text = obj;

                if (obj === Laravel.form.player) {
                    player['selected'] = true;
                }

                return player;
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
                data: teamPlayers,
                width: '100%'
            });
        }

        const scriptURL = 'https://script.google.com/macros/s/AKfycbyvkc-4kt9zpwbXvXNU9c6mBR7vXTvAZtUAze65Rdeiz4DU8ZHU/exec';
        const form = document.forms['premio'];

        form.addEventListener('submit', e => {
            var formdata = new FormData(form);
            $('#sendButton').addClass('loading');

            e.preventDefault()
            fetch(scriptURL, { method: 'POST', body: formdata})
            .then(response => {
                $('#form').addClass('d-none');
                $('#thanks').removeClass('d-none');
                $('#sendButton').removeClass('loading');
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