@extends('_layouts.master')


{{-- Header --}}
@section('header')
    <title>Barcamp | Web Professionals</title>
    <meta property="og:url" content="https://web-professionals.ch/barcamp/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="#2 webPro + friends Hackathon" />
    <meta property="og:description" content="#2 webPro + friends Hackathon. Thema: 'Hack for good'. Datum: 17./18. März 2018. Location: Techfabrik Grabs SG" />
    <meta property="og:image" content="https://web-professionals.ch/images/og/hackathon2-preview.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
@endsection

{{-- Hero Unit on Top --}}
@section('hero')
    <header class="webpro-hero-image">
        <picture>
            <source media="(max-width: 600px)" srcset="/images/background/web_professionals_camp01_phone.jpg">
            <img src="/images/background/web_professionals_camp02.jpg" alt="Web Professionals Barcamp" title="Web Professionals Barcamp">
        </picture>
    </header>
    <header class="webpro-hero">
        @include('_partials.herotop')
        <div class="webpro-hero-claim">
            <span class="webpro-hero1">Hack for Good</span><br>
            <span class="webpro-hero2">digitale Lösungen für soziale Herausforderungen</span><br><br>
            <!-- <a class="waves-effect waves-light btn webpro-red">Jetzt informieren</a> -->
        </div>
    </header>
@endsection

{{-- Main Navigation --}}
@section('navigation')
    @include('_partials.navigation', [
        'nav5status'    =>  ' active'
    ])
@endsection

@section('subnavmobile')
    <div class="collection webpro hide-on-med-and-up">
        <a href="/barcamp/sponsoring/" class="collection-item">Sponsoring</a>
    </div>
@endsection

