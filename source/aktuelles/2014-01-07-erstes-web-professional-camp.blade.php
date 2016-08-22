@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Erstes Web Professional Camp | Web Professionals</title>
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
                'part1'    =>  'Barcamp',
                'part2'    =>  '15./16. Februar 2014: Erstes Web Professional Camp'
            ])
            Rolf Eggenberger, 7. Januar 2014
        </div>
        <div class="col l4 m5">

        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <p>Das Smartphone ist überall mit dabei, das Tablet steht zuhause jederzeit griffbereit. Alle Geräte sind dank der Wolke immer auf dem neusten Stand, Chromecast, Apple TV und Co. sorgen für die Verbindung zu unserer Heimelektronik. Kein “Computer-einschalten-und-warten-bis-gestartet” mehr. Kommunikation überall, jederzeit, vernetzt, synchron und real time. Dies verändert unsere Gewohnheiten in der Informationsbeschaffung grundlegend. Wie gehen wir als Web Entwickler und Web Designer mit diesem Wandel um?</p>
            <p>Am ersten Web Professional Camp widmen wir uns diesen Themen. In Referaten, Workshops und Sessions lernen, entdecken und entwickeln wir. Und für frische Luft und Abwechslung am Samstag Abend ist ebenfalls gesorgt.</p>
            <p>Weitere Informationen und Anmeldung zum Camp gibt es auf dieser Seite.</p>
            @include('_partials.archiv-button')
        </section>

    </div>
@endsection

@section('subnavmobile')

@endsection
