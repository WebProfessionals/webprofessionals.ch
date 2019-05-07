@extends('_layouts.master')

{{-- Scripts Header --}}
@section('scripts-header')
    <script type="text/javascript" src="https://cdn.emailjs.com/sdk/2.3.2/email.min.js"></script>
    <script type="text/javascript">
      (function(){
        emailjs.init("user_oWoIOHJSeCN5VY2mEDlJo");
      })();
    </script>
@endsection

{{-- Header --}}
@section('header')
    <title>Anmeldung Lehrgänge | Web Professionals</title>
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
            <!-- <a class="waves-effect waves-light btn webpro-red webpro-hero-button hide-on-small-only">Jetzt informieren</a> -->
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
        <div class="col l5 m6 s12 webpro-left">
            @include('_partials.header1', [
                'part1'    =>  'Anmeldung',
                'part2'    =>  'Lehrgänge'
            ])
        </div>
        <div class="col l7 m6 webpro-right">

            <div id="anmeldung-step1">
                <h2>Schritt 1/3: Für welchen Lehrgang möchtest Du Dich anmelden?</h2>
                <div class="row">
                    <div class="col s12 m12">
                        <div class="card grey darken-3 hoverable webpro-clickable-card-no-redirect z-depth-1 js-anmeldung-step1" data-lehrgang="Web Integrator">
                            <div class="card-content white-text">
                                <span class="card-title">Web Integrator (Basislehrgang)</span>
                                <p>Standorte: Grabs, St.Gallen, Chur, Rapperswil</p>
                                <p>Nächste Durchführung: November 2019 - März 2020</p>
                            </div>
                            <div class="card-action webpro-green">
                                <span class="white-text">weiter zur Auswahl des Standorts ></span>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m12">
                        <div class="card grey darken-3 hoverable webpro-clickable-card-no-redirect z-depth-1 js-anmeldung-step1" data-lehrgang="Web Developer">
                            <div class="card-content white-text">
                                <span class="card-title">Web Developer (Vertiefungslehrgang)</span>
                                <p>Standorte: Grabs, St.Gallen, Rapperswil</p>
                                <p>Nächste Durchführung: Herbst 2019 - Herbst 2020</p>
                            </div>
                            <div class="card-action webpro-green">
                                <span class="white-text">weiter zur Auswahl des Standorts ></span>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m12">
                        <div class="card grey darken-3 hoverable webpro-clickable-card-no-redirect z-depth-1 js-anmeldung-step1" data-lehrgang="Web Designer">
                            <div class="card-content white-text">
                                <span class="card-title">Web Designer (Vertiefungslehrgang)</span>
                                <p>Standorte: Grabs oder St.Gallen</p>
                                <p>Nächste Durchführung: Herbst 2019 - Herbst 2020</p>
                            </div>
                            <div class="card-action webpro-green">
                                <span class="white-text">weiter zur Auswahl des Standorts ></span>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m12">
                        <div class="card grey darken-3 hoverable webpro-clickable-card-no-redirect z-depth-1 js-anmeldung-step1" data-lehrgang="Master Class">
                            <div class="card-content white-text">
                                <span class="card-title">Master Class (Vertiefungslehrgang)</span>
                                <p>Standort: Grabs oder St.Gallen</p>
                                <p>Nächste Durchführung: Herbst 2019 - Herbst 2020</p>
                            </div>
                            <div class="card-action webpro-green">
                                <span class="white-text">weiter zur Auswahl des Standorts ></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="anmeldung-step2" class="card-invisible">
                <h2>Schritt 2/3: Für welchen Standort möchtest Du Dich anmelden?</h2>
                <div class="row">
                    <div class="col s12 m12" id="js-anmeldung-step2-grabs">
                        <div class="card grey darken-3 hoverable webpro-clickable-card-no-redirect z-depth-1 js-anmeldung-step2" data-standort="Grabs">
                            <div class="card-content white-text">
                                <span class="card-title">Grabs SG</span>
                                <p>Fabrikstrasse 24, 9472 Grabs</p>
                                <p>Freitag Abend, 18:15 Uhr bis 21:30 Uhr, Samstag Vormittag 09:00 bis 12:15 Uhr</p>
                            </div>
                            <div class="card-action webpro-green">
                                <span class="white-text">weiter ></span>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m12" id="js-anmeldung-step2-stgallen">
                        <div class="card grey darken-3 hoverable webpro-clickable-card-no-redirect z-depth-1 js-anmeldung-step2" data-standort="St.Gallen">
                            <div class="card-content white-text">
                                <span class="card-title">St.Gallen</span>
                                <p>Fabrikstrasse 24, 9472 Grabs</p>
                                <p>Freitag Abend, 18:15 Uhr bis 21:30 Uhr, Samstag Vormittag 09:00 bis 12:15 Uhr</p>
                            </div>
                            <div class="card-action webpro-green">
                                <span class="white-text">weiter ></span>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m12" id="js-anmeldung-step2-chur">
                        <div class="card grey darken-3 hoverable webpro-clickable-card-no-redirect z-depth-1 js-anmeldung-step2" data-standort="Chur">
                            <div class="card-content white-text">
                                <span class="card-title">Chur</span>
                                <p>Fabrikstrasse 24, 9472 Grabs</p>
                                <p>Freitag Abend, 18:15 Uhr bis 21:30 Uhr, Samstag Vormittag 09:00 bis 12:15 Uhr</p>
                            </div>
                            <div class="card-action webpro-green">
                                <span class="white-text">weiter ></span>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m12" id="js-anmeldung-step2-rapperswil">
                        <div class="card grey darken-3 hoverable webpro-clickable-card-no-redirect z-depth-1 js-anmeldung-step2" data-standort="Rapperswil">
                            <div class="card-content white-text">
                                <span class="card-title">Rapperswil</span>
                                <p>Fabrikstrasse 24, 9472 Grabs</p>
                                <p>Freitag Abend, 18:15 Uhr bis 21:30 Uhr, Samstag Vormittag 09:00 bis 12:15 Uhr</p>
                            </div>
                            <div class="card-action webpro-green">
                                <span class="white-text">weiter ></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div id="anmeldung-step3" class="card-invisible">
                <h2>Schritt 3/3: Alternative Standorte und Adresse</h2>
                <p>
                    <strong>Wichtiger Hinweis:</strong>
                    Die Lehrgänge werden ab acht Teilnehmern durchgeführt. Damit wir planen können - und du sicher an einem unserer Lehrgänge teilnehmen kannst - bitten wir Dich uns anzugeben, welche alternativen Standorte für dich ebenfalls in Frage kommen.
                    Eine Einschreibung an einen der angegebenen alternativen Standorte erfolgt jedoch erst nach individueller Absprache (keine rechtlich bindende Anmeldung für alternative Standorte).
                </p>
                <form id="anmeldung-form">
                    @include('_partials.anmeldung-formular-js')
                </form>
            </div>

            <div id="anmeldung-processing" class="card-invisible">
                <h2>Bitte warten...</h2>
                <p>
                    Deine Anmeldung wird übermittelt...
                </p>
            </div>

            <div id="anmeldung-ok" class="card-invisible">
                <h2>Herzlichen Dank für deine Anmeldung!</h2>
                <p>
                    Du erhälst gleich eine Anmeldebestätigung per E-Mail (bitte zur Sicherheit noch im Spam-Folder nachsehen). Sobald der Stundenplan definitiv feststeht, senden wir dir diesen gemeinsam mit der schriftlichen Anmeldebestätigung per Post zu. Wir freuen uns, dich bei den Web Professionals begrüssen zu dürfen!
                </p>
            </div>

            <div id="anmeldung-error" class="card-invisible">
                <h2>Ups!</h2>
                <p>Bei der Anmeldung ist ein Fehler aufgetreten. Bitte versuche es nochmals oder wende dich an info@web-professionals.ch</p>
            </div>



        </div>

    </div>
    <br><br><br><br><br><br><br><br><br>&nbsp;
@endsection

@section('subnavmobile')
    <!--
    <h2 class="hide-on-med-and-up">Lehrgänge:</h2>
    <div class="collection webpro hide-on-med-and-up">
        <a href="/lehrgaenge/web-integrator/" class="collection-item webpro-green white-text">Web Integrator</a>
        <a href="/lehrgaenge/web-developer/" class="collection-item webpro-green white-text">Web Developer</a>
        <a href="/lehrgaenge/web-designer/" class="collection-item webpro-green white-text">Web Designer</a>
    </div>
    -->
@endsection

{{-- Scripts Footer --}}
@section('scripts-footer')
    <script src="/js/anmeldung.js"></script>
@endsection
