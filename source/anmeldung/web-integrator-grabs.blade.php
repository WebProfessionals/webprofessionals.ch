@extends('_layouts.master')

{{-- Header --}}
@section('header')
    <title>Anmeldung Lehrgänge | Web Professionals</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        function onSubmit(token) {
            console.log('recaptcha');
            document.getElementById("form-anmeldung").submit();
        }
    </script>

@endsection

{{-- Hero Unit on Top --}}
@section('hero')
    <header class="webpro-hero-image">
        <picture>
            <source media="(max-width: 600px)" srcset="/images/background/web_professionals_014_phone.jpg">
            <img src="/images/background/web_professionals_014.jpg" alt="Web Professionals" title="Web Professionals">
        </picture>
    </header>
    <header class="webpro-hero">
        @include('_partials.herotop')
        <div class="webpro-hero-claim">
            <span class="webpro-hero1">Leg' los!</span><br>
            <span class="webpro-hero2">Step by step zum Web-Profi</span><br>
            <!-- <a class="waves-effect waves-light btn webpro-red webpro-hero-button hide-on-small-only">Jetzt informieren</a> -->
        </div>
    </header>
@endsection

{{-- Main Navigation --}}
@section('navigation')
    @include('_partials.navigation', [
        'nav2status'    =>  ' active'
    ])
@endsection

{{-- Main Content --}}
@section('body')
    <div class="row">
        <div class="col l5 m6 s12 webpro-left">
            @include('_partials.header1', [
                'part1'    =>  'Deine',
                'part2'    =>  'Anmeldung'
            ])
        </div>
        <div class="col l7 m6 webpro-right">
            <h2>Anmeldung zum Lehrgang Web Integrator in Grabs SG</h2>

            <form action="/anmeldung/danke.php" method="POST" id="form-anmeldung">
                @include('_partials.anmeldung-formular')
                <input type="hidden" name="lehrgang" value="Web Integrator Grabs" />
                <input type="hidden" name="sku" value="INT_GRABS_17_18" />
                <input type="hidden" name="typ" value="Lehrgang" />
                <input type="hidden" name="gebuehr" value="3100" />
                <input type="hidden" name="_subject" value="Anmeldung Web Integrator Grabs" />
                <input type="hidden" name="_next" value="https://web-professionals.ch/lehrgaenge/anmeldung-danke-web-integrator-grabs/" />
            </form>

        </div>

    </div>
    <br><br><br><br><br><br><br><br><br>&nbsp;
@endsection

@section('subnavmobile')

@endsection
