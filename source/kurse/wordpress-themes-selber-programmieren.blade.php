@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>WordPress | Kurs | Web Professionals</title>

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
                    <a href="/kurse/einfuehrung-in-angularjs/">Einführung in AngularJS</a><br>
                    <a href="/kurse/einfuehrung-in-laravel/">Einführung in Laravel</a><br>
                    <a class="webpro-subnav-active" href="/kurse/wordpress-themes-selber-programmieren/">WordPress Themes programmieren</a><br>
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
                <div class="headline">Du willst deine eigene WordPress Seite erstellen? Und dabei nicht nur vorgefertigte Themes verwenden? Dann bist du hier genau richtig. Denn in diesem Kurs erlernst du sämtliche Grundlagen von WordPress und bist danach in der Lage, dein eigenes WordPress Theme komplett selber zu programmieren.</div>
                <p>Das Content Management System WordPress ist ein überaus beliebtes Open-Source Framework zur Erstellung und Pflege von Websites. Als reines Blog-System gestartet, bietet es in den aktuellen Versionen verschiedene Möglichkeiten zur einfachen Seitenerstellung, welche bisher nur mit komplexeren Systemen wie Typo3 und Drupal möglich waren.</p>
                <p>WordPress kann entweder als gehostete Version (www.wordpress.com) eingesetzt werden oder selber installiert werden. Zweiteres bietet vollumfängliche Kontrolle über die Konfiguration, Aussehen und Funktion der Webseite.</p>
            </div>

            <div id="inhalte" class="section scrollspy">
                <h2>Inhalte:</h2>
                <ul class="webpro-list">
                    <li>Kurz-Repetition Grundlagen HTML / CSS (inkl. HTML5/CSS3) / PHP</li>
                    <li>Kurz-Repetition Installation und Konfiguration von WordPress sowie Arbeiten mit dem Wordpress Backend</li>
                    <li>Grundlagen Erstellung eines eigenen WordPress Themes</li>
                    <li>Abgrenzung Child Themes / eigene Themes</li>
                    <li>Umgang mit Sidebar und Menus</li>
                    <li>Planung und Umsetzung von Responsive Webdesign</li>
                    <li>Integration von CSS Frameworks (z.B. Twitter Bootstrap, Zurb Foundation) in das Frontend</li>
                    <li>Das eigene CMS bauen: Einsatz von Custom Post Types und ACF</li>
                    <li>WordPress und Sicherheit, Performance-Optimierung</li>
                    <li>Entwicklungs-Workflows (je nach verfügbarer Zeit): Code-Überwachung mittels Git, virtuelle Arbeitsumgebung mittels Vagrant</li>
                </ul>
            </div>

            <div id="dauer" class="section scrollspy">
                <h2>Voraussetzungen:</h2>
                Dieser Kurs baut auf dem Lehrgang „Web Integrator“ auf. Nebst grundlegenden Informatik-Anwenderkenntnissen sind Grundlagen-Kenntnisse in HTML/CSS/PHP sowie Grundlagenkenntnisse in WordPress von Vorteil. Bei Unsicherheiten betreffend den Voraussetzungen stehen unsere Lehrgangsleiter gerne für ein Beurteilungsgespräch zur Verfügung. Bei fehlenden HTML/CSS/PHP Wissen besteht die Möglichkeit für einen kurzen Vorkurs
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
                <p>8 Kursabende à 4 Lektionen (Total 32 Lektionen). Jeweils Mittwochs von 18.30 Uhr bis 21.30 Uhr. Beginn: Herbst 2016.</p>
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
                    Rolf Eggenberger ist Lehrgangsleiter der Web Professionals und seit 1992 konstant online.
                </p>
            </div>

        </div>
    </div>

@endsection
