@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Portrait: Jana Heeb | Web Professionals</title>
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
                'part1'    =>  'Portrait / Testimonial',
                'part2'    =>  'Jana Heeb'
            ])
            20. März 2018
        </div>
        <div class="col l4 m5">
            <p><img class="responsive-img" width="650" src="/images/aktuelles/jana01.jpg" alt="Jana Heeb" title="Jana Heeb"></p>
            <p>Teilnehmerin Lehrgang Web Developer 2015/2016 (Grabs)<br>
        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <p>
                <strong>derzeitige Aufgabe:</strong> Projektleitung Web bei <strong>wecando</strong>
            </p>
            <p>
                <strong>vorheriger Beruf:</strong> Mediamatikerin
            </p>
            <p>
                <strong>Was gefällt dir bei den Web Professionals besonders?</strong> Geniale Dozenten die mit Freude und viel Wissen unterrichten. Es gibt nicht nur den Unterricht, sondern auch ganz viel weitere Möglichkeit das Wissen zu erweitern. Vor allem die Camps, Web Pro & Friends machen wahnsinnig viel Spass und man lernt spielend.
            </p>
            <p>
                <strong>Wie haben dich die Web Professionals beruflich weitergebracht?</strong> Mein Ziel war es von Anfang an mich im Web-Bereich selbständig zu machen. Hierfür war die Ausbildung der perfekte Wegbegleiter. Auch der Austausch an den Treffen hat mir enorm weitergeholfen. Jetzt bin ich glücklich, dass ich mein Ziel erreicht habe.
            </p>
            <p>
                <strong>Wieso würdest du die Web Professionals weiterempfehlen?</strong> Egal ob für den Einstieg oder Vertiefung, da ist für jeden was dabei. Das Team ist top und auch das ganze rundherum ist einfach stimmig. Man profitiert gleich zweimal, von der Ausbildung wie auch von den tollen Leute die man kennenlernt.
            </p>
            <p>
                <strong>Was war deine Motivation zum Brancheneinstieg resp. zum Start der Ausbildung?</strong> In meiner Ausbildung als Mediamatikerin habe ich im Web-Bereich nur die Grundlagen gelernt und mich mehr ins Marketing vertieft. Für mein Ziel, mich im Web-Bereich selbständig zu machen, fehlte mir somit noch einiges an Wissen. Die Ausbildung zum Web Developer war so die perfekte Lösung.
            </p>

            @include('_partials.lehrgaenge-button')
        </section>
    </div>
    @endsection

    @section('subnavmobile')

    @endsection
