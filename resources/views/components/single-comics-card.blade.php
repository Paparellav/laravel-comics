<div class="thumb">
    <div class="thumb__img">
        <img src="{{ $thumb }}" alt="{{ $series }}">
    </div>
    <a href="{{ route('single-comics', ["id" => $id]) }}">
        <h3>{{ $series }}</h3>
    </a>
</div>