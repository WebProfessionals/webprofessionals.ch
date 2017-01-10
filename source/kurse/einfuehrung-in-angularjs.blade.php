@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>AngularJS | Kurs | Web Professionals</title>

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
            <span class="webpro-hero1">AngularJS</span><br>
            <span class="webpro-hero2">Superheroic JavaScript MVW Framework</span><br><br>
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
                    'part2'    =>  'AngularJS'
                ])
                <nav class="webpro-nav-lvl2">
                    <a href="/kurse/auffrischungskurs-html-css/">HTML/CSS Auffrischung und Vertiefung</a><br>
                    <a href="/kurse/hands-on-workshop-polymer-project/">Hands on workshop Polymer</a><br>
                    <a class="webpro-subnav-active" href="/kurse/einfuehrung-in-angularjs/">Einführung in AngularJS</a><br>
                    <a href="/kurse/einfuehrung-in-laravel/">Einführung in Laravel</a><br>
                    <a href="/kurse/wordpress-themes-selber-programmieren/">WordPress Themes programmieren</a><br>
                    <a href="/kurse/eigene-stock-fotos-erstellen/">eigene Stock Fotos erstellen</a><br><br>
                    <a href="/kurse/anmeldung/">Anmeldung</a>
                </nav>
            </div>
            <div class="hide-on-med-and-up">
                @include('_partials.header1', [
                    'part1'    =>  'Einführungskurs',
                    'part2'    =>  'AngularJS'
                ])
            </div>
        </div>
        <div class="col l7 m6 webpro-right">
            <div id="beschreibung" class="section scrollspy">
                <div class="headline">Das Open-Source Framework AngularJS von Google erlaubt mittels HTML und JavaScript die Erstellung von Single-page Web Applikationen. Das Konzept von Model View Controllern (MVC) kann somit auch auf die clientseitige Web-Entwicklung angewendet werden. AngularJS erspart zudem auch einiges an Code-Arbeit, denn durch Databinding und Direktiven werden DOM-Selektionen, Manipulationen sowie Events Handling fast vollständig automatisiert. Dependency Injections erlauben zudem optimales Code Testing und Refactoring.</div>
                <p>In diesem Kurs lernst Du die Grundlagen von AngularJS kennen und setzt das erlernte Wissen in einer praktischen Anwendung um.</p>
            </div>

            <div id="inhalte" class="section scrollspy">
                <h2>Inhalte:</h2>
                <ul class="webpro-list">
                    <li>Einführung in AngularJS, Bootstrapping</li>
                    <li>Aufbau von Templates</li>
                    <li>Filtering Repeaters</li>
                    <li>Two-way Data Binding</li>
                    <li>XHRs und Dependency Injection</li>
                    <li>Templating: Links und Bilder</li>
                    <li>Routing und mehrere Views</li>
                    <li>Filter</li>
                    <li>Event Handler</li>
                    <li>REST und Custom Services</li>
                </ul>
            </div>

            <div id="dauer" class="section scrollspy">
                <h2>Voraussetzungen:</h2>
                <ul class="webpro-list">
                    <li>gute HTML und CSS Kenntnisse</li>
                    <li>gute JavaScript Kenntnisse</li>
                </ul>
            </div>

            <div id="termine" class="section scrollspy">
                <h2>Lektionen, Daten:</h2>
                <p>8 Kursabende à 4 Lektionen (Total 32 Lektionen). Jeweils Dienstags von 18.30 Uhr bis 21.30 Uhr. Beginn: 8. November 2016.</p>
            </div>

            <div id="kosten" class="section scrollspy">
                <h2>Kosten:</h2>
                <p>CHF 1’280</p>
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
