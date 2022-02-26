@extends('layouts.lte')

@section('title', 'Archivio profili permessi')

@section('content_header')
    {{ Breadcrumbs::render() }}
@stop

@section('content')
    {{-- alert popup message --}}
    @if (session('alert-message'))
        <div id="popup_message" class="d-none" data-type="{{ session('alert-type') }}" data-message="{{ session('alert-message') }}"></div>
    @endif

    <div class="container">
        <div class="card card-primary card-outline">
            <div class="card-header p-0 d-flex justify-content-end">
                @if (!empty($items) && count($items))
                    <div class="mr-auto p-2 d-flex align-items-center">
                        <span>Elementi per pagina&nbsp;</span>
                        <form>
                            <select id="itemperpage" class="form-control form-control-sm" >
                                <option value="5" @if($ipp == 5) selected @endif >5</option>
                                <option value="10" @if($ipp == 10) selected @endif >10</option>
                                <option value="25" @if($ipp == 25) selected @endif >25</option>
                                <option value="50" @if($ipp == 50) selected @endif >50</option>
                            </select>
                        </form>
                        <script>
                            document.getElementById('itemperpage').onchange = function() { 
                                window.location = "{!! $items->url(1) !!}&ipp=" + this.value + "&search=" + document.getElementById('search').value; 
                            };
                        </script>                    
                    </div>
                    <div class="mr-auto p-2 d-flex flex-fill align-items-center">
                        <div class="input-group input-group-sm ">
                            <input id="search" type="text" class="form-control" value="{{ $search }}" placeholder="cerca ..." >
                            <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="gosearch"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <script>
                            document.getElementById('gosearch').onclick = function() { 
                                window.location = "{!! $items->url(1) !!}&ipp=" + document.getElementById('itemperpage').value + "&search=" + document.getElementById('search').value; 
                            };
                        </script>                    
                    </div>
                @endif 
                <div class="p-2 d-flex">
                    {!! $items->appends(\Request::except('page'))->render() !!}&nbsp;<a class="btn btn-sm btn-info" href="{{ route('admin.permissions.create') }}"><i class="fas fa-plus"></i>&nbsp;Nuovo</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                @if (!empty($items) && count($items))
                    <table class="table table-sm table-hover table-striped table-condensed w-100">
                        <thead>
                            <tr>
                                <th scope="col">@sortablelink('name')</th>
                                <th style="col" scope="col">@sortablelink('active', 'Attivo')</th>
                                <th style="width: 40px" scope="col">Azioni</th>
                            </tr>                        
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td class="text-bold"><a href="{{ route('admin.permissions.show', $item->id) }}">{{ $item->name }}</a></td>
                                    <td class="text-center">@if ($item->active) <i class="fas fa-check"></i>@endif</td>

                                    <td class="">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"></button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                                <a href="{{ route('admin.permissions.show', $item->id) }}" class="dropdown-item"><i class="fas fa-fw fa-eye"></i>&nbsp;Mostra</a>
                                                <a href="{{ route('admin.permissions.edit', $item->id) }}"
                                                class="dropdown-item"><i class="fas fa-fw fa-edit"></i>&nbsp;Modifica</a>
                                                <div class="dropdown-divider"></div>
                                                <form class="delete-button" action="{{ route('admin.permissions.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item text-red"><i class="fas fa-fw fa-trash"></i>&nbsp;Cancella</button>
                                                </form>
                                            </div>
                                        </div>
                                
                                        
                                    </td>
                                </tr>
                            @endforeach          
                        </tbody>
                    </table>
                @else
                    <div class="jumbotron m-2">
                        <h2 class="text-center">Nessun elemento da mostrare</h2>
                    </div>    
                @endif            
            </div>
            <!-- /.card-body -->
            @if (!empty($items) && count($items))
                <div class="card-footer text-right p-2">
                    {{$items->count()}} elementi di {{ $items->total() }}
                </div>  
            @endif          
        </div>

    </div>

@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
        <script src="{{ asset('js/confirm-delete.js') }}"></script>
        <script src="{{ asset('js/popup-message.js') }}"></script>
@stop
