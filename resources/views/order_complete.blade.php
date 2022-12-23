@extends('layouts.app')
@section('title', 'Order Completed')
@section('content')
<!-- Order Completed Section Start -->

<div class="container my-5">
			<div class="position-relative mt-0 ml-0">
				<img src="{{asset('images/clock 1.png')}}" class="position-absolute img-fluid">
			</div>
			<div class="container text-center py-5 my-5 px-5 mx-3">
				<div class="my-4">
					<img src="{{asset('/images/Vector 15.png')}}"/>
				</div>
				<h2 class="color-primary lx-lg my-5">Yous Order is completed!</h2>
				<p class="color-grey lh-lg mx-5 px-5">Thank you for your order! Your order is being processed and will be completed within 3-6 hours. You will receive an email confirmation when your order is completed.
				</p>
				<a href="{{route('products.grid')}}"  class="btn cart-pink-button px-auto py-3 px-5 my-2 mx-auto text-center rounded-0">Continue Shopping</a>
				<div class=" mb-n5">
				<img src="{{asset('/images/checklist 1.png')}}" class="float-end img-fluid ">
			</div>
			</div>
		</div>
		
		<!-- Order Completed Section End -->
@endsection