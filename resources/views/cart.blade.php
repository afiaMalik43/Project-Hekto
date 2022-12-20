@extends('layouts.app')
@section('content')
<!-- Page Header Start -->
<div class="bg-grey py-3">
    <div class="py-5 my-5 mx-5 px-5">
        <h2 class="feature-heading">Shopping Cart</h2>
        <p class="lato">Home . Pages . <span class="color-pinkk">Shopping Cart</span></p>
    </div>
</div>
<!-- Page Header End -->
<!-- Shopping Cart Section Start -->
<div class="container">
    <div class="row">
        <!-- Shopping Cart Table Started -->
        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 ">
            <div class="cart-table py-3 my-3 w-100">
                <table class="py-3 my-3 w-100">
                    <thead class="cart-table-heading lh-lg">
                        <th class="px-auto mx-auto">Product</th>
                        <th class="px-auto mx-auto">Price</th>
                        <th class="px-auto mx-auto">Quantity</th>
                        <th class="px-auto mx-auto">Total</th>
                    </thead>
                    <tr class="my-2 border-bottom">
                        <td>
                            <div class="row py-2 my-2">
                                <div class="col-lg-3 col-md-12 py-auto my-auto">
                                    <img src="images/Rectangle 34.png" class="img-fluid">
                                </div>
                                <div class="col-lg-9 col-md-12 py-auto my-auto">
                                    <h6>nn</h6>
                                    <p class="color-greyy">Color:Brown<br>Size:XL</p>
                                </div>
                            </div>
                        </td>
                        <td class="color-primary">$43.00</td>
                        <td class="w-25">
                            <form class="w-75 py-auto my-auto">
                                <div class="input-group w-75 text-center">
                                    <button class="btn btn-cart-qty" type="button">-</button>

                                    <input type="text" class="form-control cart-qty-input border-0" placeholder="3">
                                    <button class="btn btn-cart-qty" type="button">+</button>
                                </div>
                            </form>
                        </td>
                        <td class="color-primary">$98.00</td>
                    </tr>
                </table>
                <button type="submit" class="cart-pink-button px-auto py-2 my-2 mx-auto text-center rounded-0">Continue Shopping</button>
                <button type="submit" class="cart-pink-button px-auto py-2 my-2 mx-auto text-center float-end rounded-0">Clear Cart</button>
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
                    <p class="color-primary border-bottom py-3"><b>SubTotals:</b><span class="float-end">$23.00</span></p>
                    <p class="color-primary border-bottom py-3"><b>Total:</b><span class="float-end">$32.00</span></p>
                    <div class="form-check">
                        <label class="form-check-label cart-check-label" for="flexCheckDefault1">Shipping & taxes calculated at checkout</label>
                        <input class="form-check-input check-green-cart rounded" type="checkbox" value="" id="flexCheckDefault1" />
                    </div>
                    <button class="cart-green-button px-auto py-3 my-2 w-100 mx-auto text-center rounded">Proceed To Checkout</button>
                </div>
            </div>
            <!-- Cart Card 1 End -->
            <!-- Cart Card 2 Start -->
            <div class="cart-card py-3 my-3">
                <h4 class="cart-card-heading color-primary text-center py-2 my-2 lh-lg">
                    Calculate Shipping
                </h4>
                <div class="cart-card-body lato bg-grey rounded px-3 py-2 ">
                    <form>
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