@extends('master')

@section('content')

<nav>
    <a href="{{ route('home') }}" >Home</a>
    <a href="{{ route('users.index') }}" >User list</a>
</nav>

<hr>

<h2> Create </h2>

@if (session()->has('message'))
{{session()->get('message')}}
@endif

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <label>Name</label>
    <input type="text" name="name" placeholder="Nome">
    <label>Email</label>
    <input type="text" name="email" placeholder="Email">
    <label>Password</label>
    <input type="password" name="password" placeholder="Senha">

    <button type="submit">Create</button>
</form>

@endsection
