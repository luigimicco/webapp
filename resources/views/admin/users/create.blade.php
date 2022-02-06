@extends('layouts.lte')

@section('title', 'Nuovo utente')

@section('content_header')
    <h1>Nuovo utente</h1>
@stop

@section('content')
    <div class="container">
        <h1>Crea nuovo utente</h1>

        <form action="{{ route('admin.users.store') }}" method="POST">
            @csrf
            {{-- nome servizio --}}
            <div class="form-group row">
                <label for="nome" class="col-md-4 col-form-label text-md-right">Nome</label>

                <div class="col-md-6">
                    <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome"
                        value="{{ old('nome') }}" required autocomplete="nome" autofocus>

                    @error('nome')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="cognome" class="col-md-4 col-form-label text-md-right">Cognome</label>

                <div class="col-md-6">
                    <input id="cognome" type="text" class="form-control @error('cognome') is-invalid @enderror"
                        name="cognome" value="{{ old('cognome') }}" required autocomplete="cognome" autofocus>

                    @error('cognome')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
<!--
            <div class="form-group row">
                <label for="birth_date" class="col-md-4 col-form-label text-md-right">Data di Nascita</label>

                <div class="col-md-6">
                    <input id="birth_date" type="text" class="form-control @error('birth_date') is-invalid @enderror"
                        name="birth_date" value="{{ old('birth_date') }}" required autocomplete="birth_date" autofocus>

                    @error('birth_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
-->
            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                <div class="col-md-6">
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                        value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Conferma Password</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password">
                </div>
            </div>

            <button type="submit" class="btn btn-success">Invia</button>
        </form>
        <div class="d-flex justify-content-end mt-3">
            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Indietro</a>
        </div>
    </div>

@endsection
