@extends('_layouts.master')


{{-- Header --}}
@section('header')
    <title>Barcamp | Web Professionals</title>
    <meta property="og:url" content="https://web-professionals.ch/barcamp/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="#6 Web Professionals Barcamp" />
    <meta property="og:description" content="6. Barcamp der Web Professionals. Thema: 'API'. Datum: 28./29. Oktober 2017. Location: Techfabrik Grabs SG" />
    <meta property="og:image" content="https://web-professionals.ch/images/og/camp6-preview.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
@endsection

{{-- Hero Unit on Top --}}
@section('hero')
    <header class="webpro-hero-image">
        <picture>
            <source media="(max-width: 600px)" srcset="/images/background/web_professionals_camp01_phone.jpg">
            <img src="/images/background/web_professionals_camp02.jpg" alt="Web Professionals Barcamp" title="Web Professionals Barcamp">
        </picture>
    </header>
    <header class="webpro-hero">
        @include('_partials.herotop')
        <div class="webpro-hero-claim">
            <span class="webpro-hero1">Mehr als Schule</span><br>
            <span class="webpro-hero2">Praxiswissen und Vernetzung durch Barcamps</span><br><br>
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
        <a href="/barcamp/sponsoring/" class="collection-item">Sponsoring</a>
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
                <a href="/barcamp/anmeldung/">Anmeldung</a><br>
                <a href="/barcamp/sponsoring/">Sponsoring</a><br>
            </nav>
            <br>


            <span class="show-on-medium-and-up">
                <!--<br><br><img class="responsive-img" src="/images/barcamp/logo-camp-5.png">-->
            </span>

        </div>
        <div class="col l7 m6 webpro-right">
            <h2 class="webpro">Teilnehmer des 6. Web Professionals Barcamps</h2>
            <br>
            Marielle	Beusch<br>
            Sarah	Buda
            Marina	Enadeghe<br>
            Niculin	Fürst<br>
            Vito	Gaio<br>
            Tom	Grosup<br>
            Cindy	Gut<br>
            Manuel	Hertach<br>
            Marc-Alexander	Iten<br>
            Stefanie	Jegen<br>
            Livia	Kobler<br>
            Maria	Koller<br>
            Remo	Linter<br>
            Marco	Ludwig<br>
            Vanessa	Morscher<br>
            Pierre	Recklies<br>
            Michael	Walser<br>
            Melvin	Weninger<br>
            Christian	Wälti<br>
            Florian	Würtenberger<br>
        </div>
    </div>
@endsection
