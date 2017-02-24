@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Veranstaltungen | Web Professionals</title>
    <meta name="description" content="Bleib mit unseren regelmässigen öffentlichen Veranstaltungen auf dem Laufenden. Infoanlässe, Referate, Barcamps, Kurse und vielem mehr.">
    <meta property="og:image" content="https://web-professionals.ch/images/sharing/web-professionals.jpg" />

    <script>
        var calendar = [
            'web-professionals.ch_hvur00fojbon20ivoleejrlvk8@group.calendar.google.com'     // WebPro Veranstaltungen
        ];
        var calendarType = [
            'webpro'
        ]

    </script>
    <script src="/js/events.js"></script>
    <script src='https://apis.google.com/js/client.js?onload=handleClientLoad'></script>

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
            <span class="webpro-hero1">Bleib dabei</span><br>
            <span class="webpro-hero2">Infoanlässe, Friends, Barcamps, Hackathons und Co.</span><br><br>
            <a class="waves-effect waves-light btn webpro-red" href="/lehrgaenge/">Jetzt informieren</a>
        </div>
    </header>
@endsection

{{-- Main Navigation --}}
@section('navigation')
    @include('_partials.navigation', [
        'nav4status'    =>  ' active'
    ])
@endsection

{{-- Main Content --}}
@section('body')
    <!-- Google Code for Infoanl&auml;sse Conversion Page -->
    <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 974413104;
        var google_conversion_language = "en";
        var google_conversion_format = "3";
        var google_conversion_color = "ffffff";
        var google_conversion_label = "4eY6CKiGzW4QsLrR0AM";
        var google_remarketing_only = false;
        /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/974413104/?label=4eY6CKiGzW4QsLrR0AM&amp;guid=ON&amp;script=0"/>
        </div>
    </noscript>
    
    <div class="row">
        <div class="col l5 m6 webpro-left">
            @include('_partials.header1', [
                'part1'    =>  'Veranstaltungen',
                'part2'    =>  'Termine'
            ])
            <nav class="webpro-nav-lvl2">
                <a href="/veranstaltungen/">alle Termine</a><br>
                <a href="/veranstaltungen/web-professionals/" class="webpro-subnav-active">Filter: Web Professionals Termine</a><br>
            </nav>
        </div>
        <section class="col l7 m6 webpro-right">
            <p>Begleitend zu unseren Lehrgängen finden im Rahmen der Ausbildung regelmässig öffentliche Veranstaltungen für Web Profis und Interessierte statt. Diese sind für jedermann zugänglich.</p>
            <p>Bist du während den Daten unserer Infoanlässe abwesend? Dann nimm doch <a href="/kontakt/">mit uns Kontakt auf</a>. Gerne vereinbaren wir ein persönliches Beratungsgespräch.</p>
        </section>
    </div>

    <div class="row card-events">
        <div class="col s12">
            <div id='content'>
                <h1 id='calendar-loading' style="color:grey">Veranstaltungen werden geladen . . .</h1>
            </div>
        </div>

        <div class="col l4 m6 s12 card-event card-invisible">
            <div class="card small">
                <div class="card-stacked">
                    <div class="card-content">
                        <i class="material-icons right card-icon">school</i>
                        <span class="card-events-day">Tag</span><br>
                        <span class="card-events-startdate">Datum Start</span><br>
                        <span class="card-events-enddate">Datum Ende</span>
                        <span class="card-events-time">Zeit</span><br>
                        <br>
                        <span class="card-events-title">Web Professionals</span><br>
                        <br>
                        <span class="card-events-location">Location</span>
                    </div>
                    <div class="card-action">
                        <a href="/lehrgaenge/web-integrator/" target="_blank">weitere Infos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
