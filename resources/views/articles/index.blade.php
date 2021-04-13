@extends('layouts.app')
@section('content')
  <h1>Personal</h1> 
  <a type="button"
   href="{{route('articles.create')}}" 
   class="btn btn-secondary">Create</a>

   <ul>
     @foreach($articles as $article)
     <li>{{$article->title}}</li>
     @endforeach
   </ul>

@endsection