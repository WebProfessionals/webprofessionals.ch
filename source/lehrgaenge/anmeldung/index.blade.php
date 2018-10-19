@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Anmeldung Lehrgänge | Web Professionals</title>

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
            <span class="webpro-hero2">Step by step zum Web-Profi</span><br>
            <!-- <a class="waves-effect waves-light btn webpro-red webpro-hero-button hide-on-small-only">Jetzt informieren</a> -->
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
                'part1'    =>  'Deine',
                'part2'    =>  'Anmeldung'
            ])
        </div>
        <div class="col l7 m6 webpro-right">

            <h2>Ich möchte mich zu folgendem Lehrgang anmelden:</h2>
            <div class="row">
                <div class="col s12 m12">
                    <div class="card grey darken-3 hoverable webpro-clickable-card z-depth-1" data-href='/lehrgaenge/anmeldung/web-integrator/'>
                        <div class="card-content white-text">
                            <span class="card-title">Web Integrator</span>
                            <p>Start: Samstag, 10. November 2018, Standorte: Grabs, St.Gallen, Chur, Rapperswil</p>
                        </div>
                        <div class="card-action webpro-green">
                            <a class="white-text" href="/lehrgaenge/anmeldung/web-integrator/">weiter zur Auswahl des Standorts ></a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12">
                    <div class="card grey darken-3 hoverable webpro-clickable-card z-depth-1" data-href='/lehrgaenge/anmeldung/web-developer/'>
                        <div class="card-content white-text">
                            <span class="card-title">Web Developer</span>
                            <p>Start: 9. November 2018, Standorte: Grabs, Rapperswil</p>
                        </div>
                        <div class="card-action webpro-green">
                            <a class="white-text" href="/lehrgaenge/anmeldung/web-developer/">weiter zur Auswahl des Standorts ></a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12">
                    <div class="card grey darken-3 hoverable webpro-clickable-card z-depth-1" data-href='/lehrgaenge/anmeldung/web-designer-grabs/'>
                        <div class="card-content white-text">
                            <span class="card-title">Web Designer</span>
                            <p>Start: 9. November 2018, Standort: Grabs</p>
                        </div>
                        <div class="card-action webpro-green">
                            <a class="white-text" href="/lehrgaenge/anmeldung/web-designer-grabs/">Jetzt anmelden ></a>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </div>
    <br><br><br><br><br><br><br><br><br>&nbsp;
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
