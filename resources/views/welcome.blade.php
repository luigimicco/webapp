@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('footer')
    <div class="d-flex justify-content-between">
        <div class="flex-grow-1">
            Copyright © 2022 <strong>Cartesio</strong>. All rights reserved.
        </div>
        <div>
            <strong>Version</strong> 0.0.0
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop