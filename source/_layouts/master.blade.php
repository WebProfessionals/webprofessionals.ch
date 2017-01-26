<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="theme-color" content="#892425">
        @yield('header')
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
        @yield('css')

        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
                n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
                document,'script','https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1605098943074263'); // Insert your pixel ID here.
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=1605098943074263&ev=PageView&noscript=1"
            /></noscript>
        <!-- DO NOT MODIFY -->
        <!-- End Facebook Pixel Code -->

    </head>
    @yield('pixel')
    <body>
        <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "EducationalOrganization",
            "name": "Web Professionals",
            "url": "https://web-professionals.ch",
            "sameAs": [
                "https://www.facebook.com/WebProfessionalsOstschweiz/",
                "https://twitter.com/webproCH"
            ],
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Grabs",
                "postalCode": "9472",
                "streetAddress": "Mühlbachstrasse 11a"
            },
            "contactPoint": [
                {
                    "@type": "ContactPoint",
                    "telephone": "+41 77 460 38 85",
                    "email": "info@web-professionals.ch",
                    "contactType": "customer support"
                }
            ],
            "founder": [
                {
                    "@type": "Person",
                    "name": "Rolf Eggenberger",
                    "jobTitle": "CEO"
                }
            ]
        }

        </script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', '{{ $analytics }}', 'auto');
            ga('send', 'pageview');

        </script>

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
                        <p class="grey-text text-lighten-4">Techfabrik<br><span>Mühlbachstrasse 11a</span><br><span>CH</span>-<span>9472</span> <span>Grabs</span><br><br>
                            <i class="material-icons tiny">email</i>&nbsp;info[at]web-professionals.ch<br>
                            <i class="material-icons tiny">phone</i>&nbsp;077 460 38 85</p>
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
            <p>Wir haben vermutet, dass du und zwei andere das Smartphone drehen um zu kontrollieren, ob das Layout damit auch funktioniert.</p>
            <i class="material-icons medium">autorenew</i>
            <p>Bringt in der Ansicht aber nicht wirklich viel - also Smartphone ganz schnell wieder zurück drehen :-)</p>
        </div>

        <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
        <script defer src="//code.getmdl.io/1.1.3/material.min.js"></script>
        <script src="/js/main.js"></script>
    </body>
</html>
