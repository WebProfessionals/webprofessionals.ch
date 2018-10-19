@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Ausbildung | Web Professionals</title>

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
    <div class="row">
        <div class="col l5 m6 s12 webpro-left">
            @include('_partials.header1', [
                'part1'    =>  'Web Professionals',
                'part2'    =>  'and Friends'
            ])
            <nav class="webpro-nav-lvl2 hide-on-small-only">
                <a href="/ausbildung/dozenten/">Dozenten</a><br>
                <a href="/ausbildung/testimonials/">Testimonials</a><br>
            </nav>
            <br><br><br>
            <a class="waves-effect waves-light btn webpro-green hide-on-small-only" href="https://goo.gl/photos/WXWq2hvbagk31EgH9" target="_blank">Impressionen (Google Fotos)</a>
        </div>
        <div class="col l7 m6 webpro-right">
            <p>
                <strong>09.09.2014:</strong> Einführung in flowbased Programming (Veith Zäch) <a href="https://www.facebook.com/events/1460239974263323/" target="_blank">[FB]</a><br>
                <strong>15.01.2015:</strong> Einführung in Google Web Designer (Johanna Gächter), Motion Design im UI (Alexander Zyuzkevich) <a href="https://www.facebook.com/events/1509224882678468/" target="_blank">[FB]</a><br>
                <strong>18.03.2015:</strong> Scrum (Christoph Hornfischer) <a href="https://www.facebook.com/events/651631281607708/" target="_blank">[FB]</a><br>
                <strong>21.05.2015:</strong> digitale Trends - von Fintech bis Quantified-Self (Alexander Braun) <a href="https://www.facebook.com/events/359916977530791/" target="_blank">[FB]</a><br>
                <strong>21.10.2015:</strong> Welcome Marty McFly, "Wieso Sketch ein Versuch wert ist" (Johanna Gächter), "Warum Javascript die Weltherrschaft erlangen wird" (Veith Zäch) <a href="https://www.facebook.com/events/1695833560645769/" target="_blank">[FB]</a><br>
                <strong>16.12.2015:</strong> Drupal 8 (Michi Flück) <a href="https://www.facebook.com/events/1501996750126907/" target="_blank">[FB]</a><br>
                <strong>06.04.2016:</strong> Strukturierte Daten anhand schema.org (Dimitri Friedli) <a href="https://www.facebook.com/events/584723395024935/" target="_blank">[FB]</a><br>
                <strong>15.06.2016:</strong> Funktionale Programmierung in JavaScript (Luca Schmid aka @Kriegslustig) <a href="https://www.facebook.com/events/486975294840899/" target="_blank">[FB]</a><br>
                <strong>17.08.2016:</strong> Flow based programming mit Polymer (Veith Zäch) <a href="https://www.facebook.com/events/937128136414368/" target="_blank">[FB]</a><br>
                <strong>21.12.2016:</strong> Glühwein <a href="https://www.facebook.com/events/2009465619280240/" target="_blank">[FB]</a><br>
                <strong>16.08.2017:</strong> Vue.js (Florian Gächter)<br>
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
