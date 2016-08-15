@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Web Professionals | Kurse</title>
    <meta name="description" content="Die Ausbildung für angehende Web Profis ermöglicht Dir einen erfolgreichen Berufsstart in die Online-Welt! Initiiert und getragen durch führende Internet-Agenturen der Ostschweiz.">
@endsection

{{-- Inline CSS --}}
@section('css')
    @include('_partials.inlinecss', [
        'image'    =>  'BZB_Techfabrik_2013-14'
    ])
@endsection

{{-- Hero Unit on Top --}}
@section('hero')
    <header class="webpro-hero">
        @include('_partials.herotop')
        <div class="webpro-hero-claim">
            <span class="webpro-hero1">Jetzt erst recht!</span><br>
            <span class="webpro-hero2">Spezialisierungen</span><br><br>
            <a class="waves-effect waves-light btn webpro-red" href="/kurse/anmeldung/">Jetzt anmelden</a>
        </div>
    </header>
@endsection

{{-- Main Navigation --}}
@section('navigation')
    @include('_partials.navigation', [
        'nav3status'    =>  ' active'
    ])
@endsection

{{-- Main Content --}}
@section('body')
    <div class="row">
        <div class="col l5 m6 s12">
            @include('_partials.header1', [
                'part1'    =>  'Weiterbildung und',
                'part2'    =>  'Kurse'
            ])
            <nav class="webpro-nav-lvl2 hide-on-small-only">
                <a href="/kurse/einfuehrung-in-angularjs/">Einführung in AngularJS</a><br>
                <a href="/kurse/einfuehrung-in-laravel/">Einführung in Laravel</a><br>
                <a href="/kurse/wordpress-themes-selber-programmieren/">WordPress Themes programmieren</a><br>
                <a href="/kurse/eigene-stock-fotos-erstellen/">eigene Stock Fotos erstellen</a><br><br>
                <a href="/kurse/anmeldung/">Anmeldung</a>
            </nav>
        </div>
        <div class="col l7 m6">
            <p>
                <strong>Herzlichen Dank für deine Anmeldung!</strong><br>
                Du erhälst in den nächsten 1-2 Tagen eine Anmeldebestätigung per E-Mail sowie im Laufe der folgenden Tage weitere Unterlagen per Post. Wir freuen uns, dich bei den Web Professionals begrüssen zu dürfen!
            </p>
        </div>
    </div>
@endsection

@section('subnavmobile')
    <!--
    <div class="collection webpro hide-on-med-and-up">
        <a href="/kurse/einfuehrung-in-angularjs/" class="collection-item">Einführung in AngularJS</a>
        <a href="/kurse/einfuehrung-in-laravel/" class="collection-item">Einführung in Laravel</a>
        <a href="/kurse/wordpress-themes-selber-programmieren/" class="collection-item">WordPress Themes selber programmieren</a>
        <a href="/kurse/eigene-stock-fotos-erstellen/" class="collection-item">eigene Stock Fotos erstellen</a>
    </div>
    -->
@endsection
