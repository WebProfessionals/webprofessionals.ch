@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Rolf Eggenberger | Dozenten | Web Professionals</title>

@endsection


{{-- Hero Unit on Top --}}
@section('hero')
    <header class="webpro-hero-image">
        <picture>
            <source media="(max-width: 600px)" srcset="/images/background/web_professionals_009_phone.jpg">
            <img src="/images/background/web_professionals_009.jpg" alt="Web Professionals" title="Web Professionals">
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
        'nav6status'    =>  ' active'
    ])
@endsection

{{-- Main Content --}}
@section('body')
    <section class="row">
        <div class="col l4 m5">
            @include('_partials.header1', [
                'part1'    =>  'Lehrgangsleiter',
                'part2'    =>  'Rolf Eggenberger'
            ])
            <p><img class="responsive-img" width="650" src="/images/dozenten/rolf-eggenberger.jpg" alt="Rolf Eggenberger" title="Rolf Eggenberger"></p>
            <nav class="webpro-nav-lvl2 hide-on-small-only">
                <a href="/ausbildung/dozenten/">Dozenten</a><br>
                <a href="/ausbildung/testimonials/">Testimonials</a><br>
            </nav>
        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <p>
                Rolf Eggenberger ist Initiator und Lehrgangsleiter der Web Professionals sowie Gründer der Agentur ://kunstwort - eine der ersten Schweizer Internet-Agenturen (erste Kunden-Projekte unter dem Namen "EP." ab 1994). Im Alter von 14 Jahren programmierte er seine erste kommerzielle Software (Planung von Busrouten), unterrichtete während der Kantonsschule seine eigenen Klassenkameraden in Informatik und begann 1992 an der Universität St.Gallen Informationsmanagement zu studieren. In einer der Eröffnungsveranstaltungen stellte der damalige Tutor Peter Hogenkamp das „Internet“ vor – seit diesem Zeitpunkt ist Rolf konstant online.
            </p>
            <p>
                Gemeinsam mit Alexander Braun ist er Co-Founder diverser Online-Startups - unter anderem im Bereich Social Book Reading, semantischen Daten und künstlicher Intelligenz. Diese Erfahrungen helfen dabei, die Web Professionals immer wieder auf Tempo zu bringen und sich laufend an Neuem zu orientieren.
            </p>
            <ul class="webpro-list">
                <li>Linked-In</li>
                <li>Xing</li>
                <li>Twitter</li>
                <li>Facebook</li>
            </ul>
        </section>

    </section>
@endsection

@section('subnavmobile')
    <!--
    <h2 class="hide-on-med-and-up">Lehrgänge:</h2>
    <div class="collection webpro hide-on-med-and-up">
        <a href="/lehrgaenge/web-integrator/" class="collection-item webpro-green white-text">Web Integrator</a>
        <a href="/lehrgaenge/web-developer/" class="collection-item webpro-green white-text">Web Developer</a>
        <a href="/lehrgaenge/web-designer/" class="collection-item webpro-green white-text">Web Designer</a>
    </div>
    -->
@endsection
