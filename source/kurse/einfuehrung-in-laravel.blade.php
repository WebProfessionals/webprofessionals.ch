@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Laravel | Kurs | Web Professionals</title>

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
            <span class="webpro-hero1">Laravel</span><br>
            <span class="webpro-hero2">Leg los</span><br><br>
            <a class="waves-effect waves-light btn webpro-red">Jetzt anmelden</a>
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
                    'part2'    =>  'Laravel'
                ])
                <nav class="webpro-nav-lvl2">
                    <a href="/kurse/einfuehrung-in-angularjs/">Einführung in AngularJS</a><br>
                    <a class="webpro-subnav-active" href="/kurse/einfuehrung-in-laravel/">Einführung in Laravel</a><br>
                    <a href="/kurse/wordpress-themes-selber-programmieren/">WordPress Themes programmieren</a><br>
                    <a href="/kurse/eigene-stock-fotos-erstellen/">eigene Stock Fotos erstellen</a><br><br>
                    <a href="/kurse/anmeldung/">Anmeldung</a>
                </nav>
            </div>
            <div class="hide-on-med-and-up">
                @include('_partials.header1', [
                    'part1'    =>  'Basis Lehrgang',
                    'part2'    =>  'Web Integrator'
                ])
            </div>
        </div>
        <div class="col l7 m6 webpro-right">
            <div id="beschreibung" class="section scrollspy">
                <div class="headline">„Laravel – the PHP framework for web artisans.“ Laravel ist ein Open-Source PHP Framework der neuen Generation mit welchem das PHP Programmieren (wieder) Spass macht. Nebst Unterstützung zur Erhöhung der Produktivität bietet Laravel die Grundlage für sauberen, strukturierten Code.</div>
            </div>

            <div id="inhalte" class="section scrollspy">
                <h2>Inhalte:</h2>
                <ul class="webpro-list">
                    <li>Composer und los geht’s!</li>
                    <li>Alternative: Laravel in der Vagrant Box</li>
                    <li>Laravel Projekt anlegen</li>
                    <li>Datenbank Migrationen, Seeds und so weiter</li>
                    <li>Routen</li>
                    <li>Controller</li>
                    <li>Views</li>
                    <li>Template Engine Blade</li>
                    <li>Eloquent ORM</li>
                    <li>Veröffentlichung von Projekten</li>
                </ul>
            </div>

            <div id="dauer" class="section scrollspy">
                <h2>Voraussetzungen:</h2>
                <ul class="webpro-list">
                    <li>gute PHP Kenntnisse (bei Unsicherheit betreffend dem Vorwissen helfen wir gerne mit einem Einstufungsgespräch)</li>
                </ul>
            </div>

            <div id="termine" class="section scrollspy">
                <h2>Lektionen, Daten:</h2>
                <p>8 Kursabende à 4 Lektionen (Total 32 Lektionen). Jeweils Dienstags von 18.30 Uhr bis 21.30 Uhr. Beginn: Herbst 2016</p>
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
                <a class="waves-effect waves-light btn webpro-red">Jetzt anmelden</a>
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
                    Florian Gächter ist Senior Frontend Developer bei der Namics AG. Nach einem angefangenen Biotechnologie-Studium ist er (Veith Zäch sei Dank) der Welt des Frontend Developments verfallen. Durch seine Leidenschaft für hübsche Frontends und Clean Code ist er für die Web Professionals Dozent erster Wahl für Programmier-Themen mit sichtbaren Resultaten.
                </p>
            </div>

        </div>
    </div>

@endsection
