@extends('layouts.admin')

@section('title','Admin Panel Category Page')


@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Add Category</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('admin_home')}}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{route('admin_category')}}">Category</a>
                    </li>
                    <li class="breadcrumb-item active">Add Category</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="p-4 border rounded">
                    <form class="row g-3 needs-validation was-validated" novalidate="" action="{{route('admin_category_create')}}" method="post">
                        @csrf
                        <div class="col-md-12">
                            <label for="parent_id" class="form-label">Parent</label>
                            <select class="form-select is-invalid" name="parent_id" id="parent_id" aria-describedby="parentFeedBack" required="">
                                <option value="">Please select parent!</option>
                                <option value="0">Main Category</option>
                                @foreach($dataList as $rs)
                                    <option value="{{$rs->id}}">{{$rs->title}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-md-12">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required="">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="keywords" class="form-label">Keywords</label>
                            <input type="text" class="form-control" name="keywords" id="keywords" required="">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" id="description" required="">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select is-invalid" name="status" id="status" aria-describedby="validationServer04Feedback" required="">
                                <option value="">Please select status!</option>
                                <option>False</option>
                                <option>True</option>
                            </select>

                        </div>



                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Add Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footerjs')
@endsection
