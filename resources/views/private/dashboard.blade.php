@extends('layouts.lte')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Bacheca</h1>
@stop

@section('content')
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

  <a class="btn btn-primary btn-big " href="#">
    <i class="fas fa-star"></i>
    <span class="caption">Text</span>
  </a> 

  <a class="btn btn-default btn-big " href="#">
    <i class="fas fa-star"></i>
    <span class="caption">Text</span>
  </a> 

  <a class="btn btn-danger btn-big " href="#">
    <i class="fas fa-star"></i>
    <span class="caption">Text</span>
  </a> 
  
  <a class="btn btn-success btn-big " href="#">
    <i class="fas fa-star"></i>
    <span class="caption">Text</span>
  </a> 

  <a class="btn btn-warning btn-big " href="#">
    <i class="fas fa-star"></i>
    <span class="caption">Text</span>
  </a>   

  <a class="btn btn-dark btn-big " href="#">
    <i class="fas fa-star"></i>
    <span class="label">Label</span>
    <span class="caption">Text</span>
  </a>

@stop

@section('css')
    <link rel="stylesheet" href="/css/buttons.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop