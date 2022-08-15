@extends('layouts.backend.app')
@section('title', 'Berita')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/chart.js/Chart.min.css">
@endpush

@section('content_title', 'Berita')
@section('content')

<div class="table-responsive col-lg-8">
    <a href="{{ route('berita.create') }}" class="btn btn-primary mb-3">Create new post</a>
    <table class="table table-striped table-sm">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>1,001</td>
        <td>random</td>
        <td>data</td>
        <td>placeholder</td>
        <td>
            <a href="" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
            <a href="" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
            <a href="" class="btn btn-danger"><i class="fa-solid fa-circle-xmark"></i></i></a>
        </td>
        </tr>
        </tbody>
    </table>
</div>


@endsection