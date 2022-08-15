@extends('layouts.backend.app')
@section('title', 'Home')
@section('content_title', 'Home')
@section('content')
<x-alert></x-alert>
<div class="row">
	<div class="col-lg">
		<div class="jumbotron">
		@role('admin|petugas')
		  <h1 class="display-4">Halo, {{ Universe::petugas()->nama_petugas }}!</h1>
		@endrole

		
		@role('siswa')
		  <h1 class="display-4">Halo, {{ Universe::siswa()->nama_siswa }}!</h1>
		@endrole
		  <p class="lead">Selamat datang di WEB SPP SD Batu Bara</p>
		  <hr class="my-4">
		</div>
	</div>
</div>
{{-- <article class="mb-5">
	@foreach ($posts as $post)
	<h2><a href="/home/{{ $post["slug"] }}">{{ $post["title"] }}</a></h2>
	<h5>By : {{ $post["author"] }}</h5>
	<p>{{ $post["body"] }}</p>
	@endforeach
</article> --}}
@endsection