// http://stackoverflow.com/questions/28262674/retrieve-google-calendar-events-using-api-v3-in-javascript

var clientId = '77587040839-8rh5g1dbhbur1hpmao2f5dgc0256dj27.apps.googleusercontent.com'; //choose web app client Id, redirect URI and Javascript origin set to http://localhost
var apiKey = 'AIzaSyCRP13syzKkOemWXKA3wXi1_bJsj_Fe3c0'; //choose public apiKey, any IP allowed (leave blank the allowed IP boxes in Google Dev Console)
var userEmail = "web-professionals.ch_7j3opk4ea81j075e22eokd74ro@group.calendar.google.com"; //your calendar Id
var userTimeZone = "Rome"; //example "Rome" "Los_Angeles" ecc...
var maxRows = 10; //events to shown
var calName = "Events"; //name of calendar (write what you want, doesn't matter)

var scopes = 'https://www.googleapis.com/auth/calendar';

//--------------------- Add a 0 to numbers
function padNum(num) {
    if (num <= 9) {
        return "0" + num;
    }
    return num;
}
//--------------------- end

//--------------------- num Month to String
function monthString(num) {
    if (num === "01") { return "Januar"; }
    else if (num === "02") { return "Februar"; }
    else if (num === "03") { return "März"; }
    else if (num === "04") { return "April"; }
    else if (num === "05") { return "Mai"; }
    else if (num === "06") { return "Juni"; }
    else if (num === "07") { return "Juli"; }
    else if (num === "08") { return "August"; }
    else if (num === "09") { return "September"; }
    else if (num === "10") { return "Oktober"; }
    else if (num === "11") { return "November"; }
    else if (num === "12") { return "Dezember"; }
}
//--------------------- end

//--------------------- from num to day of week
function dayString(num){
    if (num == "1") { return "Montag" }
    else if (num == "2") { return "Dienstag" }
    else if (num == "3") { return "Mittwoch" }
    else if (num == "4") { return "Donnerstag" }
    else if (num == "5") { return "Freitag" }
    else if (num == "6") { return "Samstag" }
    else if (num == "0") { return "Sonntag" }
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
                //console.log(item);
                var location = item.location;
                var allDay = item.start.date? true : false;
                var startDT = allDay ? item.start.date : item.start.dateTime;
                var dateTime = startDT.split("T"); //split date from time
                var date = dateTime[0].split("-"); //split yyyy mm dd
                var startYear = date[0];
                var startMonth = monthString(date[1]);
                var startDay = date[2];
                console.log('startMonth '+startMonth);
                console.log('startDay '+startDay);
                console.log('startYear '+ startYear);
                console.log(startDT);
                var startDateISO = new Date(date[1] + " " + startDay + ", " + startYear + " 00:00:00");
                console.log("startDateISO "+startDateISO);
                var startDayWeek = dayString(startDateISO.getDay());
                if( allDay == true){ //change this to match your needs
                    var str = [
                        startDayWeek, ', ',
                        startDay, '.',
                        startMonth, ' ',
                        startYear, ': ', item.summary ,
                        location
                    ];
                }
                else{
                    var time = dateTime[1].split(":"); //split hh ss etc...
                    var startHour = time[0];
                    var startMin = time[1];
                    var str = [ //change this to match your needs
                        startDayWeek, ', ',
                        startDay, '.',
                        startMonth, ' ',
                        startYear, ' - ',
                        startHour, ':', startMin, ': ', item.summary ,
                        location
                    ];
                }
                li.innerHTML = str.join('');
                li.setAttribute('class', classes.join(' '));
                document.getElementById('events').appendChild(li);
            }
            //document.getElementById('updated').innerHTML = "updated " + today;
            document.getElementById('calendar').innerHTML = calName;
        });
    });
}

//--------------------- end