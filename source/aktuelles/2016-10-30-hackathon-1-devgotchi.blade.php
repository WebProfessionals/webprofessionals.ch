@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Devgotchi | Hackathon#1 | Web Professionals</title>
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
            <a class="waves-effect waves-light btn webpro-red webpro-hero-button" href="/lehrgaenge/anmeldung/">Jetzt anmelden</a>
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
                'part1'    =>  'Hackathon#1',
                'part2'    =>  'Devgotchi'
            ])
            Rolf Eggenberger, 30. Oktober 2016
        </div>
        <div class="col l4 m5">
            <span class="show-on-medium-and-up">
                <br><br><img class="responsive-img" src="/images/camp/logo-camp-2016-herbst.png">
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
            <h2 class="webpro">#1 Web Professionals Hackathon 2016</h2>
            <p>Dieses Mal fand am <strong>29. und 30. Oktober</strong> in der Techfabrik Grabs statt einem Barcamp der erste Web Professionals Hackathon statt.  Thema: <strong>Devgotchi.</strong></p>
            <h3>Devgotchi?</h3>
            <p>Des Developers ärgster Feind sind weder Spinnen noch Schlangen sondern <strong>Bugs</strong>. Ein Devgotchi sieht aus wie ein Käfer und ist ein Tamagotchi, welches man weder streicheln noch füttern will. Man kann es sich auch in etwa wie ein Mogwai vorstellen, welches entweder dem Sonnenlicht ausgesetzt oder nass wurde oder nach Mitternacht gefressen hat. Jedenfalls haben wir es nicht sonderlich gerne.</p>
            <p>Nachdem die Pokémons aktuell ihr grosses Comeback haben ist es nun an der Zeit, die Tamagotchis ebenfalls wieder aufleben zu lassen. Aber eben: allzu wohl sollen sie sich nun doch nicht fühlen. Schon gar nicht die Devgotchis.</p>
            <p>Wir haben gemeinsam unser eigenes Devgotchi programmiert, welches als mobile Applikation in unserem Smartphone lebt und auf diverse Sensordaten unseres Geräts reagiert.</p>


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
