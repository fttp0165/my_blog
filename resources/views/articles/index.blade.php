@extends('layouts.app')
@section('content')
  <h1>Personal</h1> 
  <a type="button"
   href="{{route('article.create')}}" 
   class="btn btn-secondary">Create</a>
@endsection