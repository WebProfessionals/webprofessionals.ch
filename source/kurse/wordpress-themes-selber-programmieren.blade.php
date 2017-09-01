@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>WordPress Themes | Kurs | Web Professionals</title>

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
            <span class="webpro-hero1">WordPress</span><br>
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
                    'part1'    =>  'Einführungskurs',
                    'part2'    =>  'WordPress Themes'
                ])
                <nav class="webpro-nav-lvl2">
                    <a class="webpro-subnav-active" href="/kurse/wordpress-themes-selber-programmieren/">WordPress Themes programmieren</a><br>
                    <!--<a href="/kurse/auffrischungskurs-html-css/">HTML/CSS Auffrischung und Vertiefung</a><br>-->
                    <a href="/kurse/hands-on-workshop-polymer-project/">Hands-on Workshop Polymer</a><br>
                    <!--<a href="/kurse/einfuehrung-in-laravel/">Einführung in Laravel</a><br>-->
                    <!--<a href="/kurse/eigene-stock-fotos-erstellen/">eigene Stock Fotos erstellen</a><br><br>-->
                    <a href="/kurse/anmeldung/">Anmeldung</a>
                </nav>
            </div>
            <div class="hide-on-med-and-up">
                @include('_partials.header1', [
                    'part1'    =>  'Einführungskurs',
                    'part2'    =>  'WordPress Themes'
                ])
            </div>
        </div>
        <div class="col l7 m6 webpro-right">
            <div id="beschreibung" class="section scrollspy">
                <p class="headline">Du willst deine eigene WordPress Seite erstellen? Und dabei nicht nur vorgefertigte Themes verwenden? Dann bist du hier genau richtig. Denn in diesem Kurs erlernst die notwendigen Grundlagen um dein eigenes WordPress Theme komplett selber zu programmieren.</p>
                <p>Das Content Management System WordPress ist ein überaus beliebtes Open-Source Framework zur Erstellung und Pflege von Websites. Als reines Blog-System gestartet, bietet es in den aktuellen Versionen verschiedene Möglichkeiten zur einfachen Seitenerstellung, welche bisher nur mit komplexeren Systemen wie Typo3 und Drupal möglich waren.</p>
                <p>WordPress kann entweder als gehostete Version (www.wordpress.com) eingesetzt werden oder selber installiert werden. Zweiteres bietet vollumfängliche Kontrolle über die Konfiguration, Aussehen und Funktion der Webseite.</p>
            </div>

            <div id="inhalte" class="section scrollspy">
                <h2>Inhalte:</h2>
                <ul class="webpro-list">
                    <li><strong>1. Abend: Grundlagen der Theme-Entwicklung</strong></li>
                    <li>Kurz-Repetition: Grundlagen PHP für den Wordpress-Gebrauch</li>
                    <li>Kurz-Repetition: Installation und Konfiguration von WordPress</li>
                    <li>Kurz-Repetition: Arbeiten mit dem Wordpress Backend</li>
                    <li>Anatomie eines eigenen WordPress Themes</li>
                    <li>Abgrenzung Child Theme vs. eigenes Theme</li>
                    <li><strong>2. Abend: Sidebar, Menus und Co.</strong></li>
                    <li>Das functions File und sein Einsatz</li>
                    <li>Umgang mit Sidebar, Menus und Widgets</li>
                    <li>Das Templating-Konzept von WordPress</li>
                    <li>Einsatz der Suche</li>
                    <li><strong>3. Abend: WordPress und externe Ressourcen</strong></li>
                    <li>JavaScript und CSS korrekt registrieren</li>
                    <li>Hooks</li>
                    <li>Übersetzungen</li>
                    <li><strong>4. Abend: das eigene Content Management System bauen</strong></li>
                    <li>Custom Post Types (CPT) für eigene Inhaltstypen</li>
                    <li>Advanced Custom Fields (ACF) für eigene Felder</li>
                    <li><strong>5. Abend: Frameworks und Starter-Themes</strong></li>
                    <li>Integration von CSS Frameworks (z.B. Twitter Bootstrap, Zurb Foundation)</li>
                    <li>Einsatz von Starter-Themes wie z.B. FoundationPress oder _tk</li>
                    <li><strong>6. Abend: Abschluss des eigenen Themes</strong></li>
                    <li>WordPress und Sicherheit, Performance-Optimierung</li>
                    <li>Entwicklungs-Workflows (je nach verfügbarer Zeit): Code-Überwachung mittels Git, virtuelle Arbeitsumgebung mittels Vagrant</li>
                </ul>
            </div>


            <div id="dauer" class="section scrollspy">
                <h2>Voraussetzungen:</h2>
                Dieser Kurs baut auf dem Lehrgang „Web Integrator“ auf. Nebst grundlegenden Informatik-Anwenderkenntnissen sind Grundlagen-Kenntnisse in HTML/CSS/PHP sowie Grundlagenkenntnisse in WordPress (Anwendung Dashboard) notwendig. Bei Unsicherheiten betreffend den Voraussetzungen stehen unsere Lehrgangsleiter gerne für ein Beurteilungsgespräch zur Verfügung. Bei fehlenden HTML/CSS/PHP Wissen besteht die Möglichkeit für einen kurzen Vorkurs.
            </div>

            <div id="dauer" class="section scrollspy">
                <h2>Zielgruppe:</h2>
                Einsteiger und Fortgeschrittene welche mittels WordPress ein Seite nach eigenen Anforderungen erstellen möchten. Private sowie Grafiker welche für Kunden Webseiten entwickeln sowie Webseiten-Verantwortliche von Firmen und Vereinen.
            </div>

            <div id="dauer" class="section scrollspy">
                <h2>Lernziele:</h2>
                Nach erfolgreicher Absolvierung dieses Kurses bist Du in der Lage, eine eigene Webseite basierend auf WordPress zu erstellen. Du kannst das Layout der Webseite nach Wunsch und Projektvorgabe selber umsetzen und bist nicht von bestehenden Themes abhängig.
            </div>

            <div id="termine" class="section scrollspy">
                <h2>Lektionen, Daten:</h2>
                <p>6 Kursabende à 4 Lektionen (Total 24 Lektionen). Jeweils Mittwochs von 18.15 Uhr bis 21.30 Uhr. Kursdaten: 08.11.2017 - 13.12.2017</p>
            </div>

            <div id="kosten" class="section scrollspy">
                <h2>Kosten:</h2>
                <p>CHF 960</p>
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
