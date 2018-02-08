@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Lehrgänge | Web Professionals</title>
    <meta name="description" content="Die modular aufgebauten Lehrgänge starten mit dem Basislehrgang zum Web Integrator und gehen weiter mit den Diplomlehrgängen Web Designer und Web Developer.">
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
            <span class="webpro-hero1">Leg' los!</span><br>
            <span class="webpro-hero2">Step by step zum Web-Profi</span><br><br>
            <a class="waves-effect waves-light btn webpro-red" href="/lehrgaenge/web-integrator/">Jetzt durchstarten</a>
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
        <div class="col l5 m6 s12 webpro-left">
            @include('_partials.header1', [
                'part1'    =>  'Unsere',
                'part2'    =>  'Lehrgänge'
            ])
            <nav class="webpro-nav-lvl2 hide-on-small-only">
                <a href="/lehrgaenge/web-integrator/">Web Integrator</a><br>
                <a href="/lehrgaenge/web-developer/">Web Developer</a><br>
                <a href="/lehrgaenge/web-designer/">Web Designer</a><br><br>
                <a href="/lehrgaenge/anmeldung/">Anmeldung</a>
            </nav>
        </div>
        <div class="col l7 m6 webpro-right">
            <p>Das Ausbildungsprogramm zum Web Professional ist modular aufgebaut und startet mit dem Basislehrgang zum <a href="/lehrgaenge/web-integrator/">Web Integrator</a>. Dieser bildet die Grundlage für die beiden folgenden Diplomlehrgänge zum <a href="/lehrgaenge/web-designer/">Web Designer</a> und <a href="/lehrgaenge/web-developer/">Web Developer</a>.</p>
            <p>Danach hast du weitere Möglichkeiten, dich zu spezialisieren: Zum Beispiel zum Frontend-Profi, Vue.JS / Polymer Developer oder WordPress-Theme-Entwickler. Gelernt wird Hand in Hand: Eine Crew von Spezialisten bringt dir alles bei, was du in der Praxis auch wirklich brauchst – und steht dir mit Rat und Tat bei deinen Web-Projekten zur Seite.</p>


            <div class="row hide-on-small-and-down">
                <div class="col s12 m12">
                    <div class="card grey darken-3 hoverable webpro-clickable-card z-depth-1" data-href='/lehrgaenge/web-integrator/'>
                        <div class="card-content white-text">
                            <span class="card-title">Web Integrator</span>
                            <p>Das digitale Einmaleins: der Basislehrgang vermittelt das notwendige Grundlagenwissen zur Erstellung eigener Webseiten.</p>
                            <p><br>1 Semester, berufsbegleitend<br>Beginn jeweils im Frühling und Herbst</p>
                        </div>
                        <div class="card-action webpro-green">
                            <a class="white-text" href="/lehrgaenge/web-integrator/">Erfahre mehr ></a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card grey darken-2 small hoverable webpro-clickable-card" data-href='/lehrgaenge/web-developer/'>
                        <div class="card-content white-text">
                            <span class="card-title">Web Developer</span>
                            <p>Auf Eroberungskurs: du willst mehr und kannst es kaum erwarten, das Internet mit deinen Webseiten und Applikationen zu erobern! <p>
                            <p><br>2 Semester, berufsbegleitend<br>Beginn jeweils im Herbst</p>
                        </div>
                        <div class="card-action webpro-green">
                            <a class="white-text" href="/lehrgaenge/web-developer/">Erfahre mehr ></a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card grey darken-2 small hoverable webpro-clickable-card" data-href='/lehrgaenge/web-designer/'>
                        <div class="card-content white-text">
                            <span class="card-title">Web Designer</span>
                            <p>Gestaltungsfreiheit: der Vertiefungslehrgang rund um ein erfolgreiches Screen-Design, UX und UI.</p>
                            <p><br>2 Semester, berufsbegleitend<br>Beginn jeweils im Herbst</p>
                        </div>
                        <div class="card-action webpro-green">
                            <a class="white-text" href="/lehrgaenge/web-designer/">Erfahre mehr ></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row hide-on-med-and-up">
                <div class="col s12 m12">
                    <div class="card grey darken-3 hoverable webpro-clickable-card" data-href='/lehrgaenge/web-integrator/'>
                        <div class="card-content white-text">
                            <span class="card-title">Web Integrator</span>
                            <p>Das digitale Einmaleins: der Basislehrgang vermittelt das notwendige Grundlagenwissen</p>
                            <p>Beginn jeweils Frühling und Herbst</p>
                        </div>
                        <div class="card-action webpro-green">
                            <a class="white-text" href="/lehrgaenge/web-integrator/">Erfahre mehr ></a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card grey darken-2 hoverable webpro-clickable-card" data-href='/lehrgaenge/web-developer/'>
                        <div class="card-content white-text">
                            <span class="card-title">Web Developer</span>
                            <p>Auf Eroberungskurs: erobere die digitale Welt!</p>
                            <p>Beginn jeweils im Herbst</p>
                        </div>
                        <div class="card-action webpro-green">
                            <a class="white-text" href="/lehrgaenge/web-developer/">Erfahre mehr ></a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card grey darken-2 hoverable webpro-clickable-card" data-href='/lehrgaenge/web-designer/'>
                        <div class="card-content white-text">
                            <span class="card-title">Web Designer</span>
                            <p>Gestaltungsfreiheit: der Vertiefungslehrgang rund um die digitale Gestaltung</p>
                            <p>Beginn jeweils im Herbst</p>
                        </div>
                        <div class="card-action webpro-green">
                            <a class="white-text" href="/lehrgaenge/web-designer/">Erfahre mehr ></a>
                        </div>
                    </div>
                </div>
            </div>

            <p>Die Ausbildung wird ergänzt durch die halbjährlich stattfindenden <a href="/barcamp/">Web Professionals Camps</a>, die <a href="/veranstaltungen/">Web Professionals and Friends</a> Treffen (alle zwei Monate) sowie <a href="/kurse/">regelmässige Kurse und Workshops</a>.</p>

            <p><strong>Du willst noch mehr?</strong> Die besten unserer Absolventen erhalten die Empfehlung, den Studiengang <a href="https://www.hsr.ch/de/weiterbildung/technik-und-it/cas/cas-front-end-engineering/" target="_blank">"CAS Front End Engineering" an der Hochschule Rapperswil</a> zu besuchen um ihre Skills dort noch mehr verteifen zu können. Die Aufnahme erfolgt bei Empfehlung "sur Dossier" - d.h. für die Zulassung ist keine Berufsmatura erforderlich.</p>

        </div>

    </div>
@endsection

@section('subnavmobile')
    <!--
    <h2 class="hide-on-med-and-up">Lehrgänge:</h2>
    <div class="collection webpro hide-on-med-and-up">
        <a href="/lehrgaenge/web-integrator/" class="collection-item webpro-green white-text">Web Integrator</a>
        <a href="/lehrgaenge/web-developer/" class="collection-item webpro-green white-text">Web Developer</a>
        <a href="/lehrgaenge/web-designer/" class="collection-item webpro-green white-text">Web Designer</a>
    </div>
    -->
@endsection
