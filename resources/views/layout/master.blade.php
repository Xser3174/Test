<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>

        @if (count($records) === 1)
            I have one record!
        @elseif (count($records) > 1)
            I have multiple records!
        @else
            I don't have any records!
        @endif
        
    </body>
</html>