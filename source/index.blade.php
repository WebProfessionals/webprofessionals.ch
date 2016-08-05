@extends('_layouts.master')

@section('hero')
    <div class="webpro-hero">

        <div class="webpro-hero-claim">
            <span class="webpro-hero1">Gestalte das Web</span><br>
            <span class="webpro-hero2">Die Ausbildung für angehende Webprofis</span>
        </div>
    </div>
@endsection

@section('header')
    <title>Web Pro: Home</title>
@endsection

@section('navigation')
    @include('_partials.navigation', [
        'nav1status'    =>  ' is-active'
    ])
@endsection

@section('body')
  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--6-col mdl-cell--2-offset-desktop mdl-cell--8-col-tablet mdl-cell--6-col-phone">
        <div class="h1">
            <span class="h1-before">Willkommen bei den</span>
            <h1>Web Professionals</h1>
            <span class="h1-after">&nbsp;</span>
        </div>
        Die Ausbildung für angehende Web Profis ermöglicht Dir einen erfolgreichen Berufsstart in die Online-Welt! Initiiert und getragen durch führende Internet-Agenturen der Ostschweiz, durchgeführt an der ibW Höheren Fachschule Südostschweiz Chur (Bildungspartner), der Techfabrik Grabs sowie der Hochschule für Technik Rapperswil (Durchführungspartner). Nächster Lehrgangsstart: November 2016. Besuche uns an einem unserer Informationsanlässe und informiere Dich über die Web Professionals. Wir freuen uns auf Dich!
    </div>
  </div>
@endsection
