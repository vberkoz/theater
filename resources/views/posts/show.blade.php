@extends('layouts.simple')

@section('content')
<div class="container">
    <img src="{{ $post->image_url }}" alt="{{ $post->image_url }}">
    <h1>{{ $post->title }}</h1>
    <h3>{{ $post->lead }}</h3>
    <p>{{ $post->author->name }} - {{ $post->updated_at }}</p>
    <p>{{ $post->body }}</p>
</div>
@endsection
