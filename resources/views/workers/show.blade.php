@extends('layouts.simple')

@section('content')
<div class="container">
    <img src="{{ $worker->image_url }}" alt="{{ $worker->image_url }}">
    <h1>{{ $worker->name }}</h1>
    <h3>{{ $worker->position }}</h3>
    <p>{{ $worker->description }}</p>

    <h3 class="text-center">Roles</h3>
    @foreach ($worker->roles as $role)
        <div class="left">{{ $role->title }}</div>
        <div class="dash"> - </div>
        <div class="right">
            <a href="{{ url("/spectacle/{$role->spectacle->slug}") }}">
                {{ $role->spectacle->title }}
            </a>
        </div>
    @endforeach
</div>
@endsection
