@extends('layout.app')

@section('title')
    DC Comics | Homepage
@endsection

@section('content')
{{ $comics[0]['title'] }}
    <h1>Ciao sono il main</h1>
@endsection
