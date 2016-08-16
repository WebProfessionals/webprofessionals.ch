@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Ausbildung | Web Professionals</title>

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
    <div class="row">
        <div class="col l5 m6 s12 webpro-left">
            @include('_partials.header1', [
                'part1'    =>  'Web Professionals',
                'part2'    =>  'Mehr über uns'
            ])
            <nav class="webpro-nav-lvl2 hide-on-small-only">
                <a href="/ausbildung/dozenten/">Dozenten</a><br>
                <a href="/ausbildung/testimonials/">Testimonials</a><br>
            </nav>
        </div>
        <div class="col l7 m6 webpro-right">
            <p>
                Die Zeiten in denen verschachtelte Tabellen zur Kür eines jeden Webentwicklers gehörte sind längst vorbei. Für professionelle Web Developer und Web Designer sind heute unter anderem die mühelose Anwendung von Responsive Webdesign, Story Telling, JavaScript und Codeversionierung die tägliche Pflicht und die Kür besteht aus dem unermüdlichen Experimentieren mit neuen Tools, Technologien und Konzepten. Das Ziel der von Agenturen gegründeten Web Professionals ist es, Quereinsteiger fokussiert auf die Aufgaben in Agenturen vorzubereiten. Die Lehrgänge bieten dabei die Grundlage für den erfolgreichen Einstieg, die Kurse die konstante Weiterentwicklung des eigenen Wissens.
            </p>

            <p>
                Damit die Web Professionals auch ganz sicher immer auf dem aktuellsten Stand bleiben wird die Ausbildung zudem mit folgenden Angeboten unterstützt:
            </p>

            <h2>Web Professional Barcamps.</h2>
            <p>
                Die halbjährlich stattfindenden Barcamps widmen sich jeweils einem aktuellen Thema welches in einer Un-Konferenz behandelt wird. Das nächste Web Professional Barcamp findet am 6. und 7. März 2015 statt. Das Thema ist noch offen.
            </p>

            <h2>Web Professional Lab.</h2>
            <p>
                In unserem Lab werden komplette Praxisprojekte 1:1 umgesetzt und Experimente durchgeführt. Für die Labs zugelassen sind Teilnehmer der Lehrgänge sowie Web Designer und Web Developer welche bereits entsprechende Vorkenntnisse vorweisen können.
            </p>

            <h2>Web Professional and Friends.</h2>
            <p>
                Vernetzung bedeutet für uns nicht Vetterliwirtschaft. Vernetzung heisst für uns: mit geteiltem Wissen vorne dabei zu bleiben! Die „Web Professional and Friends“ treffen sich alle zwei Monate zum Erfahrungs- und Wissensaustausch.</p>
            </p>


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