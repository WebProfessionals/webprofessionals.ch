@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Anmeldung Kurse | Web Professionals</title>

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
            <span class="webpro-hero1">Jetzt erst recht!</span><br>
            <span class="webpro-hero2">Spezialisierungen</span><br><br>
            <!-- <a class="waves-effect waves-light btn webpro-red">Jetzt informieren</a> -->
        </div>
    </header>
@endsection

{{-- Main Navigation --}}
@section('navigation')
    @include('_partials.navigation', [
        'nav3status'    =>  ' active'
    ])
@endsection

{{-- Main Content --}}
@section('body')
    <div class="row">
        <div class="col l5 m6 s12 webpro-left">
            @include('_partials.header1', [
                'part1'    =>  'Weiterbildung und',
                'part2'    =>  'Kurse'
            ])
            <nav class="webpro-nav-lvl2 hide-on-small-only">
                <a href="/kurse/wordpress-themes-selber-programmieren/">WordPress Themes programmieren</a><br>
                <a href="/kurse/auffrischungskurs-html-css/">HTML/CSS Auffrischung und Vertiefung</a><br>
                <a href="/kurse/hands-on-workshop-polymer-project/">Hands-on Workshop Polymer</a><br>
                <a href="/kurse/einfuehrung-in-laravel/">Einführung in Laravel</a><br>
                <a href="/kurse/eigene-stock-fotos-erstellen/">eigene Stock Fotos erstellen</a><br>
            </nav>
        </div>
        <div class="col l7 m6 webpro-right">
            <form class="col s12" action="/anmeldung/kurse/danke.php" method="POST">
                <div class="row">
                    <div class="input-field col s12">
                        <select name="lehrgang" multiple>
                            <option value="" disabled selected>Bitte Kurs auswählen</option>
                            <option value="WordPress Themes programmieren, Start 31.05.17, Grabs SG">WordPress Themes programmieren, 31.05.17, Grabs SG</option>
                            <option value="HTML/CSS Auffrischung, Grabs SG">HTML/CSS Auffrischung, Mittwochs, 01.03.17-05.04.17, Grabs SG</option>
                            <option value="Hands on workshop Polymer, 8./15. März 2017, Grabs SG">Hands on workshop Polymer, 8./15. März 2017, Grabs SG</option>
                            <option value="Einführung in Laravel, 14.3.17, Grabs SG">Einführung in Laravel, 14.3.17, Grabs SG</option>
                            <option value="eigene Stock Fotos erstellen, 16.3.17, Grabs SG">eigene Stock Fotos erstellen, 16.3.17, Grabs SG</option>
                        </select>
                        <label>Ich möchte mich zu folgendem Kurs anmelden:</label>
                        <input type="checkbox" id="agb" name="agb" required />
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
                        <select name="referal" multiple>
                            <option value="" disabled selected>Freunde, Google, Facebook oder Inserat?</option>
                            <option value="Empfehlung">persönliche Empfehlung</option>
                            <option value="Google">Google Suche</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Inserat">Inserat</option>
                            <option value="APG">APG Plakat</option>
                            <option value="anderes">anderes</option>
                        </select>
                        <label>Wie bist du auf uns aufmerksam geworden?</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="hidden" name="_next" value="https://web-professionals.ch/kurse/anmeldung-danke/" />
                        <input type="hidden" name="_subject" value="Anmeldung Kurs" />
                        <input type="submit" class="waves-effect waves-light btn" id="sendenKontakt" value="verbindlich anmelden">
                    </div>
                </div>

            </form>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br>&nbsp;
@endsection

@section('subnavmobile')

@endsection
