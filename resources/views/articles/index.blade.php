@extends('app')

@section('content')
<h2>Articles</h2>

@if ( !$articles->count() )
You have no Articles
@else
<ul>
    @foreach( $articles as $article )
    <li style="list-style: none; float:left; width:100%; ">
        <div style="float: left; width:150px"><a href="articles/{{$article->id}}">{{ $article->title }}</a></div>
        <div style="float: left; width:350px">{{ $article->description }}</div>
        <div style="float: left; width:150px">{{ $article->club_id }}</div>
    </li>
    @endforeach
</ul>
@endif
@endsection