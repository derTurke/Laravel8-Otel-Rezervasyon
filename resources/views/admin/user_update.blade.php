@extends('layouts.admin')

@section('title','Admin Panel User Update Page')

@section('headerjs')
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@endsection

@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Edit User</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('admin_home')}}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{route('admin_user')}}">Users</a>
                    </li>
                    <li class="breadcrumb-item active">Edit User</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="p-4 border rounded">
                    <form class="row g-3 needs-validation was-validated" novalidate="" action="{{route('admin_user_update',["id" => $data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required="" value="{{$data->name}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="phone" id="phone" required="" value="{{$data->phone}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email" required="" value="{{$data->email}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="address" class="form-label">Address</label>
                            <textarea name="address" id="address" class="form-control" required="">{{$data->address}}</textarea>
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="profile_photo_path" class="form-label">Profile Photo</label>
                            <input type="file" class="form-control" name="profile_photo_path" id="profile_photo_path" required="">
                            <div class="valid-feedback">Successful!</div>

                            @if($data->profile_photo_path)
                                <img src="{{\Illuminate\Support\Facades\Storage::url($data->profile_photo_path)}}" height="150px">
                            @endif
                        </div>



                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Update User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footerjs')
    <script>
        CKEDITOR.replace('detail');
    </script>
@endsection
