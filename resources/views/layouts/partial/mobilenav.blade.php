<nav class="mobile-nav">
    <a href="{{ route('home.page') }}" class="bloc-icon">
        <img src="{{ asset('assets/icon/home.png') }}" alt="">
    </a>
    <a href="#" class="bloc-icon">
        <img src="{{ asset('assets/icon/search.png') }}" alt="">
    </a>
    <a href="#" class="bloc-icon">
        <img src="{{ asset('assets/icon/wallet.png') }}" alt="">
    </a>

    <a href="#" class="bloc-icon">
        @auth
        <!-- PIN -->
        <span class="pin soft-edged secondary">{{ Cart::session(Auth::user()->id)->getTotalQuantity()}}</span>
        <!-- /PIN -->
        @endauth
        <span>
        <img src="{{ asset('assets/icon/carty.png') }}" alt="">
        </span>


    </a>

    <a href="#" class="bloc-icon">
        <div class="mobile-account-options-handler right secondary">
            <span class="icon-user"></span>
        </div>
    </a>

</nav>
