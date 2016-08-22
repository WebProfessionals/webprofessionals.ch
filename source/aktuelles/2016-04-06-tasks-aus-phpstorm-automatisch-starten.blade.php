@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Tasks aus PHPStorm automatisch starten | Web Professionals</title>
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
        'nav2status'    =>  ' active'
    ])
@endsection

{{-- Main Content --}}
@section('body')
    <div class="row">
        <div class="col s12">
            @include('_partials.header1', [
                'part1'    =>  'Tipp',
                'part2'    =>  'Tasks aus PHPStorm automatisch starten'
            ])
            Rolf Eggenberger, 6. April 2016
        </div>
        <div class="col l4 m5">
            <p><img class="responsive-img materialboxed" width="650" src="/images/aktuelles/phpstorm.png"></p>
        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <p>Manchmal kann etwas kleines eine grosse Wirkung haben. Bei mir war es neulich die Tatsache, dass ich (eher zufällig) entdeckt habe, dass PHPStorm nicht nur in der Lage ist grunt / gulp / npm etc. auszuführen, sondern diese auch automatisch beim Öffnen eines Projektes startet. Wie lässt sich dies konfigurieren? Ganz einfach:</p>
            <p>File > Settings > Tools > Startup Tasks (Windows und Linux) resp. <br>PhpStorm > Preferences > Tools > Startup Tasks (OS X)</p>
            <p>Dort lassen sich pro Projekt beliebig viele Taskrunner / Skripte konfigurieren, welche automatisch ausgeführt werden sollen. Wer zum Beispiel Zurb Foundation 6 für das Prototyping verwendet kann einen npm start Task aufsetzen und muss lediglich noch den Pfad zum package.json angeben. Und jedes Mal wenn das Projekt in PHPStorm geöffnet wird startet der npm Task automatisch. Oder wer Gulp basierte Tasks verwendet setzt den Pfad zum entsprechenden gulpfile und kann sich damit in Zukunft immerhin ein paar weitere manuelle Tasks ersparen.</p>
            <p>Mehr Zeit für wichtigere Dinge :-)</p>
        </section>

    </div>
@endsection

@section('subnavmobile')

@endsection
