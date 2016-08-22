@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Ostschweizer Webprofis machen mobil | Web Professionals</title>
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
            <span class="webpro-hero1">Leg' los!</span><br>
            <span class="webpro-hero2">Step by step zum Web-Profi</span><br>
            <a class="waves-effect waves-light btn webpro-red webpro-hero-button" href="/lehrgaenge/anmeldung/">Jetzt anmelden</a>
        </div>
    </header>
@endsection

{{-- Main Navigation --}}
@section('navigation')
    @include('_partials.navigation', [
        'nav1status'    =>  ' active'
    ])
@endsection

{{-- Main Content --}}
@section('body')
    <div class="row">
                <div class="col s12">
            @include('_partials.header1', [
                'part1'    =>  'Pressebericht',
                'part2'    =>  'Ostschweizer Webprofis machen mobil'
            ])
            23. Februar 2014
        </div>
        <div class="col l4 m5">

        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <p>«Alles mobil» war das Thema des ersten Web Professional Camps, welches am Wochenende in den Räumen der bzb Weiterbildung Buchs und der Techfabrik Grabs stattfand. 27 Web Developer und Web Designer haben zu Beginn die Ziele des Barcamps selber definiert und darauf basierend Sessions festgelegt, welche ihren eigenen Wünschen entsprechen. Vom Design einer mobilen Webseite über die Programmierung einer ersten eigenen App bis hin zur komplexen Entwicklung einer neuen, innovativen Grundlagen-Technologie war alles vertreten. Einsteiger und Profis begegneten sich auf Augenhöhe und zeigten damit, dass der Dialog die beste Grundlage für die persönliche Weiterbildung ist.</p>
            <p>Dass Internet-Menschen oftmals auch etwas eigen sind, ist kein Klischee. Spontane Präsentationen wurden einstudierten Vorträgen vorgezogen. Genau so wurden am Abend lieber technische Gadgets zu einer improvisierten Geek-Olympiade zweckentfremdet als sich bloss zum Nachtessen zu treffen.</p>
            <p>Das Barcamp ist nicht nur ein Teil der Ausbildung zum Web Professional, sondern offen für alle Entwickler und Gestalter aus der Internet-Branche, welche Neues lernen und sich in ihrem Arbeitsalltag weiterbringen wollen. Nebst den Lehrgangsteilnehmern nutzen Mitarbeiter verschiedener Agenturen das Angebot und können dadurch nebst Wissen auch neue Kontakte aufbauen.</p>
            <p>Die virtuelle Verknüpfung durch Twitter, Facebook und Xing ist dabei das Minimum. Es entstanden an diesem Wochenende sogar konkrete Jobangebote sowie die Zusammenarbeit von Entwicklern unterschiedlicher Agenturen, welche sich kennengelernt und in Zukunft miteinander an dem Open-Source-Projekt arbeiten werden, für welches sie an diesem Wochenende die Grundlage gelegt haben. Aus- und Weiterbildung der Zukunft – gelebt von Menschen aus der Ostschweiz.</p>
            <p>Artikel erschienen im <a href="http://www.wundo.ch/ostschweiz/stgallen/werdenberg/wo-lo/Ostschweizer-Webprofis-machen-mobil;art395293,3707738" target="_blank">Werdenberger & Obertoggenburger</a> sowie Sarganserländer.</p>
        </section>
    </div>

@endsection

@section('subnavmobile')

@endsection
