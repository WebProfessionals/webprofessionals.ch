@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Techfabrik: die Modellagentur der Web Professionals | Web Professionals</title>
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
                'part1'    =>  'Web Professionals',
                'part2'    =>  'Techfabrik: die Modellagentur der Web Professionals'
            ])
            Rolf Eggenberger, 7. Januar 2014
        </div>
        <div class="col l4 m5">

        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <p>Aus der ehemaligen Tuchfabrik wird die Techfabrik. Gewoben wird nicht mehr mit Stickmaschinen sondern mit Zend, Ajax und Co. Die Techfabrik in Grabs beherbergt die Agentur kunst://wort GmbH – welche seit 1993 als eine der ersten Agenturen Internetlösungen für nationale und internationale Firmen entwickelt – sowie die Modellagentur für die Web Professionals. Mehr dazu und zum Umbau der Tuchfabrik in den nächsten Tagen.</p>
            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/wcs31vxTgC0" frameborder="0" allowfullscreen></iframe>
            </div>
        </section>
    </div>
@endsection


@section('subnavmobile')

@endsection
