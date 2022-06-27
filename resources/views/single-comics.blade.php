@extends('layout.appNoBonus')

@section('title')
    DC Comics | Single Comics
@endsection

@section('content')
    <div class="main__banner">
        <div class="main__series_2">
            <img src="{{ $comics[0]['thumb'] }}" alt="{{ $comics[0]['series'] }}">
        </div>
    </div>
    <div class="blue_band"></div>
    <div class="container-fluid">
        <div class="container">
            <div>
                <h1>{{ $comics[0]['title'] }}</h1>
                <div class="green_band">
                    <div class="left_col">
                        <div>U.S. Price: {{ $comics[0]['price'] }}</div>
                        <div>AVAILABLE</div>
                    </div>
                    <div class="right_col">
                        <div>Check Availability</div>
                    </div>
                </div>
                <p>
                    {{ $comics[0]['description'] }}
                </p>
            </div>
            <div class="adv">
                <div class="adv_text">ADVERTISEMENT</div>
                <img src="{{ asset('../images/adv.jpg') }}" alt="">
            </div>
        </div>
        <div class="container_2">
            <div>
                <h2>Talent</h2>
                <div class="table">
                    <div>Art by:</div>
                    <div>
                        @foreach ($comics[0]['artists'] as $artist)
                            <small>{{ $artist }}</small>
                        @endforeach
                    </div>
                </div>
                <div class="table">
                    <div>Written by:</div>
                    <div>
                        @foreach ($comics[0]['writers'] as $writer)
                            <small>{{ $writer }}</small>
                        @endforeach
                    </div>
                </div>
            </div>
            <div>
                <h2>Specs</h2>
                <div class="table_2">
                    <div>
                        <div>Series: </div>
                        <div>{{ $comics[0]['series'] }}</div>
                    </div>
                    <div>
                        <div>U.S. Price: </div>
                        <div>{{ $comics[0]['price'] }}</div>
                    </div>
                    <div>
                        <div>On Sale Date: </div>
                        <div>{{ $comics[0]['sale_date'] }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
