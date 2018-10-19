@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>LG G Watch R im Einsatz | Web Professionals</title>
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
                'part1'    =>  'Test',
                'part2'    =>  'LG G Watch R im Einsatz'
            ])
            Rolf Eggenberger, 10. November 2014
        </div>
        <div class="col l4 m5">
            <p><img class="responsive-img" src="/images/aktuelles/2014-lg-g-watch-r.jpg"></p>
        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <p>Nachdem uns Milos Radovic anlässlich dem letzten Diplomapéro die Moto 360 vorgestellt und über deren Vor- und (leider etwas mehr) Nachteile berichtet hat wäre es eigentlich vernünftig gewesen, mit dem Kauf einer Android basierten Smartwatch noch etwas zu warten bis Apple seine Version veröffentlicht. Doch wären wir nicht Web Professionals, wenn die Neugier auf technische Gadget nicht grösser wäre als die Vernunft. Als LG vergangene Woche seine G Watch R auf den europäischen Markt gebracht hat war dies Grund genug für mich, gleich nach dem Samstags-Unterricht die Digitec Hauptfiliale in Wohlen zu stürmen. Denn wer will schon auf die Post warten. Vorab: der weite Weg hat sich gelohnt.</p>
            <p>Die LG G Watch R zeigt sich beim Unboxing bereits von ihrer besten Seite und liegt mit dem Edelstahlgehäuse sehr gut in der Hand. Im Gegensatz zur Moto 360 vermittelt dieses nicht gleich das Gefühl eines Prototypen, sondern einer wertigen Armbanduhr. Nur das mitgelieferte Armband aus Leder macht irgendwie doch eher den Eindruck, als ob dafür eine Plastik-Kuh verarbeitet worden sei. Glücklicherweise lässt sich dieses jedoch dank der Standardbreite mit jedem beliebigen Armband austauschen. Beim Einschalten der Uhr leuchtet das 1.3 Zoll grosse Display mit einer Auflösung von 320 x 320 Pixeln trotz OLED auch bei Sonnenlicht hell und klar lesbar auf. Eben diese Display-Technologie führt in meinem persönlichen Empfinden auch dazu, dass mir die Anzeige besser gefällt als beim – etwas gar technisch hell leuchtenden – LCD Display der Moto 360. Irgendwie wärmer – oder eben „organischer“. Zudem ist das Display im Gegensatz zum Moto vollends rund und nicht am unteren Rand abgeschnitten.</p>
            <p>Dass die Uhr mit einer Lünetten-Attrappe umrandet finde ich (als Hobby-Taucher) besonders schick. Dass sich diese nicht drehen lässt – wie bei einer Taucheruhr üblich – fällt nicht weiter ins Gewicht, da die Uhr sowieso lediglich spritzwasserfest ist. Die Tatsache dass durch diese erhöhte Umrandung das Display vor Kratzern geschützt wird zeigt, dass sich LG betreffend Design und Funktionalität Gedanken gemacht haben.</p>
            <p>Über die Vor- und Nachteile von Android Wear in der aktuellen Version lässt sich diskutieren. Ich persönlich finde es schon mal schön, nicht gleich bei jeder eingehenden Nachricht das Smartphone aus der Hosentasche klauben zu müssen, sondern mit einem kurzen Blick auf die Uhr Gewissheit zu haben, ob das eben eingetroffene Mail gelesen werden will oder noch Zeit hat. Denn meiner Meinung nach geben uns die Smartwatches bereits wieder ein klein wenig an Zeit zurück welche wir durch die Smartphones verloren haben. Und vielleicht sollte dies auch genau deren Aufgabe sein – schliesslich ist und bleibt es ja eine Uhr.</p>
            <p>Fazit: Welche App wir als erstes programmieren um auch Android Wear intensiver zu testen ist uns derzeit noch völlig unklar. Denn ausser Notifications und Sprachkommandos gibt die  API nach wie vor nicht viel mehr her. Für Android-Geeks ist die Uhr jedoch schon mal eine tolle Anschaffung, denn bereits der optische Outdoor-Charakter der Uhr passt irgendwie perfekt zu Jeans und Pullover 😉</p>
            @include('_partials.archiv-button')
        </section>

    </div>
@endsection

@section('subnavmobile')

@endsection
