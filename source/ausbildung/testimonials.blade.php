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
        <div class="col l5 m6 s12 webpro-left">
            @include('_partials.header1', [
                'part1'    =>  'Stimmen unserer',
                'part2'    =>  'Absolventen'
            ])
            <nav class="webpro-nav-lvl2 hide-on-small-only">
                <a href="/ausbildung/dozenten/">Dozenten</a><br>
                <a href="/ausbildung/testimonials/">Testimonials</a><br>
            </nav>
        </div>
        <div class="col l7 m6 s12 webpro-right">
            <p>Unser Ziel ist es, nicht nur zufriedene Teilnehmer zu haben sondern vielmehr diesen einen erfolgreichen Start in die Branche zu ermöglichen. Viele unserer ehemaligen Teilnehmern haben während und nach der Ausbildung zum Web Professional den Einstieg in die Branche erreicht und arbeiten heute in renommierten Internet-Agenturen.</p>
        </div>

    </div>
    <div class="row">

        <div class="col l6 m6 s12">


            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="/images/testimonials/melanie_bernhard.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Melanie Bernhard<i class="material-icons right">more_vert</i></span>
                    <p>Absolventin Web Integrator 2016</p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Melanie Bernhard<i class="material-icons right">close</i></span>
                    <p>
                        <strong>bisheriger Beruf:</strong> Sales Support (Finanzbranche)
                    </p>
                    <p>
                        <strong>derzeitige Aufgabe:</strong> Online Managerin Läderach chocolatier suisse
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
                </div>
            </div>

        </div>

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
                        <strong>bisheriger Beruf:</strong> Elektroplaner
                    </p>
                    <p>
                        <strong>derzeitige Aufgabe:</strong> Web Developer bei Somedia
                    </p>
                    <p>
                        <strong>Was gefällt dir bei den Web Professionals besonders?</strong> Das praxisorientierte Lernen mit Freude.
                    </p>
                    <p>
                        <strong>Wie haben dich die Web Professionals beruflich weitergebracht?</strong> Dank diesen Lehrgängen bin ich um ein längeres Studium herum gekommen und habe schnell den Einstieg in die Branche gemeistert.
                    </p>
                    <p>
                        <strong>Wieso würdest du die Web Professionals weiterempfehlen?</strong> Weil es mit Freude leichter ist etwas zulernen und weil einfach alles geili Sieche sind =)
                    </p>
                    <p>
                        <strong>Was war deine Motivation zum Brancheneinstieg resp. zum Start der Ausbildung?</strong> Aus dem grauen Alltag zu entfliehen und teil der Zukunft zu werden.
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
                    <span class="card-title grey-text text-darken-4">Manuel Hertach<i class="material-icons right">close</i></span>
                    <p>
                        <strong>bisheriger Beruf:</strong> Informatiker HF / Datenbank-Administrator
                    </p>
                    <p>
                        <strong>derzeitige Aufgabe:</strong> Web-Developer / Projektleiter
                    </p>
                    <p>
                        <strong>Was gefällt dir bei den Web Professionals besonders?</strong> Dass man von Profis, welche sich jeden Tag mit der Materie auseinandersetzen, lernen kann.
                    </p>
                    <p>
                        <strong>Wie haben dich die Web Professionals beruflich weitergebracht?</strong> Dank der Ausbildung zum Web-Developer konnte ich endlich den Einstieg in die Web-Branche schaffenund kann jetzt jeden Tag das gelernte umsetzen.
                    </p>
                    <p>
                        <strong>Wieso würdest du die Web Professionals weiterempfehlen?</strong> Ich würde die Web Professionals weiterempfehlen, weil man: 1. von Profis lernen kann und 2. Alles coole Typen sind
                    </p>
                    <p>
                        <strong>Was war deine Motivation zum Brancheneinstieg resp. zum Start der Ausbildung?</strong> Ich war auf der Suche nach einer Ausbildung im Web-Bereich, bei der das wichtigste die Materie und nicht die Bekanntheit des Diploms ist. Aus diesem Grund habe ich mich für die Web Professionals entschieden.
                    </p>

                </div>
            </div>

        </div>

        <div class="col l6 m6 s12">

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <!-- <img class="activator" src="/images/testimonials/dummy-grau.gif"> -->
                    <img class="activator" src="/images/testimonials/sascha_ammann.jpg">
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
