@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Portrait: Simon Walser | Web Professionals</title>
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
                'part2'    =>  'Simon Walser'
            ])
            31. Januar 2017
        </div>
        <div class="col l4 m5">
            <p><img class="responsive-img" width="650" src="/images/testimonials/simon_walser.jpg" alt="Simon Walser" title="Simon Walser"></p>
            <p>Absolvent der Lehrgänge Web Integrator 2014 (Grabs) sowie Web Developer 2014/2015 (Grabs)<br>
        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <p>
                <strong>aktueller Beruf:</strong> Graphic & Multimedia Design bei LGT Capital Partners
            </p>
            <p>
                <strong>vorheriger Beruf:</strong> Projekteitung bei einer Agentur
            </p>
            <p>
                <strong>Was gefällt dir bei den Web Professionals besonders?</strong> Coole Leute, kollegialer Umgang, flexibles System und vorallem Dozenten, die dank ihrem beruflichen Background sehr gezielt auf Aktualitäten eingehen können.
            </p>
            <p>
                <strong>Wie haben dich die Web Professionals beruflich weitergebracht?</strong> Bei meinem jetzigen Arbeitgeber haben wir vermehrt Online-Projekte. Ein grosser Teil wurde früher via Agenturen umgesetzt – jedoch fehlte intern das Fachwissen. Mittlerweile setzen wir teilweise eigene Projekte inhouse um, haben so mehr Spielraum für unsere Ideen und mehr Flexibilität in der Umsetzung.
            </p>
            <p>
                <strong>Wieso würdest du die Web Professionals weiterempfehlen?</strong> Weil es meiner Meinung nach die perfekte Weiterbildung in Sachen Webentwicklung ist für jene, die schon ein Vorwissen haben aber auch für jene, die bei null starten. Es wird sehr individuell auf die Teilnehmer eingegangen.
            </p>
            <p>
                <strong>Was war deine Motivation zum Brancheneinstieg resp. zum Start der Ausbildung?</strong> Mein Chef ;-). Und natürlich endlich mehr als einfach nur ein «selbstzusammengewurstelteltes-Fundament» zu haben in Webentwicklung.
            </p>
            <div class="responsive-video">
                <iframe width="1280" height="720" src="https://www.youtube.com/embed/1pJ99cPI-6c" frameborder="0" allowfullscreen></iframe>
            </div>
            @include('_partials.archiv-button')
        </section>
    </div>
    @endsection

    @section('subnavmobile')

    @endsection
