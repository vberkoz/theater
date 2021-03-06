@extends('layouts.simple')

@section('content')
<div class="container">
    <img src="{{ $spectacle->image_url }}" alt="{{ $spectacle->image_url }}">
    <h1>{{ $spectacle->title }}</h1>
    <h3>{{ $spectacle->type }}</h3>
    <p>{{ $spectacle->author }} - {{ $spectacle->duration }}</p>
    <p>{{ $spectacle->description }}</p>

    <h3 class="text-center">Roles</h3>
    @foreach ($spectacle->roles as $role)
        <div class="left">{{ $role->title }}</div>
        <div class="dash"> - </div>
        <div class="right">
            <a href="{{ url("/worker/{$role->worker->slug}") }}">
                {{ $role->worker->name }}
            </a>
        </div>
    @endforeach

    <h3 class="text-center">Schedule</h3>
    <div class="text-center">
        @foreach ($spectacle->affiches as $affiche)
            <div>{{ $affiche->starts_at }}</div>
        @endforeach
    </div>
</div>
@endsection
