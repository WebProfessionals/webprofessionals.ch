<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tasks aus PHPStorm automatisch starten | Web Professionals</title>


    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/images/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/images/favicon/manifest.json">
    <link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/images/favicon/favicon.ico">
    <meta name="msapplication-config" content="/images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>

<main>

    <header class="webpro-hero-image">
        <picture>
            <source media="(max-width: 600px)" srcset="/images/background/web_professionals_034_phone.jpg">
            <img src="/images/background/web_professionals_034.jpg" alt="Web Professionals" title="Web Professionals">
        </picture>
    </header>
    <header class="webpro-hero">
        <div class="row">
            <div class="col s12 m12 l12 center-align webpro-hero-logo"><a href="/index.html"><img src="/images/logo_web_professionals_top.svg" alt="Web Professionals Logo" title="Web Professionals Logo" width="400px"></a></div>
            <div class="col m6 l6 right-align webpro-hero-social hide-on-small-only">
                <div id="social-media">
                    <a href="https://play.google.com/store/apps/details?id=com.techfabrik.webpro" class="social-android" title="Android App der Web Professionals herunterladen" target="_blank">Android</a>
                    <a href="https://itunes.apple.com/app/id956778225" class="social-ios" title="iOS App der Web Professionals herunterladen" target="_blank">iOS</a>
                    <a href="https://www.facebook.com/WebProfessionalsOstschweiz" class="social-fb" title="Folge uns auf Facebook" target="_blank">Facebook</a>
                    <a href="https://plus.google.com/101281770968706437459/posts" class="social-gp" title="Google+ gibt es auch noch" target="_blank">Google+</a>
                    <a href="https://twitter.com/WebProCH" class="social-tw" title="Unsere Tweets" target="_blank">Twitter</a>
                    <!-- <a href="https://www.instagram.com/web_professionals/" class="social-in" title="Instagram für schöne Bilder" target="_blank">Instagram</a> -->
                    <a href="https://www.youtube.com/channel/UCqBw30GcrJDms54l1g4CAWQ/" class="social-yt" title="YouTube Videos" target="_blank">YouTube</a>
                </div>    </div>
        </div>

        <div class="webpro-hero-claim">
            <span class="webpro-hero1">Gestalte das Web</span><br>
            <span class="webpro-hero2">Die Ausbildung für angehende Webprofis</span><br><br>
            <a class="waves-effect waves-light btn webpro-red" href="/lehrgaenge/">Jetzt informieren</a>
        </div>
    </header>

    <nav class="webpro-nav-lvl1">
        <ul class="tabs z-depth-1">
            <li class="tab col s3"><a href="/index.html" target="_self" class="waves-effect waves-light  active">Home</a></li>
            <li class="tab col s3"><a href="/lehrgaenge/" target="_self" class="waves-effect waves-light ">Lehrgänge</a></li>
            <li class="tab col s3"><a href="/kurse/" target="_self" class="waves-effect waves-light ">Kurse</a></li>
            <li class="tab col s3"><a href="/veranstaltungen/" target="_self" class="waves-effect waves-light ">Events</a></li>
            <li class="tab col s3"><a href="/camp/" target="_self" class="waves-effect waves-light ">Camp</a></li>
            <li class="tab col s3"><a href="/ausbildung/" target="_self" class="waves-effect waves-light ">Ausbildung</a></li>
            <li class="tab col s3"><a href="/kontakt/" target="_self" class="waves-effect waves-light ">Kontakt</a></li>
        </ul>
    </nav>
    <div class="background">
        <br>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <header>
                        <span class="webpro-h1-before">Tipp</span>
                        <h1 class="webpro">Tasks aus PHPStorm automatisch starten</h1>
                    </header>
                </div>
                <div class="col l4 m5">
                    <p><img class="responsive-img materialboxed" width="650" src="/images/aktuelles/phpstorm.png"></p>
                </div>
                <section class="col l7 offset-l1 m6 offset-m1">
                    <p>Manchmal kann etwas kleines eine grosse Wirkung haben. Bei mir war es neulich die Tatsache, dass ich (eher zufällig) entdeckt habe, dass PHPStorm nicht nur in der Lage ist grunt / gulp / npm etc. auszuführen, sondern diese auch automatisch beim Öffnen eines Projektes startet. Wie lässt sich dies konfigurieren? Ganz einfach:</p>
                    <p>File > Settings > Tools > Startup Tasks (Windows und Linux) resp. <br>PhpStorm > Preferences > Tools > Startup Tasks (OS X)</p>
                    <p>Dort lassen sich pro Projekt beliebig viele Taskrunner / Skripte konfigurieren, welche automatisch ausgeführt werden sollen. Wer zum Beispiel Zurb Foundation 6 für das Prototyping verwendet kann einen npm start Task aufsetzen und muss lediglich noch den Pfad zum package.json angeben. Und jedes Mal wenn das Projekt in PHPStorm geöffnet wird startet der npm Task automatisch. Oder wer Gulp basierte Tasks verwendet setzt den Pfad zum entsprechenden gulpfile und kann sich damit in Zukunft immerhin ein paar weitere manuelle Tasks ersparen.</p>
                    <p>Mehr Zeit für wichtigere Dinge :-)</p>
                </section>
            </div>



        </div>
    </div>

</main>

<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Web Professionals</h5>
                <p class="grey-text text-lighten-4">Techfabrik<br>Mühlbachstrasse 11a<br>CH-9472 Grabs<br><br>
                    <i class="material-icons tiny">email</i>&nbsp;info[at]web-professionals.ch<br>
                    <i class="material-icons tiny">phone</i>&nbsp;&nbsp;077</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="/lehrgaenge/anmeldung/">Anmeldung Lehrgänge</a></li>
                    <li><a class="grey-text text-lighten-3" href="/kurse/anmeldung/">Anmeldung Kurse</a></li>
                    <li><a class="grey-text text-lighten-3" href="/agb/">Allgemeine Geschäftsbedingungen</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2016 Web Professionals GmbH
        </div>
    </div>
</footer>

<div id="webpro-landscape">
    <i class="material-icons medium">autorenew</i>
    <p>Wir haben vermutet, dass du und zwei andere das Smartphone drehen werden um zu kontrollieren, ob das Layout damit auch funktioniert.</p>
    <p>Bringt in der Ansicht aber nicht wirklich viel - also Smartphone ganz schnell wieder zurück drehen :-)</p>
</div>

<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
<script defer src="//code.getmdl.io/1.1.3/material.min.js"></script>
<script src="/js/main.js"></script>
</body>
</html>