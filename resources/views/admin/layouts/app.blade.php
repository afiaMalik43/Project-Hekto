<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('admin.layouts.head')
</head>

<body>
    <div id="app">
        <!--Main Navigation-->
        <header>
            <!-- Sidebar -->
            @include('admin.layouts.sidebar')
            <!-- Sidebar -->

            
            <!-- Navbar -->
            @include('admin.layouts.nav')
            <!-- Navbar -->
          </header>
          <!--Main Navigation-->

          <!--Main layout-->
          <main style="margin-top: 58px;">
            <div class="container pt-4">
                @yield('content')
            </div>
          </main>
          
    </div>
    @yield('scripts')
</body>

</html>