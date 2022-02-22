@extends('layouts.lte')

@section('title', 'Pannello di controllo')

@section('content_header')
    {{ Breadcrumbs::render() }}
@stop

@section('content')

  <a class="btn btn-primary btn-big " href="users">
    <i class="fas fa-users"></i>
    <span class="caption">Utenti</span>
  </a> 

  <a class="btn btn-primary btn-big " href="permissions">
    <i class="fas fa-id-badge"></i>
    <span class="caption">Permessi</span>
  </a>   


@stop

@section('css')
    <link rel="stylesheet" href="/css/buttons.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop