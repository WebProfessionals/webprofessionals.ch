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
            <a class="waves-effect waves-light btn webpro-red webpro-hero-button" href="/anmeldung/">Jetzt anmelden</a>
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
                'part2'    =>  'Rückblick auf den Web Integrator 2013'
            ])
            Mario Calcagnini, 4. September 2013
        </div>
        <div class="col l4 m5">

        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <h2>Am Anfang war das Licht…</h2>
            <p>Der Lehrgang hat in der Techfabrik in Grabs angefangen, wo wir, nebst den Hintergrundinformationen zur Entstehung und Geschichte des Internets, Erstkontakt mit HTML und CSS hatten. In diversen Übungen wurde versucht, ein bestehendes Design mit HTML und CSS umzusetzen, was auch ausgesprochen gut funktioniert hat und noch nicht all zu viele Fragezeichen in die Gesichter der Teilnehmer gezaubert hat. Unterstütz wurde unser Dozent Rolf Eggenberger von Florian Gächter (Namics AG), welcher ebenfalls hilfreich zur Seite stand, wenn irgendwo ein Knopf in der Leitung war.</p>
            <h2>Neues Thema, neuer Ort, neue Hürden</h2>
            <p>Danach wurde der Unterrichtsstandort von der Techfabrik in das IbW (in Sargans/SG) gewechselt. Nach anfänglichen Schwierigkeiten mit der EDV-Struktur wurden wir erstmals mit verschiedenen Entwicklertools, wie z.B. Xampp, konfrontiert. Ebenfalls konnten wir einen ersten Einblick in die Welt von PHP werfen, was viele doch gleich ein wenig überfordert hat. Mit Repetitionen und Erklärungen konnten aber viele Wissenslücken geschlossen werden, wenn auch noch nicht ganz alle.</p>
            <h2>Typo3, WordPress, Ghost, Joomla……waaaas???</h2>
            <p>So dürfte es vielen Teilnehmern gegangen sein, als wir das Thema „Content Management System“ (CMS) in Angriff genommen haben. Dass all diese Begriffe nichts mit Schreibfehlern, der Presse, Geistern, oder irgendwelchen Voodoo-Zaubern zu tun hat, wurde relativ schnell klar. Es kamen wiederum neue Begriffe dazu, neue Technologien und weitere Programmiersprachen. In einem Vortrag wurden die verschiedenen (meist PHP-basierten) CMS vorgestellt und die jeweilgen Stärken sowie Schwächen aufgezeigt.</p>
            <p>Nun denn, also los, „learning by doing“ heisst hier die Devise. Deshalb haben wir eine Installation des CMS Typo3 von A-Z durchgespielt und das System so eingerichtet, dass jetzt eigentlich nur noch der Inhalt eingefügt werden müsste. Dass dies gar nicht so einfach ist und doch schon ein ordentliches Wissen beansprucht, haben wir dabei eindrücklich erfahren. Beat Turnheer (Südostschweiz Newmedia AG) stand Rolf Eggenberger in diesem Thema zur Seite, was es ermöglicht hat, die Klasse zu unterteilen und so effizienter auf die Fragen der Teilnehmer einzugehen.</p>
            <h2>…JavaScript, Ajax, jQuery…</h2>
            <p>…und weitere Hürden. Julian Schattner (MHS@Internet) hat diese Themen mit uns angeschaut und versucht, uns diese einzubläuen. Trotz sehr guter Arbeit von Julian, waren beim einen oder anderen doch noch ein paar Zweifel vorhanden, ob wir dies überhaupt jemals so hinbekommen könnten, wie er es uns gezeigt hat. Gelernt haben wir dabei auch wieder viel und es wurde versucht, einfache Scripts selber zu erstellen. Ausserdem haben wir versucht, kompliziertere Scripts zu interpretieren und auch jQuery einzubinden.</p>
            <h2>Nach der Sommerpause</h2>
            <p>Nach sechs Wochen Sommerpause haben wir uns wieder im IbW in Sargans eingefunden um das Thema CMS sowie auch JavaScript etc. nochmals zu repetieren und zu vertiefen. Wieder stand uns dabei Julian Schattner zur Verfügung. Ein neues Gesicht durften wir letzten Freitag begrüssen, Curdin Venzin (ebenfalls Südostschweiz Newmedia AG) hat uns einen Einblick in die Systemadministration verschafft. Darin behandelt wurde die Funktionsweise von DNS sowie die Verschlüsselung einer Verbindung.</p>
            <p>Auch wurde aufgezeigt, wie einfach sich Daten und Mails fälschen, resp. lesen liessen, was uns alle ein wenig schockiert hat und uns sicher auch vorsichtiger in Bezug auf Datensicherheit gemacht hat. Dieser Punkt ist eigentlich schon seit Anbeginn der Datenkommunikation ein Thema, wird aber leider von Benutzern immer noch stiefmütterlich behandelt. Hoffen wir, dass wenigstens wir Web-Professionals diesen Aspekt nicht ausser acht lassen, und diesem doch sehr wichtigen Punkt auch die zwingend nötige Aufmerksamkeit schenken.</p>
            <h2>…Endspurt</h2>
            <p>Langsam geht es in Richtung Abschlussprüfung. In den nächsten zwei Wochen werden wir uns noch noch den Gestaltungsgrundlagen sowie der Fotobearbeitungssoftware Photoshop widmen, bevor wir dann Ende September unser Erlerntes unter Beweis stellen können.</p>

            <p>Mario Calcagnini, Teilnehmer Web Integrator 2013</p>
            @include('_partials.archiv-button')
        </section>
    </div>
@endsection


@section('subnavmobile')

@endsection
