// Anmeldung

var lehrgang;
var standort;

$(".js-anmeldung-step1").on( "click", function(event) {

  lehrgang = $(this).data('lehrgang');

  $('#anmeldung-step1').hide();
  $('#anmeldung-step2').show();
  $('#anmeldung-step3').hide();

  // Standorte ein/-ausblenden
  if (lehrgang === 'Web Integrator') {
    $('#js-anmeldung-step2-grabs').show();
    $('#js-anmeldung-step2-stgallen').show();
    $('#js-anmeldung-step2-chur').show();
    $('#js-anmeldung-step2-rapperswil').show();
  } else if (lehrgang === 'Web Developer') {
    $('#js-anmeldung-step2-grabs').show();
    $('#js-anmeldung-step2-stgallen').show();
    $('#js-anmeldung-step2-chur').hide();
    $('#js-anmeldung-step2-rapperswil').show();
  } else if (lehrgang === 'Web Designer') {
    $('#js-anmeldung-step2-grabs').show();
    $('#js-anmeldung-step2-stgallen').show();
    $('#js-anmeldung-step2-chur').hide();
    $('#js-anmeldung-step2-rapperswil').hide();
  } else if (lehrgang === 'Master Class') {
    $('#js-anmeldung-step2-grabs').show();
    $('#js-anmeldung-step2-stgallen').show();
    $('#js-anmeldung-step2-chur').hide();
    $('#js-anmeldung-step2-rapperswil').hide();
  }


});

$(".js-anmeldung-step2").on( "click", function(event) {

  standort = $(this).data('standort');

  $('#anmeldung-step1').hide();
  $('#anmeldung-step2').hide();
  $('#anmeldung-step3').show();

  $('#js-anmeldung-step3-grabs').show();
  $('#js-anmeldung-step3-stgallen').show();
  $('#js-anmeldung-step3-chur').show();
  $('#js-anmeldung-step3-rapperswil').show();

  if (lehrgang === 'Web Developer') {
    $('#js-anmeldung-step3-chur').hide();
  } else if (lehrgang === 'Web Designer') {
    $('#js-anmeldung-step3-rapperswil').hide();
    $('#js-anmeldung-step3-chur').hide();
  } else if (lehrgang === 'Master Class') {
    $('#js-anmeldung-step3-rapperswil').hide();
    $('#js-anmeldung-step3-chur').hide();
  }

  // Standorte ein/-ausblenden
  if (standort === 'Grabs') {
    $('#js-anmeldung-step3-grabs').hide();
  } else if (standort === 'St.Gallen') {
    $('#js-anmeldung-step3-stgallen').hide();
  } else if (standort === 'Chur') {
    $('#js-anmeldung-step3-chur').hide();
  } else if (standort === 'Rapperswil') {
    $('#js-anmeldung-step3-rapperswil').hide();
  }

});

var anmeldungForm = document.getElementById('anmeldung-form');
anmeldungForm.addEventListener('submit', function(event) {
  event.preventDefault();
  this.lehrgang.value = lehrgang;
  this.standort.value = standort;
  $('#anmeldung-step3').hide();
  $('#anmeldung-processing').show();
  emailjs.sendForm('gmail', 'template_TCWOUL7A', '#anmeldung-form')
    .then(function(response) {
      console.log('SUCCESS!', response.status, response.text);
      $('#anmeldung-processing').hide();
      $('#anmeldung-ok').show();
    }, function(error) {
      console.log('FAILED...', error);
      $('#anmeldung-processing').hide();
      $('#anmeldung-error').show();
    });

});
