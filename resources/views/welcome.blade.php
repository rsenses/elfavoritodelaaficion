<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Primer Premio de la Afición</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .hidden {
                display: none;
                opacity: 0;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Primer Premio de la Afición
                </div>

                @if (!$is_logged)
                    <p>
                        <a href="https://seguro.marca.com/registro/v2/?url_redirect=https%3A%2F%2Fseguro.marca.com%2Fueregistro%2Fv1%2Foauth%2Fservidor%2Fsolicitud-autorizacion%3Fresponse_type%3Dcode%26client_id%3D{{ env('OAUTH_CLIENT_ID') }}%26redirect_uri%3D{{ urlencode(env('APP_URL')) }}%2Flogin&csp={{ env('OAUTH_CLIENT_ID') }}">Autentificación</a>
                        <span class="hidden">{{ env('APP_URL') }}</span>
                    </p>
                @else
                    <form name="premio" id="form">
                        <input type="hidden" name="nil" value="{{ $user['nil'] }}">
                        <input type="hidden" name="email" value="{{ $user['email'] }}">
                        <input type="hidden" name="name" value="{{ $user['name'] }}">
                        <input type="hidden" name="last_name" value="{{ $user['last_name'] }}">
                        <input type="hidden" name="last_name2" value="{{ $user['last_name2'] }}">
                        <input type="hidden" name="zip" value="{{ $user['zip'] }}">
        
                        <p>
                            <select class="js-teams" name="team" required></select>
                        </p>
        
                        <p>
                            <select class="js-players hidden" name="player" required></select>
                        </p>
        
                        <p class="reason hidden">
                            <label for="reason">Cuéntanos porqué crees que se lo merece</label><br>
                            <textarea name="reason" id="reason" cols="30" rows="10" placeholder="Por que..." required></textarea>
                        </p>

                        <p class="submit hidden">
                            <button type="submit">VOTAR</button>
                        </p>
                    </form>
                    <div id="thanks" class="hidden">
                        Gracias
                    </div>
                @endif
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        <script>
            var players = {
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
                var id = 1;
                teams = $.map(teams, function (obj) {
                    var team = {};
                    team.id = obj;
                    team.text = obj;

                    ++id;

                    return team;
                });
                teams.unshift({
                    id: 0,
                    text: '-- Elige equipo --',
                    "selected": true,
                    "disabled": true
                });
                $('.js-teams').select2({
                    data: teams,
                    width: '100%'
                });
                $('.js-teams').on('select2:select', function (e) {
                    $('.js-players').removeClass('hidden');
                    var team = e.params.data.text;
                    var teamPlayers = players[team];
                    teamPlayers.unshift({
                        id: 0,
                        text: '-- Elige jugador --',
                        "selected": true,
                        "disabled": true
                    });
                    $('.js-players').select2({
                        data: teamPlayers,
                        width: '100%'
                    });
                });
                $('.js-players').on('select2:select', function (e) {
                    $('.reason, .submit').removeClass('hidden');
                });
            });

            const scriptURL = 'https://script.google.com/macros/s/AKfycbyvkc-4kt9zpwbXvXNU9c6mBR7vXTvAZtUAze65Rdeiz4DU8ZHU/exec';
            const form = document.forms['premio'];

            form.addEventListener('submit', e => {
                e.preventDefault()
                fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => {
                    $('#form').addClass('hidden');
                    $('#thanks').removeClass('hidden');
                })
                .catch(error => console.error('Error!', error.message))
            })
        </script>
    </body>
</html>
