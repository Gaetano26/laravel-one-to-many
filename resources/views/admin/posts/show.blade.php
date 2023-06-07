@extends('layouts.admin')

@section('content')
    <h1>{{ $post->title }}</h1>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <img src="{{ $post->image }}" alt="{{ $post->title }}">
    <h3 class="mt-3">Category: {{ $post->category ? $post->category->name : 'Senza categoria' }}</h3>
    <p>{!! $post->body !!}</p>
@endsection
