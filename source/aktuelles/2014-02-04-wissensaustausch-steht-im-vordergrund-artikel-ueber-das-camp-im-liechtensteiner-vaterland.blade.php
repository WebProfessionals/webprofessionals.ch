@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Wissensaustausch steht im Vordergrund | Web Professionals</title>
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
                'part1'    =>  'Varcamp',
                'part2'    =>  'Wissensaustausch steht im Vordergrund'
            ])
            Artikel über das Camp im Liechtensteiner Vaterland von Joël Grandchamp, 4. Februar 2014
        </div>
        <div class="col l4 m5">
            <p><img class="responsive-img materialboxed" width="650" src="/images/aktuelles/vaterland_20140204_7.jpg"></p>
        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <p>Möglichkeiten zu lernen gibt es viele. Für eine spezielle Art des Lerncamps hat sich die Techfabrik Grabs entschieden. Sie veranstalten im Februar ein BarCamp, bei welchem die Teilnehmer die Lerninhalte gemeinsam festlegen.</p>
            <p>GRABS. Es ist keine klassische Lehrer-Schüler-Situation. Der Dozent sitzt inmitten der Schüler, zeigt anhand von Beispielen praktische Lösungen auf und geht auf Wünsche der Schüler ein. Die Techfabrik aus Grabs plant ein ganzes Wochenende, bei welchem die Teilnehmer gemeinsam den Inhalt der Themen festlegen. «Wir geben ein Thema vor, der Rest wird durch die Teilnehmer festgelegt», erklärt Rolf Eggenberger, Organisator des BarCamps, welches zum Thema «alles mobil» Mitte Februar in Buchs stattfinden wird.</p>
            <h2>Fachkräftemangel beseitigen</h2>
            <p>Das Prinzip ist ebenso einfach, wie ungewohnt. Das Wochenende ist eine offene Tagung mit offenen Workshops, deren Inhalte und Ablauf zu Beginn der Tagung von den Teilnehmern selbst entwickelt und im weiteren Verlauf auch selbst gestaltet werden. Im Rahmen der von Eggenberger initiierten Ausbildung zum Web-Professional entstand die Idee, ein BarCamp zu organisieren. «Das BarCamp soll die Praxisausbildung der Web-Professionals begleiten und künftig halbjährlich stattfinden», erklärt Eggenberger. «Es gibt einen grossen Sprung vom Informatik-Lehrling zum Fachhochschulabsolventen, die in vielen Fällen bereits überqualifiziert sind.» Mit diesem Hintergrund sei dann der Lehrgang der Web-Professionals entwickelt worden, welcher diese Lücke füllen soll. Der Name BarCamp mag irreführend sein, ist jedoch ein Wortspiel aus der Informatikszene. So gab es ursprünglich die sogenannten FooCamps, welche man nur mit einer Einladung besuchen durfte – das Gegenteil der Bar-Camps, bei denen jeder, der über ein gewisses Vorwissen aus der Internetbranche verfügt, teilnehmen kann. «Foo» und «Bar» sind Begriffe, welche in der Informatik häufig gegensätzlich verwendet werden – beispielsweise für Variablen in einer Programmierung.</p>
            <h2>Leicht verändertes Konzept</h2>
            <p>Da es das erste BarCamp ist, hat Eggenberger das ansonsten übliche Konzept leicht geändert. «Für den Samstagmorgen haben wir Referate von Profis geplant, um den Teilnehmern die erste Scheu nehmen zu können», sagt Eggenberger. Anschliessend gebe es eine Eröffnungsdiskussion, bei welcher das weitere Vorgehen festgelegt werde. So können die Teilnehmer ihrem eigenen Interesse entsprechend die Workshoptage gestalten und den Inhalt festlegen. Die gewünschten Themen werden dann in zweistündigen Sessions behandelt. Da die Themenwahl so offen ist, kann jeder Teilnehmer sicher sein, zu profitieren. «Teilnehmen können nicht nur Leute, welche die Ausbildung zum Web-Professional machen oder aus Agenturen, sondern jeder, der einen internetbezogenen Beruf ausübt. Webentwickler, Strategieverantwortliche einer Firma oder Grafiker, jeder kann teilnehmen und profitieren», sagt Eggenberger.</p>
            <p>Nicht nur die Themen des Camps sind offen, sondern auch die Art und Weise, wie diese behandelt werden. So ist es möglich, dass eine Diskussion entsteht, ein Tutorial erstellt, ein Referat gehalten, oder sogar gemeinsam programmiert wird. Wichtiger Bestandteil der Bar-Camps ist auch, dass der soziale Teil nicht zu kurz kommt. Für das Camp in Buchs ist eine Geek-Olympiade geplant. Diese soll Spass machen, den Teilnehmern aber auch eine weitere Möglichkeit bieten, technische Neuerungen zu testen. Ein Teil der Olympiade ist beispielsweise eine Variante des Computerspiel-Klassikers «Pong» aus dem Jahr 1972 – eine Art digitales Tischtennis. «Die Teilnehmer steuern das Spiel, indem sie mit Skiern zwischen elektronischen Sensoren am Boden hin und her rennen», lacht Eggenberger. Der entstehende Austausch ist den Organisatoren besonders wichtig. «Der Lehrer bringt das Fachwissen, aber die Teilnehmer tauschen sich gegenseitig aus, auch ausserhalb der Schulzeiten. Wir wollen erreichen, dass der Funke ausgelöst wird und der Beruf zu einer Leidenschaft wird», beschreibt Eggenberger das Ziel des Camps.</p>
            <p>Artikel Liechtensteiner Vaterland vom 4. Februar 2014</p>
        </section>

    </div>
@endsection

@section('subnavmobile')

@endsection
