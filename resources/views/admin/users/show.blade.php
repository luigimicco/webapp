@extends('layouts.lte')

@section('title', 'Dati utente')

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
                  <h3 class="profile-username text-center">{{$user->email}}</h3>
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

                <div class="card card-primary card-outline direct-chat direct-chat-primary">
                    <div class="card-header">
                    <h3 class="card-title"><strong>{{  $user->nome . ' ' . $user->cognome }}</strong></h3>

                    <div class="card-tools">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-primary"><i class="fas fa-list"></i>&nbsp;Lista utenti</a>
                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-warning mx-2"><i class="fas fa-edit"></i>&nbsp;Modifica</a>
                            &nbsp;&nbsp;
                            <form class="delete-button" action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>&nbsp;Cancella</button>
                            </form>
                        </div>

                    </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-2">
                        <p>Nome: <strong>{{ $user->nome }}</strong></p>
                        <p>Cognome: <strong>{{ $user->cognome }}</strong></p>
                        <p>Email: <strong>{{ $user->email }}</strong></p>
                        <dt>Tipo</dt>
                        <dd>
                            @forelse ($user->roles as $role)
                                {{ $role->name }}{{ !$loop->last ? ',' : '' }}
                            @empty
                                -
                            @endforelse
                        </dd>                
                        <dt>Profili</dt>
                        <dd>
                            @forelse ($user->permissions as $permission)
                                {{ $permission->name }}{{ !$loop->last ? ',' : '' }}
                            @empty
                                -
                            @endforelse
                        </dd>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">

                    </div>
                    <!-- /.card-footer-->
                </div>

            </div>
        </div>

    </div>

@endsection

@section('js')

        <script src="{{ asset('js/popup-message.js') }}"></script>
@stop