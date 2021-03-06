@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Web Integrator | Lehrgang | Web Professionals</title>
    <meta name="description" content="Im Basislehrgang zum Web Integrator erlernst du sämtliche Grundlagen für einen erfolgreichen Start in die Online-Welt.">
@endsection

{{-- Hero Unit on Top --}}
@section('hero')
    <header class="webpro-hero-image">
        <picture>
            <source media="(max-width: 600px)" srcset="/images/background/web_professionals_027_phone.jpg">
            <img src="/images/background/web_professionals_027.jpg" alt="Web Professionals" title="Web Professionals">
        </picture>
    </header>
    <header class="webpro-hero">
        @include('_partials.herotop')
        <div class="webpro-hero-claim">
            <span class="webpro-hero1">Das digitale Einmaleins</span>
            <br>
            <span class="webpro-hero2">Web Integrator</span><br><br>
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
                    'part1'    =>  'Basis Lehrgang',
                    'part2'    =>  'Web Integrator'
                ])
                <nav class="webpro-nav-lvl2">
                    <a href="#" class="webpro-subnav-active">Web Integrator</a><br>
                    <ul class="section no-pad table-of-contents">
                        <li><a href="#beschreibung">Beschreibung</a></li>
                        <li><a href="#inhalte">Inhalte / Fächer</a></li>
                        <li><a href="#anforderungen">Anforderungen</a></li>
                        <li><a href="#abschluss">Abschluss</a></li>
                        <li><a href="#dauer">Dauer</a></li>
                        <li><a href="#klassen">Klassen / Durchführungsorte</a></li>
                        <li><a href="#kosten">Kosten und Zahlungsfristen</a></li>
                        <!--<li><a href="#termine">Termine</a></li>-->
                        <li><a href="#infoanlaesse">Informationsanlässe</a></li>

                        <li><a href="#anmeldung">Anmeldung</a></li>
                    </ul>
                    <a href="/lehrgaenge/web-developer/">Web Developer</a><br>
                    <a href="/lehrgaenge/web-designer/">Web Designer</a><br><br>
                    <a href="/lehrgaenge/master-class/">Master Class</a><br><br>
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
            <section id="beschreibung" class="section scrollspy">
                <p class="headline">Deine Welt ist das Web – dich trifft man meist online. Doch nur User sein reicht dir nicht mehr. Du willst es jetzt selbst wissen, willst das Internet selber gestalten. Dich auch beruflich im virtuellen Raum bewegen. Eigene Websites gestalten – statt sie nur zu nutzen.</p>
                <p>Dann leg los. Belege den Basiskurs zum Web Integrator. Fernab von grauer Theorie bringen dir Experten aus der Praxis alles bei, was du wissen musst:</p>
                <ul class="webpro-list">
                    <li>Entwicklung und Funktionsweise des Internets.</li>
                    <li>Grundlagen der Gestaltung und des Umgangs mit Bildbearbeitungsprogrammen.</li>
                    <li>Grundlagen der modernen Web-Programmierung.</li>
                    <li>Erstellung und Pflege von Websites mit Content-Management-Systemen.</li>
                </ul>
                <p>Step by step lernst du mit kursbegleitenden Arbeiten alles, worauf es in der Praxis ankommt. So schaffst du die ideale Ausgangslage für einen erfolgreichen Berufsstart in der Online-Welt. Egal, ob du später in einer Internet-Agentur arbeiten oder Websites betreuen möchtest.</p>
            </section>

            <section id="inhalte" class="section scrollspy">
                <h2>Inhalte / Fächer:</h2>
                <ul class="webpro-list">
                    <li>Grundlagen Internet, Funktionsweise</li>
                    <li>Entwicklungsumgebungen</li>
                    <li>HTML / HTML5 Grundlagen</li>
                    <li>CSS / CSS3 Einführung</li>
                    <li>Grundlagen Programmierung für das Internet (PHP/JS)</li>
                    <li>CMS Grundlagen, Grundlagen Theme-Entwicklung für WordPress</li>
                    <li>Grundlagen Gestaltungslehre</li>
                    <li>Bildbearbeitung Grundlagen (Affinity Photo/Designer)</li>
                    <li>Workshop 1 (HTML)</li>
                    <li>Workshop 2 (Projekt Wordpress Theme)</li>
                </ul>
            </section>

            <section id="anforderungen" class="section scrollspy">
                <h2>Anforderungen:</h2>
                <p><!--Lehrabschluss in einem Beruf mit mindestens dreijähriger Lehrzeit oder gleichwertiger Ausweis.-->Grundlegende Informatik-Anwenderkenntnisse sind zwingend erforderlich (sicherer Umgang mit dem Computer). Bei Unsicherheiten betreffend den Voraussetzungen stehen unsere Lehrgangsleiter gerne für ein Beurteilungsgespräch zur Verfügung.</p>
            </section>

            <section id="abschluss" class="section scrollspy">
                <h2>Prüfung:</h2>
                <p>Die Module HTML/CSS, JavaScript und PHP werden am Ende des Lehrgangs mit einer schriftlichen Schlussprüfung abgeschlossen. Wer alle Module mit je mindestens 2/3 der Punktezahl abschliesst erhält das Diplom "Web Professionals: Web Integrator" (Voraussetzung für die Diplomlehrgänge "Web Developer"). Wer das Modul "HTML/CSS" mit mind. 2/3 der Punktezahl und die Module JavaScript/PHP je mit mindestens der Hälfte der maximalen Punktezahl abschliesst erhält das Diplom "Web Professionals: Web Publisher" (Voraussetzung für den Diplomlehrgang "Web Designer").</p>
            </section>

            <section id="dauer" class="section scrollspy">
                <h2>Dauer:</h2>
                <p>1 Semester, 108 Lektionen, berufsbegleitend</p>
                <p>nächster Durchführungstermin: Anfang November 2019 bis Ende März 2020</p>
            </section>

            <section id="klassen" class="section scrollspy">
                <h2>Klassen / Durchführungsorte:</h2>

                <p>
                    <strong>St.Gallen:</strong> Startfeld, Lerchenfeldstrasse 3, 9014 St. Gallen<br>
                    <strong>Unterrichtszeiten:</strong> Freitag 18.15 bis 21.30 Uhr, Samstag 09.00 - 12.15 Uhr<br>
                    <a href="/files/lehrgaenge/stundenplaene/webpro_integrator_19_stgallen.pdf">Stundenplan St.Gallen, Frühling / Sommer 2019 (prov., in Arbeit)</a>
                </p>

                <p>
                    <strong>Ostschweiz / Grabs SG:</strong> Gewerbepark, Fabrikstrasse 24, 9472 Grabs<br>
                    <strong>Unterrichtszeiten:</strong> Freitag 18.15 bis 21.15 Uhr, Samstag 09.00 - 12.15 Uhr<br>
                    <a href="/files/lehrgaenge/stundenplaene/webpro_integrator_19_grabs.pdf">Stundenplan St.Gallen, Frühling / Sommer 2019 (prov., in Arbeit)</a>
                </p>

                <p>
                    <strong>Graubünden / Chur:</strong> ibW Chur, Gürtelstrasse 48 Gleis d, 7001 Chur<br>
                    <strong>Unterrichtszeiten:</strong> Montag 18.15 bis 21.30 Uhr, Mittwoch 18.15 bis 21.30 Uhr<br>
                    <a href="/files/lehrgaenge/stundenplaene/webpro_integrator_19_chur.pdf">Stundenplan St.Gallen, Frühling / Sommer 2019 (prov., in Arbeit)</a>
                </p>

                <p>
                    <strong>Zürich / Rapperswil SG:</strong> Hochschule für Technik, 8640 Rapperswil<br>
                    <strong>Unterrichtszeiten:</strong> Dienstag 18.15 bis 21.30 Uhr, Donnerstag 18.15 bis 21.30 Uhr<br>
                    <a href="/files/lehrgaenge/stundenplaene/webpro_integrator_19_rapperswil.pdf">Stundenplan St.Gallen, Frühling / Sommer 2019 (prov., in Arbeit)</a>
                </p>
