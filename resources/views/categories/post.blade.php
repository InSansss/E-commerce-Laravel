@extends('layouts.main')

@section('linkcss')
    <link rel="stylesheet" href="/css/categoryPost.css">
    <link rel="stylesheet" href="/css/navbar.css">
@endsection

@section('container')
    <div class="all-posts">
        <h2>Kategory : {{ $title }}</h2>
        <div class="parent-grid">
        @foreach ($posts as $post)
            <a href="post/{{$post->slug}}">
                <div class="card-post">
                    <img src="{{ asset('storage/'.$post->image) }}">
                    <h3>{{ $post->name }}</h3>
                    <p>Rp.{{ $post->price }}</p>
                </div>
            </a>
        @endforeach
        </div>
    </div>
@endsection

@section('script')
<script src="/js/nav.js"></script>
@endsection