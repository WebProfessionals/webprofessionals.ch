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
                'part1'    =>  'Update',
                'part2'    =>  'Web Professionals Lehrgang an der Hochschule f&uuml;r Technik Rapperswil'
            ])
            Rolf Eggenberger, 15. September 2015
        </div>
        <div class="col l4 m5">
            <p><img class="responsive-img materialboxed" src="/images/aktuelles/Gebaeude_2.jpg"></p>
        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <p>Die Web Professionals sind ab Herbst 2015 neu auch am Campus der Fachhochschule für Technik in Rapperswil anzutreffen. Nebst der optimalen Lage zwischen Zürich, dem Linthgebiet und St.Gallen spielt dabei die individuelle Weiterentwicklung in Form von CAS/MAS Studiengängen – wie zum Beispiel dem Modul CAS Front End Engineering – eine wichtige Rolle. Und der wunderschöne Campus ist noch ein Extra-Goodie obendrauf  :-)</p>
            <p>Aufgrund der Nachfrage aus dem Raum Zürich wurde von Frühling bis Herbst 2015 eine erste Klasse mit 11 Teilnehmern in der Stadt Zürich durchgeführt. Dabei durften wir freundlicherweise auf die Unterstützung der KV Zürich Business School zählen, in deren Räumen der erste Zürcher Lehrgang grösstenteils durchgeführt wurde. Doch bereits zu Beginn war klar, dass es sich dabei um einen Testlauf handeln wird und wir die nächsten Schritte noch weiter planen und den für uns optimalen Partner noch finden müssen. Nach ausführlichen Vorabklärungen haben wir uns für eine Zusammenarbeit mit der HSR Weiterbildung entschieden und freuen uns sehr, dass wir in Rapperswil bereits zu Beginn unserer Gespräche sehr freundlich willkommen geheissen wurden.</p>
            <p>Genau so wie die Web Professionals ist auch die HSR Weiterbildung in einer konstanten Entwicklung und passt ihre Angebote und Lehrinhalte laufend den aktuellen Technologien an. Diese Agilität sowie die Organisation, Teilnahme und Unterstützung diverser Veranstaltungen wie z.B. der Frontend Conference, dem UXCamp oder dem World Usability Day entspricht auch unserer Philosophie und wir freuen uns, in Zukunft gemeinsam mit der HSR viele neue, spannende und aktuelle Dinge auf die Beine zu stellen!</p>
            <p>Der erste Lehrgang „Web Integrator“ startet bei genügender Teilnehmerzahl am Samstag, den 24. Oktober mit einer Eröffungsveranstaltung in Sargans und findet danach jeweils Dienstag und Donnerstag Abends in Rapperswil statt. Willst du auch mit dabei sein? Dann besuche uns doch an unserem Infoanlass am 29. September um 19 Uhr im Zimmer 1.273.</p>
            <p>Foto: Copyright Hochschule für Technik Rapperswil</p>
        </section>

    </div>
@endsection

@section('subnavmobile')

@endsection
