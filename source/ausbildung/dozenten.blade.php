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
            <p>Das zentrale Element einer praxisorientierten Ausbildung sind selbstverständlich die Dozenten.
                Um die aktuellsten Technologien in einem praxisorientierten Kontext vermitteln zu können benötigt es die besten Spezialisten aus der Agentur- und Internetwelt.
                Unsere Dozenten sind Seniors aus etablierten Agenturen welche selber mitten in der Praxis stehen und dir mit Rat und Tat bei deinen Web-Projekten zur Seite stehen können.</p>
        </div>

    </div>


    <div class="row">
        <div class="col l4 m6 s12">

            <div class="card medium" itemprop="employee" itemscope itemtype="http://schema.org/Person">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="/images/dozenten/rolf-eggenberger.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><span itemprop="givenName">Rolf</span> <span itemprop="familyName">Eggenberger</span><i class="material-icons right">more_vert</i></span>
                    <p>Gründer und Co-Gründer diverser Online Startups<br><br><img src="/images/webpro-icon-14.gif"> <span itemprop="jobTitle">Lehrgangsleiter, HTML/CSS, PHP, WordPress</span></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Rolf Eggenberger <i class="material-icons right">close</i></span>
                    <p>Rolf Eggenberger ist Initiator und Lehrgangsleiter der Web Professionals sowie Geschäftsleiter der Agentur ://kunstwort. Im Alter von 14 Jahren programmierte er seine erste kommerzielle Software zur Planung von Busrouten, unterrichtete während der Kantonsschule seine eigenen Klassenkameraden in Informatik und begann 1992 an der Universität St.Gallen Informationsmanagement zu studieren. In einer der Eröffnungsveranstaltungen stellte der damalige Tutor Peter Hogenkamp das „Internet“ vor – seit diesem Zeitpunkt ist Rolf konstant online.</p>
                    <p>Gemeinsam mit Alexander Braun ist er Co-Founder diverser Online-Startups. Diese Erfahrungen helfen dabei, die Web Professionals immer wieder auf Tempo zu bringen und sich laufend an Neuem zu orientieren.</p>
                </div>
            </div>

        </div>
        <div class="col l4 m6 s12">

            <div class="card medium" itemprop="employee" itemscope itemtype="http://schema.org/Person">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="/images/dozenten/martina-heeb.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><span itemprop="givenName">Martina</span> <span itemprop="familyName">Heeb</span><i class="material-icons right">more_vert</i></span>
                    <p>Screendesignerin Agentur kunstwort GmbH<br><br><img src="/images/webpro-icon-14.gif"> <span itemprop="jobTitle">Lehrgangsleiterin Web Designer</span></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Martina Heeb<i class="material-icons right">close</i></span>
                    <p>Martina Heeb ist Lehrgangsleiterin bei den Web Professionals und für die Designer-Klassen verantwortlich. Seit 2002 vom Internet-Fieber angesteckt hat sie als Screen Designerin bereits viele Trends, Startups und Technologien aktiv miterlebt. Dies lässt sie die notwendige Ruhe bewahren um die Web Professionals auf dem korrekten Kurs zu halten.</p>
                </div>
            </div>

        </div>
        <div class="col l4 m6 s12">

            <div class="card medium" itemprop="employee" itemscope itemtype="http://schema.org/Person">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="/images/dozenten/veith-zaech.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><span itemprop="givenName">Veith</span> <span itemprop="familyName">Zäch</span><i class="material-icons right">more_vert</i></span>
                    <p><span itemprop="jobTitle">Software Architekt, adcubum</span><br><br><img src="/images/webpro-icon-14.gif"> JavaScript, Ajax/jQuery, PHP, Polymer</p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Veith Zäch<i class="material-icons right">close</i></span>
                    <p>Veith Zäch ist Software Architekt bei adcubum. Als er 11 Jahre alt war kam er mit seiner Familie aus Indonesien in die Schweiz zurück und musste erst Deutsch lernen, bevorzugte jedoch anstelle des Deutschbuchs das englische Modula-2 Handbuch. Dank seinem umfangreichen Wissen in diversen Programmierkonzepten und -sprachen gehört er seit Gründung der Web Professionals zu den Hauptdozenten bei den fortgeschrittenen Developer Lehrgängen. Nebenbei braut er Bananenbier, lässt ab und an sein Haus explodieren und will Putzroboter mit Schwarmintelligenz bauen.</p>
                </div>
            </div>

        </div>
        <div class="col l4 m6 s12">

            <div class="card medium" itemprop="employee" itemscope itemtype="http://schema.org/Person">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="/images/dozenten/florian-gaechter.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><span itemprop="givenName">Florian</span> <span itemprop="familyName">Gächter</span><i class="material-icons right">more_vert</i></span>
                    <p><span itemprop="jobTitle">Frontend Developer, Frontify</span><br><br><img src="/images/webpro-icon-14.gif"> JavaScript, Ajax/jQuery, Laravel</p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Florian Gächter<i class="material-icons right">close</i></span>
                    <p>Florian Gächter ist >Frontend Developer bei Frontify. Nach einem angefangenen Biotechnologie-Studium ist er (Veith Zäch sei Dank) der Welt des Frontend Developments verfallen. Durch seine Leidenschaft für hübsche Frontends und Clean Code ist er für die Web Professionals Dozent erster Wahl für Programmier-Themen mit sichtbaren Resultaten.</p>
                </div>
            </div>

        </div>

        <div class="col l4 m6 s12">
            <div class="card medium" itemprop="employee" itemscope itemtype="http://schema.org/Person">
                <div class="card-image">
                    <img src="/images/dozenten/kilian_schefer.gif">
                </div>
                <div class="card-content">
                    <span class="card-title"><span itemprop="givenName">Kilian</span> <span itemprop="familyName">Schefer</span></span>
                    <p>
                        <span itemprop="jobTitle">Software Developer, Liip AG</span><br><br>
                        <img src="/images/webpro-icon-14.gif"> HTML/CSS, Javascript
                    </p>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card medium" itemprop="employee" itemscope itemtype="http://schema.org/Person">
                <div class="card-image">
                    <img src="/images/dozenten/pascal_helfenstein.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title"><span itemprop="givenName">Pascal</span> <span itemprop="familyName">Helfenstein</span></span>
                    <p>
                        <span itemprop="jobTitle">Software Engineer, Liip AG</span><br><br>
                        <img src="/images/webpro-icon-14.gif"> Javascript, PHP
                    </p>
                </div>
            </div>
        </div>


        <div class="col l4 m6 s12">
            <div class="card medium" itemprop="employee" itemscope itemtype="http://schema.org/Person">
                <div class="card-image">
                    <img src="/images/dozenten/stefan-baur.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title"><span itemprop="givenName">Stefan</span> <span itemprop="familyName">Baur</span></span>
                    <p>
                        <span itemprop="jobTitle">Senior Software Engineer, Namics AG</span><br><br>
                        <img src="/images/webpro-icon-14.gif"> PHP
                    </p>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card medium" itemprop="employee" itemscope itemtype="http://schema.org/Person">
                <div class="card-image">
                    <img src="/images/dozenten/marielle_beusch.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title"><span itemprop="givenName">Marielle</span> <span itemprop="familyName">Beusch</span></span>
                    <p>
                        <span itemprop="jobTitle">Büro für Gebrauchsgraphik</span><br><br>
                        <img src="/images/webpro-icon-14.gif"> Screen Design
                    </p>
                </div>
            </div>
        </div>


        <div class="col l4 m6 s12">

            <div class="card medium" itemprop="employee" itemscope itemtype="http://schema.org/Person">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="/images/dozenten/alexander-braun.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><span itemprop="givenName">Alexander</span> <span itemprop="familyName">Braun</span><i class="material-icons right">more_vert</i></span>
                    <p><span itemprop="jobTitle">Gründer und Geschäftsleiter Creative Construction Berlin</span><br><br><img src="/images/webpro-icon-14.gif"> Konzeption, neue Technologien</p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Alexander Braun<i class="material-icons right">close</i></span>
                    <p>Alexander Braun ist Gründer der Digitalstrategieberatung CREATIVE CONSTRUCTION in Berlin. Seit 1995 online entwickelte er zusammen mit Rolf Eggenberger seit 1999 eine Reihe von Internet-Startups und war bei Bertelsmann in Führungsfunktion für digitale Geschäfte verantwortlich. Er ist Autor von Fachbüchern über künstliche Intelligenz und die Transformation von Geschäftsmodellen durch das Internet, studierte Wirtschaftswissenschaften an der Universität St. Gallen und belegte Executive Education am INSEAD und am Massachusetts Institute of Technology (MIT). Aktuell sorgt er mit seinem Startup hidence dafür, das Kennenlernen der spannendsten Teilnehmer auf Konferenzen nicht mehr dem Zufall zu überlassen. </p>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card medium" itemprop="employee" itemscope itemtype="http://schema.org/Person">
                <div class="card-image">
                    <img src="/images/dozenten/dummy.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title"><span itemprop="givenName">Michelle</span> <span itemprop="familyName">Oesch</span></span>
                    <p>
                        <span itemprop="jobTitle">Wissenschaftliche Fotografin Universität Zürich</span><br><br>
                        <img src="/images/webpro-icon-14.gif"> Fotografie
                    </p>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card medium" itemprop="employee" itemscope itemtype="http://schema.org/Person">
                <div class="card-image">
                    <img src="/images/testimonials/flueck.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title"><span itemprop="givenName">Michi</span> <span itemprop="familyName">Flück</span></span>
                    <p>
                        <span itemprop="jobTitle">Somedia Press AG</span><br><br>
                        <img src="/images/webpro-icon-14.gif"> Drupal
                    </p>
                </div>
            </div>
        </div>

        <!--
        <div class="col l4 m6 s12">
            <div class="card medium" itemprop="employee" itemscope itemtype="http://schema.org/Person">
                <div class="card-image">
                    <img src="/images/dozenten/dummy.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title"><span itemprop="givenName">Julian</span> <span itemprop="familyName">Schattner</span></span>
                    <p>
                        <span itemprop="jobTitle">Product Owner, DACHCOM.CH AG</span><br><br>
                        <img src="/images/webpro-icon-14.gif"> 	PHP, OOP, mobile Lösungen
                    </p>
                </div>
            </div>
        </div>
