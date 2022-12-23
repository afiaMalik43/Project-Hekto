@extends('admin.layouts.app')
@section('content')
<!-- Page Header Start -->
<div class="bg-grey py-3">
    <div class=" mx-5 px-5">
        <h2 class="feature-heading">Users Details</h2>
        <p class="lato">Home . Users . <span class="color-pinkk">Users Details</span></p>
    </div>
</div>
<!-- Page Header End -->
<!-- Total Orders Card -->

<div class="row px-3 py-3 rounded mx-auto my-3 bg-white shadow">
    <div class="col-4">
        <div class="card" style="width: 18rem;">
            <img src="{{asset('images/cartpic.png')}}" class="img-fluid card-img-top">
            <div class="card-body">
                <h5 class="card-title">Items in Cart</h5>
                <p class="card-text">{{$cart->cart}}</p>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card" style="width: 18rem;">
            <img src="{{asset('images/cartpic.png')}}" class="img-fluid card-img-top">
            <div class="card-body">
                <h5 class="card-title">Orders Placed</h5>
                <p class="card-text">{{$total->total}}</p>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card" style="width: 18rem;">
            <img src="{{asset('images/cartpic.png')}}" class="img-fluid card-img-top">
            <div class="card-body">
                <h5 class="card-title">Total Revenue</h5>
                <p class="card-text">{{$amount->amount}}</p>
            </div>
        </div>
    </div>
    <!--    <div class="col-3">
        <div class="card" style="width: 15rem;">
            <img src="{{asset('images/cartpic.png')}}" class="img-fluid card-img-top">
            <div class="card-body">
                <h5 class="card-title">Completed Orders</h5>
                <p class="card-text">{{$complete->complete}}</p>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card" style="width: 18rem;">
            <img src="{{asset('images/cartpic.png')}}" class="img-fluid card-img-top">
            <div class="card-body">
                <h5 class="card-title">Pending Orders</h5>
                <p class="card-text">{{$pending->pending}}</p>
            </div>
        </div>
    </div>-->
</div>
<!-- Order Details -->
<div class="row bg-white rounded shadow my-3 mx-auto px-3">
    @foreach ($users as $user)
    <div class="col-4">
        <div class="card my-2 py-3" style="width: 18rem;">
            <img src="{{asset('images/Group 124.png')}}" class="img-fluid card-img-top">
            <div class="card-body">
                <h5 class="card-title">{{$user->name}}</h5>
                <a href="">{{$user->email}}</a>
            </div>
        </div>
    </div>
    @endforeach
    <div class="col-8 px-auto">
        <table class="table table-responsive table-hover px-5 my-3 bg-white py-3">
            <tr class="table-info">
                <th>ID</th>
                <th>Date</th>
                <th>Status</th>
                <th>Items</th>
                <th>Address</th>
                <th>Sub Total</th>
                <th>Total</th>
            </tr>
            @foreach ($orders as $order)
            <tr data-id="{{ $order->id }}">
                <td>
                    <strong><a href="">#{{ $order->id }}</a></strong>
                </td>
                <td>{{ $order->created_at }}</td>
                <td>
                    @if ( $order->status == 'Pending')
                    <span class="badge rounded-pill bg-danger" id="status">{{ $order->status }}</span>
                    @elseif ($order->status=='Processing')
                    <span class="badge rounded-pill bg-warning" id="status">{{ $order->status }}</span>
                    @elseif ($order->status== 'Completed')
                    <span class="badge rounded-pill bg-success" id="status">{{ $order->status }}</span>
                    @endif
                </td>
                <td>{{ $order->items }}</td>
                <td>{{ $order->address }}</td>
                <td>{{ $order->sub_total }}</td>
                <td>{{ $order->total }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<!-- Order Items -->

@endsection