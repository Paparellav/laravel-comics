@extends('layout.appNoBonus')

@section('title')
    DC Comics | Single Comics
@endsection

@section('content')
    <div class="main__banner">
        <div class="main__series_2">
            <img src="{{ $currentComics['thumb'] }}" alt="{{ $currentComics['series'] }}">
        </div>
    </div>
    <div class="blue_band"></div>
    <div class="container-fluid">
        <div class="container">
            <div>
                <h1>{{ $currentComics['title'] }}</h1>
                <div class="green_band">
                    <div class="left_col">
                        <div>U.S. Price: <span class="white">{{ $currentComics['price'] }}</span></div>
                        <div>AVAILABLE</div>
                    </div>
                    <div class="right_col">
                        <div class="white">Check Availability</div>
                    </div>
                </div>
                <p>
                    {{ $currentComics['description'] }}
                </p>
            </div>
            <div class="adv">
                <div class="adv_text">ADVERTISEMENT</div>
                <img src="{{ asset('../images/adv.jpg') }}" alt="">
            </div>
        </div>
        <div class="container-fluid_2">
            <div class="container_2">
                <div>
                    <h2>Talent</h2>
                    <div class="table border-top border-bottom">
                        <div class="blue">Art by:</div>
                        <div>
                            @foreach ($currentComics['artists'] as $artist)
                                <small>{{ $artist }}</small>,
                            @endforeach
                        </div>
                    </div>
                    <div class="table border-bottom">
                        <div class="blue">Written by:</div>
                        <div>
                            @foreach ($currentComics['writers'] as $writer)
                                <small>{{ $writer }}</small>,
                            @endforeach
                        </div>
                    </div>
                </div>
                <div>
                    <h2>Specs</h2>
                    <div class="table_2 border-top">
                        <div class="border-bottom">
                            <div class="blue">Series: </div>
                            <div class="serie">{{ $currentComics['series'] }}</div>
                        </div>
                        <div class="border-bottom">
                            <div class="blue">U.S. Price: </div>
                            <div>{{ $currentComics['price'] }}</div>
                        </div>
                        <div class="border-bottom">
                            <div class="blue">On Sale Date: </div>
                            <div>{{ $currentComics['sale_date'] }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
