@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Camp Sponsoring | Web Professionals</title>

@endsection

{{-- Hero Unit on Top --}}
@section('hero')
    <header class="webpro-hero-image">
        <picture>
            <source media="(max-width: 600px)" srcset="/images/background/web_professionals_102_phone.jpg">
            <img src="/images/background/web_professionals_102.jpg" alt="Web Professionals" title="Web Professionals">>
        </picture>
    </header>
    <header class="webpro-hero">
        @include('_partials.herotop')
        <div class="webpro-hero-claim">
            <span class="webpro-hero1">Helft mit</span><br>
            <span class="webpro-hero2">Camps brauchen Eure Unterstützung!</span><br><br>
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
        <a href="/lehrgaenge/web-integrator/" class="collection-item">Web Integrator</a>
        <a href="/lehrgaenge/web-developer/" class="collection-item">Web Developer</a>
        <a href="/lehrgaenge/web-designer/" class="collection-item">Web Designer</a>
    </div>
@endsection

{{-- Main Content --}}
@section('body')
    <div class="row">
        <div class="col l5 m6 s12 webpro-left">
            @include('_partials.header1', [
                'part1'    =>  'Barcamp',
                'part2'    =>  'Sponsoring'
            ])
            <nav class="webpro-nav-lvl2 hide-on-small-only">
                <a href="/camp/">Camp</a><br>
            </nav>
            <div class="hide-on-small-and-down">
                <br><br><br>
                Wir danken allen <strong>bisherigen Camp-Sponsoren:</strong>
                <br><br>
                <div class="row">
                    <div class="col s6">
                        <img class="responsive-img" src="/images/camp/sponsoren/logo_somedia_production_cmyk.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <img class="responsive-img" src="/images/camp/sponsoren/namics.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <img class="responsive-img" src="/images/camp/sponsoren/multidigital.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <img class="responsive-img" src="/images/camp/sponsoren/b_medien_smart_4c.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <img class="responsive-img" src="/images/camp/sponsoren/rii-seez-net.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <img class="responsive-img" src="/images/camp/sponsoren/exigo_claim.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <img class="responsive-img" src="/images/camp/sponsoren/dp-Druckpartner.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="col l7 m6 webpro-right">
            <p>Damit wir diesen Anlass durchführen können sind wir auf Unterstützung durch Sponsoring angewiesen. Wir würden uns sehr freuen, wenn Ihr Unternehmen das Camp unterstützen würde und danken Ihnen für Ihre Kontaktaufnahme sowie Ihr Engagement für ein zukunftsweisendes Ausbildungsangebot in der Region Ostschweiz.</p>
            <h2 class="webpro">Haupt-Sponsor</h2>
            <p><strong>Leistungen:</strong></p>
            <ul class="webpro-list">
                <li>Prominente Platzierung des Logos auf der Webseite, den Drucksachen sowie am Anlass selbst</li>
                <li>Erwähnung in öffentlichen Meldungen (Twitter, Facebook, Pressemeldungen), besondere Erwähnung am Anlass</li>
                <li>Möglichkeit zur Platzierung von bis zu zwei Rollout Display sowie weiterem Werbematerial am Anlass</li>
                <li>kostenlose Teilnahme von 2 Personen am Camp</li>
            </ul>
            <p><strong>Beitrag:</strong> CHF 1'000</p>
            <br>
            <h2 class="webpro">Essens-Sponsor</h2>
            <p><strong>Leistungen:</strong></p>
            <ul class="webpro-list">
                <li>Platzierung des Logos auf der Webseite, den Drucksachen sowie am Anlass selbst</li>
                <li>Möglichkeit zur Platzierung von einem Rollout Display am Anlass</li>
                <li>kostenlose Teilnahme von 1 Person am Camp</li>
            </ul>
            <p><strong>Beitrag:</strong> CHF 400</p>
            <br>
            <h2 class="webpro">Getränke-Sponsor</h2>
            <p><strong>Leistungen:</strong></p>
            <ul class="webpro-list">
                <li>Platzierung des Logos auf der Webseite, den Drucksachen sowie am Anlass selbst</li>
            </ul>
            <p><strong>Beitrag:</strong> CHF 300</p>            <br>
            <h2 class="webpro">Kaffee-Sponsor</h2>
            <p><strong>Leistungen:</strong></p>
            <ul class="webpro-list">
                <li>Erwähnung auf der Webseite sowie am Anlass selbst</li>
            </ul>
            <p><strong>Beitrag:</strong> CHF 200</p>
            <br>
        </div>
    </div>
@endsection
