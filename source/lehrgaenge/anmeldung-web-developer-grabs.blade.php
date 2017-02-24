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
            <h2>Anmeldung zum Lehrgang Web Developer in Grabs SG</h2>

            <form action="https://formspree.io/info@web-professionals.ch" method="POST">
                @include('_partials.anmeldung-formular')
                <input type="hidden" name="lehrgang" value="Web Developer Grabs" />
                <input type="hidden" name="_subject" value="Anmeldung Web Developer Grabs" />
                <input type="hidden" name="_next" value="https://web-professionals.ch/lehrgaenge/anmeldung-danke-web-developer-grabs/" />
            </form>

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
