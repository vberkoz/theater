@extends('layouts.simple')

@section('content')
<div class="container">
    <h1>{{ $vacancy->title }}</h1>
    <h3>{{ $vacancy->updated_at }}</h3>
    <p>{{ $vacancy->body }}</p>
</div>
@endsection
