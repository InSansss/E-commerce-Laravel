@extends('layouts.main')

@section('linkcss')
<link rel="stylesheet" href="css/navbar.css">

    <link rel="stylesheet" href="css/register.css">
@endsection

@section('container')
    <div class="register-wrap">
        <h1>Register</h1>
        <form action="/register" method="post">
            @csrf
            <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
            @error('name')
            <small>{{ $message }}</small>
            @enderror
            <input type="text" name="username" placeholder="Username" value="{{ old('username') }}">
            @error('username')
            <small>{{ $message }}</small>
            @enderror
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
            @error('email')
            <small>{{ $message }}</small>
            @enderror
            <input type="password" name="password" placeholder="Password">
            @error('password')
            <small>{{ $message }}</small>
            @enderror
            <button type="submit">Register</button>
        </form>
        <div class="footer">
            <span>Have account?</span><a href="/login">Login</a>
        </div>
    </div>
@endsection

@section('script')
<script src="js/nav.js"></script>

@endsection