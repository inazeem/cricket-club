@extends('app')

@section('content')
<h2>Player Scores</h2>

@if ( !$playerscores->count() )
You have no scorecards
@else
<ul>
    @foreach( $playerscores as $playerscore )
    <li style="list-style: none; float:left; width:100%; ">
        <div style="float: left; width:150px"><a href="playerscores/{{$playerscore->id}}">{{ $playerscore->runs_scored }}</a></div>
        <div style="float: left; width:150px">{{ $playerscore->not_out }} {{ $playerscore->balls_bowled }}</div>
        <div style="float: left; width:150px">{{ $playerscore->wicket }}</div>
        <div style="float: left; width:150px">{{ $playerscore->runs_conceded }}</div>
    </li>
    @endforeach
</ul>
@endif
@endsection