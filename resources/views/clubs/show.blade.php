@extends('app')

@section('content')
<h2>Clubs</h2>

@if ( !$club->count() )
You have no clubs
@else
    <h1> {{$club->name}}</h1>
    <p>Lorem ipsum doler sit amit...</p>
@endif
@endsection