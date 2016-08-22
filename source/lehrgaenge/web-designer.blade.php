@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Web Designer | Lehrgang | Web Professionals</title>
    <meta name="description" content="">
@endsection

{{-- Hero Unit on Top --}}
@section('hero')
    <header class="webpro-hero-image">
        <picture>
            <source media="(max-width: 600px)" srcset="/images/background/web_professionals_014_phone.jpg">
            <img src="/images/background/web_professionals_014.jpg" alt="Web Professionals" title="Web Professionals">
        </picture>
    </header>
    <header class="webpro-hero">
        @include('_partials.herotop')
        <div class="webpro-hero-claim">
            <span class="webpro-hero1">Gestaltungsfreiheit</span><br>
            <span class="webpro-hero2">Web Designer</span><br><br>
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
                    'part2'    =>  'Web Designer'
                ])
                <nav class="webpro-nav-lvl2">
                    <a href="/lehrgaenge/web-integrator/">Web Integrator</a><br>
                    <a href="/lehrgaenge/web-developer/">Web Developer</a><br>
                    <a href="/lehrgaenge/web-designer/" class="webpro-subnav-active">Web Designer</a>
                    <ul class="section no-pad table-of-contents">
                        <li><a href="#beschreibung">Beschreibung</a></li>
                        <li><a href="#inhalte">Inhalte / Fächer</a></li>
                        <li><a href="#dauer">Dauer</a></li>
                        <li><a href="#kosten">Kosten</a></li>
                        <li><a href="#termine">Termine</a></li>
                        <li><a href="#klassen">Klassen / Durchführungsorte</a></li>
                        <li><a href="#anmeldung">Anmeldung</a></li>
                    </ul>
                    <br>
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
                <div class="headline">Pixel sind für Dich mehr als nur ein Punkt auf dem Screen? Du möchtest Nutzer von Webseiten und Apps mit Deiner Gestaltung begeistern und das Internet Stück für Stück ein bisschen schöner machen?</div>
                <p>Dann belegst du am besten den Lehrgang zum Web Designer. Fachleute zeigen dir, worauf es ankommt:</p>
                <ul class="webpro-list">
                    <li>Gestaltung und Umsetzung von Mockups / Wireframes.</li>
                    <li>Design und Umsetzung von Layout-Entwürfen.</li>
                    <li>Konzeption von Online-Corporate-Identities und -Corporate-Designs.</li>
                </ul>
                <p>Nach dem Web Integrator lernst du in diesem Lehrgang alles, was du brauchst, um Websites und Apps zu gestalten. Dank dem letzten Kurs weisst du ja bereits, worauf es technisch ankommt. Nun wird an der Gestaltung gefeilt und dein Auge geschult. Dieser Lehrgang eröffnet dir gute Möglichkeiten, in einer Agentur Websites und Anwendungen zu designen.</p>
            </div>

            <div id="inhalte" class="section scrollspy">
                <h2>Inhalte / Fächer:</h2>
                <ul class="webpro-list">
                    <li>Designtrends und -entwicklung</li>
                    <li>Designtools & Ressourcen</li>
                    <li>Entwurfstechniken</li>
                    <li>Navigationskonzepte</li>
                    <li>Wireframes</li>
                    <li>Grids & Viewports</li>
                    <li>Photoshop Workflow</li>
                    <li>Mockups</li>
                    <li>UX / UI</li>
                    <li>Corporate Design</li>
                    <li>Look & Feel</li>
                    <li>CMS für Designer</li>
                    <li>Git für Designer</li>
                    <li>HTML5 / CSS3 / jQuery</li>
                    <li>Bildkomposition, Bildbearbeitung und Bildredaktion</li>
                    <li>Vertiefung Gestaltungslehre</li>
                    <li>Typografie</li>
                    <li>Adobe Photoshop Vertiefung</li>
                    <li>Workshop</li>
                    <li>Diplomarbeit</li>
                </ul>
            </div>

            <div id="dauer" class="section scrollspy">
                <h2>Dauer:</h2>
                <p>2 Semester, 200 Lektionen, berufsbegleitend</p>
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
            </div>

            <div id="anmeldung" class="section scrollspy">
                <a class="waves-effect waves-light btn webpro-red" href="/lehrgaenge/anmeldung/">Jetzt anmelden</a>
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
