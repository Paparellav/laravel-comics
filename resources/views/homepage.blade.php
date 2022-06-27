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
            @include('components.single-comics-card', [
                "id" => $item['id'],
                "thumb" => $item['thumb'],
                "series" => $item['series']
            ])
        @endforeach
        <div class="load-more-btn">
            <a href="#">Load more</a>
        </div>
    </div>
@endsection
