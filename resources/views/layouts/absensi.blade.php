<!doctype html>	
<html>
    <head>
        @include('includes.absensi-head')
    </head>
    <body>
        <div id="wrapper">

            @include('includes.absensi-sidebar')

            <div id="content">
                @yield('content')
            </div>			

        </div>
        @include('includes.absensi-foot')
    </body>
</html>