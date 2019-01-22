<div class="row">
    <div class="col s12">
        <p id="js-anmeldung-step3-grabs">
            <input type="checkbox" id="sg" name="grabs" value="Grabs" />
            <label for="sg">Grabs (Freitag Abend / Samstag Vormittag)</label>
        </p>
        <p id="js-anmeldung-step3-stgallen">
            <input type="checkbox" id="grabs" name="sg" value="St.Gallen" />
            <label for="grabs">St.Gallen (Freitag Abend / Samstag Vormittag)</label>
        </p>
        <p id="js-anmeldung-step3-chur">
            <input type="checkbox" id="chur" name="chur" value="Chur" />
            <label for="chur">Chur (Montag Abend / Mittwoch Abend)</label>
        </p>
        <p id="js-anmeldung-step3-rapperswil">
            <input type="checkbox" id="rapperswil" name="rapperswil" value="Rapperswil" />
            <label for="rapperswil">Rapperswil (Dienstag Abend / Donnerstag Abend)</label>
        </p>
    </div>
</div>

<div class="row">
    <div class="input-field col s6">
        <input name="vorname" id="vorname" type="text" class="validate" required>
        <label for="vorname">Vorname *</label>
    </div>
    <div class="input-field col s6">
        <input name="nachname" id="nachname" type="text" class="validate" required>
        <label for="nachname">Nachname *</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <input name="strasse" id="strasse" type="text" class="validate" required>
        <label for="strasse">Strasse 1</label>
    </div>
</div>
<div class="hide">
    <div class="input-field col s12">
        <input name="strasse2" id="strasse2" type="text" class="validate">
        <label for="strasse2">Strasse 2</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s4">
        <input name="plz" id="plz" type="text" class="validate" required>
        <label for="plz">PLZ *</label>
    </div>
    <div class="input-field col s8">
        <input name="ort" id="ort" type="text" class="validate" required>
        <label for="ort">Ort *</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <input name="email" id="email" type="email" class="validate" required>
        <label for="email">Email *</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <input name="geburtstag" id="geburtstag" type="text" class="validate">
        <label for="strasse">Geburtsdatum</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <textarea name="faktura" id="v" class="materialize-textarea"></textarea>
        <label for="textarea1">Faktura-Adresse (falls unterschiedlich von obiger Adresse)</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <textarea name="webpraxis" id="v" class="materialize-textarea"></textarea>
        <label for="textarea1">Web-Praxis</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <textarea name="informatikkenntnisse" id="informatikkenntnisse" class="materialize-textarea"></textarea>
        <label for="textarea1">Informatikkenntnisse</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <select name="referal">
            <option value="" disabled selected>Freunde, Google, Facebook oder Inserat?</option>
            <option value="Empfehlung">persönliche Empfehlung</option>
            <option value="Google Suche">Google Suche</option>
            <option value="Google AdWords">Google AdWords Werbung</option>
            <option value="Facebook">Facebook</option>
            <option value="Inserat">Inserat</option>
            <option value="APG">APG Plakat</option>
            <option value="anderes">anderes</option>
        </select>
        <label>Wie bist du auf uns aufmerksam geworden?</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <input name="referal-more" id="referal-more" type="text" class="validate">
        <label for="referal-more">Wenn "Empfehlung": über wen? Wenn "anderes": wie?</label>
    </div>
</div>

<div class="row">
    <div class="col s12">
        <input type="checkbox" id="agb" name="agb" required />
        <label for="agb">Ich bestätige, dass ich die <a href="#modal1">Allgemeinen Geschäftsbedingungen akzeptiere.</a> *</label>
        <br>&nbsp;
    </div>
</div>

<div class="row">
    <div class="col s12">
        <input type="hidden" id="lehrgang" name="lehrgang">
        <input type="hidden" id="standort" name="standort">
        <input type="submit" class="waves-effect waves-light btn" value="Anmelden">

    </div>
</div>


<!-- AGB Modal  -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Allgemeine Geschäftsbedingungen</h4>
        @include('_partials.agb')
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Schliessen</a>
    </div>
</div>
