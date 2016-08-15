@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Web Professionals</title>
    <meta name="description" content="Die Ausbildung für angehende Web Profis ermöglicht Dir einen erfolgreichen Berufsstart in die Online-Welt! Initiiert und getragen durch führende Internet-Agenturen der Ostschweiz.">
@endsection

{{-- Inline CSS --}}
@section('css')
    @include('_partials.inlinecss', [
        'image'    =>  'BZB_Techfabrik_2013-14'
    ])
@endsection

{{-- Hero Unit on Top --}}
@section('hero')
    <header class="webpro-hero">
        @include('_partials.herotop')
        <div class="webpro-hero-claim">
            <span class="webpro-hero1">Gestalte das Web</span><br>
            <span class="webpro-hero2">Die Ausbildung für angehende Webprofis</span><br><br>
            <a class="waves-effect waves-light btn webpro-red" href="/lehrgaenge/">Jetzt informieren</a>
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
                'part1'    =>  'Rückblick',
                'part2'    =>  'Web Professionals Winter Camp 2016'
            ])
            Marianne Venzin, somedia Production, 2. März 2016
        </div>
        <div class="col l4 m5">
            <br>
            <div class="video-container">
                <iframe src="https://player.vimeo.com/video/157412211" width="750" height="430" frameborder="0" scrolling="no" allowfullscreen="allowfullscreen"></iframe>
            </div>
            <br>
            <p><img class="responsive-img materialboxed" width="650" src="/images/aktuelles/winter-camp-zukunft1-big.jpg"></p>
            <p><img class="responsive-img materialboxed" width="650" src="/images/aktuelles/winter-camp-zukunft3-big.jpg"></p>
            <p><a href="https://goo.gl/photos/Nz9GqmuFLWbv8NDs6" class="waves-effect waves-light btn webpro-green">weitere Fotos (Google)</a></p>
        </div>
        <section class="col l7 offset-l1 m6 offset-m1">
            <p>Vergangenes Wochenende fand das vierte Web Professionals Camp statt — dieses Mal im Medienhaus der Somedia in Chur. Programmierer, Entwickler, Gestalter und Internetbegeisterte aus der ganzen Schweiz und aus dem Ausland widmeten sich während zwei Tagen ausgiebig dem Thema «Zukunft». Die Camps sind Bestandteil des Web Professionals Ausbildungsprogramms, welches sich vor allem an motivierte Quereinsteiger richtet.</p>
            <p>Die physische Welt wird immer mehr durch das Internet angereichert, so ist es längst zum Alltagswerkzeug geworden. Neue Technologien lösen einander immer schneller ab und verändern dabei unser Leben grundsätzlich. Um die digitale Welt mitgestalten zu können, werden Fachkräfte benötigt, die in der Schweiz immer noch schwer zu finden sind. Mit der wachsenden Komplexität des Webs entsteht auf der Stufe von Universitäten und Fachhochschulen ein immer grösser werdendes Bildungsangebot für zukünftige Spezialisten.</p>
            <h2>Quereinsteiger gefragt</h2>
            <p>Der aktuelle Mangel an Fachkräften führt aber dazu, dass in der Praxis immer mehr auch Quereinsteiger gefragt sind. Im April 2013 haben Ostschweizer Internet-Agenturen und Schulen darauf reagiert und das Ausbildungsprogramm «Web Professionals» ins Leben gerufen. Die Ausbildung etablierte sich schnell Schweiz weit.</p>
            <p>Die halbjährlichen Camps sind ebenfalls Bestandteil dieser Ausbildung. Sie widmen sich der Entwicklung neuer Lösungsansätze, wobei der Austausch der Teilnehmer untereinander vorrangig ist. Die Teilnahme an diesen Treffen steht auch Interessierten offen, die nicht an den übrigen Lehrgängen teilnehmen.</p>
            <p>Zu Beginn des Camps wurden am Samstag zunächst in einem Brainstorming zum Thema «Zukunft» gemeinsam mögliche Projekte erarbeitet. Daraufhin setzte man sich in Gruppen zusammen und begann mit der Umsetzung der gewählten Ideen.</p>
            <h2>Virtual Reality und Games für die Zukunft</h2>
            <p>Der Begriff «Zukunft» in Bezug auf die digitale Welt, brachte dieses Wochenende vielerlei Ansätze hervor. Man machte sich daran Programmiersprachen zu analysieren und fragte sich, wie diese sich wohl weiter entwickeln würden. Eine Projektgruppe widmete sich der «Künstlichen Intelligenz», welche zur Entwicklung eines Programms mit menschenähnlichen Reaktionen inspirierte. Manche Teams programmierten sogar ganze Games, welche sogleich von den übrigen Teilnehmern getestet wurden.</p>
            <p>Der Anlass war ausgebucht und insgesamt ein voller Erfolg. Zum ersten Mal mit dabei waren auch drei Teilnehmer aus London. Geleitet wurde der zweitägige Anlass von Rolf Eggenberger, dem Lehrgangsleiter des Ausbildungsprogramms «Web Professionals».</p>
        </section>
    </div>



@endsection
