@extends('layouts.backend.app')
@section('title', 'Berita')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/chart.js/Chart.min.css">
@endpush 

@section('content_title', 'Create New Post')
@section('content')

<div class="container">
    <br>
    <form action="{{ route('Ckeditor.store') }}" id="submitform" method="POST" enctype="multipart/form-data">
        @csrf
        <label>title</label>
        <input class="form-control" type="text" name="title" id="title">
        <br>
        <textarea name="editor" id="editor"></textarea>
        <br>
        <br>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor', {
        filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token() ]) }}",
        filebrowserUploadMethod: 'form'
    });

    $(document).ready(function(){

        $('body').on('submit', '#submitform', function(e) {
            e.preventDefault();

            $.ajax({
                url: $(this).attr('action'),
                data: new FormData(this),
                type: 'POST',
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    alert(data.msg);
                }
            });
        });
    });
</script>
@endsection