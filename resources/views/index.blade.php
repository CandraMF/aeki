@extends('layouts.index')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('content')
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Kursi nyaman, enak dipandang, dan <span style="font-style: italic">aesthetic<span></h1>
                        <p class="mb-4">AEKI menyediakan produk dengan kualitas dan bahan terbaik dengan harga yang aman di dompet, percantik ruangan mu dengan kursi dari AEKI sekarang!</p>
                        <p><a href="" class="btn btn-secondary me-2">Belanja Sekarang</a><a href="#" class="btn btn-white-outline">Telusuri</a></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="{{ asset('images/couch.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <h2 class="mb-4 section-title">Dibuat dengan material terbaik</h2>
                    <p><a href="shop.html" class="btn">Explore</a></p>
                </div>

                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="cart.html">
                        <img src="images/product-1.png" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Nordic Chair</h3>
                        <strong class="product-price">$50.00</strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>

                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="cart.html">
                        <img src="images/product-2.png" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Kruzo Aero Chair</h3>
                        <strong class="product-price">$78.00</strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>

                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="cart.html">
                        <img src="images/product-3.png" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Ergonomic Chair</h3>
                        <strong class="product-price">$43.00</strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h2 class="section-title">Kenapa AEKI?</h2>
                    <p>AEKI menyediakan produk dengan kualitas dan bahan terbaik dengan harga yang aman di dompet</p>

                    <div class="row my-5">
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="images/truck.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Gratis Ongkir</h3>
                                <p>Gratis ongkir untuk setiap produk dimanapun kamu berada</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="images/bag.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Belanja dengan mudah</h3>
                                <p>Pilih dan bayar kursi kesukaan mu dengan mudah langsung di website</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="images/support.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>24/7 Support</h3>
                                <p>Siap melayani kamu 24 jam</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="img-wrap">
                        <img src="images/why-choose-us-img.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('partials.footer')
@endsection
