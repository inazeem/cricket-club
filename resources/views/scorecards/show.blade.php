@extends('app')

@section('content')
<h2>Scorecards</h2>

@if ( !$scorecard->count() )
You have no scorecard
@else
<ul>
    <li style="list-style: none; float:left; width:100%; ">
        <div style="float: left; width:150px"><a href="scorecards/{{$scorecard->id}}">{{ $scorecard->runs_scored }}</a></div>
        <div style="float: left; width:150px">{{ $scorecard->over_bowled }} {{ $scorecard->leg_byes }}</div>
        <div style="float: left; width:150px">{{ $scorecard->wicket }}</div>
        <div style="float: left; width:150px">{{ $scorecard->wides }}</div>
    </li>
</ul>
@endif
@endsection