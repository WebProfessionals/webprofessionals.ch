@extends('_layouts.master')

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
                'part1'    =>  'Deine',
                'part2'    =>  'Anmeldung'
            ])
            <nav class="webpro-nav-lvl2 hide-on-small-only">
                <a href="/lehrgaenge/web-integrator/">Web Integrator</a><br>
                <a href="/lehrgaenge/web-developer/">Web Developer</a><br>
                <a href="/lehrgaenge/web-designer/">Web Designer</a>
            </nav>
        </div>
        <div class="col l7 m6 webpro-right">

            <form class="col s12" action="https://formspree.io/info@web-professionals.ch" method="POST">
                <div class="row">
                    <div class="input-field col s12">
                        <select name="lehrgang" multiple>
                            <option value="" disabled selected>Bitte Lehrgang auswählen</option>
                            <option value="Web Integrator, Start Herbst 2016, Grabs SG">Web Integrator, Start Herbst 2016, Grabs SG</option>
                            <option value="Web Integrator, Start Herbst 2016, Rapperswil SG">Web Integrator, Start Herbst 2016, Rapperswil SG</option>
                            <option value="Web Integrator, Start Herbst 2016, Chur GR">Web Integrator, Start Herbst 2016, Chur GR</option>
                            <option value="Web Developer, Start Herbst 2016, Grabs SG">Web Developer, Start Herbst 2016, Grabs SG</option>
                            <option value="Web Developer, Start Herbst 2016, Rapperswil SG">Web Developer, Start Herbst 2016, Rapperswil SG</option>
                            <option value="Web Designer, Start Herbst 2016, Grabs SG">Web Designer, Start Herbst 2016, Grabs SG</option>
                        </select>
                        <label>Ich möchte mich zu folgendem Lehrgang anmelden:</label>
                        <input type="checkbox" id="agb" name="agb" />
                        <label for="agb">Ich bestätige, dass ich die <a href="#">Allgemeinen Geschäftsbedingungen akzeptiere.</a> *</label>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="input-field col s6">
                        <input name="vorname" id="vorname" type="text" class="validate">
                        <label for="vorname">Vorname</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="nachname" id="nachname" type="text" class="validate">
                        <label for="nachname">Nachname</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="strasse" id="strasse" type="text" class="validate">
                        <label for="strasse">Strasse</label>
                    </div>
                </div>
                <div class="hide">
                    <div class="input-field col s12">
                        <input name="_gotcha" id="_gotcha" type="text" class="validate">
                        <label for="strasse">Strasse 2</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input name="plz" id="plz" type="text" class="validate">
                        <label for="plz">PLZ</label>
                    </div>
                    <div class="input-field col s8">
                        <input name="ort" id="ort" type="text" class="validate">
                        <label for="ort">Ort</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="email" id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="geburtstag" id="geburtstag" type="text" class="validate">
                        <label for="strasse">Geburtsdatum</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea name="faktura" id="v" class="materialize-textarea"></textarea>
                        <label for="textarea1">Faktura-Adresse (falls unterschiedlich von obiger Adresse)</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea name="webpraxis" id="v" class="materialize-textarea"></textarea>
                        <label for="textarea1">Web-Praxis</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea name="informatikkenntnisse" id="v" class="materialize-textarea"></textarea>
                        <label for="textarea1">Informatikkenntnisse</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="hidden" name="_next" value="http://localhost:3000/kontakt/danke/" />
                        <input type="hidden" name="_subject" value="Kontakt Anfrage" />
                        <input type="submit" class="waves-effect waves-light btn" id="sendenKontakt" value="absenden">
                    </div>
                </div>


            </form>



        </div>

    </div>
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
