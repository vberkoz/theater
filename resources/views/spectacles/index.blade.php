@extends('layouts.simple')

@section('content')
<div class="container">
    <hr>
    <ul class="menu">
        <li>
            <a href="{{ url("/repertoire/general") }}"
               class="{{ url()->current() == url("/repertoire/general") ? 'current' : ''}}">
                General
            </a>
        </li>
        <li>
            <a href="{{ url("/repertoire/children") }}"
               class="{{ url()->current() == url("/repertoire/children") ? 'current' : ''}}">
                Children
            </a>
        </li>
    </ul>
    <ul>
        @forelse ($spectacles as $spectacle)
            <li>
                <a href="{{ url("/spectacle/{$spectacle->slug}") }}">
                    {{ $spectacle->title }}
                </a><br>
                {{ $spectacle->type }}<br>
                {{ $spectacle->author }} - {{ $spectacle->duration }}
            </li>
            <br>
        @empty
            <p>No spectacles</p>
        @endforelse
    </ul>
</div>
@endsection
