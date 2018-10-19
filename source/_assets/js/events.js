var clientId = '77587040839-8rh5g1dbhbur1hpmao2f5dgc0256dj27.apps.googleusercontent.com';
var apiKey = 'AIzaSyCRP13syzKkOemWXKA3wXi1_bJsj_Fe3c0';
var userTimeZone = "Zurich";
var maxRows = 1000;

var scopes = 'https://www.googleapis.com/auth/calendar';

var events=[];
var calendarsParsed = 0;

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

// Web Pro Locations: manual Translation of plain text Calendar locations into object
function locationLookup(locationString) {
    var location = {};
    if (locationString.substring(0, 4)=="Tech") {
        location = {
            name: 'Techfabrik Grabs',
            street: 'Mühlbachstrasse 11a',
            zip: '9472',
            city: 'Grabs',
            country: 'CH'
        }
    } else if (locationString.substring(0, 3)=="ibW") {
        location = {
            name: 'ibW Höhere Fachschule Südostschweiz',
            street: 'Bahnhofpark 2a',
            zip: '7320',
            city: 'Sargans',
            country: 'CH'
        }
    } else {
        location = {
            name: '',
            street: '',
            zip: '',
            city: '',
            country: ''
        }
    }
    return location;
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

                    var startHour = 0;
                    var startMin = 0;
                    var endHour = 0;
                    var endMin = 0;
                    var startDateTimeStructured=0;
                    var endDateTimeStructured=0;
                    if( allDay == true){
                        // all day Events
                        startDateTimeStructured = startYear+'-'+startDate[1]+'-'+startDay;
                        endDateTimeStructured = endYear+'-'+endDate[1]+'-'+endDay;
                    } else {
                        var startTime = startDateTime[1].split(":"); //split hh ss etc...
                        var endTime = endDateTime[1].split(":"); //split hh ss etc...
                        startHour = startTime[0];
                        startMin = startTime[1];
                        endHour = endTime[0];
                        endMin = endTime[1];
                        startDateTimeStructured = startYear+'-'+startDate[1]+'-'+startDay+'T'+startHour+':'+startMin;
                        endDateTimeStructured = endYear+'-'+endDate[1]+'-'+endDay+'T'+endHour+':'+endMin;
                    }

                    var calType = calendarType[calendar.indexOf(item.organizer.email)]; // get CalendarType (webpro/public) based on CalID (workaround because of async call)

                    var location = {};
                    location = locationLookup(item.location);

                    //push into events array
                    events.push({
                        title:item.summary,
                        location:item.location,
                        locationName:location.name,
                        locationStreet:location.street,
                        locationZip:location.zip,
                        locationCity:location.city,
                        locationCountry:location.country,
                        hangoutLink:item.hangoutLink,
                        htmlLink:item.htmlLink,
                        description:item.description,
                        summary:item.summary,

                        startDayWeek:startDayWeek,
                        startDay:startDay,
                        startMonth:startMonth,
                        startYear:startYear,
                        startHour:startHour,
                        startMin:startMin,
                        startDateTimeStructured:startDateTimeStructured,
                        startDate:startDate,

                        endDayWeek:endDayWeek,
                        endDay:endDay,
                        endMonth:endMonth,
                        endYear:endYear,
                        endHour:endHour,
                        endMin:endMin,
                        endDateTimeStructured:endDateTimeStructured,

                        allDay:allDay,

                        calType:calType
                    });
                }
                calendarDone();
            });

        }
    });

}


function calendarDone() {
    calendarsParsed++;

    if (calendarsParsed == calendar.length) {
        events.sort(function(a, b){
            var dateA=new Date(a.startDate), dateB=new Date(b.startDate);
            return dateA-dateB;
        });
        drawCards(events);
    }
}

function drawCards(events) {

    $('#calendar-loading').hide();
    var card = $('.card-event');
    var materialicon;
    var datumStart;
    var datumEnde;
    for (var i = 0; i < events.length; i++) {

        var cardClone = card.clone();
        var summary = events[i].summary;
        var location = events[i].location;

        // create location link
        if (location) {
            location = '<a href="http://maps.google.com/?q='+location+'" target="_blank">'+location+' <i class="material-icons tiny">place</i></a>';
        } else {
            location = '';
        }

        // get Type of Events (webpro or public)
        if (events[i].calType=='webpro') {
            materialicon = 'school';
            cardClone.find('.card').addClass('webpro-green z-depth-2');
            cardClone.find('.card-content').addClass('white-text');
            cardClone.find('a').addClass('white-text');
        } else {
            materialicon = 'date_range';
        }

        // do allDay specific things
        if( events[i].allDay == true){
            cardClone.find('.card-events-time').html('ganzer Tag');
        }
        else{
            cardClone.find('.card-events-time').html(events[i].startHour+':'+events[i].startMin+' - '+events[i].endHour+':'+events[i].endMin+' Uhr');
        }

        // date string based on start/end date
        if((events[i].startDay!=events[i].endDay)) {
            // start/end not the same day
            datumStart = events[i].startDay+'. '+events[i].startMonth+' '+events[i].startYear+' - ';
            datumEnde = events[i].endDay+'. '+events[i].endMonth+' '+events[i].endYear+'<br>';
            cardClone.find('.card-events-enddate').html(datumEnde);
        } else {
            // same day
            datumStart = events[i].startDay+'. '+events[i].startMonth+' '+events[i].startYear;
            cardClone.find('.card-events-enddate').hide();
        }

        cardClone.find('.card-events-startdate').html(datumStart);
        cardClone.find('.card-events-day').html(events[i].startDayWeek);
        cardClone.find('.card-events-title').html(summary);
        cardClone.find('.card-events-location').html(location);
        cardClone.find('.card-icon').html(materialicon);

        // create link button if available
        var desc = events[i].description;
        if ( desc=='' || desc == null ) {
            cardClone.find('.card-action').hide();
        } else if (desc.substring(0, 4)=="http") {
            cardClone.find('.card-action a').attr("href", events[i].description);
            if (desc.indexOf('web-professionals.ch') !== -1) {
                cardClone.find('.card-action a').attr("target", '_self');
            }
        } else {
            cardClone.find('.card-action').hide();
            cardClone.find('.card-events-title').html(summary+'<br>'+events[i].description);
        }

        cardClone.removeClass('card-invisible').addClass('card-visible');
        cardClone.appendTo('.card-events');
    }
    jsonLD(events);
}

function jsonLD(events) {
    for (var i = 0; i < events.length; i++) {
        if (events[i].calType=='webpro') {


            var url = events[i].description;
            if ( url=='' || url == null || url.substring(0, 4)!="http") {
                url = 'https://web-professionals.ch/veranstaltungen/';
            }

            var el = document.createElement('script');
            el.type = 'application/ld+json';
            el.text = JSON.stringify({
                "@context": "http://schema.org",
                "@type": "Event",
                "name": events[i].summary,
                "startDate" : events[i].startDateTimeStructured,
                "endDate" : events[i].endDateTimeStructured,
                "url": url,
                "location" : {
                    "@type" : "Place",
                    "name" : events[i].locationName,
                    "address": {
                        "@type": "PostalAddress",
                        "addressLocality": events[i].locationCity,
                        "streetAddress": events[i].locationStreet,
                        "postalCode": events[i].locationZip,
                        "addressCountry" : events[i].locationCountry
                    }
                }
            });
            document.querySelector('head').appendChild(el);
        }
    }
}