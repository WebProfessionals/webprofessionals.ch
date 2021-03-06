@extends('_layouts.master')


{{-- Header --}}
@section('header')
    <title>Web Professionals - Die Aus- und Weiterbildung für Web Profis</title>
    <meta name="description" content="Die Ausbildung für Web Profis ermöglicht Dir einen erfolgreichen Berufsstart in die Online-Welt. Initiiert und getragen durch führende Schweizer Internet-Agenturen.">
    <meta property="og:image" content="https://web-professionals.ch/images/sharing/web-professionals.jpg" />
@endsection

{{-- Hero Unit on Top --}}
@section('hero')
    <header class="webpro-hero-image big">
        <picture>
            <source media="(max-width: 600px)" srcset="/images/background/home_web_professionals_057_phone.jpg">
            <img src="/images/background/home_web_professionals_057.jpg" alt="Web Professionals" title="Web Professionals">
        </picture>
    </header>
    <header class="webpro-hero big">
        @include('_partials.herotophome')
        <div class="webpro-hero-claim">
            <span class="webpro-hero1">Gestalte das Web</span><br>
            <span class="webpro-hero2">Die Ausbildung für angehende Webprofis</span><br><br><br>
            <!--
            <a class="waves-effect waves-light btn webpro-red webpro-hero-button" href="/lehrgaenge/">Jetzt informieren</a>
            -->
            <a class="waves-effect waves-light btn webpro-red webpro-hero-button" href="/lehrgaenge/web-integrator/">Jetzt auch in St.Gallen!</a>
        </div>
    </header>
@endsection

{{-- Main Navigation --}}
@section('navigation')
    @include('_partials.navigation', [
        'nav1status'    =>  ' active'
    ])
@endsection

