@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Das Internet der Dinge mitgestalten | Web Professionals</title>
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
                'part1'    =>  'Barcamp',
                'part2'    =>  'Das Internet der Dinge mitgestalten? Die Web Professionals machen es vor.'
            ])
            Rolf Eggenberger, 9. Februar 2015
        </div>
        <div class="col l4 m5">
            <p><img class="responsive-img materialboxed" src="/images/aktuelles/2015-iot-big.jpg"></p>
        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <p>Unlängst sprach man noch vom „ins Internet gehen“. Heute, in einer always-on-Welt, ist die Nutzung des Internets so selbstverständlich geworden, dass nur das Gegenteil – das kurze Offline-Sein etwa auf einer Bahnfahrt – als Abweichung von der Norm auffällt. Zunehmend verschwimmen die Grenzen zwischen On- und Offline: die Technologie tritt in den Hintergrund und verbirgt dem Nutzer ihre Komplexität, um ihn im Alltag mit einer nutzerfreundlichen Oberfläche zu unterstützen. So wird die physische Welt immer mehr durch das Internet angereichert: Google Glass, Smart Wachtes, Beacons sowie Microsofts aktuelles HoloLens-Projekt sind Stellvertreter dieser neuen Alltagswerkzeuge. Proaktive Software-Konzepte wie Google Now, welche das Nutzerverhalten vorausahnen, sowie die Verbreitung von direkt am Körper tragbaren Endgeräten – sogenannten Wearables – initiieren 2015 nun endlich das bereits lange angekündigte Internet der Dinge.</p>
            <p>Um diese Welt mitgestalten zu können werden Fachkräfte benötigt, die in der Schweiz immer noch selten aufzufinden sind. Denn Internet-Jobs beschränken sich heute nicht mehr nur auf das blosse Publishing von Webseiten. Vielmehr sind Kenntnisse aus verschiedensten Bereichen gefragt: mobile Entwickler, Backend Developer, UX/UI Profis etc. Auf der Stufe von Universitäten und Fachhochschulen entsteht derzeit ein Bildungsangebot, welches zukünftige Spezialisten ausbildet. Doch oftmals werden in der Praxis vielmehr Quereinsteiger gesucht: motivierte und interessierte „Geeks“ welche sich in der digitalen Welt mühelos bewegen können. Im April 2013 haben Ostschweizer Internet-Agenturen und Schulen darauf reagiert und das Ausbildungsprogramm „Web Professionals“ ins Leben gerufen. Die Ausbildung etablierte sich schnell schweizweit: Teilnehmer reisen unter anderem von Scuol, Aarau und Biel an die Unterrichtsstunden in der Techfabrik Grabs.</p>
            <h2>Praxiswissen statt reiner Theorie</h2>
            <p>Weiterführend zu den Lehrgängen gilt es jedoch, sich praktische Kenntnisse anzueignen oder zu vertiefen. Dafür treffen sich die Web Professionals alle zwei Monate, um ihr Wissen anhand praktischer Workshops oder Referaten auszubauen. Nicht nur dabei steigt die Teilnehmerzahl von Anlass zu Anlass: auch die halbjährlich stattfindenden Camps haben sich schweizweit etabliert. Am Wochenende vom 25. / 26. April findet bereits das dritte Web Professionals Camp statt, dieses Mal selbstverständlich zum Thema „Internet der Dinge“. In den einzelnen Sessions werden auf Geräten so gross wie ein Daumennagel die digitalen und physischen Welten miteinander verschmelzen, Applikationen für SmartWatches programmiert und Anwendungen für Geräte wie z.B. der Virtual Reality Brille „Oculus Rift“ entwickelt. „Was dabei entsteht wissen wir noch nicht, wichtig ist vielmehr der Lerneffekt“, erklärt Rolf Eggenberger, Lehrgangsleiter der Web Professionals.</p>
            <p>Nebenbei: Informationsanlässe zu den Lehrgängen finden am 12. Februar und 9. März jeweils um 19 Uhr in der Techfabrik, Mühlbachstrasse 11a in 9472 Grabs statt, sowie in Zürich am 25. Februar, 18 Uhr und 28. März, 10 Uhr an der KV Zürich Business School, Limmatstrasse 310, Hörsaal 51.</p>
            <p>Die Lehrgänge starten am 8. Mai (Ostschweiz) sowie am 5. Mai (Zürich).</p>
        </section>

    </div>
@endsection

@section('subnavmobile')

@endsection
