<footer>
    <div class="footer-top">
        <div class="footer-top__container">
            <div class="footer-col">
                <h3 class="title">DC Comics</h3>
                <ul>
                    @foreach ($menuArray as $item)
                        <li>
                            <a href="">{{ $item['text'] }}</a>
                        </li>
                    @endforeach
                </ul>
                <h3 class="title">Shop</h3>
                <ul>
                    <li>
                        <a href="#">Shop DC</a>
                    </li>
                    <li>
                        <a href="#">Shop DC Collectibles</a>
                    </li>
                </ul>
            </div>
            <div class="footer-col">
                <h3 class="title">DC</h3>
                <ul>
                    @foreach ($firstFooter as $item)
                        <li>
                            <a href="">{{ $item['text'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="footer-col">
                <h3 class="title">Sites</h3>
                <ul>
                    @foreach ($secondFooter as $item)
                        <li>
                            <a href="">{{ $item['text'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="footer-col-img">
                <div>
                    <img src="{{ asset('images/dc-logo-bg.png') }}" alt="dc-logo">
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="footer-bottom__container">
            <div class="sign-up-btn">
                <a href="#">SIGN-UP NOW!</a>
            </div>
            <div class="follow-us-section">
                <h3>FOLLOW US</h3>
                <div class="img-section">
                    <img src="{{ asset('images/footer-facebook.png') }}" alt="footer-facebook">
                    <img src="{{ asset('images/footer-twitter.png') }}" alt="footer-twitter">
                    <img src="{{ asset('images/footer-youtube.png') }}" alt="footer-youtube">
                    <img src="{{ asset('images/footer-pinterest.png') }}" alt="footer-pinterest">
                    <img src="{{ asset('images/footer-periscope.png') }}" alt="footer-periscope">
                </div>
            </div>
        </div>
    </div>
</footer>
