@extends('layouts.lte')

@section('title', 'Modifica utente')

@section('content_header')
    <h1>Modifica utente</h1>
@stop

@section('content')
<div class="container">

    <form method="POST" action="{{route('admin.users.update', $user->id)}}">
        @method('PATCH')
        @csrf

        <div class="card card-primary card-outline direct-chat direct-chat-primary">
            <div class="card-header">
                <h3 class="card-title"><strong>{{ $user->name }}</strong></h3>

                <div class="card-tools">
                    <button class="btn btn-sm btn-success" type="submit"><i class="fas fa-save"></i>&nbsp;Conferma</button>
                    <a class="btn btn-sm btn-primary" href="{{route('admin.users.index')}}"><i class="fas fa-redo"></i>&nbsp;Annulla</a>
                </div>
            </div>    
            <!-- /.card-header -->
            <div class="card-body p-2">
                <div class="row">
                    <div class="col-6">

                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome"
                                value="{{ old('nome', $user->nome) }}">
                            @error('nome')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="cognome">Cognome</label>
                            <input type="text" class="form-control @error('cognome') is-invalid @enderror" id="cognome" name="cognome"
                                value="{{ old('cognome', $user->cognome) }}">
                            @error('cognome')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                                value="{{ old('email', $user->email) }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>





                    </div>
                    <div class="col-6">
                        <div class="d-flex flex-column">
                        @foreach ($roles as $role)
                        <div class="icheck-primary">
                            <input type="checkbox" @if (in_array($role->id, $roleIds)) checked @endif id="role-{{$role->id}}"  value="{{$role->id}}"  name="roles[]">
                            <label for="role-{{$role->id}}">{{$role->name}}</label>
                        </div>
                        @endforeach
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">

            </div>
            <!-- /.card-footer-->
        </div>            

    </form>    

</div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@stop

