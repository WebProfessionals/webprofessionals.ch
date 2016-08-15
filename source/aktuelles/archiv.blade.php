@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Web Professionals</title>
    <meta name="description" content="Die Ausbildung für angehende Web Profis ermöglicht Dir einen erfolgreichen Berufsstart in die Online-Welt! Initiiert und getragen durch führende Internet-Agenturen der Ostschweiz.">
@endsection

{{-- Hero Unit on Top --}}
@section('hero')
    <header class="webpro-hero-image">
        <picture>
            <source media="(max-width: 600px)" srcset="/images/background/web_professionals_034_phone.jpg">
            <img src="/images/background/web_professionals_034.jpg">
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
        <div class="col l4">
            <div class="card medium webpro-green">
                <div class="card-image">
                    <img src="/images/aktuelles/winter-camp-zukunft1.jpg">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Winter Camp 2016</span>
                    <p>Rückblick auf das vierte Web Professionals Camp</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/web-professionals-winter-camp-2016/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4">
            <div class="card medium webpro-green">
                <div class="card-image">
                    <img src="/images/aktuelles/hochschule.jpg">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Web Professionals goes HSR</span>
                    <p>Die Web Professionals sind ab Herbst 2015 neu auch am Campus der Fachhochschule für Technik in Rapperswil anzutreffen. </p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/web-professionals-lehrgang-an-der-hochschule-fuer-technik-rapperswil/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->


    </div>

@endsection
