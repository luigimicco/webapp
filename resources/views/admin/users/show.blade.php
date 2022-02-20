@extends('layouts.lte')

@section('title', 'Dati utente')

@section('content_header')
    <h1>Dati utente</h1>
@stop

@section('content')
    <div class="container">


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
                <dt>Ruoli</dt>
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

@endsection

@section('scripts')
        <script src="{{ asset('js/confirm-delete.js') }}"></script>
@endsection