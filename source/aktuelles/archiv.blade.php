@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Archiv | Web Professionals</title>

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
            <span class="webpro-hero1">Gestalte das Web</span><br>
            <span class="webpro-hero2">Die Ausbildung für angehende Webprofis</span><br><br>
            <a class="waves-effect waves-light btn webpro-red" href="/lehrgaenge/">Jetzt informieren</a>
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
        <div class="col l12">
            <h2 class="webpro">Archiv</h2>
        </div>
    </div>
    <div class="row">

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/barcamp/'>
                <div class="card-image">
                    <div class="video-container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/gtB9BNsH3qE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="card-content white-text">
                    <span class="card-title">#2 WebPro + friends Hackathon 2018</span>
                    <p>"Hack for Good": ein ganzes Wochenende coden + fun mit den Web Professionals! Anmeldungen per sofort möglich, Teilnehmerzahl beschränkt.</p>
                    <p>17./18. März 2018 @ Techfabrik Grabs</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/barcamp/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2017-08-16-webpro-and-friends-vue-js/'>
                <div class="card-image">
                    <img src="/images/aktuelles/2017-08-webpro-and-friends-vue-js-florian-gaechter.jpg" alt="Web Professionals and Friends: Vue.js (Florian Gächter)" title="Web Professionals and Friends: Vue.js (Florian Gächter)">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Web Professionals and Friends</span>
                    <p>Kurz-Vorstellung Vue.js durch Florian Gächter (Frontify)</p>
                    <p>16.08.2017</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2017-08-16-webpro-and-friends-vue-js/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2017-03-15-barcamp-css-is-awesome/'>
                <div class="card-image">
                    <img src="/images/aktuelles/2017-css-awesome-camp5-02.jpg" alt="#5 Web Professionals Barcamp: CSS is awesome!" title="#5 Web Professionals Barcamp: CSS is awesome!">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">CSS is awesome!</span>
                    <p>Rückblick auf das #5 Web Professionals Barcamp</p>
                    <p><em>Ein Wochenende rund um das Thema Frontend Development.</em></p>
                    <p>13. März 2017</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2017-03-15-barcamp-css-is-awesome/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2017-03-03-hakan-arioglu/'>
                <div class="card-image">
                    <img src="/images/testimonials/hakan_arioglu.jpg" alt="Hakan Arioglu" title="Hakan Arioglu">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Portrait: Hakan Arioglu</span>
                    <p>Frontend Developer bei Inware AG (neu: Namics AG)</p>
                    <p><em>"Um all den neuen Web-Technologien gerecht zu werden, muss man früher oder später diverse Kurse besuchen."</em></p>
                    <p>3. März 2017</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2017-03-03-hakan-arioglu/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2017-02-01-simon-walser/'>
                <div class="card-image">
                    <img src="/images/testimonials/simon_walser.jpg" alt="Simon Walser" title="Simon Walser">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Alumni-Portrait: Simon Walser</span>
                    <p>Graphic & Multimedia Design bei LGT Capital Partners</p>
                    <p><em>"Es wird sehr individuell auf die Teilnehmer eingegangen."</em></p>
                    <p>1. Februar 2017</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2017-02-01-simon-walser/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2017-01-04-stefanie-jegen/'>
                <div class="card-image">
                    <img src="/images/testimonials/stefanie_jegen.jpg" alt="Stefanie Jegen" title="Stefanie Jegen">

                </div>
                <div class="card-content white-text">
                    <span class="card-title">Alumni-Portrait: Stefanie Jegen</span>
                    <p>Leiterin Kundenservice Web bei Somedia Production AG</p>
                    <p><em>"Warum also nicht gleich diejenige sein, die ihren bisherigen Job wegprogrammiert?"</em></p>
                    <p>04. Januar 2017</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2017-01-04-stefanie-jegen/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2016-10-30-hackathon-1-devgotchi/'>
                <div class="card-image">
                    <img src="/images/aktuelles/camp_2016_autumn.jpg" alt="Web Professionals Barcamp 2016" title="Web Professionals Barcamp 2016">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">#1 Web Professionals Hackathon</span>
                    <p>Die Devgotchis sind frei! Der erste Web Professionals Hackathon fand am 29./30.10.2016 statt!</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2016-10-30-hackathon-1-devgotchi/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2016-12-01-melanie-bernhard/'>
                <div class="card-image">
                    <img src="/images/testimonials/melanie_bernhard.jpg" alt="Melanie Bernhard" title="Melanie Bernhard">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Alumni-Portrait: Melanie Bernhard</span>
                    <p>Online Managerin Läderach chocolatier suisse</p>
                    <p><em>"Dank des Praktikums habe ich heute meinen Traumjob, im Traumbereich :-)"</em></p>
                    <p>1. Dezember 2016</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2016-12-01-melanie-bernhard/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2016-08-24-lab-002-static-server-pages-nginx/'>
                <div class="card-image">
                    <img src="/images/aktuelles/2016-08-lab002.jpg" alt="Relaunch Web Professionals" title="Relaunch Web Professionals">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">lab#002</span>
                    <p>Relaunch der Web Professionals Website</p>
                    <p>24. August 2016</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2016-08-24-lab-002-static-server-pages-nginx/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2016-04-06-tasks-aus-phpstorm-automatisch-starten/'>
                <div class="card-image">
                    <img src="/images/aktuelles/phpstorm.jpg" alt="PHP Storm" title="PHP Storm">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Taskrunner aus PHPStorm starten</span>
                    <p>Manchmal kann etwas kleines eine grosse Wirkung haben.</p>
                    <p>6. April 2016</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2016-04-06-tasks-aus-phpstorm-automatisch-starten/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2016-03-02-web-professionals-winter-camp-2016/'>
                <div class="card-image">
                    <img src="/images/aktuelles/winter-camp-zukunft1.jpg">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">#4 Barcamp Winter 2016</span>
                    <p>Rückblick auf das vierte Web Professionals Camp</p>
                    <p>2. März 2016</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2016-03-02-web-professionals-winter-camp-2016/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2015-09-15-web-professionals-lehrgang-an-der-hochschule-fuer-technik-rapperswil/'>
                <div class="card-image">
                    <img src="/images/aktuelles/hochschule.jpg">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Web Professionals goes HSR</span>
                    <p>Die Web Professionals sind ab Herbst 2015 neu auch am Campus der Fachhochschule für Technik in Rapperswil anzutreffen. </p>
                    <p>15. September 2015</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2015-09-15-web-professionals-lehrgang-an-der-hochschule-fuer-technik-rapperswil/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2015-04-28-web-professionals-spring-camp-2015/'>
                <div class="card-image">
                    <img src="/images/aktuelles/camp_2015_spring.jpg">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">#3 Barcamp Spring 2015</span>
                    <p>Rückblick auf das dritte Web Professionals Camp</p>
                    <p>28. April 2015</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2015-04-28-web-professionals-spring-camp-2015/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2015-02-09-das-internet-der-dinge-mitgestalten-die-web-professionals-machen-es-vor/'>
                <div class="card-image">
                    <img src="/images/aktuelles/2015-iot.jpg">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">#3 Barcamp Spring 2015</span>
                    <p> Das Internet der Dinge mitgestalten? Die Web Professionals machen es vor.</p>
                    <p>9. Februar 2015</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2015-02-09-das-internet-der-dinge-mitgestalten-die-web-professionals-machen-es-vor/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2014-12-13-javascript-auf-usb-stick-die-web-professionals-unterstuetzen-espruino-pico/'>
                <div class="card-image">
                    <img src="/images/aktuelles/2014-espruino-1.jpg">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">JavaScript auf USB-Stick</span>
                    <p>Die Web Professionals unterstützen das Funding und damit die Entwicklung des Espruino Pico.</p>
                    <p>13. Dezember 2014</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2014-12-13-javascript-auf-usb-stick-die-web-professionals-unterstuetzen-espruino-pico/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->


        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2015-10-10-lg-g-watch-r-im-einsatz/'>
                <div class="card-image">
                    <img src="/images/aktuelles/2014-lg-g-watch-r.jpg">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">LG G Watch R im Einsatz</span>
                    <p>Ein kurzer Testbericht zur Android Smartwach</p>
                    <p>10. November 2014</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2015-10-10-lg-g-watch-r-im-einsatz/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->


        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2014-11-04-4-gruende-weshalb-es-sich-immer-lohnt-wordpress-themes-selber-zu-entwickeln/'>
                <div class="card-image">
                    <img src="/images/aktuelles/2014-wordpress.jpg">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Eigene WordPress Themes</span>
                    <p>4 Gründe weshalb es sich immer lohnt, WordPress Themes selber zu entwickeln</p>
                    <p>4. November 2014</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2014-11-04-4-gruende-weshalb-es-sich-immer-lohnt-wordpress-themes-selber-zu-entwickeln/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2014-08-21-speaker-summer-camp-2014-frontify-roger-dudler/'>
                <div class="card-image">
                    <img src="/images/aktuelles/2014-08-roger-dudler.jpg">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">#2 Barcamp Summer 2014</span>
                    <p>Speaker: Roger Dudler, Gründer von Frontify</p>
                    <p>21. August 2014</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2014-08-21-speaker-summer-camp-2014-frontify-roger-dudler/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2014-01-07-erstes-web-professional-camp/'>
                <div class="card-image">
                    <img src="/images/aktuelles/2014-wordpress.jpg">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">#1 Barcamp Winter 2014</span>
                    <p>7. Januar 2014</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2014-01-07-erstes-web-professional-camp/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2014-02-23-ostschweizer-webprofis-machen-mobil/'>
                <div class="card-image">
                    <img src="/images/aktuelles/2014-camp-mobile.jpg">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Ostschweizer Webprofis machen mobil</span>
                    <p>23. Februar 2014</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2014-02-23-ostschweizer-webprofis-machen-mobil/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2014-02-13-du-machst-eine-bar-auf/'>
                <div class="card-image">
                    <!-- <img src="/images/aktuelles/vaterland_20140204_7.jpg"> -->
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Du machst eine Bar auf?</span>
                    <p>13. Februar 2014</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2014-02-13-du-machst-eine-bar-auf/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2014-02-04-wissensaustausch-steht-im-vordergrund-artikel-ueber-das-camp-im-liechtensteiner-vaterland/'>
                <div class="card-image">
                    <img src="/images/aktuelles/vaterland_20140204_7.jpg">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Wissensaustausch steht im Vordergrund</span>
                    <p>4. Februar 2014</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2014-02-04-wissensaustausch-steht-im-vordergrund-artikel-ueber-das-camp-im-liechtensteiner-vaterland/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2013-09-04-ruckblick-auf-den-web-integrator-2013/'>
                <div class="card-image">
                    <img src="/images/aktuelles/2013-rueckblick-integrator.jpg">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Rückblick auf den Web Integrator 2013</span>
                    <p>04. September 2013</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2013-09-04-ruckblick-auf-den-web-integrator-2013/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2013-07-02-vom-traum-zum-ziel/'>
                <div class="card-image">
                    <img src="/images/aktuelles/2013-traum-vom-ziel.jpg">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Vom Traum zum Ziel</span>
                    <p>2. Juli 2013</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2013-07-02-vom-traum-zum-ziel/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2013-03-21-die-techfabrik-bereitet-sich-auf-die-web-professionals-vor/'>
                <div class="card-image">
                    <img src="/images/aktuelles/2013-techfabrik-bereitet-sich-vor.jpg">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Die Techfabrik bereitet sich auf die Web Professionals vor</span>
                    <p>21. März 2013</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2013-03-21-die-techfabrik-bereitet-sich-auf-die-web-professionals-vor/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2012-10-10-formel-web-oder-wie-unser-logo-entsteht/'>
                <div class="card-image">
                    <img src="/images/aktuelles/2012-formel-web.jpg">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Formel Web – oder die Entstehung unseres Logos</span>
                    <p>10. Oktober 2012</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2012-10-10-formel-web-oder-wie-unser-logo-entsteht/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col l4 m6">
            <div class="card large webpro-green hoverable webpro-clickable-card" data-href='/aktuelles/2012-10-10-techfabrik-die-modellagentur-der-web-professionals/'>
                <div class="card-image">
                    <img src="/images/aktuelles/2012-techfabrik.jpg">
                </div>
                <div class="card-content white-text">
                    <span class="card-title">Techfabrik: die Modellagentur der Web Professionals</span>
                    <p>10. Oktober 2012</p>
                </div>
                <div class="card-action">
                    <a class="white-text" href="/aktuelles/2012-10-10-techfabrik-die-modellagentur-der-web-professionals/">mehr</a>
                </div>
            </div>
        </div>
        <!-- Card End -->


    </div>

@endsection
