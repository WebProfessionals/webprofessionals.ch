@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Barcamp | Web Professionals</title>
    <meta property="og:url" content="https://web-professionals.ch/camp/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="#5 Web Professionals Barcamp" />
    <meta property="og:description" content="5. Barcamp der Web Professionals. Thema: 'CSS is awesome'. Datum: 11./12.März 2017. Location: Techfabrik Grabs SG" />
    <meta property="og:image" content="https://web-professionals.ch/images/og/camp5-preview.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
@endsection


{{-- Hero Unit on Top --}}
@section('hero')
    <header class="webpro-hero-image">
        <picture>
            <source media="(max-width: 600px)" srcset="/images/background/web_professionals_101_phone.jpg">
            <img src="/images/background/web_professionals_101.jpg" alt="Web Professionals" title="Web Professionals">
        </picture>
    </header>
    <header class="webpro-hero">
        @include('_partials.herotop')
        <div class="webpro-hero-claim">
            <span class="webpro-hero1">Mehr als Schule</span><br>
            <span class="webpro-hero2">Praxiswissen mit Barcamps</span><br><br>
            <!-- <a class="waves-effect waves-light btn webpro-red">Jetzt informieren</a> -->
        </div>
    </header>
@endsection

{{-- Main Navigation --}}
@section('navigation')
    @include('_partials.navigation', [
        'nav5status'    =>  ' active'
    ])
@endsection

@section('subnavmobile')
    <div class="collection webpro hide-on-med-and-up">
        <!-- <a href="/camp/anmeldung/" class="collection-item">Anmeldung</a> -->
        <a href="/camp/sponsoring/" class="collection-item">Sponsoring</a>
    </div>
@endsection

{{-- Main Content --}}
@section('body')
    <div class="row">
        <div class="col l5 m6 s12 webpro-left">
            @include('_partials.header1', [
                'part1'    =>  'Web Professionals',
                'part2'    =>  'Barcamp'
            ])
            <nav class="webpro-nav-lvl2 hide-on-small-only">
                <a href="/camp/anmeldung/">Anmeldung</a><br>
                <a href="/camp/sponsoring/">Sponsoring</a><br>
            </nav>
            <span class="show-on-medium-and-up">
                <br><br><img class="responsive-img" src="/images/camp/logo-camp-5.png">
            </span>

        </div>
        <div class="col l7 m6 webpro-right">
            <p>Das <strong>Web Professionals Barcamp</strong> findet halbjährlich statt und wurde schnell zu einem wichtigen Anlass inner- und ausserhalb der Web Professionals Ausbildung.
                Mittlerweile reisen die Teilnehmer nicht nur aus allen Ecken der Schweiz, sondern sogar extra aus London an um an einem unserer Camps teilnehmen zu können.</p>
            <br>
            <h2 class="webpro">#5 Web Professionals Barcamp 2017</h2>
            <p>Nachdem wir das letzte Camp kurzfristig in den ersten Web Professionals Hackathon umgewandelt haben gibt es nun wieder ein 100-prozentiges, echtes Barcamp. Keine vordefinierten Speakers, keine vorgängige Session-Planung sondern eine reine Unkonferenz, Wissen aus eigenen Reihen, Zeit für Spass und Networking.</p>
            <p>Das fünfte Web Professionals Barcamp findet am <strong>11. und 12. März 2017</strong> in der <strong>Techfabrik Grabs</strong> statt. Thema des Camps: <strong>"CSS is awesome"</strong>.</p>

            <ul>
                <li><strong>Start:</strong> 11. März 2017, 09:00 Uhr</li>
                <li><strong>Ende:</strong> 12. März 2017, 12:00 Uhr</li>
                <li><strong>Ort:</strong> Techfabrik, Mühlbachstrasse 11a, 9472 Grabs</li>
                <li><strong>Hashtag:</strong> <a href="https://twitter.com/search?q=%23webprocamp&src=typd" target="_blank">#webprocamp</a></li>
                <li><br><strong>Teilnahmegebühr:</strong> CHF 50 inkl. Getränke und Verpflegung, exkl. Übernachtung</li>
                <li><strong>Übernachtung:</strong> auf Wunsch reservieren wir dir gerne ein Zimmer im Hotel Taucher Buchs, welches uns wieder mit einem Spezialpreis von CHF 50/Person unterstützt.</li>
            </ul>

        </div>
    </div>
    <div class="row">
        <div class="col s12"><h2 class="webpro">Bisherige Camps:</h2></div>
        <div class="col l4 m6 s12">
            <div class="card">
                <div class="card-image">
                    <img src="/images/camp/winter_camp_2016.png">

                </div>
                <div class="card-content">
                    <span class="card-title">#4 Winter Camp 2016</span>
                    <p>Thema: Zukunft<br>Location: Medienhaus somedia Chur<br>Datum: 27./28. Februar 2016</p>
                </div>
                <div class="card-action">
                    <a href="https://goo.gl/photos/Nz9GqmuFLWbv8NDs6" target="_blank">Fotos (Google)</a>
                </div>
            </div>
        </div>
        <div class="col l4 m6 s12">
            <div class="card">
                <div class="card-image">
                    <img src="/images/camp/spring_camp_2015.png">

                </div>
                <div class="card-content">
                    <span class="card-title grey-text text-darken-4">#3 Spring Camp 2015</span>
                    <p>Thema: Internet der Dinge<br>Location: Techfabrik Grabs<br>Datum: 25./26. April 2016</p>
                </div>
                <div class="card-action">
                    <a href="https://goo.gl/photos/tHPyFPVsxNk9n8HV8" target="_blank">Fotos (Google)</a>
                </div>
            </div>
        </div>
        <div class="col l4 m6 s12">
            <div class="card">
                <div class="card-image">
                    <img src="/images/camp/summer_camp_2014.png">
                </div>
                <div class="card-content">
                    <span class="card-title grey-text text-darken-4">#2 Summer Camp 2014</span>
                    <p>Thema: Tools und Workflows<br>Location: Seepromenade Walenstadt<br>Datum: 30./31. August 2014</p>
                </div>
                <div class="card-action">
                    <a href="https://goo.gl/photos/m8bmEH6jxrsBA6L79" target="_blank">Fotos (Google)</a>
                </div>
            </div>
        </div>
        <div class="col l4 m6 s12">
            <div class="card">
                <div class="card-image">
                    <img src="/images/camp/winter_camp_2014.png">
                </div>
                <div class="card-content">
                    <span class="card-title grey-text text-darken-4">#1 Winter Camp 2014</span>
                    <p>Thema: alles mobil<br>Location: GBMS Atelier Buchs SG<br>Datum: ?</p>
                </div>
                <div class="card-action">
                    <a href="https://goo.gl/photos/YAeDwzZT8Zy5m6jg6" target="_blank">Fotos (Google)</a>
                </div>
            </div>
        </div>
    </div>
@endsection
