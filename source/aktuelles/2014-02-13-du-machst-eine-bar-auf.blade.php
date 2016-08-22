@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Du machst eine Bar auf? | Web Professionals</title>
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
                'part1'    =>  'Barcamp',
                'part2'    =>  'Du machst eine Bar auf?'
            ])
            Rolf Eggenberger, 13. Februar 2014
        </div>
        <div class="col l4 m5">

        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <p>Nachdem im Liechtensteiner Vaterland und im W&O ein Interview zu unserem Camp abgedruckt wurde dauerte es nicht lange, bis ich mit der Frage konfrontiert wurde: „Du machst eine Bar auf? Oder was mit Kaffee…?“ Ich hatte damit gerechnet. Schliesslich halte ich auf dem Artikelbild ja auch einen Kaffee in der Hand. Ehrlich gesagt hatte ich sogar etwas mit „campieren an einer Bar“ erwartet. Die Befürchtung, dass diese Form einer Veranstaltung für die Region vielleicht schwer einzuordnen sein könnte war jedoch völlig umsonst. Der Artikel von Joël Grandchamp war informativ, sehr gut recherchiert und auch für Barcamp-Neulinge überaus verständlich (nochmals besten Dank an dieser Stelle!). Dafür aber meldeten sich plötzlich uns unbekannte Stimmen. Das Camp sei kein Barcamp weil die Eröffnung vorbereitet sei, meinte ein Barcamp Experte aus Deutschland auf Xing. Eine Geldmacherei unter dem Deckmantel eines Barcamps, witterte @hofrat aus Zürich twitternd.</p>
            <p>Das Camp wurde als Teil des (non-Profit) Web Professional Lehrgangs ins Leben gerufen: den Teilnehmern soll die Gelegenheit geboten werden, sich mit Experten aus der Praxis und mit Interessierten aus dem Lehrgang kurzschliessen zu können und von deren Erfahrung und Wissen profitieren zu können. Die dafür beste Form bot sich für uns in einem Barcamp in Kombination mit einer Open Conference. Da Barcamps in der Ostschweiz nicht wirklich bekannt sind erleichtert eine Eröffnung in Form von parallel laufenden Workshops und Referaten den Teilnehmern den Einstieg. Was wir als legitime Synthese zweier bekannter Elemente betrachten. Die Referenten sind dabei bewusst weder selbsternannte Propheten oder Evangelisten wohlklingender Internetfirmen sondern erfahrene Entwickler, Designer, Projektleiter und Geschäftsleiter aus der regionalen Agenturpraxis. Sponsoren wie Namics, Phoenix Contact und multi digital sowie viele Stunden unbezahlter Arbeit durch die Techfabrik Grabs / kunstwort und weiteren Helfern (Danke, Nele!) machen es möglich, dass die Teilnahmegebühr auf die Kosten für die Verpflegung gesenkt werden konnte.</p>
            <p>Obwohl es sich um die Pilotveranstaltung handelt wurde das Anmeldeziel erreicht: 27 interessierte, offene und fortschrittliche Teilnehmer aus der Region nehmen teil. Und ich hatte die Befürchtung, die Ostschweiz sei zuwenig offen für Neues.</p>
            @include('_partials.archiv-button')
        </section>
    </div>
@endsection


@section('subnavmobile')

@endsection
