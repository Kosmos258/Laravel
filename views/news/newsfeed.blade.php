@extends('layouts.main')
@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">{{$h1}}</h1>
            </div>
        </div>
    </section>
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @forelse ($news as $news_card)
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                 xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                 preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>{{ $news_card->title }}</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">{{ $news_card->title }}</text>
                            </svg>
                            <div class="card-body">
                                <p class="card-text">{!! $news_card->description !!}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('news.news-detail', ['url_slug' => $news_card->url_slug]) }}"
                                           class="btn btn-sm btn-outline-secondary">Read</a>
                                    </div>
                                    <small class="text-body-secondary">{{ $news_card->created_at }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h2>Newsfeed is Empty</h2>
                @endforelse
            </div>
            {{ $news->links() }}
        </div>
    </div>
@endsection
