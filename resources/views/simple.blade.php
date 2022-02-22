@extends('layouts.lte')

@section('title', 'Pagina di esempio')

@section('content_header')
    @yield('title')
@stop

@section('content')
    {{-- alert popup message --}}
    @if (session('alert-message'))
        <div id="popup_message" class="d-none" data-type="{{ session('alert-type') }}" data-message="{{ session('alert-message') }}"></div>
    @endif
    <p>Pagina di esempio.</p>
@stop

@section('css')
    <!-- link rel="stylesheet" href="/css/buttons.css" -->
@stop

@section('js')
    <script src="{{ asset('js/popup-message.js') }}"></script>
@stop