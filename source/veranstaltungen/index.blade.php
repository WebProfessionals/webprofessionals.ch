@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Veranstaltungen | Web Professionals</title>

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
            <p>Begleitend zu unseren Lehrgängen finden im Rahmen der Ausbildung regelmässig öffentliche Veranstaltungen für Web Profis und Interessierte statt. Diese sind für jedermann zugänglich.</p>
        </section>
    </div>

    <div class="row">
        <div class="col l4">
            <div class="card small">
                <div class="card-stacked">
                    <div class="card-content">
                        <p>
                            <span class="card-events-day">Mittwoch</span><br>
                            <span class="card-events-date">17. August 2016</span>
                            <br>
                            <span class="card-events-title">Web Professionals and Friends</span><br>
                            19:00 - 21:00 Uhr<br>
                            Techfabrik, Mühlbachstrasse 11a, 9472 Grabs
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="https://www.google.ch/maps/place/Techfabrik/@47.1805806,9.4487484,17z/data=!3m1!4b1!4m5!3m4!1s0x479b2fd2338a08f9:0x5bd6507cdbde9c3b!8m2!3d47.180577!4d9.4509371?hl=de" target="_blank">Google Maps</a>
                        <a href="https://www.facebook.com/events/937128136414368/" target="_blank">Facebook Event</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col l4">
            <div class="card z-depth-2 webpro-green small">
                <div class="card-stacked">
                    <div class="card-content white-text">
                        <p>
                            <span class="card-events-day">Mittwoch</span><br>
                            <span class="card-events-date">24. August 2016</span>
                            <br>
                            <span class="card-events-title"><strong>Informationsanlass in Grabs SG (Techfabrik)</strong></span><br>
                            19:00 - 20:00 Uhr<br>
                            Techfabrik, Mühlbachstrasse 11a, 9472 Grabs
                        </p>
                    </div>
                    <div class="card-action">
                        <a class="white-text" href="https://www.google.ch/maps/place/Techfabrik/@47.1805806,9.4487484,17z/data=!3m1!4b1!4m5!3m4!1s0x479b2fd2338a08f9:0x5bd6507cdbde9c3b!8m2!3d47.180577!4d9.4509371?hl=de" target="_blank">Google Maps</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col l4">
            <div class="card small">
                <div class="card-stacked">
                    <div class="card-content">
                        <p>
                            <span class="card-events-day">Samstag / Sonntag</span><br>
                            <span class="card-events-date">29./30. Oktober 2016</span>
                            <br>
                            <span class="card-events-title">Web Professionals Autumn Camp 2016</span><br>
                            Start Samstag 09.00 Uhr<br>
                            Techfabrik, Mühlbachstrasse 11a, 9472 Grabs
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="https://www.google.ch/maps/place/Techfabrik/@47.1805806,9.4487484,17z/data=!3m1!4b1!4m5!3m4!1s0x479b2fd2338a08f9:0x5bd6507cdbde9c3b!8m2!3d47.180577!4d9.4509371?hl=de" target="_blank">Google Maps</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
