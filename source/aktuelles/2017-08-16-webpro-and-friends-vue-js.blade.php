@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Vue.js | Web Professionals and Friends</title>
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
            <span class="webpro-hero1">Leg' los!</span><br>
            <span class="webpro-hero2">Step by step zum Web-Profi</span><br>
            <a class="waves-effect waves-light btn webpro-red webpro-hero-button" href="/lehrgaenge/anmeldung/">Jetzt anmelden</a>
        </div>
    </header>
@endsection

{{-- Main Navigation --}}
@section('navigation')
    @include('_partials.navigation', [
        'nav1status'    =>  ' active'
    ])
@endsection

{{-- Main Content --}}
@section('body')
    <div class="row">
        <div class="col s12">
            @include('_partials.header1', [
                'part1'    =>  'Web Professionals and Friends',
                'part2'    =>  'Vue.js'
            ])
            16. August 2017
        </div>
        <div class="col l4 m5">
            <p><img class="responsive-img" width="650" src="/images/aktuelles/2017-08-webpro-and-friends-vue-js-florian-gaechter-l5.jpg" alt="Web Professionals and Friends: Vue.js (Florian Gächter)" title="Web Professionals and Friends: Vue.js (Florian Gächter)"></p>
            <p>
                <strong>Datum: </strong>Mittwoch, 16.8.2017<br>
                <strong>Zeit: </strong>19 Uhr<br>
                <strong>Ort: </strong>Techfabrik, Mühlbachstr. 11a, 9472 Grabs<br>
                <strong>Gebühren: </strong>kostenlos (Honesty box)<br>
                <strong>Anmeldung: </strong>nicht notwendig, <a href="https://www.facebook.com/events/1314442278674622" target="_blank">gerne jedoch via FB</a><br>
            </p>
        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <p>
                Kurz-Vorstellung des progressiven Javascript User Interface Frameworks <strong>Vue.js</strong> durch unseren "Captain Frontend" <strong>Florian Gächter</strong>. Ein absolutes must-visit für alle Frontend Developers! :-)
            </p>

            <h2>Vue.js</h2>
            <p>
                Vue.js (commonly referred to as Vue; pronounced /vjuː/, like view) is an open-source progressive JavaScript framework for building user interfaces. Integration into projects that use other JavaScript libraries is made easy with Vue because it is designed to be incrementally adoptable. Vue can also function as a web application framework capable of powering advanced single-page applications.
            </p>
            <p>
                According to a 2016 JavaScript survey, Vue has an 89% developer satisfaction rating. It accumulates around 95 GitHub stars per day, and is the 10th most starred project on GitHub of all time. (Quelle: Wikipedia)
            </p>

            <h2>Florian Gächter</h2>
            <p>
                Florian Gächter ist Frontend Developer bei Frontify. Nach einem angefangenen Biotechnologie-Studium ist er (Veith Zäch sei Dank) der Welt des Web Developments verfallen und war unter anderem Senior Frontend Developer bei der Namics AG. Durch seine Leidenschaft für hübsche Frontends und Clean Code ist er für die Web Professionals Dozent erster Wahl für Programmier-Themen mit sichtbaren Resultaten.
            </p>
            <p>
                <strong>"Web Professionals and Friends"</strong><br>
                ...sind (un)regelmässige Vortrags- und Network-Events welche ca. alle 2-3 Monate stattfinden und öffentlich zugänglich sind. Die Idee entstand daraus, dass sich Absolventen des ersten Lehrgangans weiterhin regelmässige Treffen wünschten. Statt dabei jedoch nur Bier zu trinken und zu plaudern entstand das Format, dass bei jedem Treffen jemand ein Kurz-Referat zu einem aktuellen Thema aus seinem Arbeits-Alltag hält. Wissen aus eigenen Reihen, als Ergänzung zu den halbjährlich stattfindenden Barcamps.
            </p>
            @include('_partials.lehrgaenge-button')
        </section>
    </div>
    @endsection

    @section('subnavmobile')

    @endsection
