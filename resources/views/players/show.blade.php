@extends('app')

@section('content')
<h2>Players</h2>

@if ( !$player->count() )
You have no palyers
@else

<h1> {{$player->firstname}} {{$player->lastname}}</h1>
<p>Lorem ipsum doler sit amit...</p>

@endif
@endsection