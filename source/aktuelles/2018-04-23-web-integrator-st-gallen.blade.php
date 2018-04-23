@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Web Integrator St.Gallen | Web Professionals</title>
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
                'part1'    =>  'Web Integrator',
                'part2'    =>  'St.Gallen'
            ])
            20. März 2018
        </div>
        <div class="col l4 m5">
            <p><img class="responsive-img" width="650" src="/images/aktuelles/2018-04-liip.jpg" alt="Liip AG" title="Liip AG"></p>
            <p>Liip AG in St.Gallen - Raum für Web Professionals<br>
        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <h2 class="webpro sangalle--red">Code, ohne Senf, jetzt auch in San Gallä!</h2>
            <p>
                Am 26. Mai 2018 startet erstmals ein <strong>Web Integrator Basislehrgang in der Stadt St.Gallen</strong>. Lass dir diese Gelegenheit nicht entgehen und sei mit dabei in der "First Class"!
            </p>
            <p>
                Aufgrund mehrfachem Wunsch haben wir uns entschieden, ab Ende Mai einen ausserordentlichen Lehrgang in St.Gallen durchzuführen. Unserem Motto "mehr als Schule" treu durften wir einen optimalen Partner finden: der praxisnahe Unterricht findet in den Räumen der Internet-Agentur Liip AG mitten in St.Gallen (Neumarkt 5, 3. Stock) statt. Nebst sämtlichen notwendigen Grundlagen um deine Karriere als Web Developer oder Web Designer starten zu können bekommst du damit auch gleich den Puls des Agenturumfelds mit.
            </p>
            <h3>Informationsanlass</h3>
            <p>Am Samstag, den <strong>5. Mai findet um 10 Uhr</strong> ein kostenloser Informationsbrunch in der Arena der Liip AG statt. Dabei erfährst du alles Wichtige zu unseren Lehrgängen sowie unserem Ausbildungskonzept. Eine Anmeldung ist nicht notwendig - einfach vorbeischauen. Bei Kaffee und einem kleinen Frühstück zeigen wir dir die Welt der Web Professionals, der Ausbildung sowie deiner Möglichkeiten in der digitalen Arbeitswelt.</p>
            <h3>Daten und weitere Informationen</h3>
            <p>Der Lehrgang startet am 26. Mai 2018 und dauert bis zum 29. September 2018. Der Unterricht findet jeweils Freitag Abend (18:00 - 21:15 Uhr) sowie Samstag Vormittag (09:00 - 12:15 Uhr) statt.</p>

            <h3>Web Professionals - die Ausbildung für angehende Web Profis</h3>
            <p>
                Wer seine Zukunft in einer zunehmend digitalisierten Welt sichern will hat mit der Ausbildung zum Web Professional beste Chancen. Mit einem praxisorientierten Programm werden die angehenden Web Profis optimal auf den Berufseinstieg vorbereitet. Unterstützt werden sie dabei von Spezialisten aus der Praxis, sowohl im Unterricht als auch in begleitenden Angeboten wie z.B. Barcamps, Hackathons, Alumni Events und Praktikas.
            </p>
            <h3>Liip AG - unser Durchführungspartner in St.Gallen</h3>
            <p>Liip ist eine der erfolgreichsten Webagenturen der Schweiz mit 156 Mitarbeitenden an 5 Standorten. Für die Durchführung des St.Galler Lehrgangs öffnen sie uns die Türen in ihre Welt und bieten damit ein optimales Umfeld um in das Web Development eintauchen zu können.</p>
            <p><br><a href="/lehrgaenge/web-integrator/" class="waves-effect waves-light btn webpro-green">weitere Infos und Anmeldung</a></p>
        </section>
    </div>
    @endsection

    @section('subnavmobile')

    @endsection
