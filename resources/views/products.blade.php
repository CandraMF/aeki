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
                        <h1>Shop</h1>
                    </div>
                </div>
                <div class="col-lg-7">

                </div>
            </div>
        </div>
    </div>



    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row">
                @foreach ($data as $d)
                    <div class="col-12 col-md-4 col-lg-3 mb-5">
                        <a class="product-item" >
                            <img src="images/{{ $d->image }}.png" class="img-fluid product-thumbnail">
                            <h3 class="product-title">{{ $d->nama }}</h3>
                            <strong class="product-price">Rp. {{ $d->harga }}</strong>

                            <span class="icon-cross">
                                <img src="images/cross.svg" class="img-fluid">
                            </span>
                        </a>
                    </div>
                @endforeach
                @foreach ($data as $d)
                    <div class="col-12 col-md-4 col-lg-3 mb-5">
                        <a class="product-item" href="#">
                            <img src="images/{{ $d->image }}.png" class="img-fluid product-thumbnail">
                            <h3 class="product-title">{{ $d->nama }}</h3>
                            <strong class="product-price">Rp. {{ $d->harga }}</strong>

                            <span class="icon-cross">
                                <img src="images/cross.svg" class="img-fluid">
                            </span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('partials.footer')
@endsection
