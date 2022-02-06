@extends('layouts.lte')

@section('title', 'Archivio profili')

@section('content_header')
    <h1>Profili</h1>
@stop

@section('content')
    {{-- alert delete post --}}
    @if (session('alert-message'))
        <div class="alert alert-{{ session('alert-type') }}">
            {{ session('alert-message') }}
        </div>
    @endif
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-end align-items-center p-2">
                {{ $profiles->links() }}&nbsp;
                <a class="btn btn-sm btn-info" href="{{ route('admin.profiles.create') }}"><i class="fas fa-plus"></i>&nbsp;Nuovo profilo</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
            @if (!empty($profiles))
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th style="width: 10px" scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th style="width: 40px" scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($profiles as $profile)
                            <tr>
                                <td>{{ $profile->id }}</td>
                                <td class="text-bold"><a href="{{ route('admin.profiles.show', $profile->id) }}">{{ $profile->name }}</a></td>
                                <td class="">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"></button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a href="{{ route('admin.profiles.show', $profile->id) }}" class="dropdown-item"><i class="fas fa-fw fa-eye"></i>&nbsp;Mostra</a>
                                            <a href="{{ route('admin.profiles.edit', $profile->id) }}"
                                            class="dropdown-item"><i class="fas fa-fw fa-edit"></i>&nbsp;Modifica</a>
                                            <form class="delete-button" action="{{ route('admin.profiles.destroy', $profile->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item"><i class="fas fa-fw fa-trash"></i>&nbsp;Cancella</button>
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
        </div>

    </div>

@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('scripts')
        <script src="{{ asset('js/confirm-delete.js') }}"></script>
@stop
