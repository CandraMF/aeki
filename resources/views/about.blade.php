@extends('layouts.index')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('content')
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
