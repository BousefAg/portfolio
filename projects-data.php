<?php
$projects = [
    'museum' => [
        'type' => 'Interactieve expositie',
        'title' => 'Flamingo Jurk – Amsterdam Museum',
        'image' => 'images/FlamingoJurk.png',
        'detail_image' => 'images/FlamingoJurk.png',
        'detail_alt' => 'Interactieve expositie van de Flamingo Jurk van David Laport',
        'gallery' => [
            [
                'image' => 'images/FlamingoJurk-Installatie.png',
                'alt' => 'De Flamingo Jurk op het rode draaiplateau tussen de spotlight-camera’s',
                'caption' => 'De installatie met de jurk, het draaiplateau en de spotlights.',
            ],
            [
                'image' => 'images/FlamingoJurk-Concept.png',
                'alt' => 'Schets van het expositieconcept met de jurk op een draaiplateau en spotlights aan weerszijden',
                'caption' => 'Schets van het expositieconcept.',
            ],
        ],
        'alt' => 'Interactieve expositie van de Flamingo Jurk van David Laport',
        'summary' => 'Een website en interactieve fysieke installatie rond de iconische Flamingo Jurk (David Laport, 2018), met een roterend platform en instelbare spotlight-camera’s.',
        'sections' => [
            [
                'heading' => 'Een jurk als interactieve expositie',
                'text' => 'Voor het Amsterdam Museum werkte ik aan een website en een fysieke installatie rond de Flamingo Jurk van David Laport. De installatie combineert een draaiend platform met instelbare spotlights.',
            ],
            [
                'heading' => 'Arduino, verlichting en sensoren',
                'text' => 'Ik programmeerde de Arduino en sloot de hardware aan. Met FastLED maakte ik lichteffecten voor de LED-strip. Een ultrasone sensor detecteerde bezoekers en een motor liet de paspop draaien.',
            ],
            [
                'heading' => 'Een uitdaging met de motor',
                'text' => 'De motor vroeg veel stroom, waardoor andere onderdelen niet goed werkten. Ook werd hij warm bij een constante snelheid. Ik onderzocht verschillende oplossingen, maar had uiteindelijk niet de benodigde onderdelen om de motor goed werkend te krijgen.',
            ],
            [
                'heading' => 'Wat ik hiervan leerde',
                'text' => 'Ik leerde problemen met hardware, verlichting en timing stap voor stap te onderzoeken. Ook zag ik hoe belangrijk het is dat software en hardware goed samenwerken.',
            ],
        ],
        'technologies' => ['Arduino', 'C++','Hardware-integratie', 'HTML', 'CSS', 'JavaScript'],
        'url' => 'https://38252.hosts2.ma-cloud.nl/MUSE/',
    ],
    'roomus' => [
        'type' => 'Bedrijfsconcept',
        'title' => 'RoomUs Platform',
        'image' => 'images/RoomUs.png',
        'alt' => 'RoomUs bedrijfswebsite',
        'summary' => 'Een landingspagina en platformpresentatie voor een gepitcht bedrijfsconcept.',
        'sections' => [
            [
                'heading' => 'Een platform voor wonen en huisgenoten',
                'text' => 'RoomUs is een concept voor een platform waarop mensen woonruimte en huisgenoten kunnen vinden. Ik ontwierp en bouwde een prototype dat het bedrijf kon beoordelen.',
            ],
            [
                'heading' => 'Van ontwerp tot werkend prototype',
                'text' => 'Ik was verantwoordelijk voor het volledige proces: van UI/UX-ontwerp en een visueel thema tot de front-end. De website kreeg een moderne uitstraling en een intuïtieve structuur voor de doelgroep.',
            ],
            [
                'heading' => 'Wat ik hiervan leerde',
                'text' => 'Ik leerde merkwaarden te vertalen naar een concreet ontwerp voor een externe klant. Ook werkte ik aan schonere HTML-, CSS- en JavaScript-code, met extra aandacht voor responsiviteit en een logische gebruikerservaring.',
            ],
        ],
        'technologies' => ['HTML', 'CSS', 'Javascript', 'UI/UX'],
        'url' => 'https://38204.hosts2.ma-cloud.nl/RoomUs/',
    ],
    'nintendo' => [
        'type' => 'E-Commerce',
        'title' => 'Nintendo E-Shop Concept',
        'image' => 'images/Nintendo.png',
        'alt' => 'Nintendo webshopconcept',
        'summary' => 'Mijn eerste grote project waarin ik mijn programmeerkennis samenbracht om een complete webshop te bouwen.',
        'sections' => [
            [
                'heading' => 'Een webshop voor Nintendo-producten',
                'text' => 'Ik maakte een conceptwebshop waar bezoekers gamingproducten kunnen bekijken, in hun winkelmandje plaatsen en door het aanbod navigeren.',
            ],
            [
                'heading' => 'Mijn eerste grote webproject',
                'text' => 'Ik bouwde de website zelf en werkte aan de structuur, vormgeving en interactieve onderdelen. Daarbij paste ik mijn kennis van HTML, CSS en JavaScript voor het eerst toe in een groter project.',
            ],
            [
                'heading' => 'Wat ik hiervan leerde',
                'text' => 'Ik leerde hoe ik onderdelen van een website opbouw en laat samenwerken, en hoe belangrijk een duidelijke codestructuur is. Het project gaf me meer vertrouwen om grotere websites te maken en problemen zelfstandig op te lossen.',
            ],
        ],
        'technologies' => ['HTML', 'CSS', 'JavaScript'],
        'url' => 'https://38204.hosts2.ma-cloud.nl/skil/NintendoWebshop/',
    ],
    'react' => [
        'type' => 'Web Application',
        'title' => 'Mijn Eerste React App',
        'image' => 'images/React.png',
        'alt' => 'Mijn React-applicatie met verschillende onderdelen',
        'summary' => 'Mijn eerste project met React, met onder andere een klok, Cookie Clicker, Pokémon API en verschillende andere secties.',
        'sections' => [
            [
                'heading' => 'Meerdere onderdelen in één app',
                'text' => 'Mijn eerste React-app combineert een klok, een Cookie Clicker-game, een Pokémon-sectie, een Top 10 en een About Me-pagina.',
            ],
            [
                'heading' => 'Interactie en Pokémon-data',
                'text' => 'Ik maakte de Cookie Clicker interactief, zodat bezoekers punten kunnen verzamelen en upgrades kopen. Voor de Pokémon-sectie haalde ik met een API informatie op en toonde die in de app.',
            ],
            [
                'heading' => 'Wat ik hiervan leerde',
                'text' => 'Ik leerde componenten te gebruiken om de app op te delen en onderdelen interactief te maken. Ook ontdekte ik hoe je functies zoals een klok, een game en API-data combineert in één React-applicatie.',
            ],
        ],
        'technologies' => ['React', 'CSS Modules', 'JavaScript'],
        'url' => 'https://38204.hosts2.ma-cloud.nl/Bo/EersteReactOpdracht/',
    ]
];
