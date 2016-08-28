@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Danke! | Web Professionals</title><title>Anmeldung Barcamp | Web Professionals</title>

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
        <div class="col l5 m6 s12 webpro-left">
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
        <div class="col l7 m6 webpro-right">
            <p>
                <strong>Herzlichen Dank für deine Anmeldung zum #5 Web Professionals Barcamp 2016!</strong><br>
                Du erhälst von unserer Seite keine weitere Anmeldebestätigung mehr zugesendet - wir freuen uns, dich am 29./30.10.2016 an unserem Barcamp begrüssen zu dürfen!
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
