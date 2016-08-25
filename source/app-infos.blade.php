@extends('_layouts.mobile-app')

{{-- Header --}}
@section('header')
    <title>Veranstaltungen | Web Professionals</title>
@endsection

{{-- Main Content --}}
@section('body')

    <div class="row">
        <div class="s12">
            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header"><i class="material-icons">alarm</i><strong>AUG</strong>16: letzte Plätze Herbst-Lehrgänge 2016</div>
                    <div class="collapsible-body"><p>Wer noch mit dabei sein will, kann sich <a href="https://www.web-professionals.ch/anmeldung">jetzt noch einen Platz sichern</a>.</p></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">done</i><strong>AUG</strong>16: neue Webseite online</div>
                    <div class="collapsible-body"><p>Besuch unsere <a href="https://www.web-professionals.ch/">neue Webseite</a></p></div>
                </li>
            </ul>
        </div>
    </div>

@endsection
