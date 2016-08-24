@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Veranstaltungen | Web Professionals</title>
    <meta name="description" content="Bleib mit unseren regelmässigen öffentlichen Veranstaltungen auf dem Laufenden. Infoanlässe, Referate, Barcamps, Kurse und vielem mehr.">
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
            <span class="webpro-hero1">Bleib dabei</span><br>
            <span class="webpro-hero2">Infoanlässe, Friends und Co.</span><br><br>
            <a class="waves-effect waves-light btn webpro-red" href="/lehrgaenge/">Jetzt informieren</a>
        </div>
    </header>
@endsection

{{-- Main Navigation --}}
@section('navigation')
    @include('_partials.navigation', [
        'nav4status'    =>  ' active'
    ])
@endsection

{{-- Main Content --}}
@section('body')
    <div class="row">
        <div class="col l5 m6 webpro-left">
            @include('_partials.header1', [
                'part1'    =>  'Veranstaltungen',
                'part2'    =>  'Termine'
            ])
            <nav class="webpro-nav-lvl2">
                &nbsp;
            </nav>
        </div>
        <section class="col l7 m6 webpro-right">
            <p>Begleitend zu unseren Lehrgängen finden im Rahmen der Ausbildung regelmässig öffentliche Veranstaltungen für Web Profis und Interessierte statt. Diese sind für jedermann zugänglich.</p>
            <p><strong>Aktueller Hinweis:</strong> bist du während den Daten unserer Infoanlässe abwesend? Dann nimm doch <a href="/kontakt/">mit uns Kontakt auf</a>. Gerne vereinbaren wir ein persönliches Beratungsgespräch.</p>
        </section>
    </div>

    <div class="row">
        <div class="col l4 m6 s12">
            <div class="card z-depth-2 webpro-green small" itemscope itemtype="http://schema.org/Event">
                <div class="card-stacked">
                    <div class="card-content white-text">
                            <i class="material-icons right">info_outline</i>
                            <span class="card-events-day">Mittwoch</span><br>
                            <span class="card-events-date" itemprop="startDate" content="2016-08-24T19:00">24. August 2016</span><br>
                            19:00 - 20:00 Uhr<br>
                            <br>
                            <span class="card-events-title" itemprop="name"><strong>Informationsanlass in Grabs SG</strong></span><br>
                            <span class="card-events-title" itemprop="description">Vorstellung der Kurse und Lehrgänge.</span><br>
                            <br>
                        @include('_partials.veranstaltungen.techfabrik')
                    </div>
                    <div class="card-action">
                        <a class="white-text" itemprop="url" href="https://www.facebook.com/events/1771274006420996/" target="_blank">Facebook Event</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card z-depth-2 webpro-green small" itemscope itemtype="http://schema.org/Event">
                <div class="card-stacked">
                    <div class="card-content white-text">
                        <i class="material-icons right">info_outline</i>
                        <span class="card-events-day">Montag</span><br>
                        <span class="card-events-date" itemprop="startDate" content="2016-09-05T19:00">5. September 2016</span><br>
                        19:00 - 20:00 Uhr<br>
                        <br>
                        <span class="card-events-title" itemprop="name"><strong>Informationsanlass in Grabs SG</strong></span><br>
                        <span class="card-events-title" itemprop="description">Vorstellung der Kurse und Lehrgänge.</span><br>
                        <br>
                        @include('_partials.veranstaltungen.techfabrik')
                    </div>
                    <div class="card-action">
                        <a class="white-text" itemprop="url" href="https://www.facebook.com/events/1771274006420996/" target="_blank">Facebook Event</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card z-depth-2 webpro-green small" itemscope itemtype="http://schema.org/Event">
                <div class="card-stacked">
                    <div class="card-content white-text">
                        <i class="material-icons right">info_outline</i>
                        <span class="card-events-day">Dienstag</span><br>
                        <span class="card-events-date" itemprop="startDate" content="2016-09-06T19:00">6. September 2016</span><br>
                        19:00 - 20:00 Uhr<br>
                        <br>
                        <span class="card-events-title" itemprop="name"><strong>Informationsanlass in Sargans SG</strong></span><br>
                        <span class="card-events-title" itemprop="description">Zimmer 406.</span><br>
                        <br>
                        @include('_partials.veranstaltungen.ibwsargans')
                    </div>
                    <div class="card-action">
                        <a class="white-text" itemprop="url" href="https://www.facebook.com/events/1771274006420996/" target="_blank">Facebook Event</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card z-depth-2 webpro-green small" itemscope itemtype="http://schema.org/Event">
                <div class="card-stacked">
                    <div class="card-content white-text">
                        <i class="material-icons right">info_outline</i>
                        <span class="card-events-day">Mittwoch</span><br>
                        <span class="card-events-date" itemprop="startDate" content="2016-09-07T19:00">7. September 2016</span><br>
                        19:00 - 20:00 Uhr<br>
                        <br>
                        <span class="card-events-title" itemprop="name"><strong>Informationsanlass in Rapperswil SG</strong></span><br>
                        <span class="card-events-title" itemprop="description">Zimmer 1.267</span><br>
                        <br>
                        @include('_partials.veranstaltungen.hsr')
                    </div>
                    <div class="card-action">
                        <a class="white-text" itemprop="url" href="https://www.facebook.com/events/1771274006420996/" target="_blank">Facebook Event</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card z-depth-2 webpro-green small" itemscope itemtype="http://schema.org/Event">
                <div class="card-stacked">
                    <div class="card-content white-text">
                        <i class="material-icons right">info_outline</i>
                        <span class="card-events-day">Donnerstag</span><br>
                        <span class="card-events-date" itemprop="startDate" content="2016-09-08T19:00">08. September 2016</span><br>
                        19:00 - 20:00 Uhr<br>
                        <br>
                        <span class="card-events-title" itemprop="name"><strong>Informationsanlass in Chur GR</strong></span><br>
                        <span class="card-events-title" itemprop="description">Zimmer 307</span><br>
                        <br>
                        @include('_partials.veranstaltungen.ibwchur')
                    </div>
                    <div class="card-action">
                        <a class="white-text" itemprop="url" href="https://www.facebook.com/events/1771274006420996/" target="_blank">Facebook Event</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card z-depth-2 webpro-green small" itemscope itemtype="http://schema.org/Event">
                <div class="card-stacked">
                    <div class="card-content white-text">
                        <i class="material-icons right">info_outline</i>
                        <span class="card-events-day">Dienstag</span><br>
                        <span class="card-events-date" itemprop="startDate" content="2016-09-13T19:00">13. September 2016</span><br>
                        19:00 - 20:00 Uhr<br>
                        <br>
                        <span class="card-events-title" itemprop="name"><strong>Informationsanlass in Chur GR</strong></span><br>
                        <span class="card-events-title" itemprop="description">Zimmer 306</span><br>
                        <br>
                        @include('_partials.veranstaltungen.ibwchur')
                    </div>
                    <div class="card-action">
                        <a class="white-text" itemprop="url" href="https://www.facebook.com/events/1771274006420996/" target="_blank">Facebook Event</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card z-depth-2 webpro-green small" itemscope itemtype="http://schema.org/Event">
                <div class="card-stacked">
                    <div class="card-content white-text">
                        <i class="material-icons right">info_outline</i>
                        <span class="card-events-day">Freitag</span><br>
                        <span class="card-events-date" itemprop="startDate" content="2016-09-23T19:00">23. September 2016</span><br>
                        19:00 - 20:00 Uhr<br>
                        <br>
                        <span class="card-events-title" itemprop="name"><strong>Informationsanlass in Grabs SG</strong></span><br>
                        <span class="card-events-title" itemprop="description">Vorstellung der Kurse und Lehrgänge.</span><br>
                        <br>
                        @include('_partials.veranstaltungen.techfabrik')
                    </div>
                    <div class="card-action">
                        <a class="white-text" itemprop="url" href="https://www.facebook.com/events/1771274006420996/" target="_blank">Facebook Event</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card small" itemscope itemtype="http://schema.org/Event">
                <div class="card-stacked">
                    <div class="card-content">
                        <i class="material-icons right">school</i>
                        <span class="card-events-day">Freitag</span><br>
                        <span class="card-events-date" itemprop="startDate" content="2016-10-28T18:00">28. Oktober 2016</span><br>
                        18:00 - 21:15 Uhr<br>
                        <br>
                        <span class="card-events-title" itemprop="name"><strong>Eröffnungsveranstaltung Developer/Designer</strong></span><br>
                        <span class="card-events-title" itemprop="description">Keynotes</span><br>
                        <br>
                        @include('_partials.veranstaltungen.techfabrik')
                    </div>
                    <div class="card-action">
                        <a href="/lehrgaenge/">zu den Lehrgängen</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card small" itemscope itemtype="http://schema.org/Event">
                <div class="card-stacked">
                    <div class="card-content">
                        <i class="material-icons right">bug_report</i>
                        <span class="card-events-day">Samstag / Sonntag</span><br>
                        <span class="card-events-date" itemprop="startDate" content="2016-10-29T09:00">29./</span>
                        <span class="card-events-date" itemprop="endDate" content="2016-10-30T16:00">30. Oktober 2016</span><br>
                        Start Samstag: 09:00, Ende Sonntag: 16:00 Uhr<br>
                        <br>
                        <span class="card-events-title" itemprop="name"><strong>#5 Web Professionals Barcamp 2016</strong></span><br>
                        <span class="card-events-title" itemprop="description">Thema: "Devgotchi"</span><br>
                        <br>
                        @include('_partials.veranstaltungen.techfabrik')
                    </div>
                    <div class="card-action">
                        <a itemprop="url" href="/camp/">weitere Infos</a>
                        <a href="https://www.facebook.com/events/1771274006420996/" target="_blank">Facebook Event</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card small" itemscope itemtype="http://schema.org/Event">
                <div class="card-stacked">
                    <div class="card-content">
                        <i class="material-icons right">school</i>
                        <span class="card-events-day">Freitag</span><br>
                        <span class="card-events-date" itemprop="startDate" content="2016-11-05T08:15">5. November 2016</span><br>
                        08:00 - 13:30 Uhr<br>
                        <br>
                        <span class="card-events-title" itemprop="name"><strong>Eröffnungsveranstaltung Integrator</strong></span><br>
                        <span class="card-events-title" itemprop="description">alle Klassen gemeinsam</span><br>
                        <br>
                        @include('_partials.veranstaltungen.ibwsargans')
                    </div>
                    <div class="card-action">
                        <a href="/lehrgaenge/web-integrator/">zum Lehrgang</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col l4 m6 s12">
            <div class="card small" itemscope itemtype="http://schema.org/Event">
                <div class="card-stacked">
                    <div class="card-content">
                        <i class="material-icons right">videogame_asset</i>
                        <span class="card-events-day">Samstag / Sonntag</span><br>
                        <span class="card-events-date" itemprop="startDate" content="2017-03-11T09:00">11./</span>
                        <span class="card-events-date" itemprop="endDate" content="2017-03-12T16:00">12. März 2017</span><br>
                        Start Samstag: 09:00, Ende Sonntag: 16:00 Uhr<br>
                        <br>
                        <span class="card-events-title" itemprop="name"><strong>#6 Web Professionals Barcamp 2017</strong></span><br>
                        <span class="card-events-title" itemprop="description">Thema: "Arcade"</span><br>
                        <br>
                        @include('_partials.veranstaltungen.techfabrik')
                    </div>
                    <div class="card-action">
                        <a href="https://www.facebook.com/events/1771274006420996/" target="_blank">Facebook Event</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
