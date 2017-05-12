@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Rolf Eggenberger | Dozenten | Web Professionals</title>
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
        'nav6status'    =>  ' active'
    ])
@endsection

{{-- Main Content --}}
@section('body')
    <div class="row">
        <div class="col s12">
            @include('_partials.header1', [
                'part1'    =>  'Lehrgangsleiter, Dozent',
                'part2'    =>  'Rolf Eggenberger'
            ])
        </div>
        <div class="col l4 m5">
            <p><img class="responsive-img" width="650" src="/images/dozenten/rolf-eggenberger.jpg" alt="Rolf Eggenberger" title="Rolf Eggenberger"></p>
            <ul class="webpro-list">
                <li><a href="https://www.linkedin.com/in/kunstwort" target="_blank">LinkedIn</a></li>
                <li><a href="https://www.xing.com/profile/Rolf_Eggenberger" target="_blank">Xing</a></li>
                <li><a href="http://www.twitter.com/kunstwort" target="_blank">Twitter</a></li>
            </ul>
        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <p>
                Rolf Eggenberger ist Initiator und Lehrgangsleiter der Web Professionals sowie Gründer der Agentur ://kunstwort - eine der ersten Schweizer Internet-Agenturen (erste Kunden-Projekte unter dem Namen "EP." ab 1994). Im Alter von 14 Jahren programmierte er seine erste kommerzielle Software (Planung von Busrouten), unterrichtete während der Kantonsschule seine eigenen Klassenkameraden in Informatik und begann 1992 an der Universität St.Gallen Informationsmanagement zu studieren. In einer der Eröffnungsveranstaltungen stellte der damalige Tutor Peter Hogenkamp das „Internet“ vor – seit diesem Zeitpunkt ist Rolf konstant online.
            </p>
            <p>
                Die Agentur ://kunstwort weist ein breites Portfolio an nationalen und internationalen Kundenprojekten auf, unter anderm für Switzerland Global Enterprises (vormals OSEC), Raiffeisen, VPBank, Bertelsmann, Doubleday (Canada) Ltd., HEC Home Entertainment Company (UK), Weltbild Verlag und vielen mehr.
            </p>
            <p>
                Gemeinsam mit Alexander Braun ist er Co-Founder diverser Online-Startups - unter anderem im Bereich Social Book Reading, semantischen Daten und künstlicher Intelligenz. Diese Erfahrungen helfen dabei, die Web Professionals immer wieder auf Tempo zu bringen und sich laufend an Neuem zu orientieren.
            </p>

        </section>
    </div>
    @endsection

    @section('subnavmobile')

    @endsection
