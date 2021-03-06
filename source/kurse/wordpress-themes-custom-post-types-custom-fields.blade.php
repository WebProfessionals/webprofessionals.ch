@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>WordPress Custom Post Types, Custom Fields und Gutenberg-Editor | Kurs | Web Professionals</title>

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
            <span class="webpro-hero1">WordPress Custom Post Types, Custom Fields und Gutenberg-Editor</span><br>
            <span class="webpro-hero2">Volle Kontrolle über deine Themes!</span><br><br>
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
                    'part1'    =>  'Vertiefungskurs',
                    'part2'    =>  'WordPress Themes'
                ])
                <nav class="webpro-nav-lvl2">
                    <!--<a class="webpro-subnav-active" href="/kurse/wordpress-themes-selber-programmieren/">WordPress Themes programmieren</a><br>-->
                    <a class="webpro-subnav-active" href="/kurse/wordpress-themes-custom-post-types-custom-fields/">WordPress Custom Post Types und Fields</a><br>
                    <!--<a href="/kurse/auffrischungskurs-html-css/">HTML/CSS Auffrischung und Vertiefung</a><br>-->
                    <!--<a href="/kurse/hands-on-workshop-polymer-project/">Hands-on Workshop Polymer</a><br>-->
                    <!--<a href="/kurse/einfuehrung-in-laravel/">Einführung in Laravel</a><br>-->
                    <!--<a href="/kurse/eigene-stock-fotos-erstellen/">eigene Stock Fotos erstellen</a><br><br>-->
                    <a href="/kurse/anmeldung/">Anmeldung</a>
                </nav>
            </div>
            <div class="hide-on-med-and-up">
                @include('_partials.header1', [
                    'part1'    =>  'Vertiefungskurs',
                    'part2'    =>  'WordPress Themes'
                ])
            </div>
        </div>
        <div class="col l7 m6 webpro-right">
            <div id="beschreibung" class="section scrollspy">
                <p class="headline">
                    Die Grundlagen der Erstellung eines eigenen Wordpress Themes kennst du bereits und möchtest deine Themes nun entsprechend erweitern können.
                    Eigene Inhaltstypen (Produkte, Mitarbeiter, Filialen, Projekte etc.) erstellen. Eigene Felder hinzufügen. Bei diesem Kurs bist du genau richtig.
                </p>
                <p>
                    Im Rahmen dieses Intensiv-Kurses erlernst du die Erstellung von Custom Post Types sowie deren Einsatz im eigenen Theme.
                    Mittels dieser Techniken bist du in der Lage, Wordpress resp. seine Inhaltsobjekte und Felder nach eigenen Wünschen zu erweitern.
                    Um das Theme mit eigenen Feldern beliebig erweitern zu können mussten bisher Custom Fields eigensetzt deren Erstellung und Ausgabe mit dem Plugin "Advanced Custom Fields" enorm erleichtert wird.
                </p>
                <p>
                    Aktuell arbeitet die WordPress Entwickler Community jedoch mit Vollgas an der Version 5.0 welche auch den neuen <strong>"Gutenberg-Editor"</strong> beinhalten wird - eine Alpha-Version dieses Features ist auf April zu erwarten.
                    Dabei sind nicht nur grössere Auswirkungen auf das Publishing von Inhalten zu erwarten, sondern grundlegende Auswirkungen auf das Theme-Development sowie der Kompatibilität bisheriger Themes und Plugins.
                    Gemeinsam sehen wir uns die Änderungen in der kommenden Version an. Welche Änderungen bringt der neue Editor? Was bedeutet dies für bestehende und für neue Wordpress Projekte? Inwiefern betrifft der neue Editor das bisherige Arbeiten mit Custom Fields und Custom Post Types?
                </p>
            </div>

            <div id="inhalte" class="section scrollspy">
                <h2>Inhalte:</h2>
                <ul class="webpro-list">
                   <li>Kurz-Repetition Theme-Development</li>
                   <li>Was wird neu bei Version 5.0? Wie gehen wir im Theme-Development mit dem Gutenberg-Editor um? Wie sehen allfällige Migrationsmassnahmen bestehender Themes aus?</li>
                   <li>Basiswissen Archive- und Single-Templates</li>
                   <li>Erstellung von Custom Post Types inkl. Taxonomien</li>
                   <li>Ergänzug der CPT's durch eigene Felder (Custom Fields Meta-Boxen) resp. mittels dem neuen Gutenberg-Editor (Blocks)</li>
                   <li>Einsatz des Plugins "acf Advanced Custom Fields" zur Vereinfachung des Entwicklungsaufwands</li>
                   <li>Gefilterte und sortierte Ausgabe der Custom Post Types mittels Templating sowie dem WP_Query Objekt</li>
                   <li>Anwendung und Unterscheidung/Funktionsweise des <strong>WP_Query Objekts</strong>, der <strong>get_posts Funktion</strong> sowie dem <strong>pre_get_pots Filter</strong></li>
                   <li>Speichern von Daten via Frontend (je nach Zeit/Schwerpunkt)</li>
                   <li>Speichern von Daten mittels Ajax Calls (je nach Zeit/Schwerpunkt)</li>
                </ul>
            </div>


            <div id="dauer" class="section scrollspy">
                <h2>Voraussetzungen:</h2>
                <ul class="webpro-list">
                    <li>sicherer Umgang mit HTML/CSS</li>
                    <li>PHP Grundlagen-Kenntnisse (Variablen, Schleifen, Bedingungen, Funktionen etc.)</li>
                    <li>Javascript Grundlagen (nur für Ajax notwendig)</li>
                    <li>Wordpress Theme-Entwicklung Grundlagen (Loop, Templating, Funktionen etc.)</li>
                </ul>
            </div>

            <div id="dauer" class="section scrollspy">
                <h2>Zielgruppe:</h2>
                Bereits etwas fortgeschrittene Wordpress Theme-Entwickler welche eine Seite sowie der Inhalte nach eigenen Anforderungen erstellen möchten.
            </div>

            <div id="dauer" class="section scrollspy">
                <h2>Lernziele:</h2>
                Nach erfolgreicher Absolvierung dieses Kurses bist Du in der Lage, dein Wordpress Theme mit den Inhalten zu erweitern, welche die Projektanforderungen vorgeben. Du kannst z.B. Mitarbeiter, Referenzen, Filialen etc. verwalten und sortiert / gefiltert ausgeben oder Frontend-Daten in der Wordpress Datenbank abspeichern und über das Backend zugänglich machen (z.B. Anmeldungen etc). Diese Kenntnisse kannst du in Zukunft auch sehr einfach auf die eigene Plugin-Entwicklung anwenden.
            </div>

            <div id="termine" class="section scrollspy">
                <h2>Lektionen, Daten:</h2>
                <p>4 Kursabende à 4 Lektionen (Total 16 Lektionen). Jeweils Montags von 18.15 Uhr bis 21.30 Uhr. Kursdaten: 23.04.2018 - 14.05.2018</p>
                <p>In Absprache mit den Teilnehmern kann auf Wunsch auch ein anderer Wochentag vereinbart werden.</p>
                <p>
                    <strong>Hinweis:</strong> da die Implementierungs-Roadmap aktuell noch nicht ganz klar ist kann sich der Inhalt des Kurses noch leicht ändern. Nach Deiner Kursanmeldung fügen wir dich jedoch unserem Slack-Channel hinzu auf welchem Du über den aktuellen Stand informiert wirst.
                </p>
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
                <h2>Kursleiter:</h2>
                <p>
                    <a href="/ausbildung/dozenten/rolf-eggenberger/">Rolf Eggenberger</a>
                </p>
            </div>

        </div>
    </div>

@endsection
