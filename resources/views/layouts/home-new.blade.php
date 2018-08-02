<!doctype html>
<html lang="en">
    <head>
        @include('includes.head-new')
    </head>
    <body>
		@include('content.modalview')
		<div id="content">
		
			@include('content.landing-new')
			
			@yield('content')
		</div>	
			
        @include('includes.foot-new')
		
    </body>
</html>