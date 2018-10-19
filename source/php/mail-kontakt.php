<?php

$empfaenger = 'rolf@kunstwort.com';
$betreff = 'Der Betreff';
$nachricht = 'Hallo';
$header = 'From: rolf@web-professionals.ch' . "\r\n" .
    'Reply-To: rolf@web-professionals.ch' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($empfaenger, $betreff, $nachricht, $header);

echo("Empfaenger: $empfaenger <br>");
echo("Betreff: $betreff <br>");
echo("Nachricht: $nachricht <br>");
echo("Header: $header <br>");
echo "Your email was sent!"; // success message
?>