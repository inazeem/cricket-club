@extends('app')

@section('content')
<h2>Matches</h2>

@if ( !$matches->count() )
You have no matchs
@else
<ul>
    @foreach( $matches as $match )
    <li style="list-style: none; float:left; width:100%; ">
        <div style="float: left; width:150px"><a href="matches/{{$match->id}}">{{ $match->opposition }}</a></div>
        <div style="float: left; width:150px">{{ $match->date }} {{ $match->time }}</div>
        <div style="float: left; width:150px">{{ $match->result }}</div>
        <div style="float: left; width:150px">{{ $match->team_id }}</div>
        <div style="float: left; width:150px"><a href="scorecards/create/{{ $match->id }}">Add Scorecard</a></div>
    </li>
    @endforeach
</ul>
@endif
@endsection