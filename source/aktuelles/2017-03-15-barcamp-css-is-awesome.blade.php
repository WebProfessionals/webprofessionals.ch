@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>CSS is awesome! | Barcamp#5 | Web Professionals</title>
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
            <span class="webpro-hero1">Leg' los!</span><br>
            <span class="webpro-hero2">Step by step zum Web-Profi</span><br>
            <a class="waves-effect waves-light btn webpro-red webpro-hero-button" href="/lehrgaenge/anmeldung/">Jetzt anmelden</a>
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
        <div class="col s12">
            @include('_partials.header1', [
                'part1'    =>  'Barcamp#5',
                'part2'    =>  'CSS is awesome!'
            ])
            <!-- Rolf Eggenberger, 30. Oktober 2016 -->
        </div>
        <div class="col l4 m5 hide-on-small-only">

                <br><img class="responsive-img" src="/images/barcamp/logo-camp-5.png">

                <p>Wir bedanken uns bei unseren Sach- und Geldsponsoren, welche die Durchführung unseres Barcamps unterstützt und damit ermöglicht haben:</p>
                <div class="row">
                    <div class="col s12"><p class="sponsoren-titel">Hauptsponsor:</p></div>
                    <div class="col s6 m6 l6">
                        <a href="http://www.somedia-production.ch/home/" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/logo_somedia_production_cmyk.png"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12"><p class="sponsoren-titel">Getränke-Sponsor:</p></div>
                    <div class="col s6 m6 l6">
                        <a href="https://www.hsr.ch/Weiterbildung-an-der-HSR.2369.0.html" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/hsr.png"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12"><p class="sponsoren-titel">Kaffee-Sponsoren:</p></div>
                    <div class="col s6 m6 l6">
                        <a href="http://www.ibw.ch/home/" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/ibw_sponsoring.gif"></a>
                    </div>
                    <div class="col s6 m6 l6">
                        <a href="https://tomschaepper.net/" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/tomschaepper.png"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12"><p class="sponsoren-titel">Sach-Sponsor:</p></div>
                    <div class="col s6 m6 l6">
                        <a href="http://www.laederach.com/ch-de/" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/laederach.png"></a>
                    </div>
                </div>

        </div>
        <section class="col l7 offset-l1 m6 offset-m1 s12">
            <h2 class="webpro">#5 Web Professionals Barcamp 2017</h2>
            <p>Nachdem wir das letzte Camp kurzfristig in den ersten Web Professionals Hackathon umgewandelt haben gab es nun wieder ein 100-prozentiges, echtes Barcamp. Keine vordefinierten Speakers, keine vorgängige Session-Planung sondern eine reine Unkonferenz, Wissen aus eigenen Reihen, Zeit für Spass und Networking.</p>
            <p>Das fünfte Web Professionals Barcamp fand am <strong>11. und 12. März 2017</strong> in der <strong>Techfabrik Grabs</strong> statt. Thema des Camps: <strong>"CSS is awesome"</strong>.</p>

            <p><a href="https://goo.gl/photos/19EfHF58GZFgFpxJ7" class="waves-effect waves-light btn webpro-green" target="_blank">Fotos vom Camp (Google)</a></p>

            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ACDM03UBrTo?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>

            @include('_partials.archiv-button')
        </section>
    </div>
@endsection

@section('subnavmobile')

@endsection
