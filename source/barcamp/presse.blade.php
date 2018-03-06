@extends('_layouts.master')


{{-- Header --}}
@section('header')
    <title>Barcamp | Web Professionals</title>
    <meta property="og:url" content="https://web-professionals.ch/barcamp/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="#2 webPro + friends Hackathon" />
    <meta property="og:description" content="#2 webPro + friends Hackathon. Thema: 'Hack for good'. Datum: 17./18. März 2018. Location: Techfabrik Grabs SG" />
    <meta property="og:image" content="https://web-professionals.ch/images/og/hackathon2-preview.jpg" />
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
            <span class="webpro-hero1">Hack for Good</span><br>
            <span class="webpro-hero2">digitale Lösungen für soziale Herausforderungen</span><br><br>
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
                'part2'    =>  'Barcamp / Hackathon'
            ])
            <nav class="webpro-nav-lvl2 hide-on-small-only">
                <a href="/barcamp/">Informationen</a><br>
                <a href="/barcamp/anmeldung/">Anmeldung</a><br>
                <a href="/barcamp/sponsoring/">Sponsoring</a><br>
            </nav>
            <br>



        </div>
        <div class="col l7 m6 webpro-right">

            <h2 class="webpro">Pressemeldung Hackathon 2018</h2>

            <ul>
                <li><a href="/files/presse/hackathon2/2018_03_07_WebProfessionals_HackForGood_Medienmitteilung.docx" target="_blank">Pressebericht als Word-Datei</a></li>
                <li><a href="/files/presse/hackathon2/2018_03_07_WebProfessionals_HackForGood_Medienmitteilung.pdf" target="_blank">Pressebericht als PDF</a></li>
            </ul>

            <h2 class="webpro">Bilder</h2>

            <ul>
                <li><a href="/files/presse/hackathon2/hackathon_teilnehmer1.jpg" target="_blank">Teilnehmer Barcamp</a></li>
                <li><a href="/files/presse/hackathon2/hackathon_teilnehmer2.jpg" target="_blank">Teilnehmer Barcamp</a></li>
                <li><a href="/files/presse/hackathon2/hackathon_teilnehmer3.jpg" target="_blank">Teilnehmer Barcamp</a></li>
                <li><a href="/files/presse/hackathon2/hackathon_luca_schmid.jpg" target="_blank">Teilnehmer Luca Schmid präsentiert die Ergebnisse seiner Session</a></li>
                <li><a href="/files/presse/hackathon2/hackathon_veith_zaech.jpg" target="_blank">Veith Zäch, Dozent (Mitte, schwarzes Shirt) mit Teilnehmern</a></li>
                <li><a href="/files/presse/hackathon2/hackathon_rolf_eggenberger.jpg" target="_blank">Rolf Eggenberger (Lehrgangsleiter) während der Sessionplanung</a></li>
            </ul>

            <p>Bildlegende zu den Impressionen (Teilnehmer): <em>Einblick in die von Web Professionals organisierten Hackathons und Barcamps: Die Events sind eine ideale Plattform für Wissen und Networking, Kollaboration und Spass.</em></p>

            <p>Weitere Bilder zur Verwendung in Pressemeldungen <a href="/barcamp/#archiv">sind im Archiv verfügbar.</a></p>

            <h2 class="webpro">Teaser Video</h2>

            <br>

            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/gtB9BNsH3qE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>




        </div>
    </div>



@endsection
