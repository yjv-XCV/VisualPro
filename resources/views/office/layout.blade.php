<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')Visual Pro</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="/semantic/dist/semantic.min.css">
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
		<script src="/semantic/dist/semantic.js"></script>
		<link rel="stylesheet" href="/css/office.css">
		@yield('style')
  </head>
    <body>
		<div class="ui inverted segment right visible sidebar">
			<div class="ui relaxed inverted divided list">
				@yield('sidebar')
			</div>
		</div>

		<div class="ui pusher">
			<div class="flex-center position-ref full-height">
		      <div class="preview-project">
				<div class="flex-center position-ref container-height">
			      	@yield('preview')
		   		</div>
		      </div>
			</div>
			@yield('controls')
		</div>
		@yield('modal')
    </body>
    @yield('script')
</html>