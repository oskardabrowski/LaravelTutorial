@extends('layout')

@section('content')
    <h1>{{ $heading }}</h1>

    @if (count($listings) > 0)
        @foreach ($listings as $listing)
            <a href="/listings/{{ $listing['id'] }}">
                <h2>{{ $listing['title'] }}</h2>
                <p>{{ $listing['description'] }}</p>
            </a>
        @endforeach
    @else
        <p>No listings found</p>
    @endif
@endsection
