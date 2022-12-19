@extends('admin.layouts.app')

@section('content')
<!-- Page Header Start -->
<div class="bg-grey py-3">
    <div class=" mx-5 px-5">
        <h2 class="feature-heading">Add New Product</h2>
        <p class="lato">Home . Products . <span class="color-pinkk">Add New Product</span></p>
    </div>
</div>
<!-- Page Header End -->
<!-- Product Form Start -->
<div class="container ">
    <div class="shadow mx-auto px-5 my-3 bg-white rounded">
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <h5 class="login-heading pt-3"><b>Product Details</b></h5>
        <p class="color-grey"></p>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-6 mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="name">
                </div>
                <div class="col-6 mb-3">
                    <label class="form-label" for="image">Product Image</label>
                    <input type="file" name="image" class="form-control" placeholder="image">
                </div>
                <div class="col-6 mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" class="form-control" id="price">
            </div>
            <div class="col-6 mb-3">
                <label for="discount_price" class="form-label">Discounted Price</label>
                <input type="text" class="form-control" name="discount_price" id="discount_price" aria-describedby="discount_price">
            </div>
            </div>

            
            <div class="mb-3">
                <label for="detail" class="form-label">Detail</label>
                <textarea class="form-control" style="height:100px" name="detail" placeholder="Detail"></textarea>
            </div>

            <div>
                <button type="submit" class="btn cart-green-button w-50 py-3 my-3 float-end">Save Product</button>
                <a href="{{ route('products.index') }}" class="btn cart-pink-button w-25 py-3 my-3">Back</a>
            </div>
        </form>
    </div>
</div>
<!-- Product Form End -->

@endsection