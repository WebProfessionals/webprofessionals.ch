@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Spring Camp 2015 | Web Professionals</title>
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
                'part1'    =>  'Rückblick',
                'part2'    =>  'Web Professionals Spring Camp 2015'
            ])
            Rolf Eggenberger, 28. April 2015
        </div>
        <div class="col l4 m5">
            <p><img class="responsive-img materialboxed" width="650" src="/images/aktuelles/camp_2015_spring_big_1.jpg"></p>
            <p><img class="responsive-img materialboxed" width="650" src="/images/aktuelles/camp_2015_spring_big_2.jpg"></p>
            <p><a href="https://goo.gl/photos/tHPyFPVsxNk9n8HV8" class="waves-effect waves-light btn webpro-green" target="_blank">weitere Fotos (Google)</a></p>
        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/P1qSjie6j7Q" frameborder="0" allowfullscreen></iframe>
            </div>
            <p>Thema des dritten Camps: Internet der Dinge.<br>
                Video: Johanna Gächter, Fotos: Nele Ilic.

            </p>
            @include('_partials.archiv-button')
        </section>

    </div>
@endsection

@section('subnavmobile')

@endsection
