@extends('_layouts.mobile-app')

{{-- Header --}}
@section('header')
    <title>Veranstaltungen | Web Professionals</title>
@endsection

{{-- Main Content --}}
@section('body')

    <div class="row">
        <div class="s12">

            <p>Für weitere Infos anklicken...</p>
            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header"><i class="material-icons right">alarm</i><strong>11</strong>/2016<br> Ankündigung Hackaton #2</div>
                    <div class="collapsible-body"><p>Am 11. und 12. März findet der 2. Web Professionals Hackaton statt. Weitere Informationern folgen noch - bis dahin schon einmal den Termin reservieren :-)</p></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons right">done</i><strong>08</strong>/2016<br> letzte Plätze Herbst-Lehrgänge 2016</div>
                    <div class="collapsible-body"><p>Wer noch mit dabei sein will, kann sich <a href="https://www.web-professionals.ch/anmeldung">jetzt noch einen Platz sichern</a>.</p></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons right">done</i><strong>08</strong>/2016<br> neue Webseite online</div>
                    <div class="collapsible-body"><p>Besuch unsere <a href="https://www.web-professionals.ch/">neue Webseite</a></p></div>
                </li>
            </ul>
        </div>
    </div>

@endsection
