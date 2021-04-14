@extends('layouts.app')

@section('content')
<h2>{{$article->title}}</h2>

<article>
<pre>
{!!$article->content!!}
</pre>
</article>



@endsection