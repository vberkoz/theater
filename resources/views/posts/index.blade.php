@extends('layouts.simple')

@section('content')
<div class="container">
    <ul>
        @forelse ($posts as $post)
            <li>
                <a href="{{ url("/post/{$post->slug}") }}">
                    {{ $post->title }}
                </a>
                <br>
                {{ $post->lead }}
            </li>
            <br>
        @empty
            <p>No posts</p>
        @endforelse
    </ul>
    {{ $posts->links() }}
</div>
@endsection
