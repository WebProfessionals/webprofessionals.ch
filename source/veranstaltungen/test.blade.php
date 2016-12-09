@extends('_layouts.master')

{{-- Header --}}
@section('header')
<title>Veranstaltungen | Web Professionals</title>
<meta name="description" content="Bleib mit unseren regelmässigen öffentlichen Veranstaltungen auf dem Laufenden. Infoanlässe, Referate, Barcamps, Kurse und vielem mehr.">
<meta property="og:image" content="https://web-professionals.ch/images/sharing/web-professionals.jpg" />
<script type="text/javascript">

    // Your Client ID can be retrieved from your project in the Google
    // Developer Console, https://console.developers.google.com
    var CLIENT_ID = '394151381680-7pehlni7ghsm3p29m8mqnh3u8ar8kq8s.apps.googleusercontent.com';

    var SCOPES = ["https://www.googleapis.com/auth/calendar.readonly"];

    /**
     * Check if current user has authorized this application.
     */
    function checkAuth() {
        gapi.auth.authorize(
                {
                    'client_id': CLIENT_ID,
                    'scope': SCOPES.join(' '),
                    'immediate': true
                }, handleAuthResult);
    }

    /**
     * Handle response from authorization server.
     *
     * @param {Object} authResult Authorization result.
     */
    function handleAuthResult(authResult) {
        var authorizeDiv = document.getElementById('authorize-div');
        if (authResult && !authResult.error) {
            // Hide auth UI, then load client library.
            authorizeDiv.style.display = 'none';
            loadCalendarApi();
        } else {
            // Show auth UI, allowing the user to initiate authorization by
            // clicking authorize button.
            authorizeDiv.style.display = 'inline';
        }
    }

    /**
     * Initiate auth flow in response to user clicking authorize button.
     *
     * @param {Event} event Button click event.
     */
    function handleAuthClick(event) {
        gapi.auth.authorize(
                {client_id: CLIENT_ID, scope: SCOPES, immediate: false},
                handleAuthResult);
        return false;
    }

    /**
     * Load Google Calendar client library. List upcoming events
     * once client library is loaded.
     */
    function loadCalendarApi() {
        gapi.client.load('calendar', 'v3', listUpcomingEvents);
    }

    /**
     * Print the summary and start datetime/date of the next ten events in
     * the authorized user's calendar. If no events are found an
     * appropriate message is printed.
     */
    function listUpcomingEvents() {
        var request = gapi.client.calendar.events.list({
            'calendarId': 'web-professionals.ch_7j3opk4ea81j075e22eokd74ro@group.calendar.google.com',
            'timeMin': (new Date()).toISOString(),
            'showDeleted': false,
            'singleEvents': true,
            'maxResults': 1000,
            'orderBy': 'startTime'
        });

        request.execute(function(resp) {
            var events = resp.items;
            appendPre('Upcoming events:');

            if (events.length > 0) {
                for (i = 0; i < events.length; i++) {
                    var event = events[i];
                    var when = event.start.dateTime;
                    if (!when) {
                        when = event.start.date;
                    }
                    appendPre(event.summary + ' (' + when + ')')
                }
            } else {
                appendPre('No upcoming events found.');
            }

        });
    }

    /**
     * Append a pre element to the body containing the given message
     * as its text node.
     *
     * @param {string} message Text to be placed in pre element.
     */
    function appendPre(message) {
        var pre = document.getElementById('output');
        var textContent = document.createTextNode(message + '\n');
        pre.appendChild(textContent);
    }

</script>
<script src="https://apis.google.com/js/client.js?onload=checkAuth">
</script>
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

    <div id="authorize-div" style="display: none">
        <span>Authorize access to Google Calendar API</span>
        <!--Button for the user to click to initiate auth sequence -->
        <button id="authorize-button" onclick="handleAuthClick(event)">
            Authorize
        </button>
    </div>
    <pre id="output"></pre>

</div>

@endsection
