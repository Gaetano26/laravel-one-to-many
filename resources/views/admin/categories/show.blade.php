@extends('layouts.admin')

@section('content')
    <h1 class="mt-2">Category</h1>
    <p>Categoria: {{ $category->name }}</p>

    <h3>Progetti di questa categoria:</h3>
    @foreach ($posts as $post)
        <p>{{ $post->title }}</p>
        <img src="{{ $post->image }}" alt="{{ $post->title }}">
    @endforeach
@endsection
