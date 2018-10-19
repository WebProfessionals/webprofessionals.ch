@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>CSS | Kurs | Web Professionals</title>

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
            <span class="webpro-hero1">CSS / CSS3</span><br>
            <span class="webpro-hero2">Frontend mit Sicherheit</span><br><br>
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
                    'part1'    =>  'Auffrischungskurs',
                    'part2'    =>  'HTML / CSS'
                ])
                <nav class="webpro-nav-lvl2">
                    <a href="/kurse/wordpress-themes-selber-programmieren/">WordPress Themes programmieren</a><br>
                    <!--<a class="webpro-subnav-active" href="/kurse/auffrischungskurs-html-css/">HTML/CSS Auffrischung und Vertiefung</a><br>-->
                    <a href="/kurse/hands-on-workshop-polymer-project/">Hands-on Workshop Polymer</a><br>
                    <!--<a href="/kurse/einfuehrung-in-laravel/">Einführung in Laravel</a><br>-->
                    <!--<a href="/kurse/eigene-stock-fotos-erstellen/">eigene Stock Fotos erstellen</a><br><br>-->
                    <a href="/kurse/anmeldung/">Anmeldung</a>
                </nav>
            </div>
            <div class="hide-on-med-and-up">
                @include('_partials.header1', [
                    'part1'    =>  'Auffrischungskurs',
                    'part2'    =>  'HTML / CSS'
                ])
            </div>
        </div>
        <div class="col l7 m6 webpro-right">
            <div id="beschreibung" class="section scrollspy">
                <p class="headline">Du kennst dich bereits etwas mit HTML und CSS aus, aber dein Code ähnelt manchmal einem Glücksspiel? Dann besuch doch den Kurs "HTML / CSS Aufrischung" und erhalte mehr Sicherheit im Frontend Development. Nebst dem routinierteren Umgang mit CSS lernst du in diesem Kurs auch weiterführende Konzepte wie z.B. Flexbox, neue Pseudoklassen etc. kennen</p>
                <p>Dieser Kurs richtet sich an Teilnehmer und Absolventen der Integratoren-Lehrgänge oder an Personen mit ähnlichem Vorwissen. Er bildet zudem eine optimale Grundlage um sich im Vertiefungslehrgang "Web Developer" auf die wesentlichen Dinge konzentrieren zu können.</p>
            </div>

            <div id="inhalte" class="section scrollspy">
                <h2>Inhalte:</h2>
                <ul class="webpro-list">
                    <li><strong>1. Abend/Nachmittag: Grundlagen/Repetition</strong>
                        <ul>
                            <li>HTML Grundlagen: Tags, Divs, Spans, Bilder, Links etc.</li>
                            <li>CSS Grundlagen: Selektoren, Spezifität, Box-Modell, wichtigste Eigenschaften</li>
                        </ul>
                    </li>
                    <li><strong>2. Abend/Nachmittag: Layout</strong>
                        <ul>
                            <li>Vergleich der verschiedenen Ansätze</li>
                            <li>Floating</li>
                            <li>Flexbox</li>
                            <li>Umsetzung Responsives Layout: mobile first</li>
                            <li>Media Queries</li>
                        </ul>
                    </li>
                    <li><strong>3. Abend/Nachmittag: HTML5/CSS3</strong>
                        <ul>
                            <li>HTML5 in der Praxis</li>
                            <li>neue CSS3 Selektoren</li>
                        </ul>
                    </li>
                    <li><strong>4. Abend/Nachmittag: CSS Präprozessoren</strong>
                        <ul>
                            <li>Einführung LESS/SASS</li>
                            <li>erste Versuche mit SASS</li>
                        </ul>
                    </li>
                    <li><strong>5. Abend/Nachmittag: CSS Frameworks</strong>
                        <ul>
                            <li>Twitter Bootstrap</li>
                            <li>Zurb Foundation</li>
                        </ul>
                    </li>
                    <li><strong>6. Abend: Praxisübungen</strong>, je nach Zeit</li>

                </ul>
            </div>

            <div id="zielgruppe" class="section scrollspy">
                <h2>Zielgruppe:</h2>
                <p>Dieser Kurs richtet sich an Web Integratoren (mit Abschluss oder in Ausbildung) oder Interessenten mit Grundlagenwissen in HTML/CSS welche ihre CSS Skills vertiefen möchten.</p>
                <p>Ebenso bildet der Kurs eine sehr gute Vorbereitung / Repetition für die Web Frontend Developer Lehrgänge.</p>
            </div>

            <div id="dauer" class="section scrollspy">
                <h2>Voraussetzungen:</h2>
                <ul class="webpro-list">
                    <li>Grundlagenwissen in HTML und CSS (Stufe Web Integrator)</li>
                </ul>
            </div>

            <div id="termine" class="section scrollspy">
                <h2>Lektionen, Daten, Kursort:</h2>
                <p>Kursdaten werden noch bekannt gegeben, derzeit keine Ausschreibung</p>
            </div>

            <div id="kosten" class="section scrollspy">
                <h2>Kosten:</h2>
                <p>CHF 960</p>
            </div>

            <div id="klassen" class="section scrollspy">
                <h2>Kursort:</h2>
                <p>
                     Techfabrik Grabs
                </p>
            </div>

            <div id="klassen" class="section scrollspy">
                <h2>Dozenten:</h2>
                <p>
                    <a href="/ausbildung/dozenten/rolf-eggenberger/">Rolf Eggenberger</a>, Florian Gächter
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


        </div>
    </div>

@endsection