{{-- Main Content --}}
@section('body')
    <div class="row">
        <div class="col l5 m6 s12 webpro-left">
            @include('_partials.header1', [
                'part1'    =>  'Web Professionals',
                'part2'    =>  'Barcamp / Hackathon'
            ])
            <nav class="webpro-nav-lvl2 hide-on-small-only">
                <a href="/barcamp/anmeldung/">Anmeldung</a><br>
                <!-- <a href="/barcamp/sponsoring/">Sponsoring</a><br> -->
                <a href="/barcamp/presse/">Pressematerial</a><br>
            </nav>
            <br>

            <span class="show-on-medium-and-up">
                <br><br><img class="responsive-img" src="/images/barcamp/logo-hackathon-2.png">
            </span>


        </div>
        <div class="col l7 m6 webpro-right">

            <h2 class="webpro">#2 Web Professionals and Friends Hackathon</h2>
            <p class="headline">Nach den letzten zwei Barcamps wird es wieder Zeit für ein langes Wochenende des Codens: der zweite Web Professionals and Friends Hackathon findet am <strong>17. und 18. März 2018</strong> in der <strong>Techfabrik Grabs</strong> statt. Thema: <strong>"Hack for Good"</strong>.</p>
            <p>"Making the world a better place" (Hooli) ist zwar ein pointierter Leitspruch aus der HBO Serie <a href="https://www.hbo.com/silicon-valley">Silicon Valley</a>, trifft aber dennoch den Grundgedanken der Internet-Community - resp. derjenigen welche den Urgedanken der Internet-Begründer wie Jon Postel, Tim Berners-Lee etc. weitertragen. Auch Web Professionals mögen den Gedanken des Miteinanders, des Austauschs und wollen am 2. Hackathon Applikationen entwickeln, welche den Alltag und unsere Umgebung ein wenig schöner und besser machen können.</p>

            <p>Die <strong>Web Professionals + Friends Barcamps und Hackathons</strong> finden halbjährlich statt und wurden schnell zu einem wichtigen Anlass inner- und ausserhalb der Web Professionals Ausbildung.
                Mittlerweile reisen die Teilnehmer nicht nur aus allen Ecken der Schweiz, sondern sogar extra aus London an um an einem unserer Camps teilnehmen zu können.</p>

            <p>Seit neustem alterniert das Barcamp in unregelmässiger Abfolge mit dem <strong>webPro + friends Hackathon</strong>. Bald ist es wieder soweit und der #2 Hackathon findet in der Techfabrik Grabs statt.</p>

            <p><strong>Was ist ein Barcamp?</strong> Eine Un-Konferenz, bei welcher das Thema vorgegeben ist, nicht jedoch die Inhalte der einzelnen Sessions. Diese werden ad-hoc durch die Teilnehmer selber festgelegt, geplant und durchgeführt.</p>

            <p><strong>Was ist ein Hackathon?</strong> Eigentlich ziemlich ähnlich wie ein Barcamp - nur ohne (oder höchstens einzelnen) Sessions, dafür umso mehr Hands-on Programmierung. Das Thema ist grob vorgegeben, welche Applikation die Teilnehmer an diesem Wochenende entwickeln wollen ist ihnen freigestellt.</p>

            <h2 class="webpro">Ablauf</h2>
            <strong>Samstag, 17.3.2018:</strong>
            <ul class="webpro-list">
                <li>08 Uhr: Türöffnung, Kaffee, Gipfeli, gesunde Säfte</li>
                <li>09 Uhr: Eröffnung des #2 Hackathons, Definition der Projekte</li>
                <li>10 Uhr: offizieller Start des Hackathons</li>
                <li>12 Uhr: Pasta Party mit <a href="http://pasta-peer.ch/" target="_blank">Pasta Peer</a></li>
                <li>18 Uhr: Eintreffen des Streetfood Trucks von <a href="https://www.chelui.ch/" target="_blank">Che Lui</a></li>
                <li>19 Uhr: Geek Olympiade (Achtung: ++geekLevel !)</li>
                <li>20 Uhr bis Open End: Barbetrieb, Coding bis alle Unit Tests grün sind</li>
                <li>ganzer Tag: VR Testing mit mello</li>
            </ul>
            <br>
            <strong>Sonntag, 18.3.2018:</strong>
            <ul class="webpro-list">
                <li>10 Uhr: Frühstücks-/Brunchtisch mit letzten Commits</li>
                <li>12 Uhr: Präsentation der Projekte, offizieller Abschluss</li>
            </ul>

            <h2 class="webpro">Infos</h2>
            <ul>
                <li><strong>Start:</strong> 17. März 2018, 09:00 Uhr</li>
                <li><strong>Ende:</strong> 18. März 2018, 12:00 Uhr</li>
                <li><strong>Ort:</strong> Techfabrik, Mühlbachstrasse 11a, 9472 Grabs</li>
                <li><strong>Hashtag:</strong> <a href="https://twitter.com/search?q=%23webprocamp&src=typd" target="_blank">#webprocamp</a></li>
                <li><strong>Teilnahmegebühr:</strong> CHF 30 inkl. Getränke und Verpflegung, exkl. Übernachtung</li>
                <li><strong>Übernachtung:</strong> auf Wunsch reservieren wir dir gerne ein Zimmer in einem naheliegenden Hotel - bitte bei der Anmeldung bekannt geben. Es besteht auch die Möglichkeit, in der Techfabrik zu übernachten.</li>
            </ul>

            <p>Hinweis: das Hotel Taucher, welches uns jeweils mit einem Preisnachlass unterstützt, ist an dem Wochenende leider bereits ausgebucht. Hier eine Liste von Hotels in der Nähe:</p>
            <ul>
                <li>Hotel Buchserhof, Buchs <a href="https://www.buchserhof.ch" target="_blank">www.buchserhof.ch</a></li>
                <li>Hotel City, Buchs <a href="https://www.hotelcitybuchs.ch" target="_blank">www.hotelcitybuchs.ch</a></li>
                <li>Hotel Landgasthof Werdenberg, <a href="https://www.landgasthofwerdenberg.ch" target="_blank">www.landgasthofwerdenberg.ch</a></li>
            </ul>

            <section id="anmeldung" class="section scrollspy">
                <a class="waves-effect waves-light btn webpro-red" href="/barcamp/anmeldung/">Jetzt anmelden</a>
            </section>

            <br>

            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/gtB9BNsH3qE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>

            <br><br>

            <h2 class="webpro">Sponsoren</h2>

            <p>Zur Durchführung unserer Barcamps und Hackathons benötigt es nebst sehr viel Freiwilligen-Einsatz der Web Professionals and Friends natürlich auch finanzielle Unterstützung durch Sponsoren.</p>
            <!-- Wir würden uns sehr freuen, wenn ihr den diesjährigen Hackathon <a href="/barcamp/sponsoring/">mit einem Sponsoring-Beitrag unterstützen würdet!</a> -->
            <p>Wir freuen uns sehr, dass wir auch dieses Mal wieder Unterstützung durch starke Partner erhalten - herzlichen Dank, dass ihr die Durchführung dieses Anlasses ermöglicht!
            <!-- Herzlichen Dank unseren <strong>Sponsoren</strong>, welche die Durchführung unseres Barcamps ermöglichen: -->

            <div class="row">
                <div class="col s12"><p class="sponsoren-titel">"Heart for Good":</p></div>

                <div class="col s12 m6 l5">
                    <a href="https://www.namics.com" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/namics.png"></a>
                </div>
                <div class="col s12 m6 l5 offset-l2">
                    <a href="http://www.hostpoint.ch" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/hostpoint.svg"></a>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m6 l5">
                    <a href="https://www.liip.ch" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/liip.png"></a>
                </div>
                <div class="col s12 m6 l5 offset-l2">
                    <a href="https://www.adcubum.com/home" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/adcubum.svg"></a>
                </div>
            </div>

            <div class="row">
                <div class="col s12"><p class="sponsoren-titel">"Food for Good":</p></div>
                <div class="col s12 m6 l5">
                    <a href="http://www.ibw.ch" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/ibw_sponsoring.gif"></a>
                </div>
                <div class="col s12 m6 offset-l2 l5">
                    <a href="https://www.hsr.ch/de/weiterbildung/technik-und-it/cas/cas-front-end-engineering/" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/hsr.png"></a>
                </div>
                <div class="col s12 m6 l5">
                    <a href="https://frontify.com/" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/frontify.png"></a>
                </div>
            </div>
            <div class="row">
                <div class="col s12"><p class="sponsoren-titel">"Drinks for Good":</p></div>
                <div class="col s12 m6 l5">
                    <a href="https://www.multidigital.ch/" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/multidigital.png"></a>
                </div>
                <div class="col s12 m6 l5 offset-l2">
                    <a href="https://www.finnova.com/de/" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/finnova.png"></a>
                </div>
            </div>
            <div class="row">
                <div class="col s12"><p class="sponsoren-titel">"Coffee for Good":</p></div>
                <div class="col s12 m6 l5">
                    <a href="https://www.innovatis.net/" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/innovatis.svg"></a>
                </div>
                <div class="col s12 m6 l5 offset-l2">
                    <a href="https://tomschaepper.net/" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/tomschaepper.png"></a>
                </div>
            </div>
            <div class="row">
                <div class="col s12"><p class="sponsoren-titel">"Sweets for Good":</p></div>
                <div class="col s12 m6 l5">
                    <a href="https://www.innovatis.net/" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/laederach.png"></a>
                </div>
            </div>
            <!--


            <div class="row">
                <div class="col s12"><p class="sponsoren-titel">Hauptsponsoren:</p></div>
                <div class="col s12 m6 l5">
                    <a href="http://www.viaduct.ch/" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/viaduct.png"></a>
                </div>
                <div class="col s12 hide-on-med-and-up"><br></div>
                <div class="col s12 m5 l4 offset-m1 offset-l1">
                    <a href="http://www.liip.ch" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/liip.png"></a>
                </div>
            </div>

            <div class="row">
                <div class="col s12"><p class="sponsoren-titel">Essens-Sponsor:</p></div>
                <div class="col s8 m6 l5 end">
                    <a href="https://www.hsr.ch/Weiterbildung-an-der-HSR.2369.0.html" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/hsr.png"></a>
                </div>
            </div>

            <div class="row">
                <div class="col s12"><p class="sponsoren-titel">Getränke-Sponsoren:</p></div>
                <div class="col s6 m6 l4">
                    <a href="http://www.multidigital.ch" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/multidigital.png"></a>
                </div>
                <div class="col s6 m6 l4 offset-l2">
                    <a href="http://www.ibw.ch" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/ibw_sponsoring.gif"></a>
                </div>
            </div>

            <div class="row">
                <div class="col s12"><p class="sponsoren-titel">Kaffee-Sponsor:</p></div>
                <div class="col s6 m6 l4">
                    <a href="https://tomschaepper.net/" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/tomschaepper.png"></a>
                </div>
            </div>

            <br>
            <p>Willst auch du unser <a href="/barcamp/sponsoring/">Barcamp und damit eine gute Sache unterstützen? Wir freuen uns auf deine Kontaktaufnahme!</a></p>
            <br><br>

            -->

        </div>
    </div>
    <div class="row" >
        <div class="col s12"><h2 class="webpro" id="archiv" name="archiv">Bisherige Barcamps:</h2></div>
        <div class="col l4 m6 s12">
            <div class="card">
                <div class="card-image">
                    <img src="/images/barcamp/autumn_camp_2017.jpg">

                </div>
                <div class="card-content">
                    <span class="card-title">#6 Autumn Camp 2017</span>
                    <p>Thema: API<br>Location: Techfabrik Grabs<br>Datum: 28./29. Oktober 2017</p>
                </div>
                <div class="card-action">
                    <a href="/aktuelles/2017-10-29-barcamp6-api/">weitere Infos</a>
                </div>
            </div>
        </div>
        <div class="col l4 m6 s12">
            <div class="card">
                <div class="card-image">
                    <img src="/images/barcamp/spring_camp_2017.jpg">

                </div>
                <div class="card-content">
                    <span class="card-title">#5 Spring Camp 2017</span>
                    <p>Thema: CSS is awesome!<br>Location: Techfabrik Grabs<br>Datum: 12./12. März 2016</p>
                </div>
                <div class="card-action">
                    <a href="/aktuelles/2017-03-15-barcamp-css-is-awesome/">weitere Infos</a>
                </div>
            </div>
        </div>
        <div class="col l4 m6 s12">
            <div class="card">
                <div class="card-image">
                    <img src="/images/barcamp/winter_camp_2016.png">

                </div>
                <div class="card-content">
                    <span class="card-title">#4 Winter Camp 2016</span>
                    <p>Thema: Zukunft<br>Location: Medienhaus somedia Chur<br>Datum: 27./28. Februar 2016</p>
                </div>
                <div class="card-action">
                    <a href="https://goo.gl/photos/Nz9GqmuFLWbv8NDs6" target="_blank">Fotos (Google)</a>
                </div>
            </div>
        </div>
        <div class="col l4 m6 s12">
            <div class="card">
                <div class="card-image">
                    <img src="/images/barcamp/spring_camp_2015.png">

                </div>
                <div class="card-content">
                    <span class="card-title grey-text text-darken-4">#3 Spring Camp 2015</span>
                    <p>Thema: Internet der Dinge<br>Location: Techfabrik Grabs<br>Datum: 25./26. April 2016</p>
                </div>
                <div class="card-action">
                    <a href="https://goo.gl/photos/tHPyFPVsxNk9n8HV8" target="_blank">Fotos (Google)</a>
                </div>
            </div>
        </div>
        <div class="col l4 m6 s12">
            <div class="card">
                <div class="card-image">
                    <img src="/images/barcamp/summer_camp_2014.png">
                </div>
                <div class="card-content">
                    <span class="card-title grey-text text-darken-4">#2 Summer Camp 2014</span>
                    <p>Thema: Tools und Workflows<br>Location: Seepromenade Walenstadt<br>Datum: 30./31. August 2014</p>
                </div>
                <div class="card-action">
                    <a href="https://goo.gl/photos/m8bmEH6jxrsBA6L79" target="_blank">Fotos (Google)</a>
                </div>
            </div>
        </div>
        <div class="col l4 m6 s12">
            <div class="card">
                <div class="card-image">
                    <img src="/images/barcamp/winter_camp_2014.png">
                </div>
                <div class="card-content">
                    <span class="card-title grey-text text-darken-4">#1 Winter Camp 2014</span>
                    <p>Thema: alles mobil<br>Location: GBMS Atelier Buchs SG<br>Datum: ?</p>
                </div>
                <div class="card-action">
                    <a href="https://goo.gl/photos/YAeDwzZT8Zy5m6jg6" target="_blank">Fotos (Google)</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12"><h2 class="webpro">Bisherige Hackathons:</h2></div>
        <div class="col l4 m6 s12">
            <div class="card">
                <div class="card-image">
                    <img src="/images/barcamp/hackathon1.jpg">

                </div>
                <div class="card-content">
                    <span class="card-title">#1 Hackathon 2016</span>
                    <p>Thema: Devgotchi<br>Location: Techfabrik Grabs<br>Datum: 29./30. Oktober 2016</p>
                </div>
                <!--<div class="card-action">
                    <a href="/aktuelles/2017-10-29-barcamp6-api/">weitere Infos</a>
                </div>-->
            </div>
        </div>
    </div>
@endsection
