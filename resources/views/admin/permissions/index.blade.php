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
            @include('partials.toptablelist', ['addroute' => route('admin.permissions.create'), 'addlabel' => 'Nuovo'])

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

            @include('partials.bottomtablelist')
        </div>

    </div>

@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

