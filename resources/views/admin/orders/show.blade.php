@extends('admin.layouts.app')
@section('content')
<!-- Page Header Start -->
<div class="bg-grey py-3">
    <div class=" mx-5 px-5">
        <h2 class="feature-heading">Orders Details</h2>
        <p class="lato">Home . Orders . <span class="color-pinkk">Orders Details</span></p>
    </div>
</div>
<!-- Page Header End -->
<!-- Order Details -->
@foreach ($orders as $orderDetail)
<?php $subTotal = $orderDetail->sub_total; ?>
<div class="bg-white py-3 my-3 px-3 shadow rounded">
    <h4 color="black">Order Details: # {{$orderDetail->id}}</h4>
    <h6>{{date('M d,Y,H,i,s', strtotime($orderDetail->created_at));}}</h6>
    <h5>Status:
        @if ( $orderDetail->status == 'Pending')
        <span class="badge rounded-pill bg-danger" id="status">{{ $orderDetail->status }}</span>
        @elseif ($orderDetail->status=='Processing')
        <span class="badge rounded-pill bg-warning" id="status">{{ $orderDetail->status }}</span>
        @elseif ($orderDetail->status== 'Completed')
        <span class="badge rounded-pill bg-success" id="status">{{ $orderDetail->status }}</span>
        @endif
    </h5>
</div>
<div class="bg-white py-3 my-3 px-3 shadow rounded">
    <h4 color="black">Shipping Address:</h4>
    <h6>Name: <strong>{{$orderDetail->name;}}</strong> </h6>
    <p>Address: {{$orderDetail->address;}}</p>
    <p>Apartment: {{$orderDetail->apartment;}}</p>
    <p>City: {{$orderDetail->city;}}</p>
    <p>Country: {{$orderDetail->country;}}</p>
    <p>Postal Code: {{$orderDetail->postal_code;}}</p>
    <h6>Email: <a href="">{{$orderDetail->email;}}</a></h6>
</div>
@endforeach
<!-- Order Items -->
<div class="bg-white py-3 my-3 px-3 shadow rounded">
    <table class="table table-hover px-5 my-3 bg-white py-3">
        <tr class="table-info">
            <th>No</th>
            <th>Products</th>
            <th>Date</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
        @foreach ($orderItem as $order)
        <tr data-id="{{ $order->id }}">
            <td>1</td>
            <td>
                <div class="row">
                    <div class="col-2">
                        <img src="{{ asset('/images/'. $order->image )}}" width="50px">
                    </div>
                    <div class="col-10">
                        <h4> {{ $order->name }}</h4>
                        <small>{{ $order->detail }}</small>
                    </div>
                </div>
            </td>
            <td>{{ $order->created_at }}</td>
            <td><span class="badge rounded-pill bg-info" id="status">{{ $order->quantity }}</span></td>
            <td>{{ $order->price }}</td>
            <td>{{ $order->price*$order->quantity }}</td>
        </tr>

        @endforeach
        <caption class="px-5" style="text-align:right">
            <h5>Sub Total: <small>{{$subTotal}}</small> </h5>
            <h5>Shipping: <small>200</small> </h5>
            <hr>
            <h5>Total: <small>{{$subTotal+200}}</small> </h5>
        </caption>
    </table>
</div>



@endsection