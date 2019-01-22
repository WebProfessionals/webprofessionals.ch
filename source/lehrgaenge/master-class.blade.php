@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Master Class | Lehrgang | Web Professionals</title>
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
            <span class="webpro-hero2">Master Class</span><br><br>
            <a class="waves-effect waves-light btn webpro-red" href="/lehrgaenge/anmeldung/web-developer/">Jetzt anmelden</a>
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
                    'part2'    =>  'Master Class'
                ])
                <nav class="webpro-nav-lvl2">
                    <a href="/lehrgaenge/web-integrator/">Web Integrator</a><br>
                    <a href="/lehrgaenge/web-developer/">Web Developer</a><br>
                    <a href="/lehrgaenge/web-developer/" class="webpro-subnav-active">Master Class</a><br>
                    <ul class="section no-pad table-of-contents">
                        <li><a href="#beschreibung">Beschreibung</a></li>
                        <li><a href="#inhalte">Inhalte / Fächer</a></li>
                        <li><a href="#dauer">Dauer</a></li>
                        <li><a href="#klassen">Klassen / Durchführungsorte</a></li>
                        <li><a href="#kosten">Kosten / Zahlungsfristen</a></li>
                        <li><a href="#termine">Termine</a></li>
                        <li><a href="#infoanlaesse">Informationsanlässe</a></li>
                        <li><a href="#anmeldung">Anmeldung</a></li>
                    </ul>
                    <a href="/lehrgaenge/web-designer/">Web Designer</a><br><br>
                    <a href="/lehrgaenge/anmeldung/">Anmeldung</a>
                </nav>
            </div>
            <div class="hide-on-med-and-up">
                @include('_partials.header1', [
                    'part1'    =>  'Vertiefungslehrgang',
                    'part2'    =>  'Master Class'
                ])
            </div>
        </div>
        <div class="col l7 m6 webpro-right">
            <div id="beschreibung" class="section scrollspy">
                <p class="headline">Du gehörst zu den besten der Besten deiner Abschlussklasse und willst deine Fullstack Development Skills auf ein höchstes Level bringen? </p>
                <p>
                    Mit der Einladung zur Teilnahme an der Master Class steht deiner Karriere als Top-EntwicklerIn nichts mehr im Weg.
                    Du erlernst dabei die notwendigen Fähigkeiten um webbasierte Applikationen basierend auf modernsten Architekturen zu planen und umzusetzen.
                </p>
                <p>Zur Teilnahme an diesem Lehrgang der Lehrgang "Web Developer" mit einer Abschlussnote von mindestens 5.0 absolviert sein oder eine persönliche Empfehlung von mindestens zwei Dozenten vorliegen.</p>
            </div>

            <div id="inhalte" class="section scrollspy">
                <h2>Inhalte / Fächer:</h2>
                <strong>Level 1: Vorbereitungslehrgang (52 Lektionen)</strong>
                <ul class="webpro-list">
                    <li>Code like a pro: sicherer Umgang mit JavaScript ES6 (24 Lektionen)</li>
                    <li>Frontend aus dem Handgelenk: CSS3 und HTML5 in Perfektion beherrschen (12 Lektionen)</li>
                    <li>REST Repetition und Routine: Konzeption und Umsetzung von REST API's (16 Lektionen)</li>
                </ul>
                <br>
                <strong>Level 2: Master Class (128 Lektionen)</strong>
                <ul class="webpro-list">
                    <li>Konzeption: Aufbau moderner Web-Architekturen</li>
                    <li>Backend: Einsatz von Go in der Backend-Umgebung</li>
                    <li>Von der Virtualisierung zu Continuous Deployment/Integration: die Welt von Docker</li>
                    <li>API Driven Development: das Design einer API</li>
                    <li>Abstraktion</li>
                </ul>
                <p>Der Unterricht findet alle 2 Wochen statt, in den unterrichtsfreien Zeiten muss jedoch mindestens derselbe Zeitaufwand für Übungen und Selbststudium eingeplant werden.</p>
            </div>

            <div id="dauer" class="section scrollspy">
                <h2>Dauer:</h2>
                <p>2 Semester, alle 2 Wochen Unterricht, 180 Lektionen, berufsbegleitend</p>
            </div>

            <div id="klassen" class="section scrollspy">
                <h2>Klassen / Durchführungsorte:</h2>
                <p>
                    <strong>Grabs SG:</strong> Gewerbepark Grabs, 9472 Grabs, jeweils Freitag 18.00 bis 21.15 Uhr, Samstag 09.00 - 12.15 Uhr
                    <br>Je nach Anmeldungen kann der Lehrgang alternativ auch in St.Gallen stattfinden.
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
                <p>Frühling 2019</p>
            </div>

            <div id="anmeldung" class="section scrollspy">
                <a class="waves-effect waves-light btn webpro-red" href="/lehrgaenge/anmeldung/">Jetzt anmelden</a>
            </div>






        </div>
    </div>

@endsection
