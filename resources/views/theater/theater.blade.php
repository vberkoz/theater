@extends('layouts.simple')

@section('content')
<div class="container"><hr>
    <ul class="menu">
        <li>
            <a href="{{ url("/theater/history") }}"
               class="{{ url()->current() == url("/theater/history") ? 'current' : ''}}">
                History
            </a>
        </li>
        <li>
            <a href="{{ url("/theater/photo") }}"
               class="{{ url()->current() == url("/theater/photo") ? 'current' : ''}}">
                Photo
            </a>
        </li>
        <li>
            <a href="{{ url("/theater/scenes") }}"
               class="{{ url()->current() == url("/theater/scenes") ? 'current' : ''}}">
                Scenes
            </a>
        </li>
        <li>
            <a href="{{ url("/theater/hallplan") }}"
               class="{{ url()->current() == url("/theater/hallplan") ? 'current' : ''}}">
                Hallplan
            </a>
        </li>
    </ul>
    <p>{{ $aspect->body }}</p>
</div>
@endsection
