@extends('layouts.admin')
@section('content')
    <h1>Tag</h1>
    <p>The tag name is: {{ $tag->name }}</p>
    @foreach ($tag->posts as $post)
        <p>{{ $post->title }}</p>
        <img src="{{ $post->image }}" alt="{{ $post->title }}">
    @endforeach
@endsection
