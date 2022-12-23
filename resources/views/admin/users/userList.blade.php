@extends('admin.layouts.app')
@section('content')
<!-- Page Header Start -->
<div class="bg-grey py-3">
    <div class=" mx-5 px-5">
        <h2 class="feature-heading">Users</h2>
        <p class="lato">Home . <span class="color-pinkk">Users </span></p>
    </div>
</div>
<!-- Page Header End -->
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-hover px-5 my-3">
    <tr class="table-info">
        <th>No</th>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Created</th>
        <th>Actions</th>
    </tr>
    @foreach ($users as $user)
    <tr data-id="{{ $user->id }}">
        <td>{{ ++$i }}</td>
        <td>#{{ $user->id }}</td>
        <td><img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle" height="22" alt="Avatar" loading="lazy" /> <strong>{{ $user->name }}</strong></td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->updated_at }}</td>
        <td>

            <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Detail</a>
            <a class="btn btn-danger" href="{{ route('users.delete',$user->id) }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>

{!! $users->links() !!}
@endsection