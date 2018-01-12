@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>API | Barcamp#6 | Web Professionals</title>
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
                'part1'    =>  'Barcamp#6',
                'part2'    =>  'API'
            ])
            <!-- Rolf Eggenberger, 30. Oktober 2016 -->
        </div>
        <div class="col l4 m5 hide-on-small-only">

                <br><img class="responsive-img" src="/images/barcamp/logo-camp-6.png">

                <p>Wir bedanken uns bei unseren Sach- und Geldsponsoren, welche die Durchführung unseres Barcamps unterstützt und damit ermöglicht haben:</p>
                <div class="row">
                    <div class="col s12"><p class="sponsoren-titel">Hauptsponsoren:</p></div>
                    <div class="col s12 m6 l5">
                        <a href="http://www.viaduct.ch/" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/viaduct.png"></a>
                    </div>
                    <div class="col s12 hide-on-med-and-up"><br></div>
                    <div class="col s12 m5 l4 offset-m1 offset-l1">
                        <a href="http://www.liip.ch" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/liip.png"></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12"><p class="sponsoren-titel">Essens-Sponsor:</p></div>
                    <div class="col s8 m6 l5 end">
                        <a href="https://www.hsr.ch/Weiterbildung-an-der-HSR.2369.0.html" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/hsr.png"></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12"><p class="sponsoren-titel">Getränke-Sponsoren:</p></div>
                    <div class="col s6 m6 l4">
                        <a href="http://www.multidigital.ch" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/multidigital.png"></a>
                    </div>
                    <div class="col s6 m6 l4 offset-l2">
                        <a href="http://www.ibw.ch" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/ibw_sponsoring.gif"></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12"><p class="sponsoren-titel">Kaffee-Sponsor:</p></div>
                    <div class="col s6 m6 l4">
                        <a href="https://tomschaepper.net/" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/tomschaepper.png"></a>
                    </div>
                </div>

        </div>
        <section class="col l7 offset-l1 m6 offset-m1 s12">
            <h2 class="webpro">#6 Web Professionals Barcamp 2017</h2>
            <p>Das erste Barcamp welches seinem Namen alle Ehre machte: ein Barcamp mit Bar und Campern. Entstanden sind viele tolle Sessions rund um das Thema API, einem langen Abend bei Johann Sebastian Jost sowie der Tech-Umsetzung des Klassikers "1, 2 oder 3" und einer marktreifen App namens "Face your booze!".</p>
            <p>Das sechste Web Professionals Barcamp fand am <strong>28. und 29. Oktober 2017</strong> in der <strong>Techfabrik Grabs</strong> statt. Thema des Camps: <strong>"API"</strong>.</p>

            <p><a href="https://photos.app.goo.gl/ZrNkrqY58CZA0fK73" class="waves-effect waves-light btn webpro-green" target="_blank">Fotos vom Camp (Google)</a></p>
<!--
            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ACDM03UBrTo?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>

            @include('_partials.archiv-button')
                -->
        </section>
    </div>
@endsection

@section('subnavmobile')

@endsection
