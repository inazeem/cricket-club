@extends('app')

@section('content')
<h2>Projects</h2>

@if ( !$players->count() )
You have no Players
@else
<ul>
    @foreach( $players as $player )
    <li style="list-style: none; float:left; width:100%; ">
        <div style="float: left; width:150px"><a href="players/{{$player->id}}">{{ $player->firstname }}</a></div>
        <div style="float: left; width:150px">{{ $player->lastname }}</div>
        <div style="float: left; width:150px">{{ $player->club_id }}</div>
    </li>
    @endforeach
</ul>
@endif
@endsection