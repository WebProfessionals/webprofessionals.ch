@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Dozenten | Web Professionals</title>

@endsection

{{-- Hero Unit on Top --}}
@section('hero')
    <header class="webpro-hero-image">
        <picture>
            <source media="(max-width: 600px)" srcset="/images/background/web_professionals_014_phone.jpg">
            <img src="/images/background/web_professionals_014.jpg" alt="Web Professionals" title="Web Professionals">
        </picture>
    </header>
    <header class="webpro-hero">
        @include('_partials.herotop')
        <div class="webpro-hero-claim">
            <span class="webpro-hero1">Leg' los!</span><br>
            <span class="webpro-hero2">Step by step zum Web-Profi</span><br>
            <a class="waves-effect waves-light btn webpro-red webpro-hero-button hide-on-small-only" href="/lehrgaenge/anmeldung/">Jetzt anmelden</a>
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
        <div class="col l5 m6 s12 webpro-left">
            @include('_partials.header1', [
                'part1'    =>  'Web Professionals',
                'part2'    =>  'Dozenten'
            ])
            <nav class="webpro-nav-lvl2 hide-on-small-only">
                <a href="/ausbildung/dozenten/">Dozenten</a><br>
                <a href="/ausbildung/testimonials/">Testimonials</a><br>
            </nav>
        </div>
        <div class="col l7 m6 s12 webpro-right">
            <p>Das zentrale Element einer praxisorientierten Ausbildung sind selbstverständlich die Dozenten. Aus diesem Grund unterrichten bei den Web Professionals nur Dozenten, welche selber mitten in der Praxis stehen.</p>
        </div>

    </div>





    <div class="row">
        <div class="col l4 m6 s12">

            <div class="card medium">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="/images/dozenten/rolf-eggenberger.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Rolf Eggenberger<i class="material-icons right">more_vert</i></span>
                    <p>Gründer Agentur kunstwort GmbH<br><br><img src="/images/webpro-icon-14.gif"> Lehrgangsleiter, HTML/CSS, PHP, WordPress</p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Rolf Eggenberger<i class="material-icons right">close</i></span>
                    <p>Rolf Eggenberger ist Initiator und Lehrgangsleiter der Web Professionals sowie Geschäftsleiter der Agentur ://kunstwort. Im Alter von 14 Jahren programmierte er seine erste kommerzielle Software (Planung von Busrouten), unterrichtete während der Kantonsschule seine eigenen Klassenkameraden in Informatik und begann 1992 an der Universität St.Gallen Informationsmanagement zu studieren. In einer der Eröffnungsveranstaltungen stellte der damalige Tutor Peter Hogenkamp das „Internet“ vor – seit diesem Zeitpunkt ist Rolf konstant online.</p>
                    <p>Gemeinsam mit Alexander Braun ist er Co-Founder diverser Online-Startups. Diese Erfahrungen helfen dabei, die Web Professionals immer wieder auf Tempo zu bringen und sich laufend an Neuem zu orientieren.</p>
                </div>
            </div>

        </div>
        <div class="col l4 m6 s12">

            <div class="card medium">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="/images/dozenten/martina-heeb.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Martina Heeb<i class="material-icons right">more_vert</i></span>
                    <p>Screendesignerin Agentur kunstwort<br><br><img src="/images/webpro-icon-14.gif"> Lehrgangsleiterin Web Designer</p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Martina Heeb<i class="material-icons right">close</i></span>
                    <p>Martina Heeb ist Lehrgangsleiterin bei den Web Professionals und für die Designer-Klassen verantwortlich. Seit 2002 vom Internet-Fieber angesteckt hat sie als Screen Designerin bereits viele Trends, Startups und Technologien aktiv miterlebt. Dies lässt sie die notwendige Ruhe bewahren um die Web Professionals auf dem korrekten Kurs zu halten.</p>
                </div>
            </div>

        </div>
        <div class="col l4 m6 s12">

            <div class="card medium">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="/images/dozenten/veith-zaech.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Veith Zäch<i class="material-icons right">more_vert</i></span>
                    <p>Software Architekt, adcubum<br><br><img src="/images/webpro-icon-14.gif"> JavaScript, Ajax/jQuery, PHP, AngularJS</p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Veith Zäch<i class="material-icons right">close</i></span>
                    <p>Veith Zäch ist Software Architekt bei adcubum. Als er 11 Jahre alt war kam er mit seiner Familie aus Indonesien in die Schweiz zurück und musste erst Deutsch lernen, bevorzugte jedoch anstelle des Deutschbuchs das englische Modula-2 Handbuch. Dank seinem umfangreichen Wissen in diversen Programmierung gehört er seit Gründung der Web Professionals zu den Hauptdozenten bei den fortgeschrittenen Developer Lehrgängen. Nebenbei braut er Bananenbier, lässt ab und an sein Haus explodieren und will Putzroboter mit Schwarmintelligenz bauen.</p>
                </div>
            </div>

        </div>
        <div class="col l4 m6 s12">

            <div class="card medium">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="/images/dozenten/florian-gaechter.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Florian Gächter<i class="material-icons right">more_vert</i></span>
                    <p>Senior Frontend Developer, Namics AG<br><br><img src="/images/webpro-icon-14.gif"> JavaScript, Ajax/jQuery, Laravel</p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Florian Gächter<i class="material-icons right">close</i></span>
                    <p>Florian Gächter ist Senior Frontend Developer bei der Namics AG. Nach einem angefangenen Biotechnologie-Studium ist er (Veith Zäch sei Dank) der Welt des Frontend Developments verfallen. Durch seine Leidenschaft für hübsche Frontends und Clean Code ist er für die Web Professionals Dozent erster Wahl für Programmier-Themen mit sichtbaren Resultaten.</p>
                </div>
            </div>

        </div>
        <div class="col l4 m6 s12">

            <div class="card medium">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="/images/dozenten/alexander-braun.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Alexander Braun<i class="material-icons right">more_vert</i></span>
                    <p>Gründer und Geschäftsleiter Creative Construction Berlin<br><br><img src="/images/webpro-icon-14.gif"> Konzeption, neue Technologien</p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Alexander Braun<i class="material-icons right">close</i></span>
                    <p>Alexander Braun ist Gründer der Digitalstrategieberatung CREATIVE CONSTRUCTION in Berlin. Seit 1995 online entwickelte er zusammen mit Rolf Eggenberger seit 1999 eine Reihe von Internet-Startups und war bei Bertelsmann in Führungsfunktion für digitale Geschäfte verantwortlich. Er ist Autor von Fachbüchern über künstliche Intelligenz und die Transformation von Geschäftsmodellen durch das Internet, studierte Wirtschaftswissenschaften an der Universität St. Gallen und belegte Executive Education am INSEAD und am Massachusetts Institute of Technology (MIT). Aktuell sorgt er mit seinem Startup hidence dafür, das Kennenlernen der spannendsten Teilnehmer auf Konferenzen nicht mehr dem Zufall zu überlassen. </p>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card medium">
                <div class="card-image">
                    <img src="/images/dozenten/dummy.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title">Michelle Oesch</span>
                    <p>
                        Wissenschaftliche Fotografin Universität Zürich<br><br>
                        <img src="/images/webpro-icon-14.gif"> Fotografie
                    </p>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card medium">
                <div class="card-image">
                    <img src="/images/dozenten/dummy.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title">Phillip Köppel</span>
                    <p>
                        selbständiger Grafiker<br><br>
                        <img src="/images/webpro-icon-14.gif"> Gestaltungslehre, Adobe Programme
                    </p>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card medium">
                <div class="card-image">
                    <img src="/images/dozenten/dummy.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title">Reto Zahner</span>
                    <p>
                        technologischer Leiter, somedia production<br><br>
                        <img src="/images/webpro-icon-14.gif"> Datenbanken
                    </p>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card medium">
                <div class="card-image">
                    <img src="/images/dozenten/dummy.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title">Julian Schattner</span>
                    <p>
                        Web und mobile Developer, JuicySoft<br><br>
                        <img src="/images/webpro-icon-14.gif"> 	PHP, OOP, mobile Lösungen
                    </p>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card medium">
                <div class="card-image">
                    <img src="/images/dozenten/dummy.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title">Name</span>
                    <p>
                        Fotografin<br><br>
                        <img src="/images/webpro-icon-14.gif"> Fotografie
                    </p>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card medium">
                <div class="card-image">
                    <img src="/images/dozenten/dummy.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title">Michael Jäger</span>
                    <p>
                        Gründer und Geschäftsleiter Jäger + Gejagte<br><br>
                        <img src="/images/webpro-icon-14.gif"> Konzeption
                    </p>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card medium">
                <div class="card-image">
                    <img src="/images/dozenten/dummy.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title">Mark Lowe</span>
                    <p>
                        Software Engineer, Namics AG<br><br>
                        <img src="/images/webpro-icon-14.gif"> WordPress
                    </p>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card medium">
                <div class="card-image">
                    <img src="/images/dozenten/dummy.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title">Stefan Baur</span>
                    <p>
                        Senior Software Engineer, Namics AG<br><br>
                        <img src="/images/webpro-icon-14.gif"> PHP
                    </p>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card medium">
                <div class="card-image">
                    <img src="/images/dozenten/dummy.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title">Marc Illien</span>
                    <p>
                        Software Engineer, Namics AG<br><br>
                        <img src="/images/webpro-icon-14.gif"> 	JavaScript
                    </p>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card medium">
                <div class="card-image">
                    <img src="/images/dozenten/dummy.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title">Tom Schneider</span>
                    <p>
                        Projektleiter, SOMEDIA PRODUCTION<br><br>
                        <img src="/images/webpro-icon-14.gif"> Drupal
                    </p>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card medium">
                <div class="card-image">
                    <img src="/images/dozenten/johanna-gaechter.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title">Johanna Gächter</span>
                    <p>
                        Screendesignerin Jäger + Gejagte<br><br>
                        <img src="/images/webpro-icon-14.gif"> 	Tools, Ressources
                    </p>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card medium">
                <div class="card-image">
                    <img src="/images/dozenten/alexander-zyuzkevich.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title">Alexander Zyuzkevich</span>
                    <p>
                        Art Director, Namics AG<br><br>
                        <img src="/images/webpro-icon-14.gif"> 	UX/UI, Konzepte
                    </p>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card medium">
                <div class="card-image">
                    <img src="/images/dozenten/dummy.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title">Christian Woelk</span>
                    <p>
                        Partner, Graphic Designer Adicto<br><br>
                        <img src="/images/webpro-icon-14.gif"> Screen Design
                    </p>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card medium">
                <div class="card-image">
                    <img src="/images/dozenten/dummy.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title">Alain de Veer</span>
                    <p>
                        Mac und Alain<br><br>
                        <img src="/images/webpro-icon-14.gif"> Entwurfstechniken
                    </p>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card medium">
                <div class="card-image">
                    <img src="/images/dozenten/angelo-zehr.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title">Angelo Zehr</span>
                    <p>
                        Stagiaire Schweizer Radio und Fernsehen<br><br>
                        <img src="/images/webpro-icon-14.gif"> Storytelling im Web
                    </p>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('subnavmobile')

@endsection
