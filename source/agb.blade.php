@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Web Professionals | Ausbildung | AGB</title>

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
        <div class="col l5 m5 s12 webpro-left">
            @include('_partials.header1', [
                'part1'    =>  'Allgemeine Geschäftsbedingungen',
                'part2'    =>  'AGB'
            ])
        </div>
        <div class="col l7 m6 webpro-right">

            <h2>Anmeldungen</h2>
            <p>
                Sämtliche Anmeldungen sind verbindlich.
            </p>

            <h2>Kursgebühren / Zahlungsfristen</h2>
            <p>
                Die <strong>Kurs- resp. Lehrgangsgebühr</strong> ist bis 30 Tage vor Beginn des Kurses / Lehrgangs zu bezahlen. Bei den Lehrgängen besteht die Möglichkeit zur Teilzahlung. Dabei gelten folgende Teilzahlungsoptionen:
            </p>
            <ul class="webpro-list">
                <li>Web Integrator: 50% bis 30 Tage vor Beginn des Lehrgangs, 50% innert 3 Monaten nach Lehrgangsbeginn</li>
                <li>Web Developer / Web Designer: 25% bis 30 Tage vor Beginn des Lehrgangs, 25 % innert 2 Monaten nach Lehrgangsbeginn, 25 % innert 4 Monaten nach Lehrgangsbeginn, 25% innert 6 Monaten nach Lehrgangsbeginn</li>
            </ul>
            <p>Bearbeitungsgebühr bei Teilzahlung: CHF 10 pro Zahlung.</p>
            <h2>Durchführung</h2>
            <p>
                Für die Kurse und Lehrgänge ist eine minimale Teilnehmerzahl erforderlich. Die definitive Durchführung der Kurse und Lehrgänge wird spätesten 14 Tage vor Kurs-/Lehrgangsbeginn entschieden. Falls der Kurs/Lehrgang nicht stattfinden sollte so werden allfällig bereits bezahlte Gebühren vollumfänglich zurück erstattet.
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

            <h2>Kursbestätigungen</h2>
            <p>
                Beim Besuch von mindestens 80% der Lektionen wird eine Kursbestätigung ausgestellt.
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
