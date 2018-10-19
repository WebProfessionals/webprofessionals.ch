@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Hack for Good | Hackathon#2 | Web Professionals</title>
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
            <source media="(max-width: 600px)" srcset="/images/background/web_professionals_034_phone.jpg">
            <img src="/images/background/web_professionals_034.jpg" alt="Web Professionals" title="Web Professionals">
        </picture>
    </header>
    <header class="webpro-hero">
        @include('_partials.herotop')
        <div class="webpro-hero-claim">
            <span class="webpro-hero1">#2 Hackathon 2018</span><br>
            <span class="webpro-hero2">"Hack for Good": 17./18. März 2018</span><br>
            <!-- <a class="waves-effect waves-light btn webpro-red webpro-hero-button" href="/lehrgaenge/anmeldung/">Jetzt anmelden</a> -->
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
                'part1'    =>  'Hackathon#2',
                'part2'    =>  'Hack for Good'
            ])
            <!-- Rolf Eggenberger, 30. Oktober 2016 -->
        </div>
        <div class="col l4 m5 hide-on-small-only">

            <br><img class="responsive-img" src="/images/barcamp/logo-hackathon-2.png">

            <p>Wir bedanken uns bei unseren Sach- und Geldsponsoren, welche die Durchführung des Hackathons unterstützt und damit ermöglicht haben:</p>
            <div class="row">
                <div class="col s12"><p class="sponsoren-titel">Heart for Good:</p></div>
                <div class="col s12 m6 l5">
                    <a href="http://www.hostpoint.ch/" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/hostpoint.svg"></a>
                </div>
                <div class="col s12 hide-on-med-and-up"><br></div>
                <div class="col s12 m5 l4 offset-m1 offset-l1">
                    <a href="http://www.namics.com" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/namics.png"></a>
                </div>
                <div class="col s12 m6 l5">
                    <a href="http://www.liip.ch/" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/liip.png"></a>
                </div>
                <div class="col s12 hide-on-med-and-up"><br></div>
                <div class="col s12 m5 l4 offset-m1 offset-l1">
                    <a href="http://www.adcubum.ch" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/adcubum.svg"></a>
                </div>
            </div>

            <div class="row">
                <div class="col s12"><p class="sponsoren-titel">Food for Good:</p></div>
                <div class="col s8 m6 l5 end">
                    <a href="http://www.ibw.ch" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/ibw_sponsoring.gif"></a>
                </div>
                <div class="col s12 hide-on-med-and-up"><br></div>
                <div class="col s12 m5 l4 offset-m1 offset-l1">
                    <a href="https://www.hsr.ch/de/weiterbildung/technik-und-it/cas/cas-front-end-engineering/" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/hsr.png"></a>
                </div>
                <div class="col s12 hide-on-med-and-up"><br></div>
                <div class="col s8 m6 l5 end">
                    <a href="https://frontify.com/" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/frontify.png"></a>
                </div>
            </div>

            <div class="row">
                <div class="col s12"><p class="sponsoren-titel">Drinks for Good:</p></div>
                <div class="col s6 m6 l4">
                    <a href="http://www.multidigital.ch" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/multidigital.png"></a>
                </div>
                <div class="col s12 hide-on-med-and-up"><br></div>
                <div class="col s6 m6 l4 offset-l2">
                    <a href="https://www.finnova.com/de/" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/finnova.png"></a>
                </div>
            </div>

            <div class="row">
                <div class="col s12"><p class="sponsoren-titel">Coffee for Good:</p></div>
                <div class="col s6 m6 l4">
                    <a href="https://www.innovatis.net/" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/innovatis.svg"></a>
                </div>
                <div class="col s12 hide-on-med-and-up"><br></div>
                <div class="col s6 m6 l4 offset-l2">
                    <a href="https://tomschaepper.net/" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/tomschaepper.png"></a>
                </div>
            </div>

            <div class="row">
                <div class="col s12"><p class="sponsoren-titel">Sweets for Good:</p></div>
                <div class="col s6 m6 l4">
                    <a href="https://www.laederach.ch/" target="_blank"><img class="responsive-img" src="/images/barcamp/sponsoren/laederach.png"></a>
                </div>
            </div>

        </div>
        <section class="col l7 offset-l1 m6 offset-m1 s12">

            <h2 class="webpro">#2 Web Professionals and Friends Hackathon</h2>
            <p class="headline">Nach den letzten zwei Barcamps wurde es wieder Zeit für ein langes Wochenende des Codens: der zweite Web Professionals and Friends Hackathon fand am <strong>17. und 18. März 2018</strong> in der <strong>Techfabrik Grabs</strong> statt. Thema: <strong>"Hack for Good"</strong>.</p>

            <h2 class="webpro">Ausschreibung</h2>
            <p>"Making the world a better place" (Hooli) ist zwar ein pointierter Leitspruch aus der HBO Serie <a href="https://www.hbo.com/silicon-valley">Silicon Valley</a>, trifft aber dennoch den Grundgedanken der Internet-Community - resp. derjenigen welche den Urgedanken der Internet-Begründer wie Jon Postel, Tim Berners-Lee etc. weitertragen. Auch Web Professionals mögen den Gedanken des Miteinanders, des Austauschs und wollen am 2. Hackathon Applikationen entwickeln, welche den Alltag und unsere Umgebung ein wenig schöner und besser machen können.</p>

            <h2 class="webpro">Ablauf</h2>
            <strong>Samstag, 17.3.2018:</strong>
            <ul class="webpro-list">
                <li>08 Uhr: Türöffnung, Kaffee, Gipfeli, gesunde Säfte</li>
                <li>09 Uhr: Eröffnung des #2 Hackathons, Definition der Projekte</li>
                <li>10 Uhr: offizieller Start des Hackathons</li>
                <li>12 Uhr: Mittagessen (Vitamine!)</li>
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

            <br>
            <h2 class="webpro">Teams / Projekte</h2>
            <ul class="webpro-list">
                <li>"Code4Kids"</li>
                <li>"Blockshare"</li>
                <li>"FriendCoins"</li>
                <li>"Lorem Ipsum"</li>
            </ul>

            <br>


            <h2 class="webpro">Liip AG, Facebook (20.3.2018)</h2>
            <p>"The #hackforgood at Web Professionals Ostschweiz this weekend was a big hit - a keyboard typing game, an app to pay cashless (with coins), a boardgame to learn programming and a webapp to make sharing and communication in apartment complexes easy - have been produced."</p>


            <p><a href="https://photos.app.goo.gl/mhYO2xTKV1Mdk8a03" class="waves-effect waves-light btn webpro-green" target="_blank">Fotos vom Camp (Google)</a></p>

            <br>

            <h2 class="webpro">Teaser-Clip</h2>
            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/gtB9BNsH3qE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>

            <br>

            <h2 class="webpro">Eröffnungs-Clip / Sponsoren Verdankung</h2>
            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/_eqQ8vJ-Yu4?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>

        </section>
    </div>
@endsection

@section('subnavmobile')

@endsection
