@extends('layout.app')

@section('title')
    DC Comics | Homepage
@endsection

@section('content')
    <div class="main__banner">
        <div class="main__series">Current Series</div>
    </div>
    <div class="main__container">
        @foreach ($comics as $item)
            <div class="thumb">
                <div class="thumb__img">
                    <img src="{{ $item['thumb'] }}" alt="{{ $item['series'] }}">
                </div>
                <h3>{{ $item['series'] }}</h3>
            </div>
        @endforeach
        <div class="load-more-btn">
            <a href="#">Load more</a>
        </div>
    </div>
@endsection
