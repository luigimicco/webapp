@extends('layouts.lte')

@section('title', 'Profilo utente')

@section('content_header')
    {{ Breadcrumbs::render() }}
@stop

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
      
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="{{$user->user_image()}}"
                  alt="User profile picture">
              </div>
              <h3 class="profile-username text-center">{{$user->nome}} {{$user->cognome}}</h3>
              <h3 class="profile-email text-center">{{$user->email}}</h3>
              <div class="text-center">
                @foreach ($roles as $role)
                  @if (in_array($role->id, $user->roles->pluck('id')->toArray()))
                    <span class="right badge " style="background-color:{{$role->color}} ">{{$role->name}}</span>&nbsp;
                  @endif 
                @endforeach  
              </div>  

              <p class="text-muted text-center">{{$user->ruolo}}</p>
              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Ruolo</b> <a class="float-right">{{$user->userInfo->ruolo}}</a>
                </li>
              </ul>
            </div>
      
          </div>
        </div>
      
        <div class="col-md-9">
          <div class="card card-primary card-outline">
            <form method="POST" enctype="multipart/form-data" action="{{route('profile.update')}}" class="form-horizontal">
              @method('PATCH')                    
              @csrf            
              <div class="card-header">
                <h3 class="card-title"><strong>{{ $user->nome . ' ' . $user->cognome }}</strong></h3>
                <div class="card-tools">
                    <button class="btn btn-sm btn-success" type="submit"><i class="fas fa-save"></i>&nbsp;Aggiorna</button>
                </div>
              </div>
              <div class="card-body">
                <div >
                  <div class="form-group row">
                    <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                      <input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" id="nome" placeholder="nome"
                      value="{{ old('nome', $user->nome) }}">
                      @error('nome')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror                      
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="cognome" class="col-sm-2 col-form-label">Cognome</label>
                    <div class="col-sm-10">
                      <input type="text" name="cognome" class="form-control @error('cognome') is-invalid @enderror" id="cognome" placeholder="cognome"
                      value="{{ old('cognome', $user->cognome) }}">
                      @error('cognome')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror                         
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email"
                      value="{{ old('email', $user->email) }}">
                      @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror                         
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="password">
                      @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror                         
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password_confirmation" class="col-sm-2 col-form-label">Conferma password</label>
                    <div class="col-sm-10">
                      <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="conferma password">
                      @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror                       
                    </div>
                  </div>
                  <div class="form-group row">
                      <label for="avatar" class="col-sm-2 col-form-label">Immagine profilo</label>
                      <div class="col-sm-10">
                        <x-adminlte-input-file name="image" placeholder="carica immagine ..." disable-feedback/>
                      </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="icheck-primary">
                          <input type="checkbox" name="deleteimage" value='1' id="deleteimage" > 
                          <label  for="deleteimage" >Rimuovi immagine profilo</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
      
        </div>
      
      </div>
      
      </div>





@stop

@section('plugins.BsCustomFileInput', true)

@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop