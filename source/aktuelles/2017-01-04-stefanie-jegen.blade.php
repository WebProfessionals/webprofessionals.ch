@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Portrait: Stefanie Jegen | Web Professionals</title>
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
                'part2'    =>  'Stefanie Jegen'
            ])
            4. Januar 2017
        </div>
        <div class="col l4 m5">
            <p><img class="responsive-img" width="650" src="/images/testimonials/stefanie_jegen.jpg" alt="Stefanie Jegen" title="Stefanie Jegen"></p>
            <p>Absolventin Web Integrator, 2015/2016 Chur, Teilnehmerin aktueller Lehrgang Web Developer 2016/2017, Grabs<br>
            <p><strong>Leiterin Kundenservice Web bei Somedia Production AG</strong></p>
        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <p>
                <strong>bisheriger Beruf:</strong> Kauffrau EFZ E-Profil
            </p>
            <p>
                <strong>Was gefällt dir bei den Web Professionals besonders?</strong> Dass die Web Professionals mit Geduld, breitgefächertem und praxisbezogenem Wissen allen (auch mit 0 Vorkenntnissen) eine Chance auf einen Einstieg in die Web-Branche geben.
            </p>
            <p>
                <strong>Wie haben dich die Web Professionals beruflich weitergebracht?</strong> Durch die Web Professionals konnte ich mich in ein bestehendes Netzwerk einklicken, durch welches ich einen Praktikumsplatz in der Web Abteilung bei der Somedia Production AG erhalten habe. Mittlerweile darf ich mich als Leiterin Kundenservice Web bezeichnen. Im Moment nehme ich an dem weiterführenden Lehrgang „Web Developer“ teil, um mir noch mehr Wissen anzueignen.
            </p>
            <p>
                <strong>Wieso würdest du die Web Professionals weiterempfehlen?</strong> Weil die Web Professionals mir die Chance auf einen komplett neuen und aufregenden Job ermöglicht haben und ich immer Spass daran hatte, den Unterricht zu besuchen und an jedem einzelnen Kursabend kleine Erfolgserlebnisse hatte, die mir bestätigten, dass ich auf den richtigen Weg bin.
            </p>
            <p>
                <strong>Was war deine Motivation zum Brancheneinstieg resp. zum Start der Ausbildung?</strong> Es war resp. ist an der Zeit über den Tellerrand hinauszusehen. Ich behaupte in den nächsten 100 Jahren werden 80% der kaufmännischen Jobs automatisiert. Aufgrund dieser schlechten Jobaussichten wollte ich rechtzeitig vom sinkenden Schiff abspringen und einen Schritt in Richtung Zukunft wagen. Warum also nicht gleich diejenige sein, die ihren bisherigen Job „wegprogrammiert“? ;-)
            </p>
            @include('_partials.lehrgaenge-button')
        </section>
    </div>
    @endsection

    @section('subnavmobile')

    @endsection
