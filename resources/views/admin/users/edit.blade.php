@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-6 mx-auto shadow p-3">
        <form method="POST" action="{{route('admin.users.update', $user->id)}}">
            @method('PATCH')
            @csrf
            <div class="mb-3 d-flex">
                <div class="user-info">
                    <p class="m-0">User: </p><strong>{{$user->name}}</strong>
                    <p class="m-0">Mail: </p><strong>{{$user->email}}</strong>
                </div>
                @foreach ($roles as $role)
                <div class="form-check mr-1">
                  <input @if (in_array($role->id, $roleIds)) ? checked @endif class="form-check-input" type="checkbox" value="{{$role->id}}" id="role-{{$role->id}}" name="roles[]">
                  <label class="form-check-label" for="role-{{$role->id}}">
                    {{$role->name}}
                  </label>
                </div>
                @endforeach
              </div>
            <button class="btn btn-success" type="submit">Save</button>
            <a class="btn btn-primary" href="{{route('admin.users.index')}}">Back</a>
        </form>
    </div>
</div>
@endsection