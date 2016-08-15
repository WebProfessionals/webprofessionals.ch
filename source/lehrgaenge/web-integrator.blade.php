@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Web Professionals | Lehrgänge | Web Integrator</title>
    <meta name="description" content="Die Ausbildung für angehende Web Profis ermöglicht Dir einen erfolgreichen Berufsstart in die Online-Welt! Initiiert und getragen durch führende Internet-Agenturen der Ostschweiz.">
@endsection

{{-- Hero Unit on Top --}}
@section('hero')
    <header class="webpro-hero-image">
        <picture>
            <source media="(max-width: 600px)" srcset="/images/background/web_professionals_001_phone.jpg">
            <img src="/images/background/web_professionals_001.jpg">
        </picture>
    </header>
    <header class="webpro-hero">
        @include('_partials.herotop')
        <div class="webpro-hero-claim">
            <span class="webpro-hero1">Das digitale Einmaleins</span><br>
            <span class="webpro-hero2">Web Integrator</span><br><br>
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
                    'part1'    =>  'Basis Lehrgang',
                    'part2'    =>  'Web Integrator'
                ])
                <nav class="webpro-nav-lvl2">
                    <a href="#" class="webpro-subnav-active">Web Integrator</a><br>
                    <ul class="section no-pad table-of-contents">
                        <li><a href="#beschreibung">Beschreibung</a></li>
                        <li><a href="#inhalte">Inhalte / Fächer</a></li>
                        <li><a href="#dauer">Dauer</a></li>
                        <li><a href="#kosten">Kosten</a></li>
                        <li><a href="#termine">Termine</a></li>
                        <li><a href="#klassen">Klassen / Durchführungsorte</a></li>
                        <li><a href="#anmeldung">Anmeldung</a></li>
                    </ul>
                    <a href="/lehrgaenge/web-developer/">Web Developer</a><br>
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
            <section id="beschreibung" class="section scrollspy">
                <div class="headline">Deine Welt ist das Web – dich trifft man meist online. Doch nur User sein reicht dir nicht mehr. Du willst es jetzt selbst wissen, willst das Internet selber gestalten. Dich auch beruflich im virtuellen Raum bewegen. Eigene Websites gestalten – statt sie nur zu nutzen.</div>
                <p>Dann leg los. Belege den Basiskurs zum Web Integrator. Fernab von grauer Theorie bringen dir Experten aus der Praxis alles bei, was du wissen musst:</p>
                <ul class="webpro-list">
                    <li>Grundlagen des Internets und der Web-Programmierung.</li>
                    <li>Pflege von Websites mit Content-Management-Systemen.</li>
                    <li>Grundlagen der Gestaltung und des Umgangs mit Bildbearbeitungsprogrammen.</li>
                </ul>
                <p>Step by step lernst du mit kursbegleitenden Arbeiten alles, worauf es in der Praxis ankommt. So schaffst du die ideale Ausgangslage für einen erfolgreichen Berufsstart in der Online-Welt. Egal, ob du später in einer Internet-Agentur arbeiten oder Websites betreuen möchtest.</p>
            </section>

            <section id="inhalte" class="section scrollspy">
                <h2>Inhalte / Fächer:</h2>
                <ul class="webpro-list">
                    <li>Grundlagen Internet, Funktionsweise</li>
                    <li>Entwicklungsumgebungen</li>
                    <li>HTML / HTML5</li>
                    <li>CSS / CSS3 Einführung</li>
                    <li>Javascript Einführung</li>
                    <li>Ajax / jQuery</li>
                    <li>PHP Grundlagen</li>
                    <li>CMS Grundlagen, Grundlagen Theme-Entwicklung für WordPress</li>
                    <li>Drupal Einführung</li>
                    <li>Grundlagen Gestaltungslehre</li>
                    <li>Adobe Photoshop Grundlagen</li>
                    <li>Workshop 1 (HTML)</li>
                    <li>Workshop 2 (Projekt)</li>
                </ul>
            </section>

            <section id="dauer" class="section scrollspy">
                <h2>Dauer:</h2>
                <p>1 Semester, 110 Lektionen, berufsbegleitend</p>
            </section>

            <section id="kosten" class="section scrollspy">
                <h2>Kosten:</h2>
                <p>CHF 3'100 Lehrgangsgebühr, zahlbar in 2 Raten<br>CHF 300 Prüfungsgebühr</p>
            </section>

            <section id="termine" class="section scrollspy">
                <h2>Termin Eröffnungsveranstaltung:</h2>
                <p>Die Eröffnungsveranstaltung findet für alle Lehrgänge (Grabs, Chur, Rapperswil) am Samstag, 5. November 2016 von 08.15 – 13.00 Uhr in Sargans (ibW Bahnhofpark) statt</p>

                <h2>Termin Diplomprüfung:</h2>
                <p>Samstag 18. März 2017, 09.00 Uhr in Sargans (ibW Bahnhofpark)</p>
            </section>

            <section id="klassen" class="section scrollspy">
                <h2>Klasse Ostschweiz / Grabs SG:</h2>
                <p>
                    <strong>Kursort:</strong> Techfabrik Grabs, Mühlbachstrasse 11a, 9472 Grabs<br>
                    <strong>Unterrichtszeiten:</strong> Freitag 18.00 bis 21.15 Uhr, Samstag 09.00 - 12.15 Uhr
                </p>
                <h2>Klasse Zürich / Rapperswil SG:</h2>
                <p>
                    <strong>Kursort:</strong> Techfabrik Grabs, Mühlbachstrasse 11a, 9472 Grabs<br>
                    <strong>Unterrichtszeiten:</strong> Freitag 18.00 bis 21.15 Uhr, Samstag 09.00 - 12.15 Uhr
                </p>
                <h2>Klasse Graubünden / Chur:</h2>
                <p>
                    <strong>Kursort:</strong> Techfabrik Grabs, Mühlbachstrasse 11a, 9472 Grabs<br>
                    <strong>Unterrichtszeiten:</strong> Freitag 18.00 bis 21.15 Uhr, Samstag 09.00 - 12.15 Uhr
                </p>
            </section>

            <section id="anmeldung" class="section scrollspy">
                <a class="waves-effect waves-light btn webpro-red">Jetzt anmelden</a>
            </section>


            <br><br><br><br><br>


            <h2 class="webpro">Jetzt erst recht: Spezialisierungen</h2>

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
