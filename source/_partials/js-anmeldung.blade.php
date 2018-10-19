<script>
    function onSubmit(token) {
        document.getElementById("form-anmeldung").submit();
        console.log('ok');
    }

    function validate(event) {
        event.preventDefault();
        var checkedValue = $('#agb:checked').val();

        if      (!checkedValue) { $('#agb').focus(); }
        else if (!document.getElementById('vorname').value) { $('#vorname').focus(); }
        else if (!document.getElementById('nachname').value) { $('#nachname').focus(); }
        else if (!document.getElementById('strasse').value) { $('#strasse').focus(); }
        else if (!document.getElementById('plz').value) { $('#plz').focus(); }
        else if (!document.getElementById('ort').value) { $('#ort').focus(); }
        else if (!document.getElementById('email').value) { $('#email').focus(); }
        else {
            grecaptcha.execute();
        }
    }

    function onload() {
        var element = document.getElementById('submitbutton');
        element.onclick = validate;
    }

</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>