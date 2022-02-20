@extends('layouts.lte')

@section('title', 'Modifica permessi')

@section('content_header')
    <h1>Modifica permessi</h1>
@stop

@section('content')
<div class="container">

    <form method="POST" action="{{route('admin.permissions.update', $permission->id)}}">
        @method('PATCH')
        @csrf

        <div class="card card-primary card-outline direct-chat direct-chat-primary">
            <div class="card-header">
                <h3 class="card-title"><strong>{{ $permission->name }}</strong></h3>

                <div class="card-tools">
                    <button class="btn btn-sm btn-success" type="submit"><i class="fas fa-save"></i>&nbsp;Conferma</button>
                    <a class="btn btn-sm btn-primary" href="{{route('admin.permissions.index')}}"><i class="fas fa-redo"></i>&nbsp;Annulla</a>
                </div>
            </div>    
            <!-- /.card-header -->
            <div class="card-body p-2">
                <div class="row">
                    <div class="col-12">

                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                                value="{{ old('name', $permission->name) }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
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

