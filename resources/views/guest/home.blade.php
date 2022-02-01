<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div class="flex-center position-ref full-height navbar-light bg-secondary">
            <div class="container p-3">
                @if (Route::has('login'))
                <div class="top-right links font-weight-bold">
                    @auth
                        <a class="bg-dark p-2 round rounded" href="{{ url('/admin') }}">ADMIN DASHBOARD</a>
                    @else
                        <a class="bg-dark p-2" href="{{ route('login') }}">LOGIN</a>
                        @if (Route::has('register'))
                            <a class="bg-dark p-2" href="{{ route('register') }}">REGISTER</a>
                        @endif
                        <a class="bg-dark p-2" href="{{ route('contact.index') }}">CONTATTI</a>
                    @endauth
                </div>
                @endif
            </div>
        </div>
        
        <div id="root"></div>

        <script src="{{ asset('js/front.js') }}"></script>
    </body>
</html>
