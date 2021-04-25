<html>
    <head>
        <title>Welcome - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            <h1>This is the master sidebar.</h1>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>