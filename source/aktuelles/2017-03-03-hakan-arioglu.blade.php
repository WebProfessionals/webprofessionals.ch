@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Portrait: Hakan Arioglu | Web Professionals</title>
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
                'part2'    =>  'Hakan Arioglu'
            ])
            31. Januar 2017
        </div>
        <div class="col l4 m5">
            <p><img class="responsive-img" width="650" src="/images/testimonials/hakan_arioglu.jpg" alt="Hakan Arioglu" title="Hakan Arioglu"></p>
            <p>Teilnehmer Lehrgang Web Developer 2016/2017 (Rapperswil)<br>
        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <p>
                <strong>aktueller Beruf:</strong> Frontend Developer bei Inware AG
            </p>
            <p>
                <strong>vorheriger Beruf:</strong> Mediamatiker EFZ
            </p>
            <p>
                <strong>Was gefällt dir bei den Web Professionals besonders?</strong> Sehr gute Dozenten, jederzeit hilfsbereit, kollegialer Umgang, nicht nur für Einsteiger geeignet, sondern auch für eine Vertiefung im Webbereich.
            </p>
            <p>
                <strong>Wie haben dich die Web Professionals beruflich weitergebracht?</strong> Ich lerne die neuen Web-Technologien, welche ich versuche so gut wie möglich bei meinen Projekten einzusetzen. Mir fällt es immer leichter eine Webseite aufzusetzen und den Code sauber zu gestalten. Um noch professioneller zu werden, hat mir Web Professionals ermöglicht, dass ich zum CAS FEE Lehrgang an der HSR zugelassen wurde.
            </p>
            <p>
                <strong>Wieso würdest du die Web Professionals weiterempfehlen?</strong> Um all den neuen Web-Technologien gerecht zu werden, muss man früher oder später diverse Kurse besuchen. Web Professionals ermöglicht den ersten Start und auch die Vertiefung in den Web Bereich. Somit sind sowohl Einsteiger wie auch bereits Erfahrene bei diesem Lehrgang genau richtig. Des weiteren kann man sein Netzwerk erweitern, weil man von sehr erfahrenen Dozenten unterrichtet wird, die auch Einblicke in ihren Alltag gewähren. Mit den zusätzlichen Kursen kann man zudem auch noch weiteres Wissen aneignen, um noch sattelfester im Web-Bereich zu werden.
            </p>
            <p>
                <strong>Was war deine Motivation zum Brancheneinstieg resp. zum Start der Ausbildung?</strong> Ich habe schnell gemerkt, dass ich in meiner Lehrzeit als Mediamatiker in einer "nicht-web"-Bude vieles im Bereich Web verpasst habe. Somit habe ich eine Weiterbildung gesucht, die mich mit den neuen Sachen vertraut macht. Ich habe die richtige Entscheidung getroffen und habe eine enorme Leidenschaft zum Web gefunden. Weitere Aspekte sind die Jobauschreibungen von grossen Agenturen. Um diesen gerecht zu werden, wollte ich mein Wissen erweitern, in Form von Weiterbildungen und Selbststudium.
            </p>
            <p>
                <em><strong>04.05.17: Nachtrag in eigener Sache:</strong> Wir freuen uns sehr, dass Hakan noch während seiner Ausbildung zum Web Developer eine Festanstellung bei seinem Wunsch-Arbeitgeber - der Firma Namics - erhalten hat.</em>
            </p>

            @include('_partials.lehrgaenge-button')
        </section>
    </div>
    @endsection

    @section('subnavmobile')

    @endsection
