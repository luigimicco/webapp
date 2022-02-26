@extends('layouts.lte')

@section('title', 'Crea/Modifica utente')

@section('content_header')
    {{ Breadcrumbs::render() }}
@stop

@section('content')
<div class="container">

    @if(isset($user))
        <form method="POST" action="{{route('admin.users.update', $user->id)}}">
        @method('PATCH')
    @else
        <form method="POST" action="{{ route('admin.users.store') }}">
    @endif

        @csrf

        <div class="card card-primary card-outline">
            <div class="card-header">
                @if(isset($user))
                    <h3 class="card-title"><strong>{{ $user->nome . ' ' . $user->cognome }}</strong></h3>
                @else
                    <h3 class="card-title">nuovo utente</h3>
                @endif
                
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
                                value="{{ old('nome', $user->nome ?? '' ) }}" required autocomplete="nome" autofocus>
                            @error('nome')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="cognome">Cognome</label>
                            <input type="text" class="form-control @error('cognome') is-invalid @enderror" id="cognome" name="cognome"
                                value="{{ old('cognome', $user->cognome ?? '') }}" required autocomplete="cognome" autofocus>
                            @error('cognome')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                                value="{{ old('email', $user->email ?? '') }}">
                            @error('email')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" >Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
            
                        <div class="form-group">
                            <label for="password_confirmation" >Conferma Password</label>
                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation"
                                autocomplete="new-password">
                            @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror                                                       
                        </div>



                    </div>
                    <div class="col-6">

                        {{-- ruoli dell'utente --}}
                        <div class="form-group">
                            <p>Seleziona i ruoli:</p>
                            @foreach ($roles as $role)
                                <div class="form-check @error('roles') is-invalid @enderror">
                                    <div class="icheck-primary">
                                        @if($errors->any())
                                            {{-- se ci sono degli errori di validazione signifca che bisogna recuperare i role selezionati tramite la funzione old(), la quale restituisce un array plain --}}
                                            <input name="roles[]" type="checkbox" value="{{ $role->id }}" id="role-{{$role->id}}"
                                                {{ in_array($role->id, old('roles', [])) ? 'checked' : '' }}>

                                        @else
                                            {{-- se non sono presenti errori di validazione significa che la pagina è appena stata aperta per la prima volta, perciò bisogna recuperare i role dalla relazione con il post, che è una collection --}}
                                            <input name="roles[]" type="checkbox" value="{{ $role->id }}" id="role-{{$role->id}}"
                                            @if(isset($user))
                                                {{ $user->roles->contains($role) ? 'checked' : '' }}
                                            @endif    
                                            >
                                        @endif
                                        <label for="role-{{$role->id}}" >{{ $role->name }}</label>
                                    </div>

                                </div>
                            @endforeach
                            @error('roles')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>


                        {{-- profili dell'utente --}}
                        <div class="form-group">
                            <p>Seleziona i profili:</p>
                            @foreach ($permissions as $permission)
                                <div class="form-check @error('permissions') is-invalid @enderror">
                                    <div class="icheck-primary">
                                        @if($errors->any())
                                            {{-- se ci sono degli errori di validazione signifca che bisogna recuperare i permission selezionati tramite la funzione old(), la quale restituisce un array plain --}}
                                            <input name="permissions[]" type="checkbox" value="{{ $permission->id }}"  id="permission-{{$permission->id}}"
                                                {{ in_array($permission->id, old('permissions', [])) ? 'checked' : '' }}>

                                        @else
                                            {{-- se non sono presenti errori di validazione significa che la pagina è appena stata aperta per la prima volta, perciò bisogna recuperare i permission dalla relazione con il post, che è una collection --}}
                                            <input name="permissions[]" type="checkbox" value="{{ $permission->id }}" id="permission-{{$permission->id}}"
                                            @if(isset($user))
                                                {{ $user->permissions->contains($permission) ? 'checked' : '' }}
                                            @endif                                               
                                            >
                                        @endif
                                        <label  for="permission-{{$permission->id}}" >{{ $permission->name }}</label>
                                    </div>

                                </div>
                            @endforeach
                            @error('permissions')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
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

