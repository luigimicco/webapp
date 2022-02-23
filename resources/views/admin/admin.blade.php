@extends('layouts.lte')

@section('title', 'Pannello di controllo')

@section('content_header')
    {{ Breadcrumbs::render() }}
@stop

@section('content')

    {{-- alert popup message --}}
    @if (session('alert-message'))
        <div id="popup_message" class="d-none" data-type="{{ session('alert-type') }}" data-message="{{ session('alert-message') }}"></div>
    @endif

  <a class="btn btn-primary btn-big " href="users">
    <i class="fas fa-users"></i>
    <span class="caption">Utenti</span>
  </a> 

  <a class="btn btn-primary btn-big " href="permissions">
    <i class="fas fa-id-badge"></i>
    <span class="caption">Permessi</span>
  </a> 
  <hr>
  <p>Comandi Artisan</p>
  <a class="btn btn-warning btn-big " href="command/migrate">
    <i class="fas fa-database"></i>
    <span class="caption">Migrate</span>
  </a> 

  <a class="btn btn-warning btn-big " href="command/cache">
    <i class="fas fa-trash-alt"></i>
    <span class="caption">Clear cache</span>
  </a> 
  


@stop

@section('css')
    <link rel="stylesheet" href="/css/buttons.css">
@stop

@section('js')
    <script src="{{ asset('js/popup-message.js') }}"></script>
@stop