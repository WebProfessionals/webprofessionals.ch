@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Testimonials | Web Professionals</title>

@endsection

{{-- Hero Unit on Top --}}
@section('hero')
    <header class="webpro-hero-image">
        <picture>
            <source media="(max-width: 600px)" srcset="/images/background/web_professionals_014_phone.jpg">
            <img src="/images/background/web_professionals_014.jpg" alt="Web Professionals" title="Web Professionals">
        </picture>
    </header>
    <header class="webpro-hero">
        @include('_partials.herotop')
        <div class="webpro-hero-claim">
            <span class="webpro-hero1">Leg' los!</span><br>
            <span class="webpro-hero2">Step by step zum Web-Profi</span><br>
            <a class="waves-effect waves-light btn webpro-red webpro-hero-button hide-on-small-only" href="/lehrgaenge/anmeldung/">Jetzt anmelden</a>
        </div>
    </header>
@endsection

{{-- Main Navigation --}}
@section('navigation')
    @include('_partials.navigation', [
        'nav2status'    =>  ' active'
    ])
@endsection

{{-- Main Content --}}
@section('body')
    <div class="row">
        <div class="col l5 m6 s12">
            @include('_partials.header1', [
                'part1'    =>  'Stimmen unserer',
                'part2'    =>  'Absolventen'
            ])
            <nav class="webpro-nav-lvl2 hide-on-small-only">
                <a href="/ausbildung/dozenten/">Dozenten</a><br>
                <a href="/ausbildung/testimonials/">Testimonials</a><br>
            </nav>
        </div>
        <div class="col l7 m6 s12">
            <p>Unser Ziel ist es, nicht nur zufriedene Teilnehmer zu haben sondern vielmehr diesen einen erfolgreichen Start in die Branche zu ermöglichen. Viele unserer ehemaligen Teilnehmern haben während und nach der Ausbildung zum Web Professional den Einstieg in die Branche erreicht und arbeiten heute in renommierten Internet-Agenturen.</p>
        </div>

    </div>
    <div class="row">
        <div class="col l6 m6 s12">

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="/images/testimonials/flueck.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Michael Flück<i class="material-icons right">more_vert</i></span>
                    <p>Absolvent Web Developer 2015</p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Michael Flück<i class="material-icons right">close</i></span>
                    <p>
                        <strong>bisheriger Beruf:</strong> Elektroplaner<br>
                        <strong>derzeitige Aufgabe:</strong> Web Developer bei Somedia<br>
                        <br>
                        <strong>Was gefällt dir bei den Web Professionals besonders?</strong><br>
                        Das praxisorientierte Lernen mit Freude.<br>
                        <br>
                        <strong>Wie haben dich die Web Professionals beruflich weitergebracht?</strong><br>
                        Dank diesen Lehrgängen bin ich um ein längeres Studium herum gekommen und habe schnell den Einstieg in die Branche gemeistert.<br><br>
                        <strong>Wieso würdest du die Web Professionals weiterempfehlen?</strong>
                        Weil es mit Freude leichter ist etwas zulernen und weil einfach alles geili Sieche sind =)<br><br>
                        <strong>Was war deine Motivation zum Brancheneinstieg resp. zum Start der Ausbildung?</strong><br>
                        Aus dem grauen Alltag zu entfliehen und teil der Zukunft zu werden.
                    </p>
                </div>
            </div>

        </div>
        <div class="col l6 m6 s12">

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="/images/testimonials/manuel_hertach.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Manuel Hertach<i class="material-icons right">more_vert</i></span>
                    <p>Absolvent Web Developer 2015</p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Michael Flück<i class="material-icons right">close</i></span>
                    <p>
                        <strong>bisheriger Beruf:</strong> Informatiker HF / Datenbank-Administrator<br>
                        <strong>derzeitige Aufgabe:</strong> Web-Developer / Projektleiter<br>
                        <br>
                        <strong>Was gefällt dir bei den Web Professionals besonders?</strong><br>
                        Dass man von Profis, welche sich jeden Tag mit der Materie auseinandersetzen, lernen kann.<br>
                        <br>
                        <strong>Wie haben dich die Web Professionals beruflich weitergebracht?</strong><br>
                        Dank der Ausbildung zum Web-Developer konnte ich endlich den Einstieg in die Web-Branche schaffenund kann jetzt jeden Tag das gelernte umsetzen.<br><br>
                        <strong>Wieso würdest du die Web Professionals weiterempfehlen?</strong>
                        Ich würde die Web Professionals weiterempfehlen, weil man: 1. von Profis lernen kann und 2. Alles coole Typen sind<br><br>
                        <strong>Was war deine Motivation zum Brancheneinstieg resp. zum Start der Ausbildung?</strong><br>
                        Ich war auf der Suche nach einer Ausbildung im Web-Bereich, bei der das wichtigste die Materie und nicht die Bekanntheit des Diploms ist. Aus diesem Grund habe ich mich für die Web Professionals entschieden.
                    </p>
                </div>
            </div>

        </div>

        <div class="col l6 m6 s12">

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="/images/testimonials/dummy-grau.gif">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Sascha Ammann<i class="material-icons right">more_vert</i></span>
                    <p>Absolvent Web Integrator 2016</p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Sascha Ammann<i class="material-icons right">close</i></span>
                    <p>
                        Mein Wunsch war es mich in der Web Entwicklung noch besser zurecht zu finden. Ich wollte verstehen wie die Dinge funktionieren und nicht nur Anwender sein. Web Professionals und die angebotenen Ausbildungen bieten genau das, und noch viel mehr. Ich habe den Web Integrator abgeschlossen und habe genau das gelernt wo nach ich gesucht habe. In einer schönen, angenehmen Atmosphäre mit sehr hilfsbereiten Dozenten. Die regionale Nähe war für mich ein extremer Pluspunkt - ich wollte nicht nach Zürich in die Schule. Ein grosses Lob an den Lehrgangsleiter Rolf Eggenberger: für mich der beste Lehrer im "IT Bereich" seit langer Zeit. Er bringt das Wissen auf eine angenehme und sehr spannende Weise an einem heran. Dabei wirkt es nie von oben herab und man hat das Gefühl zusammen etwas zu erreichen. Man wird stets motiviert und nie demotiviert. Vielen Dank für die Zeit und die wertvolle Erfahrung die die Leute von Web Professionals mit viel Freude weitergeben.
                    </p>
                    <p>
                        <i>(via Google Rezensionen)</i>
                    </p>

                </div>
            </div>

        </div>

        <div class="col l6 m6 s12">

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="/images/testimonials/dummy-gruen.gif">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Marco Kehl<i class="material-icons right">more_vert</i></span>
                    <p>Absolvent Web Integrator 2014</p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Marco Kehl<i class="material-icons right">close</i></span>
                    <p>
                        Die Lehrpersonen können den Stoff (trotz der Komplexität, vor allem in Java Script) ausgezeichnet erklären. Sie nehmen sich viel Zeit für die einzelnen Anliegen der Mitschüler damit auch keiner zurück bleibt. Stärkere und schwächere Schüler können diverse Projekte ihrem Wissensstand (oder Ehrgeiz) gerecht ausführen und bearbeiten.
                    </p>
                    <p>
                        Zusätzlich bestehen intensive Übungsmöglichkeiten mit direktem Kontakt zu Fachpersonen, was sehr hilfreich ist, resp. war. Die Ausbildungsmöglichkeit ist ein grosses Plus in der Schweizer Bildungslandschaft !
                    </p>
                    <p>
                        <i>(via Google Rezensionen)</i>
                    </p>
                </div>
            </div>

        </div>


    </div>
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
