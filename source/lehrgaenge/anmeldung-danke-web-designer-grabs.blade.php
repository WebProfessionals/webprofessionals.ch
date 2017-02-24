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
                Du erhälst in den nächsten 1-2 Tagen eine Anmeldebestätigung per E-Mail sowie im Laufe der folgenden Tage weitere Unterlagen per Post. Wir freuen uns, dich bei den Web Professionals begrüssen zu dürfen!
            </p>

        </div>

    </div>

    <!-- Google Code for Anmeldung Web Designer Grabs Conversion Page -->
    <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 974413104;
        var google_conversion_language = "en";
        var google_conversion_format = "3";
        var google_conversion_color = "ffffff";
        var google_conversion_label = "bl2vCMT3yG4QsLrR0AM";
        var google_remarketing_only = false;
        /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/974413104/?label=bl2vCMT3yG4QsLrR0AM&amp;guid=ON&amp;script=0"/>
        </div>
    </noscript>

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
