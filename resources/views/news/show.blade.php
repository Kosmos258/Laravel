@extends('layouts.main')
@section('content')

    <div class="album py-5 bg-light">
        <div class="container">
            <img src="{{ $news['image'] }}" />
            <h2>{{ $news['title']  }}</h2>
            <p>{!! $news['description'] !!}</p>
            <p>{{ $news['author'] }}</p>
            <p>{{ $news['created'] }}</p>
            <p>{{ $news['status'] }}</p>
        </div>
    </div>
@endsection
