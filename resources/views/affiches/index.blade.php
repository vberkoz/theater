@extends('layouts.simple')

@section('content')
<div class="container">
    <hr>
    <ul class="menu">
        <li>
            <a href="{{ url("/affiches/$current_month") }}"
               class="{{ url()->current() == url("/affiches/$current_month") ? 'current' : ''}}">
                {{ ucfirst($current_month) }}
            </a>
        </li>
        <li>
            <a href="{{ url("/affiches/$next_month") }}"
               class="{{ url()->current() == url("/affiches/$next_month") ? 'current' : ''}}">
                {{ ucfirst($next_month) }}
            </a>
        </li>
    </ul>
    <ul>
        @forelse ($affiches as $affiche)
            <li>
                <a href="{{ url("/spectacle/{$affiche->spectacle->slug}") }}">
                    {{ $affiche->spectacle->title }}
                </a><br>
                {{ $affiche->spectacle->type }}<br>
                {{ $affiche->spectacle->author }} - {{ $affiche->spectacle->duration }}<br>
                Starts at: {{ $affiche->starts_at }}
            </li>
            <br>
        @empty
            <p>No affiches</p>
        @endforelse
    </ul>
</div>
@endsection
