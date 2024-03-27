@extends('master')

@section('content')

<a href="{{ route('users.index') }}" >User list</a> |
<a href="{{ route('users.create') }}" >Create User</a>

<hr>

<h2>hello world - php</h2>

@endsection
