@extends('app')

@section('content')
    <h2>Users</h2>

    @if ( !$users->count() )
        You have no projects
    @else
        <ul>
            @foreach( $users as $user )
                <li style="list-style: none; float:left; width:100%; ">
                    <div style="float: left; width:150px"><a href="clubs/{{$user->id}}">{{ $user->name }}</a></div>
                </li>
            @endforeach
        </ul>
    @endif
@endsection