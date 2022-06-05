@extends('layouts.base')

@section('body')
<style>
    .form_upload_image{

            width: 400px;
            max-width: 100%;
            display: grid;
            grid-gap: 5px;
            background-color: #d4e0f1;
            border-radius: 5px;
            padding: 5px;
        }
</style>
<div>
    @foreach ($mis_files_array as $f)
    <a href="{{$arrFilesUrl[$loop->index]}}">
    <h4>{{$f}}</h4>
    </a>
    @endforeach
</div>
<form class="form_upload_image" action="{{route('upload_image_user')}}" method='post' enctype="multipart/form-data">
    @csrf
    <input type="file" name="archivo" id="archivoid" onchange="onchangeFile(this)">
    <img src="" alt="" id="preview_image" style="max-width: 100%;min-width: 50px;max-height: 100px;">
    <input type="submit" value="SUBIR ARCHIVO Al SERVIDOR">
</form>

<script>
    function onchangeFile(input_file){

    var output=document.querySelector('#preview_image');
    output.src = URL.createObjectURL(input_file.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
    }
</script>
@endsection
