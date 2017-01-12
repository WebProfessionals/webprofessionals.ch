@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Polymer | Kurs | Web Professionals</title>

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
            <span class="webpro-hero1">Polymer Project</span><br>
            <span class="webpro-hero2">#UseThePlatform to build a better web</span><br><br>
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
                    'part1'    =>  'Hands-on',
                    'part2'    =>  'Polymer'
                ])
                <nav class="webpro-nav-lvl2">
                    <a href="/kurse/auffrischungskurs-html-css/">HTML/CSS Auffrischung und Vertiefung</a><br>
                    <a class="webpro-subnav-active" href="/kurse/hands-on-workshop-polymer-project/">Hands-on Workshop Polymer</a><br>
                    <a href="/kurse/wordpress-themes-selber-programmieren/">WordPress Themes programmieren</a><br>
                    <a href="/kurse/einfuehrung-in-angularjs/">Einführung in AngularJS</a><br>
                    <a href="/kurse/einfuehrung-in-laravel/">Einführung in Laravel</a><br>
                    <a href="/kurse/eigene-stock-fotos-erstellen/">eigene Stock Fotos erstellen</a><br><br>
                    <a href="/kurse/anmeldung/">Anmeldung</a>
                </nav>
                <span class="show-on-medium-and-up">
                    <br><br><img class="responsive-img" src="/images/kurse/polymer-project-logo.png">
                </span>
            </div>
            <div class="hide-on-med-and-up">
                @include('_partials.header1', [
                    'part1'    =>  'Hands-on',
                    'part2'    =>  'Polymer'
                ])
            </div>
        </div>
        <div class="col l7 m6 webpro-right">
            <div id="beschreibung" class="section scrollspy">
                <p class="headline">Polymer ist eine Open-Source JavaScript Library um mittels Web Components modernste Web Applikation zu entwickeln. Der Begriff "Web Components" bezeichnet eine Sammlung an zur Entwicklung gekapselter, modularer und wiederverwendbarer Elementen. Die Library wird von Google Entwicklern sowie freiwilligen Unterstützern als GitHub Projekt programmiert und zur Verfügung gestellt.</p>
                <p>In diesem Hands-on lernst Du die Grundlagen des Polymer Projects kennen und setzt das erlernte Wissen in einer praktischen Anwendung um.</p>
            </div>

            <div id="inhalte" class="section scrollspy">
                <h2>Inhalte:</h2>
                <ul class="webpro-list">
                    <li>Get set up - die Basisinstallation</li>
                    <li>Einführung in Polymer</li>
                    <li>Einführung in Polymer Toolset</li>
                    <li>Verwenden von Polymer</li>
                    <li>Erstellen eigener Komponenten</li>
                    <li>Erstellen einer App/Page mit Polymer</li>
                    <li>Publizieren der App/Page</li>
                </ul>
            </div>

            <div id="dauer" class="section scrollspy">
                <h2>Voraussetzungen Knowhow:</h2>
                <ul class="webpro-list">
                    <li>gute HTML Kenntnisse</li>
                    <li>minimale CSS Kenntnisse</li>
                    <li>minimale JavaScript Kenntnisse</li>
                </ul>
                <h2>Voraussetzungen Arbeitsumgebung:</h2>
                <ul class="webpro-list">
                    <li>eigenes Notebook</li>
                    <li>funktionierendes npm und bower</li>
                </ul>
            </div>

            <div id="termine" class="section scrollspy">
                <h2>Lektionen, Daten:</h2>
                <p>2 Kursabende à 4 Lektionen (Total 8 Lektionen).</p>
                <p>
                    Mittwoch, 08.03.2017, 18:15 Uhr - 21:30 Uhr<br>
                    Mittwoch, 15.03.2017, 18:15 Uhr - 21:30 Uhr
                </p>
            </div>

            <div id="kosten" class="section scrollspy">
                <h2>Kosten:</h2>
                <p>CHF 320</p>
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
                <h2>Kursleiter:</h2>
                <p>
                    Veith Zäch ist Software Architekt bei adcubum. Seit Gründung der Web Professionals gehört er zu den Hauptdozenten bei den fortgeschrittenen Developer Lehrgängen.
                </p>
                <p>
                    Nebenbei braut er Bananenbier, lässt ab und an sein Haus explodieren und will Putzroboter mit Schwarmintelligenz bauen.
                </p>
            </div>

        </div>
    </div>

@endsection
