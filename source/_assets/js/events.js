var clientId = '77587040839-8rh5g1dbhbur1hpmao2f5dgc0256dj27.apps.googleusercontent.com';
var apiKey = 'AIzaSyCRP13syzKkOemWXKA3wXi1_bJsj_Fe3c0';
var userTimeZone = "Zurich";
var maxRows = 10;
var calName = "Internet-Veranstaltungen";
var calendar=[];
calendar[0]="web-professionals.ch_7j3opk4ea81j075e22eokd74ro@group.calendar.google.com";// Public Veranstaltungen
calendar[1]="web-professionals.ch_hvur00fojbon20ivoleejrlvk8@group.calendar.google.com";// WebPro Veranstaltungen

var scopes = 'https://www.googleapis.com/auth/calendar';

var events=[];

// Add a 0 to numbers
function padNum(num) {
    if (num <= 9) {
        return "0" + num;
    }
    return num;
}

// num Month to String
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

// from num to day of week
function dayString(num){
    if (num == "1") { return "Montag" }
    else if (num == "2") { return "Dienstag" }
    else if (num == "3") { return "Mittwoch" }
    else if (num == "4") { return "Donnerstag" }
    else if (num == "5") { return "Freitag" }
    else if (num == "6") { return "Samstag" }
    else if (num == "0") { return "Sonntag" }
}

// client CALL
function handleClientLoad() {
    gapi.client.setApiKey(apiKey);
    checkAuth();
}

// check Auth
function checkAuth() {
    gapi.auth.authorize({client_id: clientId, scope: scopes, immediate: true}, handleAuthResult);
}

// handle result and make CALL
function handleAuthResult(authResult) {
    if (authResult) {
        makeApiCall();
    }
}


function makeApiCall() {

    var today = new Date(); //today date
    gapi.client.load('calendar', 'v3', function () {
        for (var c = 0; c < calendar.length; c++) {
            var request = gapi.client.calendar.events.list({
                'calendarId' : calendar[c],
                'timeZone' : userTimeZone,
                'singleEvents': true,
                'timeMin': today.toISOString(), //gathers only events not happened yet
                'maxResults': maxRows,
                'orderBy': 'startTime'});
            request.execute(function (resp) {
                for (var i = 0; i < resp.items.length; i++) {
                    var item = resp.items[i];
                    var location = item.location;
                    var link = item.description;
                    var allDay = item.start.date? true : false;

                    var startDT = allDay ? item.start.date : item.start.dateTime;
                    var startDateTime = startDT.split("T"); //split date from time
                    var startDate = startDateTime[0].split("-"); //split yyyy mm dd
                    var startYear = startDate[0];
                    var startMonth = monthString(startDate[1]);
                    var startDay = startDate[2];
                    var startDateISO = new Date(startDate[1] + " " + startDay + ", " + startYear + " 00:00:00");
                    var startDayWeek = dayString(startDateISO.getDay());

                    var endDT = allDay ? item.end.date : item.end.dateTime;
                    var endDateTime = endDT.split("T"); //split date from time
                    var endDate = endDateTime[0].split("-"); //split yyyy mm dd
                    var endYear = endDate[0];
                    var endMonth = monthString(endDate[1]);
                    var endDay = endDate[2];
                    var endDateISO = new Date(endDate[1] + " " + endDay + ", " + endYear + " 00:00:00");
                    var endDayWeek = dayString(endDateISO.getDay());

                    //push into events array
                    events.push({
                        title:item.summary,
                        location:item.location,
                        link:item.link,
                        summary:item.summary,

                        startDayWeek:startDayWeek,
                        startDay:startDay,
                        startMonth:startMonth,
                        startYear:startYear,

                        endDayWeek:endDayWeek,
                        endDay:endDay,
                        endMonth:endMonth,
                        endYear:endYear,

                        allDay:allDay

                    });
                }
            });
        }
    });


    events.sort(function(a, b){
        var dateA=new Date(a.startDate), dateB=new Date(b.startDate)
        return dateA-dateB //sort by date ascending
    });


    //drawCards(events);
}

function drawCards(events) {

    var card = $('.card-event');
    for (var i = 0; i < events.length; i++) {

        var cardClone = card.clone();

        cardClone.find('.card-events-day').html(events[i].startDayWeek);
        cardClone.find('.card-events-date').html(events[i].startDay+'. '+events[i].startMonth+' '+events[i].startYear);
        cardClone.find('.card-events-title').html(events[i].summary);
        cardClone.find('.card-events-location').html(events[i].location);
        cardClone.find('.card-action a').attr("href", events[i].link);
        cardClone.removeClass('card-invisible').addClass('card-visible');
        cardClone.appendTo('.card-events');
    }
}



















// API CALL itself
function makeApiCallOLD() {
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
            var card = $('.card-event');
            for (var i = 0; i < resp.items.length; i++) {
                //var li = document.createElement('li');
                var item = resp.items[i];
                var classes = [];

                var location = item.location;
                var link = item.description;
                var allDay = item.start.date? true : false;
                var startDT = allDay ? item.start.date : item.start.dateTime;
                var dateTime = startDT.split("T"); //split date from time
                var date = dateTime[0].split("-"); //split yyyy mm dd
                var startYear = date[0];
                var startMonth = monthString(date[1]);
                var startDay = date[2];
                var startDateISO = new Date(date[1] + " " + startDay + ", " + startYear + " 00:00:00");
                var startDayWeek = dayString(startDateISO.getDay());
                /*
                 if( allDay == true){
                 // all day Events
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
                 var str = [
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
                 */
                var cardClone = card.clone();

                cardClone.find('.card-events-day').html(startDayWeek);
                cardClone.find('.card-events-date').html(startDay+'. '+startMonth+' '+startYear);
                cardClone.find('.card-events-title').html(item.summary);
                cardClone.find('.card-events-location').html(location);
                cardClone.find('.card-action a').attr("href", link);
                cardClone.removeClass('card-invisible').addClass('card-visible');
                cardClone.appendTo('.card-events');
            }

            document.getElementById('calendar').innerHTML = calName;
        });
    });
}