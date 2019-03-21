@extends('layouts.simple')

@section('content')
<div class="container">
    <ul class="menu">
        <li>
            <a href="{{ url("/workers/management") }}"
               class="{{ url()->current() == url("/workers/management") ? 'current' : ''}}">
                Management
            </a>
        </li>
        <li>
            <a href="{{ url("/workers/artistic") }}"
               class="{{ url()->current() == url("/workers/artistic") ? 'current' : ''}}">
                Artistic
            </a>
        </li>
        <li>
            <a href="{{ url("/workers/actors") }}"
               class="{{ url()->current() == url("/workers/actors") ? 'current' : ''}}">
                Actors
            </a>
        </li>
        <li>
            <a href="{{ url("/workers/ballet") }}"
               class="{{ url()->current() == url("/workers/ballet") ? 'current' : ''}}">
                Ballet
            </a>
        </li>
        <li>
            <a href="{{ url("/workers/orchestra") }}"
               class="{{ url()->current() == url("/workers/orchestra") ? 'current' : ''}}">
                Orchestra
            </a>
        </li>
    </ul>
    <ul>
        @forelse ($workers as $worker)
            <li>
                <a href="{{ url("/worker/{$worker->slug}") }}">
                    {{ $worker->name }}
                </a>
            </li>
        @empty
            <p>No workers</p>
        @endforelse
    </ul>
</div>
@endsection
