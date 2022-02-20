@extends('adminlte::auth.auth-page')

@section('adminlte_css_pre')
    <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@stop

@php( $contact_url = View::getSection('contact_url') ?? config('adminlte.contact_url', 'contact') )

@if (config('adminlte.use_route_url', false))
    @php( $contact_url = $contact_url ? route($contact_url) : '' )
@else
    @php( $contact_url = $contact_url ? url($contact_url) : '' )
@endif

@section('auth_header', "Contattaci")

@section('auth_body')

      <form action="{{ $contact_url }}" method="post" class="form-horizontal">
            @csrf
            <div class="input-group mb-3">
              <input type="name" name="name" class="form-control @error('name') is-invalid @enderror"
                     value="{{ old('name') }}" placeholder="nome" autofocus>
  
              <div class="input-group-append">
                  <div class="input-group-text">
                      <span class="fas fa-user {{ config('adminlte.classes_auth_icon', '') }}"></span>
                  </div>
              </div>
  
              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="input-group mb-3">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                     value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}" autofocus>
  
              <div class="input-group-append">
                  <div class="input-group-text">
                      <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                  </div>
              </div>
  
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Messaggio</label>
                <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message">{{old('message')}}</textarea>
                @error('message')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
              <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Invia</button>
              </div>
            </div>

        </form>


@endsection