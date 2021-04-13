
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
  
  <div class="form-floating">
  <textarea class="form-control articleContent" name="content" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 550px"></textarea>
  <label for="floatingTextarea2"></label>
</div>
<div class="gy-5  d-md-flex justify-content-md-end">
  <button type="submit" class="btn btn-outline-info me-md-2">草稿</button>
  <button type="submit" class="btn btn-outline-info">發佈</button>
</div>
</form>
@endsection