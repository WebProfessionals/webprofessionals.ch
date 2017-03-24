@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Kurse | Web Professionals</title>

@endsection

{{-- Hero Unit on Top --}}
@section('hero')
    <header class="webpro-hero-image">
        <picture>
            <source media="(max-width: 600px)" srcset="/images/background/web_professionals_005_phone.jpg">
            <img src="/images/background/web_professionals_005.jpg">
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
                <a href="/kurse/wordpress-themes-selber-programmieren/">WordPress Themes programmieren</a><br>
                <a href="/kurse/auffrischungskurs-html-css/">HTML/CSS Auffrischung und Vertiefung</a><br>
                <a href="/kurse/hands-on-workshop-polymer-project/">Hands-on Workshop Polymer</a><br>
                <a href="/kurse/einfuehrung-in-laravel/">Einführung in Laravel</a><br>
                <a href="/kurse/eigene-stock-fotos-erstellen/">eigene Stock Fotos erstellen</a><br><br>
                <a href="/kurse/anmeldung/">Anmeldung</a>
            </nav>
        </div>
        <div class="col l7 m6 webpro-right">
            <p>Begleitend zu unseren Lehrgängen finden regelmässig Einzelkurse zu verschiedenen aktuellen Themen und Technologien statt. Diese Kurse sind für jedermann zugänglich und können unabhängig von den Lehrgängen besucht werden.</p>
            <p>Konstante Weiterbildung ist für uns ein sehr wichtiges Thema. Deshalb erhalten Teilnehmer der Lehrgänge (Integrator, Developer, Designer) 25% Ermässigung auf ausgewählte Einzelkurse.</p>
            <br>
            <h2>Aktuelle Kurse:</h2>
            <table>
                <thead>
                <tr>
                    <th data-field="id">Kurs</th>
                    <th data-field="name">Beginn</th>
                    <th data-field="price">Ort</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td><a href="/kurse/wordpress-themes-selber-programmieren/">WordPress Themes programmieren</a></td>
                    <td>31.05.17</td>
                    <td>Grabs</td>
                </tr>

                <tr>
                    <td><a href="/kurse/auffrischungskurs-html-css/">Auffrischungskurs HTML5/CSS3</a></td>
                    <td>Datum folgt</td>
                    <td>Grabs</td>
                </tr>

                <tr>
                    <td><a href="/kurse/hands-on-workshop-polymer-project/">Hands on workshop Polymer</a></td>
                    <td>Datum folgt</td>
                    <td>Grabs</td>
                </tr>

                <tr>
                    <td><a href="/kurse/einfuehrung-in-laravel/">Einführung in Laravel</a></td>
                    <td>Datum folgt</td>
                    <td>Grabs</td>
                </tr>
                <tr>
                    <td><a href="/kurse/eigene-stock-fotos-erstellen/">eigene Stock Fotos erstellen</a></td>
                    <td>Datum folgt</td>
                    <td>Grabs</td>
                </tr>
                </tbody>
            </table>
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
