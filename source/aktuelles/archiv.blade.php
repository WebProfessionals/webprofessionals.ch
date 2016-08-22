@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Archiv | Web Professionals</title>

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
            <span class="webpro-hero1">Gestalte das Web</span><br>
            <span class="webpro-hero2">Die Ausbildung für angehende Webprofis</span><br><br>
            <a class="waves-effect waves-light btn webpro-red" href="/lehrgaenge/">Jetzt informieren</a>
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
        <div class="col l12">
            <h2 class="webpro">Archiv (im Aufbau)</h2>
        </div>
    </div>
    <div class="row">

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card medium webpro-green">
                <div class="card-image">
                    <img src="/images/aktuelles/winter-camp-zukunft1.jpg">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Winter Camp 2016</span>
                    <p>Rückblick auf das vierte Web Professionals Camp</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2016-03-02-web-professionals-winter-camp-2016/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card medium webpro-green">
                <div class="card-image">
                    <img src="/images/aktuelles/hochschule.jpg">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Web Professionals goes HSR</span>
                    <p>Die Web Professionals sind ab Herbst 2015 neu auch am Campus der Fachhochschule für Technik in Rapperswil anzutreffen. </p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2015-09-15-web-professionals-lehrgang-an-der-hochschule-fuer-technik-rapperswil/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card medium webpro-green">
                <div class="card-image">
                    <img src="/images/aktuelles/camp_2015_spring.jpg">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Spring Camp 2015</span>
                    <p>Rückblick auf das dritte Web Professionals Camp</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2015-04-28-web-professionals-spring-camp-2015/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card medium webpro-green">
                <div class="card-image">
                    <img src="/images/aktuelles/2015-iot.jpg">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Das Internet der Dinge mitgestalten?</span>
                    <p>Die Web Professionals machen es vor.</p>
                    <p>9. Februar 2015</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2015-02-09-das-internet-der-dinge-mitgestalten-die-web-professionals-machen-es-vor/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->
        
        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card medium webpro-green">
                <div class="card-image">
                    <img src="/images/aktuelles/2014-espruino-1.jpg">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">JavaScript auf USB-Stick</span>
                    <p>Die Web Professionals unterstützen Espruino Pico</p>
                    <p>13. Dezember 2014</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2014-12-13-javascript-auf-usb-stick-die-web-professionals-unterstuetzen-espruino-pico/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->


        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card medium webpro-green">
                <div class="card-image">
                    <img src="/images/aktuelles/2014-lg-g-watch-r.jpg">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">LG G Watch R im Einsatz</span>
                    <p>Ein kleiner Testbericht</p>
                    <p>10. November 2014</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2015-10-10-lg-g-watch-r-im-einsatz/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->




    </div>

@endsection
