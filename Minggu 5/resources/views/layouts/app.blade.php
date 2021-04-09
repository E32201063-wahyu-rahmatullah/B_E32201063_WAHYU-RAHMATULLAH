<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewpoint" content="width=device-width, initial-scale=1">

		<title>{{config('app.name')}}</title>
	</head>
<body>
	<div class="jumbotron jumbotron-fluid">
  			<div class="container">
    		@yield('content')
  		</div>
		</div>
</body>
</html>