-->
        <div class="col l4 m6 s12">
            <div class="card medium" itemprop="employee" itemscope itemtype="http://schema.org/Person">
                <div class="card-image">
                    <img src="/images/dozenten/alexander-zyuzkevich.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title"><span itemprop="givenName">Alexander</span> <span itemprop="familyName">Zyuzkevich</span></span>
                    <p>
                        <span itemprop="jobTitle">Senior Interaction Designer, Swisscom</span><br><br>
                        <img src="/images/webpro-icon-14.gif"> 	UX/UI, Konzepte
                    </p>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">

            <div class="card medium" itemprop="employee" itemscope itemtype="http://schema.org/Person">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="/images/dozenten/michi-jaeger.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><span itemprop="givenName">Michael</span> <span itemprop="familyName">Jäger</span><i class="material-icons right">more_vert</i></span>
                    <p><span itemprop="jobTitle">Projektleiter Webstobe GmbH</span><br><br><img src="/images/webpro-icon-14.gif"> Konzeption</p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Michael Jäger<i class="material-icons right">close</i></span>
                    <p>Michael Jäger ist Berater und Projektleiter für Online Marketing mit messianischer Veranlagung: Er glaubt an Daten und an nichts als an Daten. SEO, SEA, Facebook und Konsorten haben für ihn alle Berechtigung, solange sie direkt erfolgswirksam sind. Sein BWL-Hintergrund führt damit den Hype auf die Basis der Lebenswirklichkeit von Unternehmen zurück: Geld verdienen.</p>
                    <p>Nach einer langen Sozialisierungsphase in Deutschland ist er zum Studium in die Schweiz zurück gekehrt und war lange Jahre selbständig, bis er sich in eine Teilzeitanstellung zurück zog. Seine Besessenheit von allem Kulinarischen nimmt gelegentlich pathologische Züge an.</p>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card medium">
                <div class="card-image" itemprop="employee" itemscope itemtype="http://schema.org/Person">
                    <img src="/images/dozenten/dummy.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title"><span itemprop="givenName">Mark</span> <span itemprop="familyName">Lowe</span></span>
                    <p>
                        <span itemprop="jobTitle">Founder und CEO Lowe IT Consulting Ltd., London</span><br><br>
                        <img src="/images/webpro-icon-14.gif"> WordPress
                    </p>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card medium" itemprop="employee" itemscope itemtype="http://schema.org/Person">
                <div class="card-image">
                    <img src="/images/dozenten/marc-illien.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title"><span itemprop="givenName">Marc</span> <span itemprop="familyName">Illien</span></span>
                    <p>
                        <span itemprop="jobTitle">Full Stack Engineer, siroop AG</span><br><br>
                        <img src="/images/webpro-icon-14.gif"> 	JavaScript
                    </p>
                </div>
            </div>
        </div>
