@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>lab#002 Relaunch unter jigsaw und nginx | Web Professionals</title>
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
                'part1'    =>  'lab#002',
                'part2'    =>  'Das Praxislabor der Web Professionals'
            ])
            Rolf Eggenberger, 24. August 2016
        </div>
        <div class="col l4 m5">

        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <p>Das Test-Lab #001 widmete sich dem Entwurf sowie der HTML/CSS Umsetzung eines realen Kundenprojektes vom Briefing bis zum Going Online. Nachdem das erste Lab erfolgreich abgeschlossen wurde ging es mit dem lab#002 bereits in die zweite - und fortgeschrittenere Runde. Unter dem Thema <strong>„Relaunch einer Webseite unter höchster Berücksichtigung der Performance, der Usability und der Search Engine Optimierung“</strong>.</p>
            <p>Der Auftrag an des lab#002: die Webseite der Web Professionals optimieren und einen Relaunch vorbereiten. Das Resultat des Labs ging am 24. August 2016 live.</p>
            <p>
                Unter anderem wurden folgende Themen behandelt:
                <ul class="webpro-list">
                    <li>Erstellung eines Entwurfs unter Einhaltung der Google Material Design Richtlinien</li>
                    <li>Umsetzung mittels Static Server Pages (jigsaw)</li>
                    <li>Einsatz von http/2 mittels eines nginx Servers</li>
                </ul>
            </p>
            <p>Nebst einer massiven Verbesserung der Ladezeiten wurden auch die Google PageSpeed Insight Werte merklich erhöht und nähern sich sukzessive dem Maximalwert :-)</p>
            <p>Wir danken allen Teilnehmern und Dozenten des Labs und freuen uns sehr über das Ergebnis!</p>
            @include('_partials.archiv-button')
        </section>
    </div>
    @endsection

    @section('subnavmobile')

    @endsection
