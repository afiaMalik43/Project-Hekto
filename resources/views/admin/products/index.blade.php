@extends('admin.layouts.app')
@section('content')
<!-- Page Header Start -->
<div class="bg-grey py-3">
    <div class=" mx-5 px-5">
        <h2 class="feature-heading">Products</h2>
        <p class="lato">Home . <span class="color-pinkk">Products </span></p>
    </div>
</div>
<!-- Page Header End -->

<div class="bg-white py-3 my-2 px-3 rounded shadow">
    <div class="row">
        <div class="col-lg-12 py-2">
            <div class="pull-left">
                <a class="btn cart-green-button" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-responsive px-5">
        <tr class="table-danger">
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="{{ asset('/images/'. $product->image )}}" width="50px"></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>


                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                @if($product->is_deleted==0)

                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDelete">Delete</button>
                @else
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDelete" disabled>Delete</button>
                @endif
                <!-- Modal -->
                <div class="modal fade" id="confirmDelete" tabindex="-1" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="confirmDeleteLabel">Confirm Delete</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete the product?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                                <form action="{{ route('products.delete',$product->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                    <input type="hidden" name="is_deleted" value="1">
                                    <button type="submit" class="btn btn-danger">Yes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </td>
        </tr>
        @endforeach
    </table>
</div>


{!! $products->links() !!}

@endsection