@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Portrait: Melanie Bernhard | Web Professionals</title>
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
            <a class="waves-effect waves-light btn webpro-red webpro-hero-button" href="/anmeldung/">Jetzt anmelden</a>
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
                'part2'    =>  'Melanie Bernhard'
            ])
            4. Januar 2017
        </div>
        <div class="col l4 m5">
            <p><img class="responsive-img" width="650" src="/images/testimonials/melanie_bernhard.jpg" alt="Melanie Bernhard" title="Melanie Bernhard"></p>
            <p>Absolventin Web Integrator, 2015/2016 Chur</p>
            <p><strong>Online Managerin Läderach chocolatier suisse</strong></p>
        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <p>
                <strong>bisheriger Beruf:</strong> Sales Support (Finanzbranche)
            </p>
            <p>
                <strong>Was gefällt dir bei den Web Professionals besonders?</strong> Die Web Professionals sind Netzwerker. Sie bilden nicht nur aus, sie verbinden Menschen. Auf verschiedenen Wegen (Camp, Web Pro & Friends, Lab, Unterricht) bietet sich stets die Möglichkeit mit Dozenten, Firmenpersönlichkeiten, Fachpersonen und anderen Schülern in Kontakt zu treten.
            </p>
            <p>
                <strong>Wie haben dich die Web Professionals beruflich weitergebracht?</strong> Durch die Web Professionals konnte ich mir einen Praktikumplatz bei Läderach chocolatier suisse ergattern. Während der Praktikumszeit konnte ich weiter vom Wissen der Web Professionals profitieren und wurde von Dozenten durch das Praktikum begleitet. Dank des Praktikums habe ich heute meinen Traumjob, im Traumbereich :)
            </p>
            <p>
                <strong>Wieso würdest du die Web Professionals weiterempfehlen?</strong> Top Unterricht. Top Dozenten. Top Netzwerk. Die Web Professionals geben dir das Gefühl ein Teil einer Community zu sein und das auf selber Wellenlänge.
            </p>
            <p>
                <strong>Was war deine Motivation zum Brancheneinstieg resp. zum Start der Ausbildung?</strong> Online Marketing. Ich hatte zuvor eine Ausbildung als Marketing Managerin absolviert und wollte mir zusätzlich ein Web-Wissen aufbauen.
            </p>
            @include('_partials.archiv-button')
        </section>
    </div>
    @endsection

    @section('subnavmobile')

    @endsection
