@extends('_layouts.master')

{{-- Pixel --}}
@section('pixel')
    <script>
        fbq('track', 'Purchase');
    </script>
@endsection

{{-- Header --}}
@section('header')
    <title>Danke! | Web Professionals</title>

@endsection

{{-- Hero Unit on Top --}}
@section('hero')
    <header class="webpro-hero-image">
        <picture>
            <source media="(max-width: 600px)" srcset="/images/background/web_professionals_001_phone.jpg">
            <img src="/images/background/web_professionals_014.jpg" alt="Web Professionals" title="Web Professionals">>
        </picture>
    </header>
    <header class="webpro-hero">
        @include('_partials.herotop')
        <div class="webpro-hero-claim">
            <span class="webpro-hero1">Es geht los!</span><br>
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
            <nav class="webpro-nav-lvl2 hide-on-small-only">
                <a href="/lehrgaenge/web-integrator/">Web Integrator</a><br>
                <a href="/lehrgaenge/web-developer/">Web Developer</a><br>
                <a href="/lehrgaenge/web-designer/">Web Designer</a>
            </nav>
        </div>
        <div class="col l7 m6 webpro-right">

            <p>
                <strong>Herzlichen Dank für deine Anmeldung!</strong><br>
                Du erhälst gleich eine Anmeldebestätigung per E-Mail (bitte zur Sicherheit noch im Spam-Folder nachsehen) sowie kurz nach den Sommerferien weitere Unterlagen per Post zugestellt. Wir freuen uns, dich bei den Web Professionals begrüssen zu dürfen!
            </p>

        </div>

    </div>
@endsection

@section('subnavmobile')
@endsection
