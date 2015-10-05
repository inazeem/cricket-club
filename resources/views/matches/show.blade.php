@extends('app')

@section('content')
<h2>matches</h2>

@if ( !$match->count() )
You have no matches
@else

<h1> {{$match->opposition}} </h1>
<p>{{$match->result}}</p>
<p>{{$match->date}} {{$match->time}}</p>

@endif
@endsection