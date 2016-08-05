@extends('_layouts.master')

@section('header')
    <title>Web Pro: Lehrgänge</title>
@endsection

@section('navigation')
    @include('_partials.navigation', [
        'nav2status'    =>  ' is-active'
    ])
@endsection

@section('body')
    <div class="mdl-grid mdl-grid--no-spacing">
        <aside class="mdl-cell mdl-cell--12-col-desktop mdl-cell--4-col-phone mdl-shadow--4dp"><a href="#">Web Integrator</a> <a href="#">Web Frontend Developer</a> <a href="#">Web Application Developer</a> <a href="#">Web Designer</a></aside>
    </div>
        <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--5-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ">
        @include('_partials/blindtext')
      </div>
      <div class="mdl-cell mdl-cell--3-col-desktop mdl-cell--1-offset-desktop mdl-cell--8-col-tablet  mdl-cell--4-col-phone ">
          @include('_partials/karte')
      </div>
      <div class="mdl-cell mdl-cell--1-col-desktop mdl-cell--hide-tablet mdl-cell--hide-phone">Abstand</div>
  </div>
@endsection