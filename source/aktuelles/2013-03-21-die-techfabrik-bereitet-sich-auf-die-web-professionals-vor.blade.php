@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Die Techfabrik bereitet sich auf die Web Professionals vor | Web Professionals</title>
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
                'part1'    =>  'Web Professionals',
                'part2'    =>  'Die Techfabrik bereitet sich auf die Web Professionals vor'
            ])
            Rolf Eggenberger, 7. Januar 2014
        </div>
        <div class="col l4 m5">

        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <p>Ende April startet mit dem Basislehrgang zum „Web Integrator“ die erste Klasse angehender Web Professionals. Bis dahin muss alles vorbereitet sein, um den Teilnehmern das richtige Lern- und Arbeitsumfeld gewährleisten zu können. Für Digital Natives und Immigrants bedeutet dies nicht nur einfach ein Schulzimmer – sondern Technik mit welcher man das Gelernte gleich umsetzen kann. Know-how und Netzwerke um täglich einen Schritt weiter zu kommen. Und ein Umfeld, welches kreatives und innovatives Arbeiten möglich macht.</p>
            <p>Die Techfabrik bereitet sich auf die Web Professionals vor. Letzte Woche gab es eine kleine neue Küche damit während den langen Samstagen der Hunger und Durst gestillt und der Koffeinspiegel reguliert werden kann. Heute ist die erste Lieferung an Hardware eingetroffen: Monitore für ein farbenfrohes Gestalten, ein leistungsfähiges NAS damit nichts verloren geht und Farblaser um die Ideen auch einmal zu Papier bringen zu können. Morgen folgen die Switches sowie weitere Netzwerkinfrastruktur damit jede/r Web Professional auch garantiert jederzeit online ist. Und was es für die Teilnehmer sonst noch so alles gibt wird sich in den nächsten Tagen zeigen.</p>
            @include('_partials.archiv-button')
        </section>
    </div>
@endsection

@section('subnavmobile')

@endsection
