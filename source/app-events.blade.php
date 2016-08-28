@extends('_layouts.mobile-app')

{{-- Header --}}
@section('header')
    <title>Veranstaltungen | Web Professionals</title>
@endsection


{{-- Main Content --}}
@section('body')

    <div class="row">
        @include('_partials.veranstaltungen.events')
    </div>

@endsection
