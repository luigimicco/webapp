@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __("You are logged in! " . Auth::user()->name) }}
                </div>
                <div class="card-footer">
                    <strong>User Info</strong>
                    <div class="user-auth-info mt-2">
                        <p class="m-0">Email: {{Auth::user()->email}}</p>
                        <p class="m-0">Address: {{Auth::user()->userInfo->address}}</p>
                        <p class="m-0">Phone: {{Auth::user()->userInfo->phone}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
