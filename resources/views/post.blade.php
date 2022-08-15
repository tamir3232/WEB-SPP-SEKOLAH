@extends('layouts.backend.app')
@section('title', 'Home')
@section('content_title', 'Single Post')
@section('content')

    <article>
        <h2>{{ $post["title"] }}</h2>
        <h5>{{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>
    <a href="/home">Kembali</a>
@endsection