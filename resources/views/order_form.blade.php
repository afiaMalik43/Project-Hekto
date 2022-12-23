@extends('layouts.app')
@section('title', 'Order ')
@section('content')
<?php $sum=0; ?>
<!-- Order Completed Section Start -->

<div class="container">
	<h4></h4>
	<p></p>
	<div class="row">
		<div class="col-lg-8">
			<!-- Order Form Start -->


			<div class="cart-card py-3 my-3">
				<div class="cart-card-body lato bg-grey rounded px-3 py-2 ">
					<h4 class="cart-card-heading color-primary py-2 my-2 lh-lg">
						Contact Information <!--<span class="float-end small-link py-auto my-auto">Already have an account?<a href="#" class="grey-link">Log In</a></span>-->
					</h4>
					<form class="mb-5 py-3" method="post" action="{{route('orders.store')}}">
                            @csrf
						<div class="form-check my-3 ">
							<div class="form-floating">
								<input name="email" type="text" class="form-control cart-form border-0 border-bottom rounded-0 lh-lg my-2 bg-grey" id="floatingPassword" value="{{auth()->user()->email;}}">
								<label for="floatingPassword">Email Address</label>
							</div>
						</div>
					
					<h4 class="cart-card-heading color-primary py-2 my-2 lh-lg">
						Shipping Address
					</h4>
					
						<div class="row">
							<div class="col">
								<div class="form-floating">
									<input type="text" name="name" class="form-control cart-form border-0 border-bottom rounded-0 lh-lg my-2 bg-grey" id="floatingPassword" placeholder="First Name" value="{{auth()->user()->name;}}">
									<label for="floatingPassword">First Name</label>
								</div>
							</div>
							<div class="col">
								<div class="form-floating">
									<input type="text" name="last_name" class="form-control cart-form border-0 border-bottom rounded-0 lh-lg my-2 bg-grey" id="floatingPassword" placeholder="Last Name">
									<label for="floatingPassword">Last Name</label>
								</div>
							</div>
						</div>
						<div class="form-floating">
							<input type="text" name="address" class="form-control cart-form border-0 border-bottom rounded-0 lh-lg my-2 bg-grey" id="floatingPassword" placeholder="Address">
							<label for="floatingPassword">Address</label>
						</div>
						<div class="form-floating">
							<input type="text" name="apartment" class="form-control cart-form border-0 border-bottom rounded-0 lh-lg my-2 bg-grey" id="floatingPassword" placeholder="Appartment">
							<label for="floatingPassword">Appartment</label>
						</div>
						<div class="form-floating">
							<input type="text" name="city" class="form-control cart-form border-0 border-bottom rounded-0 lh-lg my-2 bg-grey" id="floatingPassword" placeholder="City">
							<label for="floatingPassword">City</label>
						</div>
						<div class="row">
							<div class="col">
								<div class="form-floating">
									<input type="text" name="country" class="form-control cart-form border-0 border-bottom rounded-0 lh-lg my-2 bg-grey" id="floatingPassword" placeholder="Country">
									<label for="floatingCountry">Country</label>
								</div>
							</div>
							<div class="col">
								<div class="form-floating">
									<input type="text" name="postal_code" class="form-control cart-form border-0 border-bottom rounded-0 lh-lg my-2 bg-grey" id="floatingPassword" placeholder="Postal Code">
									<label for="floatingPostal">Postal Code</label>
								</div>
							</div>
						</div>
						<button class="cart-pink-button px-auto py-3 my-2 px-3 text-center rounded-0">Proceed To Checkout</button>
					</form>
				</div>
			</div>
			<!-- Order Form End -->
		</div>

		<div class="col-lg-4">
			<div class="order-card py-4">
				@foreach ($carts as $cart)
				<div class="row py-2 my-2 border-bottom">
					<div class="col-lg-3 col-md-12 py-auto my-auto ">
						<img src="{{ asset('/images/'. $cart->image )}}" class="img-fluid">
					</div>
					<div class="col-lg-6 col-md-8 py-auto my-auto">
						<h6>{{ $cart->name }}</h6>
						<p class="color-greyy">Color:{{ $cart->detail }}<br>Size:XL</p>
					</div>
					<div class="col-lg-3 col-md-4 py-auto my-auto text-center color-primary">
						<p><b>${{ $cart->discount_price }}</b></p>
					</div>
				</div>
				<?php $sum = $sum + ($cart->discount_price * $cart->quantity) ?>
				@endforeach
			</div>
			<!-- Cart Card 1 Start -->
			<div class="cart-card py-3 my-2">
				<div class="cart-card-body lato bg-grey rounded px-3 py-2 ">
					<p class="color-primary border-bottom py-3"><b>SubTotals:</b><span class="float-end">${{$sum}}</span></p>
					<p class="color-primary border-bottom py-3"><b>Total:</b><span class="float-end">${{$sum+200}}</span></p>
					<div class="form-check">
						<label class="form-check-label cart-check-label" for="flexCheckDefault1">Shipping & taxes calculated at checkout</label>
						<input class="form-check-input check-green-cart rounded" type="checkbox" value="" id="flexCheckDefault1" />
					</div>
					<button class="cart-green-button px-auto py-3 my-2 w-100 mx-auto text-center rounded">Proceed To Checkout</button>
				</div>
			</div>
			<!-- Cart Card 1 End -->

		</div>
	</div>
</div>

<!-- Order Completed Section End -->
@endsection