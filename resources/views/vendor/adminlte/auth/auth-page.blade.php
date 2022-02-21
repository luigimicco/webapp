@extends('adminlte::master')

@php( $dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home') )

@if (config('adminlte.use_route_url', false))
    @php( $dashboard_url = $dashboard_url ? route($dashboard_url) : '' )
@else
    @php( $dashboard_url = $dashboard_url ? url($dashboard_url) : '' )
@endif

@section('adminlte_css')
    @stack('css')
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@stop

@section('classes_body'){{ ($auth_type ?? 'login') . '-page' }}@stop

@section('body')
    <div class="container-fluid">
        <!-- Image and text -->
        <nav class="navbar fixed-top navbar-light bg-light bg-white shadow-sm justify-content-between">
            <a class="navbar-brand" href="/login">
                <img src="{{ asset(config('adminlte.logo_img')) }}" class="{{ config('adminlte.logo_img_class') }}" height="30"> 
                {!! config('adminlte.logo', '<b>Admin</b>LTE') !!}
            </a>
            <a href="{{ config('adminlte.contact_url') }}" class="btn btn-link p-2">Contatti</a>
        </nav>
    </div>


    <div class="{{ $auth_type ?? 'login' }}-box">
        {{-- Logo --}}
        <div class="{{ $auth_type ?? 'login' }}-logo">
            <a href="{{ $dashboard_url }}">
                <img src="{{ asset(config('adminlte.logo_img')) }}" class="{{ config('adminlte.logo_img_class') }}" height="50">
                {!! config('adminlte.logo', '<b>Admin</b>LTE') !!}
            </a>
        </div>

        {{-- Card Box --}}
        <div class="card {{ config('adminlte.classes_auth_card', 'card-outline card-primary') }}">

            {{-- Card Header --}}
            @hasSection('auth_header')
                <div class="card-header {{ config('adminlte.classes_auth_header', '') }}">
                    <h3 class="card-title float-none text-center">
                        @yield('auth_header')
                    </h3>
                </div>
            @endif

            {{-- Card Body --}}
            <div class="card-body {{ $auth_type ?? 'login' }}-card-body {{ config('adminlte.classes_auth_body', '') }}">
                @yield('auth_body')
            </div>

            {{-- Card Footer --}}
            @hasSection('auth_footer')
                <div class="card-footer {{ config('adminlte.classes_auth_footer', '') }}">
                    @yield('auth_footer')
                </div>
            @endif

        </div>
    </div>

    <footer class="footer-sticky d-none d-sm-block">
        <div class="container text-center">
          <span class="text-muted">Copyright 2022</span>
        </div>
    </footer>

@stop

@section('adminlte_js')
    @stack('js')
    @yield('js')
@stop
