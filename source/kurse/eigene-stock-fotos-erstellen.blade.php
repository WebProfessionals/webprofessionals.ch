@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Stock Fotos | Kurs | Web Professionals</title>

@endsection

{{-- Hero Unit on Top --}}
@section('hero')
    <header class="webpro-hero-image">
        <picture>
            <source media="(max-width: 600px)" srcset="/images/background/web_professionals_034_phone.jpg">
            <img src="/images/background/web_professionals_034.jpg" alt="Web Professionals" title="Web Professionals">
        </picture>
    </header>
    <header class="webpro-hero">
        @include('_partials.herotop')
        <div class="webpro-hero-claim">
            <span class="webpro-hero1">Stock Fotos</span><br>
            <span class="webpro-hero2">Bau dir deine eigene Bilddatenbank</span><br><br>
            <a class="waves-effect waves-light btn webpro-red" href="/kurse/anmeldung/">Jetzt anmelden</a>
        </div>
    </header>
@endsection

{{-- Main Navigation --}}
@section('navigation')
    @include('_partials.navigation', [
        'nav3status'    =>  ' active'
    ])
@endsection

{{-- Main Content --}}
@section('body')
    <div class="row">
        <div class="col l5 m5 s12 webpro-left">
            <div class="webpro-pushpin-left hide-on-small-only">
                @include('_partials.header1', [
                    'part1'    =>  'Einführungskurs',
                    'part2'    =>  'Stock Fotos'
                ])
                <nav class="webpro-nav-lvl2">
                    <a href="/kurse/wordpress-themes-selber-programmieren/">WordPress Themes programmieren</a><br>
                    <a href="/kurse/auffrischungskurs-html-css/">HTML/CSS Auffrischung und Vertiefung</a><br>
                    <a href="/kurse/hands-on-workshop-polymer-project/">Hands-on Workshop Polymer</a><br>
                    <a href="/kurse/einfuehrung-in-laravel/">Einführung in Laravel</a><br>
                    <a class="webpro-subnav-active" href="/kurse/eigene-stock-fotos-erstellen/">eigene Stock Fotos erstellen</a><br><br>
                    <a href="/kurse/anmeldung/">Anmeldung</a>
                </nav>
            </div>
            <div class="hide-on-med-and-up">
                @include('_partials.header1', [
                    'part1'    =>  'Einführungskurs',
                    'part2'    =>  'Stock Fotos'
                ])
            </div>
        </div>
        <div class="col l7 m6 webpro-right">
            <div id="beschreibung" class="section scrollspy">
                <p class="headline">Du findest das richtige Stock Bild für deine Webseite oder Layout nicht? Die Nutzungsrechte stellen ein Problem dar oder sind zu teuer?</p>
                <p>Jeder Grafiker und Webdesigner kommt bei der Arbeit früher oder später mit dem Thema Stock Fotografie in Berührung. Wann ist ein Stockfoto von Vorteil, wann nicht? Wie können sie kreativ eingesetzt werden? Und noch besser: Wie erstelle ich eigene Bilder? Genau das lernst Du in diesem Kurs. Noch besser: am Ende des Kurses hast Du bereits Dein eigenes Archiv an Fotografien.</p>
            </div>

            <div id="termine" class="section scrollspy">
                <h2>Kursziele:</h2>
                <p>Die Teilnehmer erstellen unter Anleitung eigene Stockfotos, die am Ende des Kurses von allen Teilnehmer verwendet werden dürfen.</p>
                <p>Die Kursteilnehmer bestimmen mit, welche Themen abgedeckt werden. Jeder kann seine Interessen einbringen.</p>
                <p>Im Kurs werden Stimmungsfotos erstellt wie auch gelernt wie mit einfachen mitteln Mock-up Produktefotos erstellt werden können.</p>
                <p>Die Teilnehmer fotografieren nicht nur während dem Kurs, sondern hauptsächlich Zwischen den „Mentoraten“.</p>
            </div>

            <div id="inhalte" class="section scrollspy">
                <h2>Inhalte:</h2>
                <ul class="webpro-list">
                    <li>Was sind Stock- Fotos bez. Mock Up Bilder? Rahmenbedingungen klären, Themen erarbeiten und Aufteilen, erste Fotos erstellen</li>
                    <li>Erste Bilder besprechen, Mock-Up Bilder erstellen</li>
                    <li>Bilder besprechen, gemeinsame Bildbearbeitung / Aufbereitung mit CameraRaw und Photoshop- Verschlagwortung der Bilder</li>
                    <li>End-Besprechung und Bilderabgabe</li>
                </ul>
            </div>

            <div id="dauer" class="section scrollspy">
                <h2>Voraussetzungen:</h2>
                <p>Eigene Kamera, Motivation und Interesse am Fotografieren, Kamera und Fotografie Grundkenntnisse. Vorkenntnisse in Bildgestaltung sind empfohlen nicht zwingend. Der Kurs beinhaltet KEINE Fotografiegrundlagen.</p>
            </div>

            <div id="dauer" class="section scrollspy">
                <h2>Zielgruppe:</h2>
                <p>Grafiker, Poligrafen, Webdesigner, Hobby- und Berufsfotografen</p>
            </div>

            <div id="termine" class="section scrollspy">
                <h2>Lektionen, Daten:</h2>
                <p>4 Kursabende à 4 Lektionen (Total 16 Lektionen). Jeweils Donnerstags von 18.30 Uhr bis 21.30 Uhr. Beginn: Datum des nächsten Kurses wird demnächst bekannt gegeben.</p>
            </div>

            <div id="kosten" class="section scrollspy">
                <h2>Kosten:</h2>
                <p>CHF 640</p>
            </div>

            <div id="klassen" class="section scrollspy">
                <h2>Kursort:</h2>
                <p>
                    Techfabrik, Mühlbachstrasse 11a, 9472 Grabs
                </p>
            </div>

            <div id="anmeldung" class="section scrollspy">
                <a class="waves-effect waves-light btn webpro-red" href="/kurse/anmeldung/">Jetzt anmelden</a>
            </div>

            <div id="klassen" class="section scrollspy">
                <h2>Ermässigungen Web Professionals:</h2>
                <p>
                    Teilnehmer der aktuell laufenden Vertiefungs-Lehrgänge (Web Designer, Web Developer) erhalten 25% Ermässigung auf die Kursgebühren.
                </p>
            </div>

            <div id="klassen" class="section scrollspy">
                <h2>Kursleiterin:</h2>
                <p>
                    Michelle Oesch, Wissenschaftliche Fotografin Universität Zürich
                </p>
            </div>

        </div>
    </div>

@endsection
