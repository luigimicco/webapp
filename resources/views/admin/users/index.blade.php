@extends('layouts.lte')

@section('title', 'Archivio utenti')

@section('content_header')
    <h1>Utenti</h1>
@stop

@section('content')
    {{-- alert popup message --}}
    @if (session('alert-message'))
        <div id="popup_message" class="d-none" data-type="{{ session('alert-type') }}" data-message="{{ session('alert-message') }}"></div>
    @endif

    <div class="container">
        <div class="card">
            <div class="card-header p-0 d-flex">
                <div class="mr-auto p-2 d-flex align-items-center">
                    <span>Mostra&nbsp;</span>
                    <form>
                        <select id="pagination" class="form-control form-control-sm" >
                            <option value="5" @if($items == 5) selected @endif >5</option>
                            <option value="10" @if($items == 10) selected @endif >10</option>
                            <option value="25" @if($items == 25) selected @endif >25</option>
                            <option value="50" @if($items == 50) selected @endif >50</option>
                        </select>
                    </form>
                    <span>&nbsp;elementi</span>
                    <script>
                        document.getElementById('pagination').onchange = function() { 
                            window.location = "{!! $users->url(1) !!}&items=" + this.value + "&search=" + document.getElementById('search').value; 
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
                            window.location = "{!! $users->url(1) !!}&items=" + document.getElementById('pagination').value + "&search=" + document.getElementById('search').value; 
                        };
                    </script>                    
                </div>

                <div class="p-2 d-flex">
                    {!! $users->appends(\Request::except('page'))->render() !!}&nbsp;<a class="btn btn-sm btn-info" href="{{ route('admin.users.create') }}"><i class="fas fa-plus"></i>&nbsp;Nuovo utente</a>
                    <!--{{ $users->appends(compact('items'))->links() }}&nbsp;-->
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
            @if (!empty($users))
                <table class="table table-sm table-hover table-striped table-condensed table-responsive-lg w-100">
                    <thead>
                        <tr>
                            <th style="col" scope="col">@sortablelink('id', '#')</th>
                            <th scope="col">@sortablelink('nome')</th>
                            <th scope="col">@sortablelink('cognome')</th>
                            <th style="col" scope="col">@sortablelink('active', 'Attivo')</th>
                            <th scope="col">@sortablelink('email')</th>
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
                                    
                                    @forelse ($user->profiles as $profile)
                                        {{ $profile->name }}{{ !$loop->last ? ',' : '' }}
                                    @empty
                                        -
                                    @endforelse                                    


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
                <h2 class="text-center">Nessun utente</h2>
            @endif            
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-right p-2">
                {{$users->count()}} utenti di {{ $users->total() }}
            </div>            
        </div>

    </div>

@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
        <script src="{{ asset('js/confirm-delete.js') }}"></script>
@stop
