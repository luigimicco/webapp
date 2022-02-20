@extends('layouts.lte')

@section('title', 'Dati utente')

@section('content_header')
    <h1>Dettagli permessi</h1>
@stop

@section('content')
    <div class="container">


        <div class="card card-primary card-outline direct-chat direct-chat-primary">
            <div class="card-header">
              <h3 class="card-title"><strong>{{ $permission->name }}</strong></h3>

              <div class="card-tools">
                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.permissions.index') }}" class="btn btn-sm btn-primary"><i class="fas fa-list"></i>&nbsp;Lista profili</a>
                    <a href="{{ route('admin.permissions.edit', $permission->id) }}" class="btn btn-sm btn-warning mx-2"><i class="fas fa-edit"></i>&nbsp;Modifica</a>
                    &nbsp;&nbsp;
                    <form class="delete-button" action="{{ route('admin.permissions.destroy', $permission->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>&nbsp;Cancella</button>
                    </form>
                </div>

              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-2">
                <p>Nome: <strong>{{ $permission->name }}</strong></p>
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