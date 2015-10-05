@extends('app')

@section('content')
<h2>Projects</h2>

@if ( !$clubs->count() )
You have no projects
@else
<ul>
    @foreach( $clubs as $club )
    <li style="list-style: none; float:left; width:100%; ">
        <div style="float: left; width:150px"><a href="clubs/{{$club->id}}">{{ $club->name }}</a></div>
        <div style="float: left; width:150px">{{ $club->owner }}</div>
        <div style="float: left; width:150px">{{ $club->email }}</div>
    </li>
    @endforeach
</ul>
@endif
@endsection