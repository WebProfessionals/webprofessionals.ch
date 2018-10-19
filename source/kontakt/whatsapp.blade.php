@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>WhatsApp | Kontakt | Web Professionals</title>

@endsection

{{-- Hero Unit on Top --}}
@section('hero')
    <header class="webpro-hero-image">
        <picture>
            <source media="(max-width: 600px)" srcset="/images/background/web_professionals_023_phone.jpg">
            <img src="/images/background/web_professionals_023.jpg" alt="Web Professionals" title="Web Professionals">
        </picture>
    </header>
    <header class="webpro-hero">
        @include('_partials.herotop')
        <div class="webpro-hero-claim">
            <span class="webpro-hero1">Nichts verpassen</span><br>
            <span class="webpro-hero2">Veranstaltungshinweise via WhatsApp</span><br><br>
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
                'part2'    =>  'WhatsApp'
            ])
            <nav class="webpro-nav-lvl2 hide-on-small-only">
                <a class="webpro-subnav-active" href="/kontakt/whatsapp/">WhatsApp Newsletter</a><br>
            </nav>
        </div>
        <div class="col l7 m6 webpro-right">
            <p>Du willst via WhatsApp über die wichtigsten Aktivitäten der Web Professionals informiert werden? Wir kündigen die Friends-Treffen, unsere Camp-Termine sowie neue Kurse und Lehrgänge mittels WhatsApp Broadcast mit.</p>
            <p>Wie kannst du dich dazu anmelden? Ganz einfach:</p>
            <p>
                <ul>
                    <li><strong>Schritt 1:</strong> Füge unsere Nummer 077 460 38 85 deinen Handy-Kontakten hinzu (ansonsten wird die Nachricht nicht an dich gesendet)</li>
                    <li><strong>Schritt 2:</strong> Sende uns eine WhatsApp Nachricht mit dem Text "Hopp!" und wir fügen dich unserer Broadcast Liste zu.</li>
                </ul>
            </p>
            <p>
                Selbstverständlich kannst du den Dienst auch jederzeit wieder beenden. Teile uns dies einfach mittels einer WhatsApp Nachricht mit.
            </p>

        </div>
    </div>


@endsection
