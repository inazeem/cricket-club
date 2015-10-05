@extends('app')

@section('content')
<h2>Articles</h2>

@if ( !$article->count() )
You have no articles
@else

<h1> {{$article->title}} </h1>
<p>{{$article->description}}</p>

@endif
@endsection