@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 my-3">
            <div class="card" style="width: 18rem;">
                <img src="../../../images/add.png" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <a href="{{ route('products.index') }}" class="btn btn-primary">Products</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 my-3">
            <div class="card" style="width: 18rem;">
                <img src="../../../images/view.png" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <a href="#" class="btn btn-primary">Users</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

    </div>
</div>
@endsection