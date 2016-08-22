@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Formel Web – oder die Entstehung unseres Logos | Web Professionals</title>
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
                'part1'    =>  'Web Professionals',
                'part2'    =>  'Formel Web – oder die Entstehung unseres Logos'
            ])
            Rolf Eggenberger, 7. Januar 2014
        </div>
        <div class="col l4 m5">

        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <p>Die Ausbildung zum Web Professional hat in jeder Hinsicht hohe Ziele – sehr hohe. Wir wollen Spezialisten im Bereich der digitalen Kommunikation ausbilden und dazu benötigen wir in unserem Team auch die besten. Über einen Facebook Wettbewerb haben wir die Gestalter und Gestalterinnen der Ostschweiz zu einem Logo-Contest herausgefordert. Unter den 30 Einreichungen hat sich die Fachjury einstimmig für Rosa Flieder aka Manuela Aggeler entschieden.</p>
            <p>Ihr Entwurf für das Web Professional Logo basiert auf der Überlegung „Formel Web“:<blockquote>Das Internet ist eine Wissenschaft für sich. Und jeder, der damit gestaltet und programmiert, ist sich dessen (früher oder später) bewusst.</blockquote></p>
            <p>Wie also kann ich als Laie lernen, wie das alles funktioniert? – Mit der «Formel Web». Die Bildmarke ist vielschichtig und mondän – genau wie das Netz. Das «W» im Inneren weist eine deutliche Pixelform auf – ebenfalls in Anlehnung an die Pixelwelt, die wir online finden. Um diesen Gedanken an Vielschichtigkeit zu verstärken, wurden die beiden Elemente gedreht und multipliziert. Und voilà, schon befinden wir uns wieder im Reich der Formeln. Als Verstärkung dieses Gedanken wird das Icon oben rechts auf der Wortmarke platziert, als eine Art Multiplikaitonszahl.</p>
            <p>Die Farbwahl ist kraftvoll und auffällig, ohne zu schrill zu wirken. Das Rot entsteht durch die Multiplikation der beiden Elemente. Sie ist auch auf weissem Grund optimal lesbar. Die Schriftwahl dazu ist modern; mit dem gewissen Etwas. Dies suggeriert dem Betrachter, dass der Lehrgang «nicht bloss irgend so ein Studium» ist, sondern etwas ganz Besonderes. Ein Ort, an dem man auch ganz besonderes Wissen erhalten kann. Wie auch bei den vorhergegangen Varianten bildet auch diese eine Mannigfaltigkeit an Anwendungsmöglichkeiten. Das Icon kann sehr gut alleine stehen, zum Beispiel in der Anwendung als App oder als Laptopsticker.</p>
        </section>
    </div>
@endsection


@section('subnavmobile')

@endsection
