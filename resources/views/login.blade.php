@extends('layouts.main')

@section('linkcss')
<link rel="stylesheet" href="css/navbar.css">

    <link rel="stylesheet" href="css/register.css">
@endsection

@section('container')
    <div class="register-wrap">
        <h1>Login</h1>
        <form action="/login" method="post">
            @csrf
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Register</button>
        </form>
        <div class="footer">
            <span>Don't have account?</span><a href="/register">Register</a>
        </div>
    </div>
@endsection

@section('script')
<script src="js/nav.js"></script>

@endsection
