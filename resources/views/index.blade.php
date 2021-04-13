

@section('title', 'Blog')

@extends('layouts.app')

@section('content')
  <h1>content</h1> 
  <a type="button" class="btn btn-secondary" 
  href="{{route('article.index')}}"
  > ArticlePage</a>
@endsection