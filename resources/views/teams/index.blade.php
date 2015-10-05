@extends('app')

@section('content')
<h2>Teams</h2>

@if ( !$teams->count() )
You have no Teams
@else
<ul>
    @foreach( $teams as $team )
    <li style="list-style: none; float:left; width:100%; ">
        <div style="float: left; width:150px"><a href="teams/{{$team->id}}">{{ $team->name }}</a></div>
        <div style="float: left; width:150px">{{ $team->club_id }}</div>
    </li>
    @endforeach
</ul>
@endif
@endsection