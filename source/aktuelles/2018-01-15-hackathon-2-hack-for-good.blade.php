@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Hack for Good | Hackathon#2 | Web Professionals</title>
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
            <span class="webpro-hero1">Leg' los!</span><br>
            <span class="webpro-hero2">Step by step zum Web-Profi</span><br>
            <a class="waves-effect waves-light btn webpro-red webpro-hero-button" href="/barcamp/anmeldung/">Jetzt anmelden</a>
        </div>
    </header>
@endsection

{{-- Main Navigation --}}
@section('navigation')
    @include('_partials.navigation', [
        'nav1status'    =>  ' active'
    ])
@endsection

{{-- Main Content --}}
@section('body')
    <div class="row">
        <div class="col s12">
            @include('_partials.header1', [
                'part1'    =>  '#2 Hackathon',
                'part2'    =>  'Hack for Good'
            ])
            Rolf Eggenberger, 30. Oktober 2016
        </div>
        <div class="col l4 m5">
            <span class="show-on-medium-and-up">
                <br><br><img class="responsive-img" src="/images/barcamp/logo-camp-2016-herbst.png">
                <br><br><h2>Wir bedanken uns ganz herzlichen bei unseren Sponsoren:</h2>
                <ul>
                    <li><a href="http://www.multidigital.ch/" target="_blank">multidigital</a></li>
                    <li><a href="http://www.ibw.ch/" target="_blank">ibW Höhere Fachschule Südsotschweiz</a></li>
                </ul>
            </span>
        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <p>Das Web Professionals Barcamp findet halbjährlich statt und wurde schnell zu einem wichtigen Anlass inner- und ausserhalb der Web Professionals Ausbildung.
                Mittlerweile reisen die Teilnehmer nicht nur aus allen Ecken der Schweiz, sondern sogar extra aus London an um an einem unserer Camps teilnehmen zu können.</p>
            <br>
            <h2 class="webpro">#2 WebPro + friends Hackathon</h2>
            <p>Der zweite webPro + friends Hackathon findet am <strong>17. und 18. März 2018</strong> in der <strong>Techfabrik Grabs</strong> statt. Thema: <strong>"Hack for Good"</strong>.</p>
            <p>"Making the world a better place" (Hooli) ist zwar ein pointierter Leitspruch aus der HBO Serie <a href="https://www.hbo.com/silicon-valley">Silicon Valley</a>, trifft aber dennoch den Grundgedanken der Internet-Community - resp. derjenigen welche den Urgedanken der Internet-Begründer wie Jon Postel, Tim Berners-Lee etc. weitertragen. Auch Web Professionals mögen den Gedanken des Miteinanders, des Austauschs und wollen am 2. Hackathon Applikationen entwickeln, welche den Alltag und unsere Umgebung ein wenig schöner und besser machen können.</p>


            <h3>Informationen zum Camp</h3>
            <p>
                <strong>Datum:</strong> 29. / 30. Oktober 2016<br>
                <strong>Beginn:</strong> Samstag, 09:00 Uhr<br>
                <strong>Ende:</strong> Sonntag, 16:00 Uhr<br>
                <strong>Durchführungsort:</strong> Techfabrik, Mühlbachstrasse 11a, 9472 Grabs<br>
            </p>
            @include('_partials.archiv-button')
        </section>
    </div>
@endsection

@section('subnavmobile')

@endsection
