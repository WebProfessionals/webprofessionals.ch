@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Veranstaltungen | Web Professionals</title>
    <meta name="description" content="Bleib mit unseren regelmässigen öffentlichen Veranstaltungen auf dem Laufenden. Infoanlässe, Referate, Barcamps, Kurse und vielem mehr.">
    <meta property="og:image" content="https://web-professionals.ch/images/sharing/web-professionals.jpg" />
    <script>

        var clientId = '77587040839-8rh5g1dbhbur1hpmao2f5dgc0256dj27.apps.googleusercontent.com'; //choose web app client Id, redirect URI and Javascript origin set to http://localhost
        var apiKey = 'AIzaSyCRP13syzKkOemWXKA3wXi1_bJsj_Fe3c0'; //choose public apiKey, any IP allowed (leave blank the allowed IP boxes in Google Dev Console)
        var userEmail = "web-professionals.ch_7j3opk4ea81j075e22eokd74ro@group.calendar.google.com"; //your calendar Id
        var userTimeZone = "RomeE"; //example "Rome" "Los_Angeles" ecc...
        var maxRows = 10; //events to shown
        var calName = "YOUR CALENDAR NAME"; //name of calendar (write what you want, doesn't matter)

        var scopes = 'https://www.googleapis.com/auth/calendar';

        //--------------------- Add a 0 to numbers
        function padNum(num) {
            if (num <= 9) {
                return "0" + num;
            }
            return num;
        }
        //--------------------- end

        //--------------------- From 24h to Am/Pm
        function AmPm(num) {
            if (num <= 12) { return "am " + num; }
            return "pm " + padNum(num - 12);
        }
        //--------------------- end

        //--------------------- num Month to String
        function monthString(num) {
            if (num === "01") { return "JAN"; }
            else if (num === "02") { return "FEB"; }
            else if (num === "03") { return "MAR"; }
            else if (num === "04") { return "APR"; }
            else if (num === "05") { return "MAJ"; }
            else if (num === "06") { return "JUN"; }
            else if (num === "07") { return "JUL"; }
            else if (num === "08") { return "AUG"; }
            else if (num === "09") { return "SEP"; }
            else if (num === "10") { return "OCT"; }
            else if (num === "11") { return "NOV"; }
            else if (num === "12") { return "DEC"; }
        }
        //--------------------- end

        //--------------------- from num to day of week
        function dayString(num){
            if (num == "1") { return "mon" }
            else if (num == "2") { return "tue" }
            else if (num == "3") { return "wed" }
            else if (num == "4") { return "thu" }
            else if (num == "5") { return "fri" }
            else if (num == "6") { return "sat" }
            else if (num == "0") { return "sun" }
        }
        //--------------------- end

        //--------------------- client CALL
        function handleClientLoad() {
            gapi.client.setApiKey(apiKey);
            checkAuth();
        }
        //--------------------- end

        //--------------------- check Auth
        function checkAuth() {
            gapi.auth.authorize({client_id: clientId, scope: scopes, immediate: true}, handleAuthResult);
        }
        //--------------------- end

        //--------------------- handle result and make CALL
        function handleAuthResult(authResult) {
            if (authResult) {
                makeApiCall();
            }
        }
        //--------------------- end

        //--------------------- API CALL itself
        function makeApiCall() {
            var today = new Date(); //today date
            gapi.client.load('calendar', 'v3', function () {
                var request = gapi.client.calendar.events.list({
                    'calendarId' : userEmail,
                    'timeZone' : userTimeZone,
                    'singleEvents': true,
                    'timeMin': today.toISOString(), //gathers only events not happened yet
                    'maxResults': maxRows,
                    'orderBy': 'startTime'});
                request.execute(function (resp) {
                    for (var i = 0; i < resp.items.length; i++) {
                        var li = document.createElement('li');
                        var item = resp.items[i];
                        var classes = [];
                        var allDay = item.start.date? true : false;
                        var startDT = allDay ? item.start.date : item.start.dateTime;
                        var dateTime = startDT.split("T"); //split date from time
                        var date = dateTime[0].split("-"); //split yyyy mm dd
                        var startYear = date[0];
                        var startMonth = monthString(date[1]);
                        var startDay = date[2];
                        var startDateISO = new Date(startMonth + " " + startDay + ", " + startYear + " 00:00:00");
                        var startDayWeek = dayString(startDateISO.getDay());
                        if( allDay == true){ //change this to match your needs
                            var str = [
                                '<font size="4" face="courier">',
                                startDayWeek, ' ',
                                startMonth, ' ',
                                startDay, ' ',
                                startYear, '</font><font size="5" face="courier"> @ ', item.summary , '</font><br><br>'
                            ];
                        }
                        else{
                            var time = dateTime[1].split(":"); //split hh ss etc...
                            var startHour = AmPm(time[0]);
                            var startMin = time[1];
                            var str = [ //change this to match your needs
                                '<font size="4" face="courier">',
                                startDayWeek, ' ',
                                startMonth, ' ',
                                startDay, ' ',
                                startYear, ' - ',
                                startHour, ':', startMin, '</font><font size="5" face="courier"> @ ', item.summary , '</font><br><br>'
                            ];
                        }
                        li.innerHTML = str.join('');
                        li.setAttribute('class', classes.join(' '));
                        document.getElementById('events').appendChild(li);
                    }
                    document.getElementById('updated').innerHTML = "updated " + today;
                    document.getElementById('calendar').innerHTML = calName;
                });
            });
        }
        //--------------------- end
    </script>
    <script src='https://apis.google.com/js/client.js?onload=handleClientLoad'></script>


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

        <div id='content'>
            <h1 id='calendar' style="color:grey">LOADING . . . .</h1>
            <ul id='events'></ul>
        </div>
        <p id='updated' style="font-size:12; color:grey">updating . . . . .</p>

    </div>

@endsection
