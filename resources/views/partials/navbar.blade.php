<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="{{ asset('images/logo.png') }}" style="height: 50px">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                    <a class="nav-link" href="/">Beranda</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'products' ? 'active' : '' }}">
                    <a class="nav-link " href="/products">Produk</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'testimonials' ? 'active' : '' }}">
                    <a class="nav-link" href="/testimonials">Testimoni</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'about' ? 'active' : '' }}">
                    <a class="nav-link" href="/about">Tentang</a>
                </li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                {{-- <li><a class="nav-link" href="#"><img src="{{ asset('images/user.svg') }}"></a></li> --}}
                <li><a class="nav-link" href="/cart"><img src="{{ asset('images/cart.svg') }}"></a></li>
            </ul>
        </div>
    </div>

</nav>
