@extends('app')

@section('content')
<h2>Teams</h2>

@if ( !$team->count() )
You have no palyers
@else

<h1> {{$team->name}}</h1>
<p>Lorem ipsum doler sit amit...</p>

@endif
@endsection