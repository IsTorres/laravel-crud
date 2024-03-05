@extends('master')

@section('content')

<a href="{{ route('users.create') }}" >Create</a>

<hr>

<h2> Users </h2>

<ul>
    @foreach ($users as $user)
        <li>
            <strong>{{ $user->name }}</strong> | {{ $user->email }} - <a href="{{ route('users.edit', $user->id) }}">Edit</a> - <a href="{{ route('users.destroy', $user->id) }}">Delete</a>
        </li>
    @endforeach
</ul>

@endsection