<!--
        <div class="col l4 m6 s12">
            <div class="card medium" itemprop="employee" itemscope itemtype="http://schema.org/Person">
                <div class="card-image">
                    <img src="/images/dozenten/dummy.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title"><span itemprop="givenName">Tom</span> <span itemprop="familyName">Schneider</span></span>
                    <p>
                        <span itemprop="jobTitle">Projektleiter, SOMEDIA PRODUCTION</span><br><br>
                        <img src="/images/webpro-icon-14.gif"> Drupal
                    </p>
                </div>
            </div>
        </div>
-->
        <div class="col l4 m6 s12">
            <div class="card medium" itemprop="employee" itemscope itemtype="http://schema.org/Person">
                <div class="card-image">
                    <img src="/images/dozenten/johanna-gaechter.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title"><span itemprop="givenName">Johanna</span> <span itemprop="familyName">Gächter</span></span>
                    <p>
                        <span itemprop="jobTitle">Screendesignerin Kernbrand AG</span><br><br>
                        <img src="/images/webpro-icon-14.gif"> 	Tools, Ressourcen
                    </p>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card medium" itemprop="employee" itemscope itemtype="http://schema.org/Person">
                <div class="card-image">
                    <img src="/images/dozenten/dummy.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title"><span itemprop="givenName">Christian</span> <span itemprop="familyName">Woelk</span></span>
                    <p>
                        <span itemprop="jobTitle">Partner, Graphic Designer Adicto</span><br><br>
                        <img src="/images/webpro-icon-14.gif"> Screen Design
                    </p>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card medium" itemprop="employee" itemscope itemtype="http://schema.org/Person">
                <div class="card-image">
                    <img src="/images/dozenten/dummy.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title"><span itemprop="givenName">Alain</span> <span itemprop="familyName">de Veer</span></span>
                    <p>
                        <span itemprop="jobTitle">UX Designer & Art, Advertima Berlin</span><br><br>
                        <img src="/images/webpro-icon-14.gif"> Entwurfstechniken
                    </p>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card medium" itemprop="employee" itemscope itemtype="http://schema.org/Person">
                <div class="card-image">
                    <img src="/images/dozenten/angelo-zehr.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title"><span itemprop="givenName">Angelo</span> <span itemprop="familyName">Zehr</span></span>
                    <p>
                        <span itemprop="jobTitle">Stagiaire Schweizer Radio und Fernsehen</span><br><br>
                        <img src="/images/webpro-icon-14.gif"> Storytelling im Web
                    </p>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('subnavmobile')

@endsection
