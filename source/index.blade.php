@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Web Professionals</title>
    <meta name="description" content="Die Ausbildung für angehende Web Profis ermöglicht Dir einen erfolgreichen Berufsstart in die Online-Welt! Initiiert und getragen durch führende Internet-Agenturen der Ostschweiz.">
@endsection

{{-- Hero Unit on Top --}}
@section('hero')
    <header class="webpro-hero-image big">
        <picture>
            <source media="(max-width: 600px)" srcset="/images/background/home_web_professionals_057_phone.jpg">
            <img src="/images/background/home_web_professionals_057.jpg">
        </picture>
    </header>
    <header class="webpro-hero big">
        @include('_partials.herotophome')
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
        <div class="col l5 m6 s12">
            @include('_partials.header1', [
                'part1'    =>  ' Willkommen bei den',
                'part2'    =>  ' Web Professionals'
            ])
            <nav class="webpro-nav-lvl2">
                <a class="waves-effect waves-light btn webpro-green hide-on-small-only" href="/veranstaltungen/">Zu den Infoanlässen</a>
            </nav>
        </div>
        <section class="col l7 m6 s12">
            <p>Die <strong>Ausbildung für angehende Web Profis</strong> ermöglicht Dir einen erfolgreichen Berufsstart in die Online-Welt! Initiiert und getragen durch führende Internet-Agenturen der Ostschweiz, durchgeführt an der ibW Höheren Fachschule Südostschweiz Chur (Bildungspartner), der Techfabrik Grabs sowie der Hochschule für Technik Rapperswil (Durchführungspartner).</p>
            <p>Nächster Lehrgangsstart: <strong>November 2016</strong>. Besuche uns an einem unserer Informationsanlässe und informiere Dich über die Web Professionals.</p>
            <p>Wir freuen uns auf Dich!</p>
        </section>
    </div>
    <div class="row webpro-partner">
        <div class="col l5 m6 hide-on-small-only">&nbsp;</div>
        <div class="col l2 m3 s6"><strong>Bildungspartner:</strong></div>
        <div class="col l2 offset-l1 m3 s6"><strong>Durchführungspartner:</strong></div>
    </div>
    <div class="row">
        <div class="col l5 m6 hide-on-small-only">&nbsp;</div>
        <div class="col l2 m3 s6"><img class="responsive-img" src="/images/ibw.gif"></div>
        <div class="col l2 offset-l1 m3 s6"><img class="responsive-img" src="/images/hsr.gif"></div>
    </div>
    <div class="row">
        <div class="col l12">
            <h2 class="webpro">Aktuell</h2>
        </div>
    </div>
    <div class="row">
        <!-- Card Start -->
        <div class="col l7">
            <div class="card medium webpro-green z-depth-2">
                <div class="card-image">
                    <img src="/images/aktuelles/camp_2016_autumn.jpg">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Web Professionals Winter Camp 16</span>
                    <p>Die Antigotchis sind frei! Das fünfte Web Professionals Barcamp ist angekündigt - sichere dir jetzt einen Platz!</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/camp/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l5">
            <div class="card medium webpro-green">
                <div class="card-image">
                    <img src="/images/aktuelles/phpstorm.jpg">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Taskrunner aus PHPStorm starten</span>
                    <p>Manchmal kann etwas kleines eine grosse Wirkung haben.</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/tasks-aus-phpstorm-automatisch-starten/" class="white-text">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->
    </div>
    <div class="row">
        <div class="col l12">
            <!-- <a class="waves-effect waves-light btn webpro-green" href="/aktuelles/archiv/">Archiv (im Aufbau)</a> -->
        </div>
    </div>

@endsection
