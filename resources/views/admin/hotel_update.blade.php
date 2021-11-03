@extends('layouts.admin')

@section('title','Admin Panel Hotel Update Page')

@section('headerjs')
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@endsection

@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Edit Hotel</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('admin_home')}}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{route('admin_hotel')}}">Hotel</a>
                    </li>
                    <li class="breadcrumb-item active">Edit Hotel</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="p-4 border rounded">
                    <form class="row g-3 needs-validation was-validated" novalidate="" action="{{route('admin_hotel_update',["id" => $data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <label for="parent_id" class="form-label">Category</label>
                            <select class="form-select is-invalid" name="category_id" id="category_id" aria-describedby="parentFeedBack" required="">
                                <option value="">Please select category!</option>
                                @foreach($dataList as $rs)
                                    <option value="{{$rs->id}}" @if($rs->id == $data->category_id) selected="selected" @endif>{{$rs->title}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-md-12">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required="" value="{{$data->title}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="keywords" class="form-label">Keywords</label>
                            <input type="text" class="form-control" name="keywords" id="keywords" required="" value="{{$data->keywords}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" id="description" required="" value="{{$data->description}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" id="image" required="" value="{{$data->image}}">
                            <div class="valid-feedback">Successful!</div>

                            @if($data->image)
                                <img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" height="50px">
                            @endif
                        </div>
                        <div class="col-md-12">
                            <label for="detail" class="form-label">Detail</label>
                            <textarea name="detail" id="detail">{{$data->detail}}</textarea>
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="star" class="form-label">Star</label>
                            <select class="form-select is-invalid" name="star" id="star" aria-describedby="validationServer04Feedback" required="">

                                <option value="">Please select star!</option>
                                @for($i = 1 ; $i <= 5 ; $i++)
                                    <option value="{{$i}}" @if($i == $data->star) selected="selected" @endif>{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="address" class="form-label">Address</label>
                            <textarea name="address" id="address" class="form-control" required="">{{$data->address}}</textarea>
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="number" name="phone" id="phone" class="form-control" required="" value="{{$data->phone}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="fax" class="form-label">Fax</label>
                            <input type="number" name="fax" id="fax" class="form-control" required="" value="{{$data->fax}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required="" value="{{$data->email}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="city" class="form-label">City</label>
                            <input type="text" name="city" id="city" class="form-control" required="" value="{{$data->city}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" name="country" id="country" class="form-control" required="" value="{{$data->country}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" name="location" id="location" class="form-control" required="" value="{{$data->location}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>

                        <div class="col-md-12">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select is-invalid" name="status" id="status" aria-describedby="validationServer04Feedback" required="">
                                <option>{{$data->status}}</option>
                                <option value="">Please select status!</option>
                                <option>False</option>
                                <option>True</option>
                            </select>

                        </div>



                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Update Hotel</button>
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