<!--
                <h2>Termin Eröffnungsveranstaltung:</h2>
                <p>Die Eröffnungsveranstaltung findet für die Lehrgänge Grabs, St.Gallen, Chur und Rapperswil am Samstag, 10. November 2018 von 08.15 – 13.00 Uhr in Sargans (ibW Bahnhofpark) statt.</p>

                <h2>Termin Diplomprüfung:</h2>
                <p>Samstag 28. September 2019, 10.00 Uhr</p>
-->

            </section>

            <section id="kosten" class="section scrollspy">
                <h2>Kosten:</h2>
                <p>
                    Lehrgangsgebühr: CHF 3'300 <br>
                    Prüfungsgebühr Abschlussdiplom: CHF 300
                </p>
            </section>

            <section id="zahlungsfristen" class="section scrollspy">
                <h2>Zahlungsfristen:</h2>
                <p>
                    Lehrgangsgebühr: bis 30 Tage vor Beginn der Ausbildung <br>
                    Prüfungsgebühr Abschlussdiplom: vor Antritt der Abschlussprüfung
                    <br><br>
                    Hinweis: die Lehrgangsgebühr kann unter 2 Raten beglichen werden. Modalität: 50% bis 30 Taqe vor Beginn der Ausbildung, 50% 3 Monate nach Beginn der Ausbildung. Bearbeitungsgebühr bei Teilzahlung: CHF 10 pro Zahlung.
                </p>
            </section>

            <!--

            <section id="termine" class="section scrollspy">
                <h2>Termin Eröffnungsveranstaltung:</h2>
                <p>Die Eröffnungsveranstaltung findet für die Lehrgänge Grabs, Chur, Rapperswil am Samstag, 28. April 2018 von 08.15 – 13.00 Uhr in Sargans (ibW Bahnhofpark) statt.</p>

                <h2>Termin Diplomprüfung:</h2>
                <p>Samstag 29. September 2018, 10.00 Uhr in Sargans (ibW Bahnhofpark)</p>

            </section>
            -->

            @include('_partials.informationsanlaesse')

            <section id="anmeldung" class="section scrollspy">
                <a class="waves-effect waves-light btn webpro-red" href="/lehrgaenge/anmeldung/">Jetzt anmelden</a>
            </section>


            <br><br><br><br><br>


            <h2 class="webpro">Jetzt erst recht: Spezialisierungen</h2>

            <p>
                Für dich war die Ausbildung zum Web Integrator erst der Anfang. Du willst mehr. In folgenden Diplomlehrgängen kannst Du Dich zum Profi ausbilden lassen:
            </p>
            <ul>
                <li><a href="/lehrgaenge/web-designer/">Diplomlehrgang Web Designer</a></li>
                <li><a href="/lehrgaenge/web-developer/">Diplomlehrgang Web Developer</a></li>
            </ul>


            <p>
                Nebst dem regulären Unterricht finden zudem begleitend eine Vielzahl an weiteren Aktivitäten statt, damit Du immer auf dem aktuellesten Stand der Tools und Technologien bleibst:
            </p>
            <ul>
                <li><a href="/kurse/">Workshops und Kurse: Vertiefung in diversen Spezialgebieten</a></li>
                <li><a href="/veranstaltungen/">Web Professionals and Friends: Networking und Wissensaustausch</a></li>
                <li><a href="/barcamp/">Web Professionals Camp: halbjährlich stattfindendes Barcamp</a></li>
                <li>Web Professionals Lab: Praxisprojekte auf hohem Niveau</li>
                <li>Web Professionals Trainee: Du suchst den Einstieg in die Branche?</li>
            </ul>
            <br>
            <br>
            <a class="waves-effect waves-light btn webpro-green hide-on-small-only" href="https://goo.gl/photos/WXWq2hvbagk31EgH9" target="_blank">Impressionen aus dem Unterricht (Google Fotos)</a>



        </div>
    </div>

@endsection
