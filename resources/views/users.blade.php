@extends('master')

@section('content')

<nav>
    <a href="{{ route('home') }}" >Home</a> | <a href="{{ route('users.create') }}" >Create</a>
</nav>

<hr>

<h2> Users </h2>

<ul>
    @if($users->count() == 0)
        <h2>No users found</h2>
    @else
        @foreach ($users as $user)
        <li>
            <strong>{{ $user->name }}</strong> | {{ $user->email }} - <a href="{{ route('users.edit', ['user' => $user->id]) }}">Edit</a> | <a href="{{ route('users.destroy', $user->id) }}">Delete</a>
        </li>
        @endforeach
    @endif
</ul>

@endsection
