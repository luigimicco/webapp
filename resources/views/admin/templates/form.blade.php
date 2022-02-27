@extends('layouts.lte')

@section('title', 'Crea/Modifica modello')

@section('content_header')
    {{ Breadcrumbs::render() }}
@stop

@section('content')
<div class="container">

    @if(isset($template))
        <form method="POST" action="{{route('admin.templates.update', $template->id)}}">
        @method('PATCH')
    @else
        <form method="POST" action="{{ route('admin.templates.store') }}">
    @endif

        @csrf

        <div class="card card-primary card-outline direct-chat direct-chat-primary">
            <div class="card-header">
                @if(isset($template))
                    <h3 class="card-title"><strong>{{ $template->name }}</strong></h3>
                @else
                    <h3 class="card-title">nuovo modello</h3>
                @endif

                <div class="card-tools">
                    <button class="btn btn-sm btn-success" type="submit"><i class="fas fa-save"></i>&nbsp;Conferma</button>
                    <a class="btn btn-sm btn-primary" href="{{route('admin.templates.index')}}"><i class="fas fa-redo"></i>&nbsp;Annulla</a>
                </div>
            </div>    
            <!-- /.card-header -->
            <div class="card-body p-2">
                <div class="row">
                    <div class="col-10">
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                                value="{{ old('name', $template->name ?? '' ) }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-2">
                        <label>Attivo</label>
                        <div class="form-check @error('active') is-invalid @enderror">
                            <div class="icheck-primary">
                                @if($errors->any())
                                    {{-- se ci sono degli errori di validazione signifca che bisogna recuperare i permission selezionati tramite la funzione old(), la quale restituisce un array plain --}}
                                    <input name="active" type="checkbox" value="1"  id="active"
                                        {{ old('active', false) ? 'checked' : '' }}>

                                @else
                                    {{-- se non sono presenti errori di validazione significa che la pagina è appena stata aperta per la prima volta, perciò bisogna recuperare i permission dalla relazione con il post, che è una collection --}}
                                    <input name="active" type="checkbox" value="1" id="active"
                                    @if(isset($template))
                                        {{ ($template->active) ? 'checked' : '' }}
                                    @endif                                               
                                    >
                                @endif
                                <label  for="active" >&nbsp;</label>
                            </div>

                        </div>




                    </div>
                </div>
                <div class="row">
                    <div class="col-12">

                        @php
                        $config = [
                            "height" => "200",
                            "toolbar" => [
                                // [groupName, [list of button]]
                                ['style', ['bold', 'italic', 'underline', 'clear']],
                                ['font', ['strikethrough', 'superscript', 'subscript']],
                                ['fontsize', ['fontsize']],
                                ['color', ['color']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['height', ['height']],
                                ['table', ['table']],
                                ['insert', ['link', 'picture', 'video']],
                                ['view', ['fullscreen', 'codeview', 'help']],
                            ],
                        ]
                        @endphp
                        <x-adminlte-text-editor name="body" label="Modello" 
                            igroup-size="xs" placeholder="definizione modello ..." :config="$config">
                            {{ old('body', $template->body ?? '' ) }}
                        </x-adminlte-text-editor>    

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
    <link rel="stylesheet" href="{{ asset('vendor/summernote/summernote-bs4.min.css') }}">
@stop

@section('js')
    <script src="{{ asset('vendor/summernote/summernote-bs4.min.js') }}"></script>
@stop
