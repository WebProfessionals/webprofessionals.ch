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
    <div class="row">
        <div class="col l5 m6 s12 webpro-left">
            @include('_partials.header1', [
                'part1'    =>  'Dozent Web Developer',
                'part2'    =>  'Veith Zaech'
            ])
            <nav class="webpro-nav-lvl2 hide-on-small-only">
                <a href="/ausbildung/dozenten/">Dozenten</a><br>
                <a href="/ausbildung/testimonials/">Testimonials</a><br>
            </nav>
            <br><br><br>
            <a class="waves-effect waves-light btn webpro-green hide-on-small-only" href="https://goo.gl/photos/WXWq2hvbagk31EgH9" target="_blank">Impressionen (Google Fotos)</a>
        </div>
        <div class="col l7 m6 webpro-right">
            <p>Veith Zäch ist Software Architekt bei adcubum. Als er 11 Jahre alt war kam er mit seiner Familie aus Indonesien in die Schweiz zurück und musste erst Deutsch lernen, bevorzugte jedoch anstelle des Deutschbuchs das englische Modula-2 Handbuch. Dank seinem umfangreichen Wissen in diversen Programmierung gehört er seit Gründung der Web Professionals zu den Hauptdozenten bei den fortgeschrittenen Developer Lehrgängen. Nebenbei braut er Bananenbier, lässt ab und an sein Haus explodieren und will Putzroboter mit Schwarmintelligenz bauen.</p>
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
