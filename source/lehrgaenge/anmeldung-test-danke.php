<?php
$lehrgang               = $_POST['lehrgang'];
$agb                    = $_POST['agb'];
$vorname                = $_POST['vorname'];
$nachname               = $_POST['nachname'];
$strasse                = $_POST['strasse'];
$honeypot               = $_POST['strasse2'];
$plz                    = $_POST['plz'];
$ort                    = $_POST['ort'];
$email                  = $_POST['email'];
$geburtstag             = $_POST['geburtstag'];
$faktura                = $_POST['faktura'];
$webpraxis              = $_POST['webpraxis'];
$informatikkenntnisse   = $_POST['informatikkenntnisse'];
$referal                = $_POST['referal'];
$next                   = $_POST['_next'];


// Mail senden

// honeypot spam check
if(empty($honeypot) && isset($_POST['Submit']))
{
    $empfaenger = "info@web-professionals.ch";
    $betreff = "Anmeldung ".$lehrgang;
    $from = "From: Web Professionals Website <info@web-professionals.ch>\n";
    $from .= "Reply-To: ".$email."\n";
    $from .= "Content-Type: text/html\n";
    $text = "<strong>Herzlichen Willkommen bei den Web Professionals!<br><br>";
    $text .=    "Lehrgang: ".$lehrgang;

    mail($empfaenger, $betreff, $text, $from);
}

include '/lehrgaenge/anmeldung-danke/index.html';
?>

