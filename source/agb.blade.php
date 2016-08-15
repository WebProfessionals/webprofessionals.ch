@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Web Professionals | Ausbildung | AGB</title>
    <meta name="description" content="Die Ausbildung für angehende Web Profis ermöglicht Dir einen erfolgreichen Berufsstart in die Online-Welt! Initiiert und getragen durch führende Internet-Agenturen der Ostschweiz.">
@endsection

{{-- Hero Unit on Top --}}
@section('hero')
    <header class="webpro-hero-image">
        <picture>
            <source media="(max-width: 600px)" srcset="/images/background/web_professionals_034_phone.jpg">
            <img src="/images/background/web_professionals_034.jpg">
        </picture>
    </header>
    <header class="webpro-hero">
        @include('_partials.herotop')
        <div class="webpro-hero-claim">
            <span class="webpro-hero1">Gestalte das Web</span><br>
            <span class="webpro-hero2">Die Ausbildung für angehende Webprofis</span><br><br>
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
        <div class="col l5 m5 s12">
            @include('_partials.header1', [
                'part1'    =>  'Allgemeine Geschäftsbedingungen',
                'part2'    =>  'AGB'
            ])
        </div>
        <div class="col l7 m6">

            <h2>Anmeldungen</h2>
            <p>
                Sämtliche Anmeldungen sind verbindlich.
            </p>

            <h2>Kursgeld</h2>
            <p>
                Die Kursgebühr ist innert 30 Tagen nach Erhalt der Rechnung zu bezahlen. Bei den Lehrgängen besteht die Möglichkeit zur Teilzahlung. Dabei gelten folgende Teilzahlungsoptionen:
           </p>
            <ul>
                <li>Web Integrator: 50% innert 30 Tagen nach Erhalt der Rechnung, 50% innert 3 Monaten nach Lehrgangsbeginn</li>
                <li>Web Developer / Web Designer: 25%  innert 30 Tagen nach Erhalt der Rechnung, 25 % innert 2 Monaten nach Lehrgangsbeginn, 25 % innert 4 Monaten nach Lehrgangsbeginn, 25% innert 6 Monaten nach Lehrgangsbeginn</li>
            </ul>

            <h2>Kursbestätigungen</h2>
            <p>
                Beim Besuch von mindestens 80% der Lektionen wird eine Kursbestätigung ausgestellt.
            </p>

            <h2>Abmeldungen</h2>
            <p>
                Abmeldungen müssen schriftlich erfolgen und sind kostenlos, sofern sie nicht später als 8 Wochen vor Lehrgangsbeginn eintreffen. Bei verspäteter Abmeldung werden folgende Kosten verrechnet:<br>
                <br>
                Abmeldung bis Beginn: 80 % des Kursgeldes für den betreffenden Lehrgang<br>
                Abmeldung nach Beginn: Die ganzen Kosten des entsprechenden Lehrgangs.<br>
                <br>
                Bei vorzeitigem Austritt erfolgt keine Rückzahlung oder Stornierung der Semesterkosten. Mit der Anmeldung erklärt sich die teilnehmende Person mit den Gebühren einverstanden.
            </p>

            <h2>Gerichtsstand</h2>
            <p>Als Gerichtsstand gilt Grabs SG</p>

            <h2>Adresse</h2>
            <p>
                Web Professionals<br>
                Mühlbachstrasse 11a<br>
                9472 Grabs
            </p>

            <h2>Geschäftsleitung</h2>
            <p>
                Rolf Eggenberger, Lehrgangsleitung<br>
                Martina Heeb, Lehrgansleitung Web Designer<br>
                Linus Schumacher<br>
                Andreas Kemp<br>
            </p>
        </div>
    </div>

@endsection
