@extends('admin.layouts.app')
@section('content')
<!-- Page Header Start -->
<div class="bg-grey py-3">
    <div class=" mx-5 px-5">
        <h2 class="feature-heading">Orders</h2>
        <p class="lato">Home . <span class="color-pinkk">Orders </span></p>
    </div>
</div>
<!-- Page Header End -->
<div class="py-3 my-2 bg-white px-3 rounded shadow">
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-hover px-5 my-3 bg-white">
    <tr class="table-success">
        <th>No</th>
        <th>Order</th>
        <th>Date</th>
        <th>Address</th>
        <th>Status</th>
        <th>Amount</th>
        <th>Detail</th>
        <th>Update Status</th>
    </tr>
    @foreach ($orders as $order)
    <tr data-id="{{ $order->id }}">
        <td>{{ ++$i }}</td>
        <td> <a href="">#{{ $order->id }}</a> by
            <strong>{{ $order->name }}</strong> <br>
            <a href="">{{ $order->email }}</a>
        </td>
        <td>{{ $order->created_at }}</td>
        <td>{{ $order->address }}{{ $order->status }}</td>
        <td>
            @if ( $order->status == 'Pending')
            <span class="badge rounded-pill bg-danger" id="status">{{ $order->status }}</span>
            @elseif ($order->status=='Processing')
            <span class="badge rounded-pill bg-warning" id="status">{{ $order->status }}</span>
            @elseif ($order->status== 'Completed')
            <span class="badge rounded-pill bg-success" id="status">{{ $order->status }}</span>
            @endif
        </td>
        <td>{{ $order->total }}</td>
        <td>

            <a class="btn btn-info" href="{{ route('orders.show',$order->id) }}">Detail</a>
        </td>
        <td><select class="update-status form-select flex" name="yourselect" style="display:flex">
                <option value="Pending" @if ($order->status=='Pending')
                    selected="selected"
                    @endif>
                    Pending
                </option>
                <option value="Processing" @if ($order->status=='Processing')
                    selected="selected"
                    @endif>Processing</option>
                <option value="Completed" @if ($order->status=='Completed')
                    selected="selected"
                    @endif>Completed</option>
            </select>
        </td>
    </tr>
    @endforeach
</table>
</div>


{!! $orders->links() !!}

@endsection


@section('scripts')
<script type="text/javascript">
    $(".update-status").change(function(e) {
        e.preventDefault();
        var ele = $(this);
        var orderStatus = $(this).val();
        $.ajax({
            url: '{{ route("orders.update")}}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("data-id"),
                status: orderStatus,
            },
            success: function(response) {
                window.location.reload();
            }
        });
    });
</script>
@endsection