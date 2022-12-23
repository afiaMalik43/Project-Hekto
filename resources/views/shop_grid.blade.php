@extends('layouts.app')
@section('title', 'Shop')
@section('content')

<!-- Trending Product Section -->
<div class="container col-xxl-8 py-5 justify-content-lg-center ">


    <div class="row align-items-center mx-lg-auto my-4">
    @foreach ($products as $product)
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 text-center mx-auto px-auto">
            <div class="feature-card ">
                <div class="feature-card-image py-5 text-center">
                    <img class=" center-block img-fluid" loading="lazy" src="{{ asset('/images/'. $product->image )}}" alt="Card image">
                </div>
                <div class="latest-card-body py-3 text-center">
                    <a class="name font-weight-bold" href="{{route('products.detail',$product->id)}}">{{ $product->name }}</a>
                    <div class="container">
                        <div class="row mx-auto my-1 justify-content-center text-center">
                            <div class="px-1 mx-1 my-1 banner-bullet bg-danger rounded-circle"></div>
                            <div class=" px-1 mx-1 my-1 banner-bullet bg-primary rounded-circle"></div>
                            <div class=" mx-1 px-1 my-1 banner-bullet bg-success rounded-circle"></div>
                        </div>
                    </div>
                    <span class="n-price  px-2">{{ $product->discount_price }}</span><span class="price-cut-pink  px-1">${{ $product->price }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {!! $products->links() !!}
</div>
<!-- Trending Product Section End -->
<!-- -->
<div class="py-5 my-3 text-center">
    <img src="images/image 1174.png">
</div>
<!-- -->
@endsection