@extends('layouts.main')

@section('linkcss')
    <link rel="stylesheet" href="../../css/navbar.css">
    <link rel="stylesheet" href="../../css/dashboard/create.css">
@endsection

@section('container')
<div class="wrapper-form">
        <div class="header">
            <div class="title">
                <h1>Edit post</h1>
            </div>
            <div class="back-to-post">
                <a href="/dashboard"><i class="fa-solid fa-left-long"></i> Back to post</a>
            </div>
        </div>
        <form action="/dashboard/{{ $posts->slug }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <label for="name">Title</label>
            <input type="text" name="name" id="name" autocomplete="off" value="{{ $posts->name }}">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" autocomplete="off" value="{{ $posts->price }}">
            <label for="category">Choose a category</label>
            <select name="category_id" id="category">
                <option value="1">Fashion</option>
                <option value="2">Game</option>
                <option value="3">Aksesoris</option>
                <option value="4">Source Code</option>
                <option value="5">Audio Camera</option>
                <option value="6">Komputer & laptop</option>
                <option value="7">Kesehatan</option>
                <option value="8">Office</option>
            </select>
            <label for="image">Image</label>
            <input type="file" name="image" id="image">
            <label for="body">Description</label>
            <textarea name="body" cols="100" rows="15" id="body">{{ $posts->body }}</textarea>
            <button type="submit">Create</button>
        </form>
    </div>
@endsection

@section('script')
<script src="../../js/nav.js"></script>

@endsection
