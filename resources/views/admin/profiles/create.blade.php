@extends('layouts.lte')

@section('title', 'Nuovo profilo')

@section('content_header')
    <h1>Nuovo profilo</h1>
@stop

@section('content')
    <div class="container">
        <h1>Crea nuovo profilo</h1>

        <form action="{{ route('admin.profiles.store') }}" method="POST">
            @csrf
            {{-- nome servizio --}}
            <div class="form-group row">
                <label for="nome" class="col-md-4 col-form-label text-md-right">Nome</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-success">Invia</button>
        </form>
        <div class="d-flex justify-content-end mt-3">
            <a href="{{ route('admin.profiles.index') }}" class="btn btn-secondary">Indietro</a>
        </div>
    </div>

@endsection
