@extends('layouts.app')

@section('content')
<div class="container roles">
    <div class="col-8 mx-auto shadow p-3">
        @include('includes.session')
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>Nome Utente</th>
                    <th>Email</th>
                    <th>Ruoli</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>
                        {{ $user->name }}
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    <td>
                        @forelse ($user->roles as $role)
                        <span class="badge p-2 rounded-pill text-white" style="background-color: {{$role->color}}">{{$role->name}}</span>
                        @empty <span class="badge p-2 rounded-pill bg-dark">Nessun ruolo</span>
                        @endforelse
                    </td>
                    <td>
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$users->links()}}
    </div>
</div>
</div>
@endsection