<?php

if (isset($_POST['agb'])) { $agb = $_POST['agb'];} else { $agb = ''; }
if (isset($_POST['vorname'])) { $vorname = $_POST['vorname'];} else { $vorname = ''; }
if (isset($_POST['nachname'])) { $nachname = $_POST['nachname'];} else { $nachname = ''; }
if (isset($_POST['strasse'])) { $strasse = $_POST['strasse'];} else { $strasse = ''; }
if (isset($_POST['strasse2'])) { $honeypot = $_POST['strasse2'];} else { $honeypot = ''; }
if (isset($_POST['plz'])) { $plz = $_POST['plz'];} else { $plz = ''; }
if (isset($_POST['ort'])) { $ort = $_POST['ort'];} else { $ort = ''; }
if (isset($_POST['email'])) { $email = $_POST['email'];} else { $email = ''; }
if (isset($_POST['geburtstag'])) { $geburtstag = $_POST['geburtstag'];} else { $geburtstag = 'keine Angabe'; }
if (isset($_POST['faktura'])) { $faktura = $_POST['faktura'];} else { $faktura = 'keine Angabe'; }
if (isset($_POST['webpraxis'])) { $webpraxis = $_POST['webpraxis'];} else { $webpraxis = 'keine Angabe'; }
if (isset($_POST['informatikkenntnisse'])) { $informatikkenntnisse   = $_POST['informatikkenntnisse'];} else { $informatikkenntnisse = 'keine Angabe'; }
if (isset($_POST['referal'])) { $referal = $_POST['referal'];} else { $referal = 'keine Angabe'; }
if (isset($_POST['referal-more'])) { $referalMore = $_POST['referal-more'];} else { $referalMore = 'keine Angabe'; }

if (isset($_POST['_next'])) { $next = $_POST['_next'];} else { $next = ''; }
if (isset($_POST['lehrgang'])) { $lehrgang = $_POST['lehrgang']; } else { $lehrgang = ''; }
if (isset($_POST['sku'])) { $sku = $_POST['sku']; } else { $sku = ''; }
if (isset($_POST['gebuehr'])) { $gebuehr = $_POST['gebuehr'];} else { $gebuehr = 0; }
if (isset($_POST['typ'])) { $typ = $_POST['typ'];} else { $typ = 0; }

// Mail senden

// honeypot spam check
if(empty($honeypot))
{
    $empfaenger = "info@web-professionals.ch, ".$email;
    $betreff = "Anmeldung ".$lehrgang;
    $from = "From: Web Professionals Website <info@web-professionals.ch>\n";
    $from .= "Reply-To: ".$email."\n";
    $from .= "Content-Type: text/html\n";
    $text = "<strong>Herzlich Willkommen bei den Web Professionals!</strong><br>";
    $text .= "Wir freuen uns, dich bei den Web Professionals begrüssen zu dürfen und bestätigen folgende Anmeldung:<br><br>";
    $text .= "<strong>Lehrgang:</strong> $lehrgang<br><br>";
    $text .= "<strong>Vorname:</strong> $vorname<br>";
    $text .= "<strong>Nachname:</strong> $nachname<br>";
    $text .= "<strong>Strasse:</strong> $strasse<br>";
    $text .= "<strong>PLZ:</strong> $plz<br>";
    $text .= "<strong>Ort:</strong> $ort<br><br>";
    $text .= "<strong>E-Mail:</strong> $email<br>";
    $text .= "<strong>Geburtstag:</strong> $geburtstag<br><br>";
    $text .= "<strong>Faktura-Adresse:</strong><br>".nl2br($faktura, false)."<br><br>";
    $text .= "<strong>Web-Praxis:</strong><br>".nl2br($webpraxis, false)."<br>";
    $text .= "<strong>Informatik-Kenntnisse:</strong><br>".nl2br($informatikkenntnisse, false)."<br>";
    $text .= "<strong>Referal:</strong> $referal";
    $text .= "<strong>Referal weitere Angaben:</strong> $referalMore";

    $text .= "<br><br>Im Laufe der nächsten Tage senden wir dir die schriftliche Anmeldebestätigung per Post zu.";
    $text .= "<br><br>Mit liebem Gruss";
    $text .= "<br><strong>Web Professionals</strong>";
    $text .= "<br>Rolf Eggenberger, Lehrgangsleiter";
    echo $text;


    // Google E-Commerce

    // Transaction Data
    $trans = array(
        'id'=>time(),
        'revenue'=>$gebuehr
    );

    // List of Items Purchased.
    $items = array(
        array(
            'sku'=>$sku,
            'name'=>$lehrgang,
            'category'=>$typ,
            'price'=>$gebuehr,
            'quantity'=>'1'
        ),
    );

    // Function to return the JavaScript representation of a TransactionData object.
    function getTransactionJs(&$trans) {
        return <<<HTML
ga('ecommerce:addTransaction', {
  'id': '{$trans['id']}',
  'revenue': '{$trans['revenue']}'
});
HTML;
    }

// Function to return the JavaScript representation of an ItemData object.
    function getItemJs(&$transId, &$item) {
        return <<<HTML
ga('ecommerce:addItem', {
  'id': '$transId',
  'name': '{$item['name']}',
  'sku': '{$item['sku']}',
  'category': '{$item['category']}',
  'price': '{$item['price']}',
  'quantity': '{$item['quantity']}'
});
HTML;
    }

    //mail($empfaenger, $betreff, $text, $from);

}

include 'danke-content/index.html';
?>

<!-- Begin HTML -->
<script>
    ga('require', 'ecommerce');

    <?php
    echo getTransactionJs($trans);

    foreach ($items as &$item) {
        echo getItemJs($trans['id'], $item);
    }
    ?>

    ga('ecommerce:send');
</script>

