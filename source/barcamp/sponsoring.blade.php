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
                <a href="/barcamp/">Camp</a><br>
            </nav>
            <div class="hide-on-small-and-down">
                <br><br><br>
                Wir danken allen <strong>bisherigen Camp-Sponsoren:</strong>
                <br><br>
                <div class="row">
                    <div class="col s6">
                        <img class="responsive-img" src="/images/barcamp/sponsoren/hostpoint.svg">
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <img class="responsive-img" src="/images/barcamp/sponsoren/adcubum.svg">
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <img class="responsive-img" src="/images/barcamp/sponsoren/frontify.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <img class="responsive-img" src="/images/barcamp/sponsoren/logo_somedia_production_cmyk.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <img class="responsive-img" src="/images/barcamp/sponsoren/viaduct.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <img class="responsive-img" src="/images/barcamp/sponsoren/liip.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <img class="responsive-img" src="/images/barcamp/sponsoren/namics.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col s5">
                        <img class="responsive-img" src="/images/barcamp/sponsoren/hsr.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col s5">
                        <img class="responsive-img" src="/images/barcamp/sponsoren/ibw_sponsoring.gif">
                    </div>
                </div>
                <div class="row">
                    <div class="col s5">
                        <img class="responsive-img" src="/images/barcamp/sponsoren/multidigital.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col s5">
                        <img class="responsive-img" src="/images/barcamp/sponsoren/b_medien_smart_4c.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col s5">
                        <img class="responsive-img" src="/images/barcamp/sponsoren/laederach.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col s5">
                        <img class="responsive-img" src="/images/barcamp/sponsoren/rii-seez-net.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col s5">
                        <img class="responsive-img" src="/images/barcamp/sponsoren/tomschaepper.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col s5">
                        <img class="responsive-img" src="/images/barcamp/sponsoren/exigo_claim.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col s5">
                        <img class="responsive-img" src="/images/barcamp/sponsoren/dp-Druckpartner.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="col l7 m6 webpro-right">
            <p>Damit wir diesen Anlass durchführen können sind wir auf Unterstützung durch Sponsoring angewiesen. Wir würden uns sehr freuen, wenn Ihr Unternehmen das Camp unterstützen würde und danken Ihnen für Ihre Kontaktaufnahme sowie Ihr Engagement für ein zukunftsweisendes Ausbildungsangebot in der Region Ostschweiz.</p>
            <p><a href="/files/hackathon2_sponsoring.pdf" target="_blank">Sponsoring PDF</a></p>
            <h2 class="webpro">"Heart for Good"</h2>
            <p><strong>Leistungen:</strong></p>
            <ul class="webpro-list">
                <li>Prominente Platzierung des Logos auf der Webseite, den Drucksachen sowie am Anlass selbst</li>
                <li>Erwähnung in öffentlichen Meldungen (Twitter, Facebook, Pressemeldungen)</li>
                <li>Logo auf den Welcome Slides, Erwähnung am Anlass, Logo oder Video in Animation auf Screens während dem gesamten Anlass, namentliche Verdankung vor den Teilnehmern bei Eröffnung</li>
                <li>Möglichkeit zur Platzierung von bis zu zwei Rollout Display sowie weiterem Werbematerial am Anlass</li>
                <li>kostenlose Teilnahme von 2 Personen am Camp</li>
            </ul>
            <p><strong>Beitrag:</strong> CHF 1'000</p>
            <br>
            <h2 class="webpro">"Food for Good"</h2>
            <p><strong>Leistungen:</strong></p>
            <ul class="webpro-list">
                <li>Platzierung des Logos auf der Webseite, den Drucksachen sowie am Anlass selbst</li>
                <li>Möglichkeit zur Platzierung von einem Rollout Display am Anlass</li>
                <li>kostenlose Teilnahme von 1 Person am Camp</li>
            </ul>
            <p><strong>Beitrag:</strong> CHF 500</p>
            <br>
            <h2 class="webpro">"Drink for Good"</h2>
            <p><strong>Leistungen:</strong></p>
            <ul class="webpro-list">
                <li>Platzierung des Logos auf der Webseite, den Drucksachen sowie am Anlass selbst</li>
            </ul>
            <p><strong>Beitrag:</strong> CHF 300</p>            <br>
            <h2 class="webpro">"Coffee for Good"</h2>
            <p><strong>Leistungen:</strong></p>
            <ul class="webpro-list">
                <li>Erwähnung auf der Webseite sowie am Anlass selbst</li>
            </ul>
            <p><strong>Beitrag:</strong> CHF 200</p>
            <br>
        </div>
    </div>
@endsection
