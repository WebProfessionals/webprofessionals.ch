@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Web Developer | Lehrgang | Web Professionals</title>
    <meta name="description" content="">
@endsection

{{-- Hero Unit on Top --}}
@section('hero')
    <header class="webpro-hero-image">
        <picture>
            <source media="(max-width: 600px)" srcset="/images/background/web_professionals_016_phone.jpg">
            <img src="/images/background/web_professionals_016.jpg" alt="Web Professionals" title="Web Professionals">
        </picture>
    </header>
    <header class="webpro-hero">
        @include('_partials.herotop')
        <div class="webpro-hero-claim">
            <span class="webpro-hero1">Auf Eroberungskurs</span><br>
            <span class="webpro-hero2">Web Developer</span><br><br>
            <a class="waves-effect waves-light btn webpro-red" href="/lehrgaenge/anmeldung/">Jetzt anmelden</a>
        </div>
    </header>
@endsection

{{-- Main Navigation --}}
@section('navigation')
    @include('_partials.navigation', [
        'nav2status'    =>  ' active'
    ])
@endsection

{{-- Main Content --}}
@section('body')
    <div class="row">
        <div class="col l5 m5 s12 webpro-left">
            <div class="webpro-pushpin-left hide-on-small-only">
                @include('_partials.header1', [
                    'part1'    =>  'Vertiefungslehrgang',
                    'part2'    =>  'Web Developer'
                ])
                <nav class="webpro-nav-lvl2">
                    <a href="/lehrgaenge/web-integrator/">Web Integrator</a><br>
                    <a href="/lehrgaenge/web-developer/" class="webpro-subnav-active">Web Developer</a><br>
                    <ul class="section no-pad table-of-contents">
                        <li><a href="#beschreibung">Beschreibung</a></li>
                        <li><a href="#inhalte">Inhalte / Fächer</a></li>
                        <li><a href="#dauer">Dauer</a></li>
                        <li><a href="#klassen">Klassen / Durchführungsorte</a></li>
                        <li><a href="#kosten">Kosten / Zahlungsfristen</a></li>
                        <li><a href="#termine">Termine</a></li>
                        <li><a href="#anmeldung">Anmeldung</a></li>
                    </ul>
                    <a href="/lehrgaenge/web-designer/">Web Designer</a><br><br>
                    <a href="/lehrgaenge/anmeldung/">Anmeldung</a>
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
                <div class="headline">Du bist fasziniert von der modernen Technik. Das nächste Facebook würdest du am liebsten selber programmieren. Du kannst es kaum erwarten, die Smartphones dieser Welt mit deinen Apps im Sturm zu erobern.</div>
                <p>Dann ist der Web Developer dein Ding. Auch in diesem Lehrgang lernst du alles von Spezialisten aus der Praxis – damit du noch besser wirst:</p>
                <ul class="webpro-list">
                    <li>Programmierung komplexer Internetlösungen.</li>
                    <li>Umsetzung von Webprojekten basierend auf PHP Frameworks oder Content Management Systemen wie z.B. WordPress oder Drupal.</li>
                    <li>Entwicklung mobiler Lösungen sowie Apps für Social-Media-Portale, so zum Beispiel Facebook.</li>
                </ul>
                <p>Nach der Ausbildung zum Web Integrator sind dir im Lehrgang zum Web Developer keine Grenzen mehr gesetzt. Du lernst hier alle wichtigen Fähigkeiten, die du brauchst, um professionell Apps oder Websites zu entwickeln. Der Lehrgang ist neu in die zwei Spezialisierungen „Web Application Developer“ sowie „Web Frontend Developer“ unterteilt. Ersterer vertieft sich in der Programmierung von komplexeren Systemen, der zweite setzt den Fokus mehr auf die Umsetzung innovativer und moderner Webseiten.</p>
                <p>Diesen Lehrgang absolvierst du idealerweise nach der Ausbildung zum Web Integrator oder nach bestandener Abschlussprüfung „Web Integrator“.</p>
            </div>

            <div id="inhalte" class="section scrollspy">
                <h2>Inhalte / Fächer:</h2>
                <ul class="webpro-list">
                    <li>Tools, Arbeitsumgebungen, Versionierung</li>
                    <li>CSS Vertiefung, LESS / SASS</li>
                    <li>Javascript Vertiefung, jQuery</li>
                    <li>Relationale Datenbanken und SQL</li>
                    <li>PHP und Datenbanken</li>
                    <li>Objektorientierte Webentwicklung mit PHP</li>
                    <li>PHP Frameworks (Laravel)</li>
                    <li>mobile Lösungen Grundlagen</li>
                    <li>Scriptsicherheit</li>
                    <li>Vertiefung Content Management Systeme (WordPress und Drupal)</li>
                    <li>Website Konzeption und Usability</li>
                    <li>Suchmaschinenoptimierung</li>
                    <li>Workshop 1 und 2</li>
                    <li>Diplomarbeit</li>
                </ul>
            </div>

            <div id="dauer" class="section scrollspy">
                <h2>Dauer:</h2>
                <p>2 Semester, 220 Lektionen, berufsbegleitend</p>
            </div>

            <div id="klassen" class="section scrollspy">
                <h2>Klassen / Durchführungsorte:</h2>
                <p>
                    <strong>Klasse Ostschweiz / Grabs SG:</strong> Techfabrik Grabs, Mühlbachstrasse 11a, 9472 Grabs<br>
                    <strong>Unterrichtszeiten:</strong> Freitag 18.00 bis 21.15 Uhr, Samstag 09.00 - 12.15 Uhr
                </p>

                <p>
                    <strong>Klasse Zürich / Rapperswil SG:</strong> Hochschule für Technik, 8640 Rapperswil<br>
                    <strong>Unterrichtszeiten:</strong> Dienstag 18.00 bis 21.15 Uhr, Donnerstag 18.00 bis 21.15 Uhr
                </p>
            </div>


            <section id="kosten" class="section scrollspy">
                <h2>Kosten:</h2>
                <p>
                    Lehrgangsgebühr: CHF 5'500 <br>
                    Prüfungsgebühr Abschlussdiplom: CHF 500
                </p>
            </section>

            <section id="zahlungsfristen" class="section scrollspy">
                <h2>Zahlungsfristen:</h2>
                <p>
                    Lehrgangsgebühr: bis 30 Tage vor Beginn der Ausbildung <br>
                    Prüfungsgebühr Abschlussdiplom: vor Antritt der Abschlussprüfung
                    <br><br>
                    Hinweis: die Lehrgangsgebühr kann unter 4 Raten beglichen werden. Modalität: 25% bis 30 Tage vor Beginn des Lehrgangs, 25 % innert 2 Monaten nach Lehrgangsbeginn, 25 % innert 4 Monaten nach Lehrgangsbeginn, 25% innert 6 Monaten nach Lehrgangsbeginn. Bearbeitungsgebühr bei Teilzahlung: CHF 10 pro Zahlung.
                </p>
            </section>

            <div id="termine" class="section scrollspy">
                <h2>Beginn:</h2>
                <p>28. Oktober 2016</p>
