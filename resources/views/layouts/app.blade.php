<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.head')
</head>
<body>
    <div id="app">
        
        @include('layouts.nav')

        @yield('content')
       
        @include('layouts.partials.footer')
    </div>
</body>
</html>
