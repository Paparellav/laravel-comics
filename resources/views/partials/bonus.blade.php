<section>
    <div class="bonus-section">
        <div class="bonus__container">
            <ul>
                @foreach ($bonusArray as $item)
                    <li>
                        <img src="{{ asset('../images/' . $item['img']) }}" alt="{{ $item['text'] }}">
                        <h3>{{ $item['text'] }}</h3>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
