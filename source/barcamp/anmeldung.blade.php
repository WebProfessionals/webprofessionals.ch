@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Barcamp | Web Professionals</title>
@endsection

{{-- Hero Unit on Top --}}
@section('hero')
    <header class="webpro-hero-image">
        <picture>
            <source media="(max-width: 600px)" srcset="/images/background/web_professionals_101_phone.jpg">
            <img src="/images/background/web_professionals_101.jpg" alt="Web Professionals" title="Web Professionals">
        </picture>
    </header>
    <header class="webpro-hero">
        @include('_partials.herotop')
        <div class="webpro-hero-claim">
            <span class="webpro-hero1">Mehr als nur Schule</span><br>
            <span class="webpro-hero2">Barcamps für Praxiswissen</span><br><br>
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
        <a href="/barcamp/lehrgaenge/anmeldung/" class="collection-item">Anmeldung</a>
        <a href="/barcamp/sponsoring/" class="collection-item">Sponsoring</a>
    </div>
@endsection

{{-- Main Content --}}
@section('body')
    <div class="row">
        <div class="col l5 m6 s12 webpro-left">
            @include('_partials.header1', [
                'part1'    =>  'Web Professionals',
                'part2'    =>  'Barcamp'
            ])
            <nav class="webpro-nav-lvl2 hide-on-small-only">
                <a href="/barcamp/lehrgaenge/anmeldung/">Anmeldung</a><br>
                <a href="/barcamp/sponsoring/">Sponsoring</a><br>
            </nav>
        </div>
        <div class="col l7 m6 webpro-right">

            <form class="col s12" action="https://formspree.io/rolf@web-professionals.ch" method="POST">
                    <div class="row">
                        <div class="col s12"><strong>Ja, ich lasse mir den 4. Hackathon vom 3. August 2019 natürlich nicht entgehen und melde mich hiermit an.</strong></div>
                    </div>
<!--

                    <div class="row">
                        <div class="col s12">
                            <input type="checkbox" id="camper" name="camper" />
                            <label for="camper">Ich werde im Krempel campieren.</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <input type="checkbox" id="samstag" name="samstag" />
                            <label for="samstag">Ich kann nur am Samstag teilnehmen.</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12">
                            <input type="checkbox" id="tshirt" name="tshirt" />
                            <label for="tshirt">Ich möchte eines der exklusiven Hackathon T-Shirts bestellen (CHF 28/Stück).</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <label for="tshirtsize">Grösse</label>
                            <select id="tshirtsize" name="tshirtsize">
                                <option value="keines">kein T-Shirt</option>
                                <option value="XS">XS</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                            <label for="hotel">Grösse</label>
                        </div>
                    </div>-->

                    <div class="row">
                        <div class="input-field col s6">
                            <input name="vorname" id="vorname" type="text" class="validate" required>
                            <label for="vorname">Vorname</label>
                        </div>
                        <div class="input-field col s6">
                            <input name="nachname" id="nachname" type="text" class="validate" required>
                            <label for="nachname">Nachname</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="strasse" id="strasse" type="text" class="validate" required>
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
                            <input name="plz" id="plz" type="text" class="validate" required>
                            <label for="plz">PLZ</label>
                        </div>
                        <div class="input-field col s8">
                            <input name="ort" id="ort" type="text" class="validate" required>
                            <label for="ort">Ort</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="email" id="email" type="email" class="validate" required>
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
                            <input name="beruf" id="beruf" type="text" class="validate">
                            <label for="beruf">Berufsbezeichnung</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="arbeitgeber" id="arbeitgeber" type="text" class="validate">
                            <label for="arbeitgeber">Arbeitgeber</label>
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
                            <input type="hidden" name="_next" value="https://web-professionals.ch/barcamp/anmeldung-danke/" />
                            <input type="hidden" name="_subject" value="Anmeldung Hackathon #2" />
                            <input type="submit" class="waves-effect waves-light btn" id="sendenKontakt" value="verbindlich anmelden">
                        </div>
                    </div>
                </form>
        </div>
    </div>
@endsection

@section('subnavmobile')

@endsection
