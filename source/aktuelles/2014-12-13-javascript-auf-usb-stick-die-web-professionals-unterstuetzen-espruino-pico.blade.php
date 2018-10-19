@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Web Professionals unterstützen Espruino Pico | Web Professionals</title>
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
                'part1'    =>  'Update',
                'part2'    =>  'Web Professionals unterstützen Espruino Pico'
            ])
            Rolf Eggenberger, 13. Dezember 2014
        </div>
        <div class="col l4 m5">
            <p><img class="responsive-img materialboxed" src="/images/aktuelles/2014-espruino-2.jpg"></p>
        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <p>Ein Gerät kaum grösser als ein Daumennagel, mit einem Mikrocontroller auf welchem JavaScript läuft, einer Batterielaufzeit von bis zu 10 Jahren, einem USB Anschluss zur direkten Programmierung sowie genügend frei verwendbar Pins um die Welt zu steuern – was will man mehr.  Grund genug für die Web Professionals, das Kickstarter Projekt von Gordon Williams zu unterstützen.</p>
            <p>Spätestens im April 2015 sollten somit als Reward für diese Unterstützung 10 Espruino Pico Boards sowie diverses Zubehör wie LCD, Sensoren, Relais, WiFi Modul, Ethernet Modul etc. bei uns eintreffen. Wir freuen uns jetzt schon darauf und setzen nach Erhalt der Boards schnellstmöglich einen gemeinsamen „Basteltermin“ an.</p>
            <h2>Special Event „Internet der Dinge“</h2>
            <p>An einem noch zu definierenden Samstag im April 2015 testen wir die Espruino Pico Boards in der Techfabrik Grabs – der genaue Termin wird noch bekannt gegeben. Nebst einfachen Steuerungen zum Aufwärmen (Licht an/aus) versuchen wir uns selbstverständlich auch in der Anwendung für das Internet der Dinge. Wie kann z.B. ein „Live-Tweet aus dem Vogelhaus“ umgesetzt werden? Welche Einsatzmöglichkeiten hat das Pico im Auto oder auf dem Fahrrad? Und was meint die Katze dazu?</p>
            <p>Was sind Eure Ideen?</p>
            <p>PS: Ob Veith seine Putzroboter mit Schwarm-Intelligenz (welche sich gegenseitig die Treppenstufen hochheben) damit endlich umsetzen kann steht noch aus…</p>
            @include('_partials.archiv-button')
        </section>

    </div>
@endsection

@section('subnavmobile')

@endsection
