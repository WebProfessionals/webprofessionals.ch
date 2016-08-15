@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Web Professionals | Lehrgänge | Web Developer</title>
    <meta name="description" content="Die Ausbildung für angehende Web Profis ermöglicht Dir einen erfolgreichen Berufsstart in die Online-Welt! Initiiert und getragen durch führende Internet-Agenturen der Ostschweiz.">
@endsection

{{-- Inline CSS --}}
@section('css')
    @include('_partials.inlinecss', [
        'image'    =>  'BZB_Techfabrik_2013-14'
    ])
@endsection

{{-- Hero Unit on Top --}}
@section('hero')
    <header class="webpro-hero">
        @include('_partials.herotop')
        <div class="webpro-hero-claim">
            <span class="webpro-hero1">Auf Eroberungskurs</span><br>
            <span class="webpro-hero2">Web Developer</span><br><br>
            <a class="waves-effect waves-light btn webpro-red">Jetzt anmelden</a>
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
        <div class="col l5 m5 s12">
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
                        <li><a href="#kosten">Kosten</a></li>
                        <li><a href="#termine">Termine</a></li>
                        <li><a href="#klassen">Klassen / Durchführungsorte</a></li>
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
        <div class="col l7 m6">
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
                    <li>CSS Vertiefung, LESS / SASS</li>
                    <li>Javascript Vertiefung, jQuery</li>
                    <li>Relationale Datenbanken und SQL</li>
                    <li>PHP und Datenbanken</li>
                    <li>Objektorientierte Webentwicklung mit PHP</li>
                    <li>PHP Frameworks (Laravel)</li>
                    <li>mobile Lösungen Grundlagen</li>
                    <li>Mail-Administration</li>
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

            <div id="kosten" class="section scrollspy">
                <h2>Kosten:</h2>
                <p>CHF 5’500 Gebühr, zahlbar in 3 Raten<br>CHF 500 Prüfungsgebühr</p>
            </div>

            <div id="termine" class="section scrollspy">
                <h2>Beginn:</h2>
                <p>jeweils November</p>
            </div>

            <div id="klassen" class="section scrollspy">
                <h2>Klasse Ostschweiz / Grabs SG:</h2>
                <p>
                    <strong>Kursort:</strong> Techfabrik Grabs, Mühlbachstrasse 11a, 9472 Grabs<br>
                    <strong>Unterrichtszeiten:</strong> Freitag 18.00 bis 21.15 Uhr, Samstag 09.00 - 12.15 Uhr
                </p>
                <h2>Klasse Zürich / Rapperswil SG:</h2>
                <p>
                    <strong>Kursort:</strong> Techfabrik Grabs, Mühlbachstrasse 11a, 9472 Grabs<br>
                    <strong>Unterrichtszeiten:</strong> Dienstag 18.00 bis 21.15 Uhr, Donnerstag 18.00 bis 21.15 Uhr
                </p>
            </div>

            <div id="anmeldung" class="section scrollspy">
                <a class="waves-effect waves-light btn webpro-red">Jetzt anmelden</a>
            </div>


            <br><br><br><br><br>


            <h2>Jetzt erst recht: Spezialisierungen</h2>

            <p>
                Für dich war die Ausbildung zum Web Integrator erst der Anfang. Du willst mehr. In folgenden Diplomlehrgängen kannst Du Dich zum Profi ausbilden lassen:
            </p>
            <ul>
                <li>Diplomlehrgang Web Designer</li>
                <li>Diplomlehrgang Web Application Developer</li>
                <li>Diplomlehrgang Web Frontend Developer</li>
            </ul>


            <p>
                Nebst dem regulären Unterricht finden zudem begleitend eine Vielzahl an weiteren Aktivitäten statt, damit Du immer auf dem aktuellesten Stand der Tools und Technologien bleibst:
            </p>
            <ul>
                <li>Workshops: Vertiefung in diversen Spezialgebieten</li>
                <li>Web Professionals and Friends: Networking und Wissensaustausch</li>
                <li>Web Professionals Camp: halbjährlich stattfindendes Barcamp</li>
                <li>Web Professionals Lab: Praxisprojekte auf hohem Niveau</li>
                <li>Web Professionals Trainee: Du suchst den Einstieg in die Branche?</li>
            </ul>



        </div>
    </div>

@endsection
