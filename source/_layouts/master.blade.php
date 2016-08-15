<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        @yield('header')
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="/css/main.css">
        <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
        @yield('css')
    </head>
    <body>
    <main>

        @yield('hero')

        @yield('navigation')

        <div class="background">
            <br>
            <div class="container">
                @yield('body')
                @yield('subnavmobile')
            </div>
        </div>

    </main>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Web Professionals</h5>
                    <p class="grey-text text-lighten-4">Techfabrik<br>Mühlbachstrasse 11a<br>CH-9472 Grabs<br><br>
                        <i class="material-icons tiny">email</i>&nbsp&nbsp info[at]web-professionals.ch<br>
                        <i class="material-icons tiny">phone</i>&nbsp&nbsp 077</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="/lehrgaenge/anmeldung/">Anmeldung Lehrgänge</a></li>
                        <li><a class="grey-text text-lighten-3" href="/agb/">AGB</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2016 Web Professionals GmbH
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>

        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="/js/main.js"></script>
    </body>
</html>
