@extends('layouts.main')

@section('linkcss')
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/dashboard/index.css">
@endsection

@section('container')
<div class="user-login">
        <h1>{{ Auth::user()->name }}</h1>
        <small>{{ Auth::user()->email }}</small>
    </div>
    <div class="manage-post">
        <div class="header">
            <div class="title">
                <h1>YourPost</h1>
            </div>
            <div class="make-post">
                <a href="/dashboard/create">+ Create new Post</a>
            </div>
        </div>
        <div class="post">
            @foreach ($posts as $post)
            <div class="card-post">
                <img src="{{ asset('storage/'.$post->image) }}">
                <h2>{{ $post->name }}</h2>
                <p>Rp.{{ $post->price }}</p>
                <div class="action">
                    <a href="/post/{{ $post->slug }}"><div class="view"><i class="fa-regular fa-eye icon"></i></div></a>
                    <form action="/dashboard/{{ $post->slug }}/edit" method="post">
                        @method('get')
                        @csrf
                        <button class="edit"><i class="fa-solid fa-pen icon"></i></button>
                    </form>
                    <form action="/dashboard/{{ $post->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button onclick="return confirm('Anda yakin mau menghapus post ini?')"><i class="fa-solid fa-trash icon"></i></button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

@section('script')
<script src="js/nav.js"></script>
@endsection