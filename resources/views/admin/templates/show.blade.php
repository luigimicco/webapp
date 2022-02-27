@extends('layouts.lte')

@section('title', 'Dati modello')

@section('content_header')
    {{ Breadcrumbs::render() }}
@stop

@section('content')
    <div class="container">


        <div class="card card-primary card-outline direct-chat direct-chat-primary">
            <div class="card-header">
              <h3 class="card-title"><strong>{{ $template->name }}</strong></h3>

              <div class="card-tools">
                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.templates.index') }}" class="btn btn-sm btn-primary"><i class="fas fa-list"></i>&nbsp;Lista profili</a>
                    <a href="{{ route('admin.templates.edit', $template->id) }}" class="btn btn-sm btn-warning mx-2"><i class="fas fa-edit"></i>&nbsp;Modifica</a>
                    &nbsp;&nbsp;
                    <form class="delete-button" action="{{ route('admin.templates.destroy', $template->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>&nbsp;Cancella</button>
                    </form>
                </div>

              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-2">
                <p>Nome: <strong>{{ $template->name }}</strong></p>

                <p>Anteprima:</p>
                @php
                $config = [
                    "height" => "200",
                    "toolbar" => [
                    ],
                ]
                @endphp
                                
                <x-adminlte-text-editor name="teDisabled" :config="$config" disabled>
                    {{ $template->body }}
                </x-adminlte-text-editor>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">

            </div>
            <!-- /.card-footer-->
          </div>

    </div>

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/summernote/summernote-bs4.min.css') }}">
@stop

@section('js')
    <script src="{{ asset('js/confirm-delete.js') }}"></script>
    <script src="{{ asset('vendor/summernote/summernote-bs4.min.js') }}"></script>
@stop
