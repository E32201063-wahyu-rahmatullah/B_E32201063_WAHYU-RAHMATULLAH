<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewpoint" content="width=device-width, initial-scale=1">

		<title>{{config('app.name')}}</title>
	</head>
<body>
@extends('layouts.app')

@section('content')
	<div class="jumbotron jumbotron-fluid">
  			<div class="container">
    		<h1 class="display-4">Halaman Home</h1>
    		<p class="lead">Halaman ini merupakan halaman Home.</p>
  		</div>
  		<p>Nama : {{ $nama }}</p>
  		<p>Mata Pelajaran</p>
  		<ul>
  			@foreach($pelajaran as $p)
  			<li>{{ $p }}</li>
  			@endforeach
		</div>
@endsection
</body>
</html>