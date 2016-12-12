@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Veranstaltungen | Web Professionals</title>
    <meta name="description" content="Bleib mit unseren regelmässigen öffentlichen Veranstaltungen auf dem Laufenden. Infoanlässe, Referate, Barcamps, Kurse und vielem mehr.">
    <meta property="og:image" content="https://web-professionals.ch/images/sharing/web-professionals.jpg" />


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
            <span class="webpro-hero2">Infoanlässe, Friends und Co.</span><br><br>
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
    <div class="row">
        <div class="col l5 m6 webpro-left">
            @include('_partials.header1', [
                'part1'    =>  'Veranstaltungen',
                'part2'    =>  'Termine'
            ])
            <nav class="webpro-nav-lvl2">
                &nbsp;
            </nav>
        </div>
        <section class="col l7 m6 webpro-right">
            <p>Dein/Euer Event fehlt in der Liste? info@web-professionals.ch</p>
        </section>
    </div>

    <div class="row card-events">
        <div class="col s12">
            <div id='content'>
                <h1 id='calendar' style="color:grey">Veranstaltungen werden geladen . . .</h1>
                <ul id='events'></ul>
            </div>
        </div>

        <div class="col l4 m6 s12 card-event card-invisible">
            <div class="card small" itemscope itemtype="http://schema.org/Event">
                <div class="card-stacked">
                    <div class="card-content">
                        <i class="material-icons right">school</i>
                        <span class="card-events-day">Tag</span><br>
                        <span class="card-events-date" itemprop="startDate" content="2017-09-23T10:00">Datum</span><br>
                        <span class="card-event-time">10:00 - 11:30 Uhr</span><br>
                        <br>
                        <span class="card-events-title" itemprop="name"><strong>Titel</strong></span><br>
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
