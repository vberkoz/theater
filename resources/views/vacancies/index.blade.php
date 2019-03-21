@extends('layouts.simple')

@section('content')
<div class="container">
    <ul>
        @forelse ($vacancies as $vacancy)
            <li>
                <a href="{{ url("/vacancy/{$vacancy->slug}") }}">
                    {{ $vacancy->title }}
                </a>
                <br>
                {{ $vacancy->updated_at }}
            </li>
            <br>
        @empty
            <p>No vacancies</p>
        @endforelse
    </ul>
</div>
@endsection
