@extends('layouts.lte')

@section('title', 'Utenti con medesimi permessi')

@section('content_header')
    {{ Breadcrumbs::render() }}
@stop

@section('content')
    <div class="container">


        <div class="card card-primary card-outline direct-chat direct-chat-primary">
            <div class="card-header">
              <h3 class="card-title"><strong>{{ $permission->name }}</strong></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-2">


                @if (!empty($items) && count($items))
                    <table class="table table-sm table-hover table-striped table-condensed w-100">
                        <thead>
                            <tr>
                                <th style="col" scope="col">@sortablelink('id', '#')</th>
                                <th scope="col">@sortablelink('nome')</th>
                                <th scope="col">@sortablelink('cognome')</th>
                                <th class="text-center" style="col" scope="col">@sortablelink('active', 'Attivo')</th>
                                <th scope="col">@sortablelink('email')</th>
                                <th scope="col">Tipo</th>
                                <th class="text-center" style="width: 40px" scope="col">Azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td class="text-bold"><a href="{{ route('admin.users.show', $item->id) }}">{{ $item->nome }}</a></td>
                                    <td class="text-bold"><a href="{{ route('admin.users.show', $item->id) }}">{{ $item->cognome }}</a></td>
                                    <td class="text-center">

                                        @if (!in_array('admin', $item->roles->pluck('name')->toArray()))  
                                        <form action="{{ route('admin.users.enable', $item->id) }}" method="POST">
                                            @method('PATCH')
                                            @csrf
                                            <button type="submit" data-toggle="tooltip" title="{{$item->active ? 'Disabilita' : 'Abilita' }}" class="btn btn-outline" ><i class="fa-2x fa-solid fas fa-fw {{$item->active ? 'text-green fa-toggle-on' : 'text-gray fa-toggle-off' }}"></i></button>
                                        </form>
                                        @else
                                            <i class="fa-2x fa-solid fas fa-fw fa-toggle-on text-green "></i>
                                        @endif
                                    </td>
                                    <td>{{ $item->email }}</td>
                                    <td class="text-center">

                                        @forelse ($item->roles as $role)
                                            <span class="right badge " style="background-color:{{$role->color}} ">{{$role->name}}</span>&nbsp;
                                        @empty
                                            -
                                        @endforelse
                                        
                                        @forelse ($item->permissions as $permission)
                                            <a href="{{ route('admin.permissions.users', $permission->id) }}">{{ $permission->name }}</a>{{ !$loop->last ? ',' : '' }}
                                        @empty
                                            -
                                        @endforelse                                    


                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"></button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                                <a href="{{ route('admin.users.show', $item->id) }}" class="dropdown-item"><i class="fas fa-fw fa-eye"></i>&nbsp;Mostra</a>
                                                <a href="{{ route('admin.users.edit', $item->id) }}"
                                                class="dropdown-item"><i class="fas fa-fw fa-edit"></i>&nbsp;Modifica</a>


                                                @if (!in_array('admin', $item->roles->pluck('name')->toArray()))  
                                                    <form action="{{ route('admin.users.enable', $item->id) }}" method="POST">
                                                        @method('PATCH')
                                                        @csrf
                                                        <button type="submit" class="dropdown-item" ><i class="fas fa-fw {{$item->active ? 'fa-user-slash' : 'fa-user' }}"></i>&nbsp;{{$item->active ? 'Disabilita' : 'Abilita' }}</button>
                                                    </form>
                                                    <div class="dropdown-divider"></div>
                                                    <form class="delete-button" data-type="double-confirm" action="{{ route('admin.users.destroy', $item->id) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="dropdown-item text-red" ><i class="fas fa-fw fa-trash"></i>&nbsp;Cancella</button>
                                                    </form>
                                                @endif
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
            <div class="card-footer">

            </div>
            <!-- /.card-footer-->
          </div>

    </div>

@endsection