@extends('layouts.lte')

@section('title', 'Bacheca')

@section('content_header')
    
@stop

@section('content')
    {{-- alert popup message --}}
    @if (session('alert-message'))
        <div id="popup_message" class="d-none" data-type="{{ session('alert-type') }}" data-message="{{ session('alert-message') }}"></div>
    @endif
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
@stop

@section('css')
    <!-- link rel="stylesheet" href="/css/buttons.css" -->
@stop

@section('js')
    <script src="{{ asset('js/popup-message.js') }}"></script>
@stop