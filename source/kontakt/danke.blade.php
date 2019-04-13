@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Danke! | Web Professionals</title>

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
            <span class="webpro-hero1">Gestalte das Web</span><br>
            <span class="webpro-hero2">Die Ausbildung für angehende Webprofis</span><br><br>
            <!-- <a class="waves-effect waves-light btn webpro-red">Jetzt informieren</a> -->
        </div>
    </header>
@endsection

{{-- Main Navigation --}}
@section('navigation')
    @include('_partials.navigation', [
        'nav7status'    =>  ' active'
    ])
@endsection

@section('subnavmobile')

@endsection

{{-- Main Content --}}
@section('body')
    <div class="row">
        <div class="col l5 m6 s12 webpro-left">
            @include('_partials.header1', [
                'part1'    =>  'Web Professionals',
                'part2'    =>  'Kontakt'
            ])
            <nav class="webpro-nav-lvl2 hide-on-small-only">
                <a href="/lehrgaenge/web-integrator/">Sponsoring</a><br>
            </nav>
        </div>
        <div class="col l7 m6 webpro-right">
            <p>Bei Fragen zu unseren Lehrgängen, Kursen und Veranstaltungen kannst Du uns unter folgender Adresse erreichen:</p>
            <p>
                <strong>Web Professionals</strong><br>
                Techfabrik<br>
                Fabrikstrasse 24<br>
                9472 Grabs
            </p>
            <p>
                <i class="material-icons tiny">email</i>&nbsp&nbsp info[at]web-professionals.ch<br>
                <i class="material-icons tiny">phone</i>&nbsp&nbsp 077
            </p>
            <blockquote>
                Wieso eine Mobil-Nummer? Erstens sind wir nicht immer in der Techfabrik sondern oft auch unterwegs. Und zweitens kannst du uns damit auch jederzeit via WhatsApp erreichen :-)
            </blockquote>

            <p><strong>Herzlichen Dank für deine Anfrage. Wir werden schnellstmöglichst mir dir Kontakt aufnehmen.</strong></p>



        </div>
    </div>


@endsection
