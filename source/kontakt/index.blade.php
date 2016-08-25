@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Kontakt | Web Professionals</title>

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
            <!-- <a class="waves-effect waves-light btn webpro-red">Jetzt informieren</a> -->
        </div>
    </header>
@endsection

{{-- Main Navigation --}}
@section('navigation')
    @include('_partials.navigation', [
        'nav7status'    =>  ' active'
    ])
@endsection

@section('subnavmobile')

@endsection

{{-- Main Content --}}
@section('body')
    <div class="row">
        <div class="col l5 m6 s12 webpro-left">
            @include('_partials.header1', [
                'part1'    =>  'Web Professionals',
                'part2'    =>  'Kontakt'
            ])
            <nav class="webpro-nav-lvl2 hide-on-small-only">

            </nav>
        </div>
        <div class="col l7 m6 webpro-right">
            <p>Bei Fragen zu unseren Lehrgängen, Kursen und Veranstaltungen kannst Du uns unter folgender Adresse erreichen:</p>
            <p>
                <strong>Web Professionals</strong><br>
                Techfabrik<br>
                Mühlbachstrasse 11a<br>
                9472 Grabs
            </p>
            <p>
                <i class="material-icons tiny">email</i>&nbsp&nbsp info[at]web-professionals.ch<br>
                <i class="material-icons tiny">phone</i>&nbsp&nbsp 077
            </p>
            <blockquote>
                Wieso eine Mobil-Nummer? Erstens sind wir nicht immer in der Techfabrik sondern oft auch unterwegs. Und zweitens kannst du uns damit auch jederzeit via WhatsApp erreichen :-)
            </blockquote>

            <p>…oder Du füllst untenstehendes Kontaktformular aus und wir melden uns bei Dir.</p>
            <br>

            <div class="row">
                <form class="col s12" action="https://formspree.io/rolf@web-professionals.ch" method="POST">
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
                            <textarea name="nachricht" id="v" class="materialize-textarea"></textarea>
                            <label for="textarea1">Nachricht</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input type="hidden" name="_next" value="https://web-professionals.ch/kontakt/danke/" />
                            <input type="hidden" name="_subject" value="Kontakt Anfrage" />
                            <input type="submit" class="waves-effect waves-light btn" id="sendenKontakt" value="Absenden">
                        </div>
                    </div>


                </form>
            </div>

        </div>
    </div>


@endsection
