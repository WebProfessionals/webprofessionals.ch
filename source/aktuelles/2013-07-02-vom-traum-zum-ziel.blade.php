@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Rückblick auf den Web Integrator 2013 | Web Professionals</title>
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
                'part2'    =>  'Vom Traum zum Ziel'
            ])
            Rolf Eggenberger, 2. Juli 2013
        </div>
        <div class="col l4 m5">

        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <p>In der ganzen Schweiz fehlt es an qualifizierten Fachkräften in der Internet-Branche. So verwundert es auch nicht, dass die 23 angehenden Web Professionals unter genauer Beobachtung der Agenturen stehen – und einige unter ihnen sich bereits zu Beginn ihrer Ausbildung eine Arbeitsstelle sichern konnten. So auch Bruno Bless (im Bild rechts) aus Wangs.</p>
            <p>In seinem bisherigen Beruf als Bauzeichner arbeitete er im Gebäude gegenüber der Südostschweiz newmedia AG und dachte sich dabei oft, dass er liebend gerne zu diesem Team gehören würde. Seine Begeisterung für das Internet sowie die Arbeit in der Branche bewegten ihn dann auch zum Start der Ausbildung als Web Professional. Die Entscheidung war die richtige, denn bereits während den ersten Wochen seiner Ausbildung zum Web Integrator konnte er sich eine Anstellung als Junior Web Developer im Drupal Team der Südostschweiz Newmedia AG sichern.</p>
            <p>Auf die Frage nach den Beweggründen für den Berufsumstieg meint er: <blockquote>„Weil es für mich eine unglaublich spannende Branche ist, die sich immer weiterentwickelt – ein abwechslungsreicher Job mit guter Zukunftsperspektive. Ein Grund für meinen Stellenwechsel ist sicher meine Begeisterung für das Internet und seine Möglichkeiten / Verwendungen. Des Weiteren auch wie wichtig das Internet für die Gesellschaft ist und in Zukunft noch an Stellenwert gewinnen wird. Durch die Weiterbildung „Web Professionals“ habe ich die Möglichkeit, eine sehr gute praxisorientierte Ausbildung zu absolvieren. Ich bin sehr motiviert auf die neue Herausforderung und freue mich, dass ich den Branchenwechsel verwirklichen werde.“</blockquote></p>
            <p>Wir freuen uns, dass wir Bruno mit der Ausbildung zum Web Professional die notwendige Grundlage dafür liefern können.</p>
            @include('_partials.archiv-button')
        </section>
    </div>
@endsection


@section('subnavmobile')

@endsection
