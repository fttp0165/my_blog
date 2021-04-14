@extends('layouts.app')

@section('content')

<h1>Create Article</h1>
<form class="row" action="/articles" method="POST">
  @csrf
  @method('POST')
  <div class="input-group input-group-sm mb-3">
    <span class="input-group-text" id="inputGroup-sizing-sm">Title</span>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="title">
  </div>
  <!-- <textarea id="mytextarea">Hello, World!</textarea> -->
  <div class="form-floating">
  <!-- <textarea id="mytextarea" class="form-control articleContent" name="content" placeholder="Leave a comment here" style="height: 550px"></textarea> -->
  <textarea  class="form-control" id="summary-ckeditor" name="content"></textarea>
  <label for="floatingTextarea2"></label>
</div>
<div class="gy-5  d-md-flex justify-content-md-end">
  <button type="submit" class="btn btn-outline-info me-md-2">草稿</button>
  <button type="submit" class="btn btn-outline-info">發佈</button>
</div>
</form>

<!-- <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script> --> 
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
   
});
CKEDITOR.editorConfig = function( config ) {	config.height=600;}

</script>

@endsection