<!--
                <h2>Anmeldeschluss:</h2>
                <p>30. September 2016</p>
-->
                <h2>Termin Eröffnungsveranstaltung:</h2>
                <p>Die Eröffnungsveranstaltung findet für alle Lehrgänge (Designer und Developer Grabs, Developer Rapperswil) am Freitag, 28. Oktober 2016 von 18.00 - 21.15 Uhr in der Techfabrik Grabs statt</p>

            </div>

            <div id="anmeldung" class="section scrollspy">
                <a class="waves-effect waves-light btn webpro-red" href="/lehrgaenge/anmeldung/">Jetzt anmelden</a>
            </div>


            <br><br><br><br><br>


            <h2>Jetzt erst recht: Spezialisierungen</h2>
            <p>
                Nebst dem regulären Unterricht finden zudem begleitend eine Vielzahl an weiteren Aktivitäten statt, damit Du immer auf dem aktuellesten Stand der Tools und Technologien bleibst:
            </p>
            <ul>
                <li><a href="/kurse/">Workshops und Kurse: Vertiefung in diversen Spezialgebieten</a></li>
                <li><a href="/veranstaltungen/">Web Professionals and Friends: Networking und Wissensaustausch</a></li>
                <li><a href="/camp/">Web Professionals Camp: halbjährlich stattfindendes Barcamp</a></li>
                <li>Web Professionals Lab: Praxisprojekte auf hohem Niveau</li>
                <li>Web Professionals Trainee: Du suchst den Einstieg in die Branche?</li>
            </ul>



        </div>
    </div>

@endsection
