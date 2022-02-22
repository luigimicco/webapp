@extends('layouts.lte')

@section('title', 'Archivio profili permessi')

@section('content_header')
    {{ Breadcrumbs::render() }}
@stop

@section('content')


    {{-- alert delete post --}}
    @if (session('alert-message'))
        <div class="alert alert-{{ session('alert-type') }}">
            {{ session('alert-message') }}
        </div>
    @endif
    <div class="container">
        <div class="card card-primary card-outline">
            <div class="card-header d-flex justify-content-end p-2">
                <div>
                    {{ $permissions->links() }}&nbsp;
                    <a class="btn btn-sm btn-info" href="{{ route('admin.permissions.create') }}"><i class="fas fa-plus"></i>&nbsp;Nuovo profilo</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
            @if (!empty($permissions))
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th style="width: 10px" scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th style="width: 40px" scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $permission)
                            <tr>
                                <td>{{ $permission->id }}</td>
                                <td class="text-bold"><a href="{{ route('admin.permissions.show', $permission->id) }}">{{ $permission->name }}</a></td>
                                <td class="">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"></button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <a href="{{ route('admin.permissions.show', $permission->id) }}" class="dropdown-item"><i class="fas fa-fw fa-eye"></i>&nbsp;Mostra</a>
                                            <a href="{{ route('admin.permissions.edit', $permission->id) }}"
                                            class="dropdown-item"><i class="fas fa-fw fa-edit"></i>&nbsp;Modifica</a>
                                            <div class="dropdown-divider"></div>
                                            
                                            <form class="delete-button" action="{{ route('admin.permissions.destroy', $permission->id) }}" method="POST">
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
                <h2 class="text-center">Nessun profilo</h2>
            @endif            
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-right">
                {{$permissions->count()}} profili di {{ $permissions->total() }}
            </div>
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
