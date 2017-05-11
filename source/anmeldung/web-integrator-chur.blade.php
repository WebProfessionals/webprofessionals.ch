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

        </div>
    </header>
@endsection

@section('scripts-header')
    @include('_partials.js-anmeldung')
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
            <h2>Anmeldung zum Lehrgang Web Integrator in Chur GR</h2>
            <p>Lehrgangsbeginn: Herbst 2017</p>


            <form action="/anmeldung/danke.php" method="POST" id="form-anmeldung">
                @include('_partials.anmeldung-formular')
                <input type="hidden" name="lehrgang" value="Web Integrator Chur GR" />
                <input type="hidden" name="sku" value="INT_CHUR_17_18" />
                <input type="hidden" name="typ" value="Lehrgang" />
                <input type="hidden" name="gebuehr" value="3100" />
            </form>

        </div>

    </div>
    <br><br><br><br><br><br><br><br><br>&nbsp;
@endsection

@section('subnavmobile')

@endsection

@section('scripts-footer')
    <script>onload();</script>
@endsection