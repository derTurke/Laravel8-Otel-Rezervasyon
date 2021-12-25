@extends('layouts.admin')

@section('title','Admin Panel FAQ Update Page')

@section('headerjs')
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@endsection

@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Update FAQ</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('admin_home')}}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{route('admin_faq')}}">FAQ</a>
                    </li>
                    <li class="breadcrumb-item active">Update FAQ</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="p-4 border rounded">
                    <form class="row g-3 needs-validation was-validated" novalidate="" action="{{route('admin_faq_update',['id' => $data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <label for="title" class="form-label">Question</label>
                            <input type="text" class="form-control" id="question" name="question" value="{{$data->question}}" required="">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="keywords" class="form-label">Answer</label>
                            <textarea name="answer" id="answer" required="">{{$data->answer}}</textarea>
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select is-invalid" name="status" id="status" aria-describedby="validationServer04Feedback" required="">
                                <option selected>{{$data->status}}</option>
                                <option>False</option>
                                <option>True</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Add FAQ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footerjs')
    <script>
        CKEDITOR.replace( 'answer' );
    </script>
@endsection
