@extends('_layouts.mobile-app')

{{-- Header --}}
@section('header')
    <title>Veranstaltungen | Web Professionals</title>
    <meta name="description" content="Bleib mit unseren regelmässigen öffentlichen Veranstaltungen auf dem Laufenden. Infoanlässe, Referate, Barcamps, Kurse und vielem mehr.">
    <meta property="og:image" content="https://web-professionals.ch/images/sharing/web-professionals.jpg" />

    <script>
        var calendar = [
            'web-professionals.ch_7j3opk4ea81j075e22eokd74ro@group.calendar.google.com',    // Public Veranstaltungen
            'web-professionals.ch_hvur00fojbon20ivoleejrlvk8@group.calendar.google.com'     // WebPro Veranstaltungen
        ];
        var calendarType = [
            'public',
            'webpro'
        ]
    </script>
    <script src="/js/events.js"></script>
    <script src='https://apis.google.com/js/client.js?onload=handleClientLoad'></script>
@endsection


{{-- Main Content --}}
@section('body')

    <div class="row card-events">
        <div class="col s12">
            <div id='content'>
                <h1 id='calendar-loading' style="color:grey">Veranstaltungen werden geladen . . .</h1>
            </div>
        </div>

        <div class="col l4 m6 s12 card-event card-invisible">
            <div class="card small">
                <div class="card-stacked">
                    <div class="card-content">
                        <i class="material-icons right card-icon">school</i>
                        <span class="card-events-day">Tag</span><br>
                        <span class="card-events-startdate">Datum Start</span><br>
                        <span class="card-events-enddate">Datum Ende</span>
                        <span class="card-events-time">Zeit</span><br>
                        <br>
                        <span class="card-events-title">Web Professionals</span><br>
                        <br>
                        <span class="card-events-location">Location</span>
                    </div>
                    <div class="card-action">
                        <a href="/lehrgaenge/web-integrator/" target="_blank">weitere Infos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
