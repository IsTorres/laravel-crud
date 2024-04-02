@extends('master')

@section('content')

<nav>
    <a href="{{ route('home') }}" >Home</a> | <a href="{{ route('users.index') }}" >User list</a>
</nav>

<hr>

<h2> Edit </h2>

@if (session()->has('message'))
{{session()->get('message')}}
@endif

{{-- <p> sdasdasd | {{$user}} </p> --}}

<form action="{{ route('users.update', $user->id) }}" method="post">
    @csrf
    {{-- @method('PUT') --}}
    <input type="hidden" name="_method" value="PUT" />
    <label>Name</label>
    <input type="text" name="name" value="{{ $user->name }}">
    <label>Email</label>
    <input type="text" name="email" value="{{ $user->email }}">

    <button type="submit">Update</button>
</form>