{{-- Main Content --}}
@section('body')
    <div class="row">
        <div class="col l5 m6 s12 webpro-left">
            @include('_partials.header1', [
                'part1'    =>  ' Willkommen bei den',
                'part2'    =>  ' Web Professionals'
            ])

        </div>
        <div class="col l7 m6 s12 webpro-right">
            <p>Die <strong><a href="/lehrgaenge/">Ausbildung für angehende Web Profis</a></strong> ermöglicht Dir einen erfolgreichen Berufsstart in die Online-Welt. Initiiert und getragen durch führende Internet-Agenturen der Ostschweiz, durchgeführt <strong>St.Gallen</strong>, <strong>Grabs</strong>, <strong>Rapperswil SG</strong> sowie <strong>Chur</strong>.</p>

            <p>Die Lehrgänge beginnen mit der Basis-Ausbildung zum <a href="/lehrgaenge/web-integrator/">Web Integrator</a> und spezialisieren sich danach in den beiden Diplom-Lehrgängen zum <a href="/lehrgaenge/web-developer/">Web Developer</a> und <a href="/lehrgaenge/web-designer/">Web Designer</a>. Begleitend dazu bieten wir verschiedene Spezialisierungs-Kurse an welche dich für deine Aufgabe als Web Developer oder Designer optimal vorbereiten.</p>

            <h2 class="webpro sangalle--red">Lehrgänge 2019 / 2020</h2>
            <p>Anfang November starten wieder die nächsten <a href="/lehrgaenge/">Lehrgänge</a> - melde dich jetzt noch an und sei mit dabei!</p>
            @include('_partials.informationsanlaesse')
            <br>
        </div>
    </div>
    <div class="row webpro-partner">
        <div class="col l5 m6 hide-on-small-only">&nbsp;</div>
        <div class="col l2 m3 s6"><strong>Bildungspartner:</strong></div>
        <div class="col l2 offset-l1 m3 s6"><strong>Durchführungspartner:</strong></div>
    </div>
    <div class="row">
        <div class="col l5 m6 hide-on-small-only">&nbsp;</div>
        <div class="col l2 m3 s4"><img class="responsive-img" src="/images/ibw.png" alt="ibW Höhere Fachschule Südostschweiz" title="ibW Höhere Fachschule Südostschweiz"></div>
        <div class="col l2 offset-l1 m3 s4 offset-s2"><img class="responsive-img" src="/images/hsr.png" alt="Hochschule für Technik Rapperswil" title="Hochschule für Technik Rapperswil"></div>
    </div>
    <div class="row">
        <div class="col l12">
            <h2 class="webpro">Aktuell</h2>
        </div>
    </div>
    <div class="row aktuelles">

        <!-- Card Start -->
        <div class="col l7 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/barcamp/'>
                <div class="card-image">
                    <img src="/images/aktuelles/2017-css-awesome-camp5-02.jpg" alt="Web Integrator St.Gallen" title="Web Integrator St.Gallen">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">WebPro + Friends Hackathon 10.0 - Hack for Good: MINT!</span>
                    <p>Die 10. Veranstaltung im Rahmen unserer Barcamps / Hackathons soll erneut etwas Besonderes werden. Aus diesem Grund haben wir für Euch die perfekte Location ausgesucht: den Krempel in Buchs. Krempel-Kenner wissen: nicht nur perfekt um ungestört zu coden, sondern auch um Abends gemeinsam die erstellten Applikationen zu feiern.</p>
                    <p>Das Thema: MINT. Mathematik, Informatik, Naturwissenschaft und Technik bilden für jedeN HeranwachsendeN die Basis für eine aktive Mitgestaltung der Zukunft. Gemeinsam wollen wir Applikationen entwickeln, welche Kindern und Jugendlichen den Zugang zur Technologie und Naturwisssenschaft erleichtert. </p>
                    <p>25. Juni 2019</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2018-04-23-web-integrator-st-gallen/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l5 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2018-04-23-web-integrator-st-gallen/'>
                <div class="card-image">
                    <img src="/images/aktuelles/2018-04-liip.jpg" alt="Web Integrator St.Gallen" title="Web Integrator St.Gallen">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Web Integrator: neu auch in St.Gallen!</span>
                    <p>Auf mehrfachen Wunsch fand im Frühling/Sommer 18 erstmalig ein Web Integrator Lehrgang in St.Gallen statt. Dieser wird nun ab Herbst erneut angeboten - mehr dazu findest du hier.</p>
                    <p>23. April 2018</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2018-04-23-web-integrator-st-gallen/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l6 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2018-03-20-jana-heeb/'>
                <div class="card-image">
                    <img src="/images/aktuelles/jana01.jpg" alt="Jana Heeb" title="Jana Heeb">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Portrait: Jana Heeb</span>
                    <p>Projektleiterin Web bei wecando</p>
                    <p><em>"Ich bin glücklich, dass ich mein Ziel erreicht habe"</em></p>
                    <p>20. März 2018</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2018-03-20-jana-heeb/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l6 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/barcamp/'>
                <div class="card-image">
                    <div class="video-container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/gtB9BNsH3qE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="card-content white-text">
                    <span class="card-title">#2 WebPro + friends Hackathon 2018</span>
                    <p>"Hack for Good": ein ganzes Wochenende coden + fun mit den Web Professionals!</p>
                    <p>17./18. März 2018 @ Techfabrik Grabs</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2018-03-19-hackathon2-hack-for-good/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l6 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2017-08-16-webpro-and-friends-vue-js/'>
                <div class="card-image">
                    <img src="/images/aktuelles/2017-08-webpro-and-friends-vue-js-florian-gaechter.jpg" alt="Web Professionals and Friends: Vue.js (Florian Gächter)" title="Web Professionals and Friends: Vue.js (Florian Gächter)">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Web Professionals and Friends</span>
                    <p>Kurz-Vorstellung Vue.js durch Florian Gächter (Frontify)</p>
                    <p>16.08.2017</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2017-08-16-webpro-and-friends-vue-js/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l6 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2017-03-15-barcamp-css-is-awesome/'>
                <div class="card-image">
                    <img src="/images/aktuelles/2017-css-awesome-camp5-02.jpg" alt="#5 Web Professionals Barcamp: CSS is awesome!" title="#5 Web Professionals Barcamp: CSS is awesome!">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">CSS is awesome!</span>
                    <p>Rückblick auf das #5 Web Professionals Barcamp</p>
                    <p><em>Ein Wochenende rund um das Thema Frontend Development.</em></p>
                    <p>13. März 2017</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2017-03-15-barcamp-css-is-awesome/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->





    </div>
    <div class="row">
        <div class="col l12">
           <a class="waves-effect waves-light btn webpro-green" href="/aktuelles/archiv/">Archiv mit allen Meldungen</a>
        </div>
    </div>

@endsection
