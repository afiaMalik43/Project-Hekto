@extends('layouts.app')
@section('title', 'Shopping Cart')
@section('content')
<?php $sum = 0; ?>

<!-- Shopping Cart Section Start -->
<div class="container">
    <div class="row">
        <!-- Shopping Cart Table Started -->
        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 ">
            <div class="cart-table py-3 my-3 w-100">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <table class="py-3 my-3 w-100">
                    <thead class="cart-table-heading lh-lg">
                        <th class="px-auto mx-auto">Product</th>
                        <th class="px-auto mx-auto">Price</th>
                        <th class="px-auto mx-auto">Quantity</th>
                        <th class="px-auto mx-auto">Total</th>
                        <th class="px-auto mx-auto">Action</th>
                    </thead>
                    @foreach ($carts as $cart)
                    <tr class="my-2 border-bottom" data-id="{{ $cart->id }}">
                        <td>
                            <div class="row py-2 my-2">
                                <div class="col-lg-3 col-md-12 py-auto my-auto">
                                    <img src="{{ asset('/images/'. $cart->image )}}" class="img-fluid">
                                </div>
                                <div class="col-lg-9 col-md-12 py-auto my-auto">
                                    <h6>{{ $cart->name }}</h6>
                                    <p class="color-greyy">Color:{{ $cart->detail }}<br>Size:XL</p>
                                </div>
                            </div>
                        </td>
                        <td class="color-primary price">${{ $cart->discount_price }}</td>
                        <td>
                            <div class="input-group w-50 text-center">
                                <input type="number" class="form-control quantity update-cart cart-qty-input border-0" value="{{ $cart->quantity }}" min="1">
                            </div>
                        </td>
                        <td class="color-primary total-price">${{ $cart->discount_price*$cart->quantity }}</td>
                        <td class="actions" data-th="">
                            <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                    <?php $sum = $sum + ($cart->discount_price * $cart->quantity) ?>
                    @endforeach
                </table>
                <div class="row">
                    <div class="col-9">
                        <a href="{{route('products.grid')}}" class="btn cart-pink-button px-auto py-2 my-2 mx-auto text-center rounded-0">Continue Shopping</a>
                    </div>
                    <div class="col-3">
                        <form method="post" action="{{route('cart.clear')}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="cart-pink-button px-auto py-2 my-2 mx-auto text-center float-end rounded-0">Clear Cart</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
        <!-- Shopping Cart Table Ended -->
        <!-- Shopping Cart Cards Start -->
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <!-- Cart Card 1 Start -->
            <div class="cart-card py-3 my-3">
                <h4 class="cart-card-heading color-primary text-center py-2 my-2 lh-lg">
                    Cart Total
                </h4>
                <div class="cart-card-body lato bg-grey rounded px-3 py-2 ">
                    <p class="color-primary border-bottom py-3"><b>SubTotals:</b><span class="float-end">${{$sum}}</span></p>
                    <p class="color-primary border-bottom py-3"><b>Total:</b><span class="float-end">${{$sum}}</span></p>
                    <div class="form-check">
                        <label class="form-check-label cart-check-label" for="flexCheckDefault1">Shipping & taxes calculated at checkout</label>
                        <input class="form-check-input check-green-cart rounded" type="checkbox" value="" id="flexCheckDefault1" />
                    </div>
                    <form method="get" action="{{route('orders.create')}}">
                        @csrf
                        <button type="submit" class="cart-green-button px-auto py-3 my-2 w-100 mx-auto text-center rounded">Proceed To Checkout</button>
                    </form>

                </div>
            </div>
            <!-- Cart Card 1 End -->
            <!-- Cart Card 2 Start -->
            <div class="cart-card py-3 my-3">
                <h4 class="cart-card-heading color-primary text-center py-2 my-2 lh-lg">
                    Calculate Shipping
                </h4>
                <div class="cart-card-body lato bg-grey rounded px-3 py-2 ">
                    <form method="get" action="{{route('orders.create')}}">
                        @csrf
                        <input type="text" name="country" class="form-control cart-form border-0 border-bottom rounded-0 lh-lg my-1 bg-grey" placeholder="Pakistan">
                        <input type="text" name="city" class="form-control cart-form border-0 border-bottom rounded-0 lh-lg my-1 bg-grey" placeholder="Islamabad">
                        <input type="text" name="zip-code" class="form-control cart-form border-0 border-bottom rounded-0 lh-lg my-1 bg-grey" placeholder="Zip Code/ Postal Code">
                        <button type="submit" class="cart-pink-button px-auto py-3 my-2 w-100 mx-auto text-center rounded">Proceed To Checkout</button>
                    </form>

                </div>
            </div>
            <!-- Cart Card 2 End -->
        </div>
        <!-- Shopping Cart Cards End -->
    </div>

</div>
<!-- Shopping Cart Section End -->
@endsection

@section('scripts')
<script type="text/javascript">
    $(".update-cart").change(function(e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ route("cart.update")}}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function(response) {
                window.location.reload();
            }
        });
    });

    $(".remove-from-cart").click(function(e) {
        e.preventDefault();

        var ele = $(this);

        if (confirm("Are you sure want to remove from cart?")) {
            $.ajax({
                url: '{{ route("cart.destroy") }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function(response) {

                    window.location.reload();
                }

            });
        }
    });
</script>
@endsection