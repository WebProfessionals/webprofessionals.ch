@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Speaker am WebPro Summer Camp 2014: Frontify Gründer Roger Dudler | Web Professionals</title>
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
            <a class="waves-effect waves-light btn webpro-red webpro-hero-button" href="/anmeldung/">Jetzt anmelden</a>
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
                'part1'    =>  'Barcamp',
                'part2'    =>  'Speaker am WebPro Summer Camp 2014: Frontify Gründer Roger Dudler'
            ])
            Rolf Eggenberger, 21. August 2014
        </div>
        <div class="col l4 m5">

        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <p>„Wer Visionen hat, sollte einen Arzt aufsuchen – oder Leute um sich sammeln, welche gemeinsam an einem Strang ziehen.“</p>
            <p>Diese Zeilen aus dem „Über uns“ der Frontify AG können nicht treffender formuliert sein. Wir freuen uns damit umso mehr, dass wir an unserem Summer Camp 2014 Roger Dudler – den Gründer und Geschäftsführer von Frontify – begrüssen dürfen. Frontify ist eine Specification Engine für Webprofis mit welcher sich interaktiv Designs spezifizieren und daraus lebendige Frontend Style Guides erstellen lassen.</p>
            <p>Angefangen hat es mit einem Problem. Roger und viele seiner Kollegen störten sich insbesondere an einem Punkt in Webprojekten: Der Übergabe des Designs an Coder. Roger, selbst Designer & Entwickler, fertigte er eine kleine App an, welches die Spezifikation erleichterte und Redundanzen verhinderte im Webdesign Prozess. Dies fand Anklang in der Community und so wagte er den Schritt in die Selbständigkeit und gründete im April 2013 die Frontify AG.</p>
            <p>Heute führt er ein kleines Team von Web Enthusiasten an, um aus Frontify die erste Wahl für die Spezifikation, Dokumentation und Umsetzung von Webprojekten zu machen.</p>
            <p>Vor der Gründung arbeitete Roger bei verschiedenen Softwareherstellern, inklusive der führenden Schweizer Webagentur Namics. Immer interessiert an neuen Technologien und am Puls der Zeit, lancierte er verschiedene erfolgreiche Projekte, wie den <a href="http://rogerdudler.github.io/git-guide" target="_blank">git simple guide</a> oder <a href="http://www.eclipsecolorthemes.org/">Eclipse Color Themes</a>. Diese in der Community bekannten und geschätzten Ressourcen sind insbesondere deshalb erfolgreich, weil Roger eine gelungene Symbiose zwischen Einfachheit und Nützlichkeit herstellen konnte. Immer wieder ist er an Konferenzen anzutreffen wo er über verschiedene Themen referiert.</p>
            <p>Roger <a href="http://twitter.com/rogerdudler" target="_blank">tweetet über UX, Front-End oder Entrepreneurship</a>.</p>
            @include('_partials.archiv-button')
        </section>

    </div>
@endsection

@section('subnavmobile')

@endsection
