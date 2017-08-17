@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Web Professionals - Die Aus- und Weiterbildung für Web Profis</title>
    <meta name="description" content="Die Ausbildung für Web Profis ermöglicht Dir einen erfolgreichen Berufsstart in die Online-Welt! Initiiert und getragen durch führende Internet-Agenturen.">
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
            <a class="waves-effect waves-light btn webpro-red webpro-hero-button" href="/lehrgaenge/">Jetzt informieren</a>
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
            <p>Die <strong><a href="/lehrgaenge/">Ausbildung für angehende Web Profis</a></strong> ermöglicht Dir einen erfolgreichen Berufsstart in die Online-Welt. Initiiert und getragen durch führende Internet-Agenturen der Ostschweiz, durchgeführt an der <strong>ibW Höheren Fachschule Südostschweiz Chur</strong>, der <strong>Techfabrik Grabs</strong> sowie der <strong>Hochschule für Technik Rapperswil</strong>.</p>
            <p>Unsere Lehrgänge starten mit der Basis-Ausbildung zum <a href="/lehrgaenge/web-integrator/">Web Integrator</a> und spezialisieren sich danach in den beiden Diplom-Lehrgängen zum <a href="/lehrgaenge/web-developer/">Web Developer</a> und <a href="/lehrgaenge/web-designer/">Web Designer</a>.</p>
            <p>
                Nächster Lehrgangsstart: <strong>4. November 2017</strong> - bist du mit dabei? Wir freuen uns auf dich!
            </p>

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
        <div class="col l5 m6">
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

        <!-- Card Start -->
        <div class="col l6 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2017-03-03-hakan-arioglu/'>
                <div class="card-image">
                    <img src="/images/testimonials/hakan_arioglu.jpg" alt="Hakan Arioglu" title="Hakan Arioglu">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Portrait: Hakan Arioglu</span>
                    <p>Frontend Developer bei Namics AG</p>
                    <p><em>"Um all den neuen Web-Technologien gerecht zu werden, muss man früher oder später diverse Kurse besuchen."</em></p>
                    <p>3. März 2017</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2017-03-03-hakan-arioglu/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l6 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2017-02-01-simon-walser/'>
                <div class="card-image">
                    <img src="/images/testimonials/simon_walser.jpg" alt="Simon Walser" title="Simon Walser">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Alumni-Portrait: Simon Walser</span>
                    <p>Graphic & Multimedia Design bei LGT Capital Partners</p>
                    <p><em>"Es wird sehr individuell auf die Teilnehmer eingegangen."</em></p>
                    <p>1. Februar 2017</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2017-02-01-simon-walser/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l6 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2017-01-04-stefanie-jegen/'>
                <div class="card-image">
                    <img src="/images/testimonials/stefanie_jegen.jpg" alt="Stefanie Jegen" title="Stefanie Jegen">

                </div>
                <div class="card-content white-text">
                    <span class="card-title">Alumni-Portrait: Stefanie Jegen</span>
                    <p>Leiterin Kundenservice Web bei Somedia Production AG</p>
                    <p><em>"Warum also nicht gleich diejenige sein, die ihren bisherigen Job wegprogrammiert?"</em></p>
                    <p>04. Januar 2017</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2017-01-04-stefanie-jegen/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l6 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2016-10-30-hackathon-1-devgotchi/'>
                <div class="card-image">
                    <img src="/images/aktuelles/camp_2016_autumn.jpg" alt="Web Professionals Barcamp 2016" title="Web Professionals Barcamp 2016">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">#1 Web Professionals Hackathon</span>
                    <p>Die Devgotchis sind frei! Der erste Web Professionals Hackathon fand am 29./30.10.2016 statt!</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2016-10-30-hackathon-1-devgotchi/">mehr</a>
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
