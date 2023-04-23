@extends('layouts.main')

@section('linkcss')
<link rel="stylesheet" href="css/navbar.css">

    <link rel="stylesheet" href="css/splide.min.css">
    <link rel="stylesheet" href="css/home.css">
@endsection

@section('container')
    <div class="middle-splide">
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide"><img src="{{ asset('storage/imgCarousel/SANSSHOP.png') }}"></li>
                    <li class="splide__slide"><img src="{{ asset('storage/imgCarousel/2.png') }}"</li>
                    <li class="splide__slide"><img src="{{ asset('storage/imgCarousel/3.png') }}"></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="category">
        <h2>Categories</h2>
        <div class="parent-grid">
            @foreach ($category as $cat)
            <a href="category/{{$cat->slug}}">
                <div class="card-grid">
                    <i class="fa-solid {{ $cat->icon }}"></i>
                    <div>{{ $cat->name }}</div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    <div class="all-posts">
        <h2>All Posts</h2>
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
<script src="js/nav.js"></script>
    <script src="js/splide.min.js"></script>
    <script>
        new Splide(".splide", {
            type: "loop",
            autoplay: true,
            arrows:false,
        }).mount();
    </script>
@endsection
