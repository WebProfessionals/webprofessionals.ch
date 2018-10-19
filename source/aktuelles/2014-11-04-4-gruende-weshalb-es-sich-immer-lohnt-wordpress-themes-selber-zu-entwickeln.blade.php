@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>4 Gründe weshalb es sich immer lohnt, WordPress Themes selber zu entwickeln | Web Professionals</title>
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
                'part1'    =>  'Tipp',
                'part2'    =>  '4 Gründe weshalb es sich immer lohnt, WordPress Themes selber zu entwickeln'
            ])
            Rolf Eggenberger, 4. November 2014
        </div>
        <div class="col l4 m5">
            <img class="responsive-img" src="/images/aktuelles/2014-wordpress.jpg" alt="WordPress Theme Entwicklung" title="WordPress Theme Entwicklung">
        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <p>Die Auswahl an fixfertigen WordPress Themes ist riesig – allen voran bietet das Portal „Themeforest“ derzeit über 4’000 Themes welche bereits für wenige Dollars erhältlich sind. Doch eben diese vorgefertigten Layouts haben ihre Nachteile und können im schlimmsten Fall sogar zu enormen Problemen führen. Vier von vielen Gründen welche für eine Eigenentwicklung von WordPress Themes sprechen:</p>
            <h2>Grund #1: dem visuellen Einheitsbrei entgegen halten</h2>
            <p>Da die Themes durch jedermann erworben werden können und exklusive Nutzungsrechte mit sehr hohen Lizenzkosten verbunden sind, kann es schnell vorkommen, dass eine andere Webseite mit dem selben Layout daherkommt wie die eigene. Umso ärgerlicher wenn es sich sogar um diejenige eines direkten Konkurrenten handelt. Hinzu kommt, dass die Themes in der Vorschau meist schick aussehen, sobald sie jedoch mit eigenem Inhalt (und vor allem Fotos) gefüllt werden ihre Pracht verlieren.</p>
            <h2>Grund #2: Abgängigkeit von Theme-Entwicklern entrinnen</h2>
            <p>Shortcodes locken mit schnellem Publishing – je nach Anbieter werden diese sogar geradezu inflationär eingesetzt. Die in eckigen Klammern notierten Shortcodes sind sicherlich praktisch, denn der entsprechende [shortcode] wird automatisch mit dem gewünschten Inhalt ersetzt – z.B. mit einer Liste aller Autoren, einer Tag Cloud etc. Dies bedeutet jedoch auch, dass im Hintergrund das Theme diese Befehle abarbeiten und den Shortcode mit dem berechneten Inhalt ersetzen muss. Wechselt man zu einem späteren Zeitpunkt auf ein Theme welches diese Shortcodes nicht unterstützt, so wird auf der Webseite nur noch der Marker ausgegeben, nicht jedoch dessen Inhalt. Damit die Inbetriebnahme des Theme so einfach wie nur möglich ist, werden zudem oftmals komplexe Funktionalitäten, welche eigentlich in ein Plugin gehören, im Theme-Code integriert. Wenn keine Trennung zwischen Aussehen und Funktion besteht wird es unmöglich, das eine zu wechseln und das andere beizubehalten.</p>
            <h2>Grund #3: Update-Gewährleistung</h2>
            <p>Der WordPress Core sollte immer auf der aktuellsten Version gehalten werden. Nicht nur der neuen Funktionalitäten sondern vielmehr der Sicherheit wegen. Bei einem Update auf eine neue Version kann es jedoch geschehen, dass einzelne Core-Funktionalitäten veralten und nicht mehr unterstützt werden. Dasselbe kann mitunter auch beim Update der zu Grund liegenden PHP Version auf dem Webserver geschehen – ein Prozess welcher je nach Hoster gar nicht beeinflusst werden kann und oftmals automatisch vorgenommen wird. Verwendet nun das Theme veraltete WordPress oder PHP Funktionen (aktuelles Beispiel seit PHP 5.3: Parameterübergabe per Referenz mittels call-time pass-by-reference), so ist man auf ein Theme-Update des Entwicklers angewiesen (oder arbeitet sich selber mühsam durch dessen Code). Nicht selten steht man dann vor einem Problem, wenn das bereits erworbene Theme nicht mehr im Angebot des Portals vorhanden ist.</p>
            <h2>Grund #4: Sicherheit</h2>
            <p>Sich darauf zu verlassen, dass ein unbekannter Theme-Entwickler keine Sicherheitslücke hinterlassen hat gleicht schon fast der blinden Freundschaftsbestätigung mit nigerianischen Erb-Prinzen. Selbstverständlich gibt es sehr gute Theme-Entwickler (z.B. Elmastudio) welche einfache und sicherer Themes anbieten. Die Bandbreite bei unbekannten Anbietern hingegen reicht von kleineren Code-Fehlern über fahrlässige Mängel in der Sicherheit (Beispiel: der sehr häufig eingesetzte Revolution Slider) bis hin zu mutwillig platzierten Backdoors. Wurden dabei externe Plugins direkt ins Theme verbaut, so ist das Update auf den Security Fix üblicherweise abhängig von einem Theme-Update durch den Entwickler.</p>
            <h2>Die beste Lösung: das Theme selber entwickeln</h2>
            <p>Wer die volle Kontrolle über sein WordPress Theme haben möchte kommt an einer Eigenentwicklung nicht vorbei. Denn individuelle und einzigartige Themes können nur dann entstehen, wenn sie massgeschneidert entwickelt werden. Wird das Theme zusätzlich noch über Git versioniert und sauber dokumentiert, dann steht einer stressfreien Webseite nichts mehr im Wege. Dies erfordert jedoch fundierte Kenntnisse in HTML, CSS, JavaScript und PHP. Doch so schlimm ist es dann auch wieder nicht: diverse Online Workshops helfen über den ersten Einstieg und der WordPress Codex steht als Nachschlagewerk für die vertiefte Theme-Entwicklung zu Verfügung.</p>
            <h2>Hinweis:</h2>
            <p>Mit dem Kurs <a href="/kurse/wordpress-themes-selber-programmieren/">„Webseiten mit WordPress erstellen“</a> bieten die Web Professionals einen Einstieg in die Theme-Entwicklung. Schritt für Schritt wird das notwendige Grundlagenwissen erarbeitet um sich an die Entwicklung eigener Themes wagen zu können.</p>
            @include('_partials.archiv-button')
        </section>

    </div>
@endsection

@section('subnavmobile')

@endsection
