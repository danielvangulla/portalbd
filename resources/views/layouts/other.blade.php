<!doctype html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body >
        <div id="wrapper">

            @include('includes.sidebar')

            <div id="content">
                @yield('content')
            </div>			

        </div>
        @include('includes.footer')
    </body>
</html>