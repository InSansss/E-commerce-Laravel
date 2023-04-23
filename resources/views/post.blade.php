@extends('layouts.main')

@section('linkcss')
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/post.css">
@endsection

@section('container')
    <div class="card">
        <div class="back-to-home">
            <a href="/">
                <i class="fa-solid fa-left-long"></i> Back to home
            </a>
        </div>
        <div class="main-content">
            <div class="image-post">
                <div class="image">
                    <img src="{{ asset('storage/'.$posts->image) }}">
                </div>
            </div>
            <div class="descript-post">
                <h1>{{ $posts->name }}</h1>
                <h3>Rp.{{ $posts->price }}</h3>
                <p>Dipost oleh {{ $posts->user->name }}</p>
                <p><i class="fa fa-envelope"></i> {{ $posts->user->email }}</p>
            </div>
        </div>
    </div>
    <div class="descript">
        <h2>Deskripsi</h2>
        <p>{{ $posts->body }}</p>
    </div>
@endsection

@section('script')
<script src="/js/nav.js"></script>
@endsection