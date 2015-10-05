@extends('app')

@section('content')
<h2>Projects</h2>

@if ( !$club->count() )
You have no projects
@else

    <h1> {{$club->name}}</h1>
    <p>Lorem ipsum doler sit amit...</p>
@endif
@endsection