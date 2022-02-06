@extends('layouts.lte')

@section('title', 'Archivio utenti')

@section('content_header')
    <h1>Utenti</h1>
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
                {{ $users->links() }}&nbsp;
                <a class="btn btn-sm btn-info" href="{{ route('admin.users.create') }}"><i class="fas fa-plus"></i>&nbsp;Nuovo utente</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
            @if (!empty($users))
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th style="width: 10px" scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Cognome</th>
                            <th style="width: 10px" scope="col">Attivo</th>
                            <th scope="col">Email</th>
                            <th scope="col">Tipo</th>
                            <th style="width: 40px" scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td class="text-bold"><a href="{{ route('admin.users.show', $user->id) }}">{{ $user->nome }}</a></td>
                                <td class="text-bold"><a href="{{ route('admin.users.show', $user->id) }}">{{ $user->cognome }}</a></td>
                                <td class="text-center">@if ($user->active) <i class="fas fa-check"></i>@endif</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach ($roles as $role)
                                        @if (in_array($role->id, $user->roles->pluck('id')->toArray()))
                                          <span class="right badge " style="background-color:{{$role->color}} ">{{$role->name}}</span>&nbsp;
                                        @endif 
                                    @endforeach                                    
                                </td>
                                <td class="">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"></button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a href="{{ route('admin.users.show', $user->id) }}" class="dropdown-item"><i class="fas fa-fw fa-eye"></i>&nbsp;Mostra</a>
                                            <a href="{{ route('admin.users.edit', $user->id) }}"
                                            class="dropdown-item"><i class="fas fa-fw fa-edit"></i>&nbsp;Modifica</a>
                                            <form class="delete-button" action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
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
                <h2 class="text-center">Nessuna squadra</h2>
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
