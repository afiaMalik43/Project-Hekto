@extends('admin.layouts.app')
@section('content')
<!-- Page Header Start -->
<div class="bg-grey py-3">
    <div class=" mx-5 px-5">
        <h2 class="feature-heading">Product Detail</h2>
        <p class="lato">Home . Products . <span class="color-pinkk">Product Detail</span></p>
    </div>
</div>
<!-- Page Header End -->


<!-- Product Overview Section -->
<div class="container col-xxl-8 py-2 ">
    <div class="row align-items-center my-4 py-auto">
        <div class="col-lg-4 col-md-8 col-sm-6 col-xs-12 mx-auto">
            <img src="{{ asset('/images/'. $product->image )}}" class="img-fluid" alt="Product Image">
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mx-auto">
            <h5 class="color-primary py-auto">{{ $product->name }}</h5>
            <p>
                <i class="fa fa-star color-golden" aria-hidden="true"></i>
                <i class="fa fa-star color-golden " aria-hidden="true"></i>
                <i class="fa fa-star color-golden" aria-hidden="true"></i>
                <i class="fa fa-star color-golden" aria-hidden="true"></i>
                <i class="fa fa-star color-greyy" aria-hidden="true"></i>
                (1234)
            </p>
            <p>
                <span class="n-price px-1">${{ $product->discount_price }}</span>
                <span class="p-price px-1">${{ $product->price }}</span>&nbsp
            </p>
            <p>
                Color
            <div class="row h-100 align-items-center px-auto mx-auto">
                <div class="col-4 align-middle banner-bullet bg-primary rounded-circle px-1 mx-1"></div>
                <div class="col-4 banner-bullet bg-success rounded-circle px-1 mx-1"></div>
                <div class="col-4 banner-bullet bg-pink rounded-circle px-1 mx-1"></div>
            </div>
            </p>
            <p class="color-grey">{{ $product->detail }}</p>
            <p class="md-hd mt-3">Categories</p>
            <p class="md-hd">Tags</p>
            <p class="md-hd">Share
                <i class="fab fa-facebook px-1" aria-hidden="true"></i>
                <i class="fab fa-instagram px-1" aria-hidden="true"></i>
                <i class="fab fa-twitter-square px-1" aria-hidden="true"></i>
            </p>
        </div>
    </div>
</div>
<!-- Product Overview End -->

@endsection