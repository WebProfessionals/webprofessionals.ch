<br>
<div class="row">
    <div class="col s12">
        <input type="checkbox" id="agb" name="agb" required />
        <label for="agb">Ich bestätige, dass ich die <a href="#modal1">Allgemeinen Geschäftsbedingungen akzeptiere.</a> *</label>
    </div>
    <div class="input-field col s6">
        <input name="vorname" id="vorname" type="text" class="validate">
        <label for="vorname">Vorname</label>
    </div>
    <div class="input-field col s6">
        <input name="nachname" id="nachname" type="text" class="validate">
        <label for="nachname">Nachname</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <input name="strasse" id="strasse" type="text" class="validate">
        <label for="strasse">Strasse</label>
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
        <input name="plz" id="plz" type="text" class="validate">
        <label for="plz">PLZ</label>
    </div>
    <div class="input-field col s8">
        <input name="ort" id="ort" type="text" class="validate">
        <label for="ort">Ort</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <input name="email" id="email" type="email" class="validate">
        <label for="email">Email</label>
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
        <textarea name="informatikkenntnisse" id="v" class="materialize-textarea"></textarea>
        <label for="textarea1">Informatikkenntnisse</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <select name="referal" multiple>
            <option value="" disabled selected>Freunde, Google, Facebook oder Inserat?</option>
            <option value="Empfehlung">persönliche Empfehlung</option>
            <option value="Google">Google Suche</option>
            <option value="Google">Google AdWords</option>
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
        <input type="submit" class="waves-effect waves-light btn" id="sendenKontakt" value="absenden">
    </div>
</div>


<!-- AGB Modal  -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Allgemeine Geschäftsbedingungen</h4>
        <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
</div>
