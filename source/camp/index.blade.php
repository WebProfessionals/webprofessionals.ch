@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Web Pro: Home</title>
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
            <span class="webpro-hero1">Gestalte das Web</span><br>
            <span class="webpro-hero2">Die Ausbildung für angehende Webprofis</span><br><br>
            <!-- <a class="waves-effect waves-light btn webpro-red">Jetzt informieren</a> -->
        </div>
    </header>
@endsection

{{-- Main Navigation --}}
@section('navigation')
    @include('_partials.navigation', [
        'nav5status'    =>  ' active'
    ])
@endsection

@section('subnavmobile')
    <div class="collection webpro hide-on-med-and-up">
        <a href="/lehrgaenge/web-integrator/" class="collection-item">Web Integrator</a>
        <a href="/lehrgaenge/web-developer/" class="collection-item">Web Developer</a>
        <a href="/lehrgaenge/web-designer/" class="collection-item">Web Designer</a>
    </div>
@endsection

{{-- Main Content --}}
@section('body')
    <div class="row">
        <div class="col l5 m6 s12">
            @include('_partials.header1', [
                'part1'    =>  'Web Professionals',
                'part2'    =>  'Barcamp'
            ])
            <nav class="webpro-nav-lvl2 hide-on-small-only">
                <a href="/camp/sponsoring/">Sponsoring</a><br>
            </nav>
        </div>
        <div class="col l7 m6">
            <p>Das Web Professionals Barcamp findet halbjährlich statt und wurde schnell zu einem wichtigen Anlass inner- und ausserhalb der Web Professionals Ausbildung.
                Mittlerweile reisen die Teilnehmer nicht nur aus der ganzen Schweiz sogar extra aus London an um an einem der Camps teilnehmen zu können.</p>
            <br>
            <h2 class="webpro">Autumn Camp 2016</h2>
            <p>Das nächste Web Professionals Barcamp findet am <strong>29. und 30. Oktober</strong> in der Techfabrik Grabs statt. Thema des Camps: <strong>Antitamagotchi.</strong></p>
            <p>Ein Antitamagotchi ist ein Tamagotchi, welches man weder streicheln noch füttern will. Man kann es sich in etwa wie ein Mogwai vorstellen, welches entweder dem Sonnenlicht ausgesetzt oder nass wurde oder nach Mitternacht gefressen hat. Jedenfalls haben wir es nicht sonderlich gerne.</p>
            <p>Nachdem die Pokémons aktuell ihr grosses Comeback haben ist es jedenfalls Zeit, die Tamagotchis ebenfalls wieder aufleben zu lassen. Aber eben: allzu wohl sollen sie sich nun doch nicht fühlen.</p>
            <p>Wir programmieren gemeinsam unser eigenes Antitamagotchi welches als mobile Applikation in unserem Smartphone lebt und auf diverse Sensordaten unseres Geräts reagiert.</p>
        </div>
    </div>
    <div class="row">
        <div class="col s12"><h2 class="webpro">Bisherige Camps:</h2></div>
        <div class="col l4 m6 s12">
            <div class="card">
                <div class="card-image">
                    <img src="/images/camp/winter_camp_2016.png">

                </div>
                <div class="card-content">
                    <span class="card-title">Winter Camp 2016</span>
                    <p>Thema: Zukunft<br>Location: Medienhaus somedia Chur<br>Datum: 27./28. Februar 2016</p>
                </div>
                <div class="card-action">
                    <a href="https://goo.gl/photos/Nz9GqmuFLWbv8NDs6" target="_blank">Fotos (Google)</a>
                </div>
            </div>
        </div>
        <div class="col l4 m6 s12">
            <div class="card">
                <div class="card-image">
                    <img src="/images/camp/spring_camp_2015.png">

                </div>
                <div class="card-content">
                    <span class="card-title grey-text text-darken-4">Spring Camp 2015</span>
                    <p>Thema: Internet der Dinge<br>Location: Techfabrik Grabs<br>Datum: 25./26. April 2016</p>
                </div>
                <div class="card-action">
                    <a href="#">Fotos</a>
                </div>
            </div>
        </div>
        <div class="col l4 m6 s12">
            <div class="card">
                <div class="card-image">
                    <img src="/images/camp/summer_camp_2014.png">
                </div>
                <div class="card-content">
                    <span class="card-title grey-text text-darken-4">Summer Camp 2014</span>
                    <p>Thema: Tools und Workflows<br>Location: Seepromenade Walenstadt<br>Datum: ?</p>
                </div>
                <div class="card-action">
                    <a href="#">Fotos</a>
                </div>
            </div>
        </div>
        <div class="col l4 m6 s12">
            <div class="card">
                <div class="card-image">
                    <img src="/images/camp/winter_camp_2014.png">
                </div>
                <div class="card-content">
                    <span class="card-title grey-text text-darken-4">Winter Camp 2014</span>
                    <p>Thema: alles mobil<br>Location: GBMS Atelier Buchs SG<br>Datum: ?</p>
                </div>
                <div class="card-action">
                    <a href="#">Fotos</a>
                </div>
            </div>
        </div>
    </div>
@endsection
