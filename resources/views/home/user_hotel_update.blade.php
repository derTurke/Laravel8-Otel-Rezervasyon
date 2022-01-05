@extends('layouts.home')

@section('title','Update Hotel - '.$setting->title)
@section('headerjs')
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@endsection

@section('content')
    <section class="icSayfaSection" style="">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                    @include('home.usermenu')

                    </div>
                    <div class="col-lg-9">
                        <div class="iletisimFormu">
                            <div class="row">
                                <div class="col-md-1">
                                    <a href="{{ route('user_hotel') }}" class="btn btn-default headerTopBtnAra"><span class="glyphicon glyphicon-arrow-left" style="margin-top: 10px;"></span></a>
                                </div>
                                <div class="col-md-11">
                                    <h3>Update Hotel</h3>
                                </div>
                            </div>
                            <hr>
                            <form class="form-horizontal" novalidate="" action="{{route('user_hotel_update',["id" => $data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12 form-group">
                                    <label for="parent_id" class="form-label">Category</label>
                                    <br>
                                    <select class="" name="category_id" id="category_id" aria-describedby="parentFeedBack" required="">
                                        <option value="">Please select category!</option>
                                        @foreach($dataList as $rs)
                                            <option value="{{$rs->id}}" @if($rs->id == $data->category_id) selected="selected" @endif>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" required="" value="{{$data->title}}">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="keywords" class="form-label">Keywords</label>
                                    <input type="text" class="form-control" name="keywords" id="keywords" required="" value="{{$data->keywords}}">

                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="description" class="form-label">Description</label>
                                    <input type="text" class="form-control" name="description" id="description" required="" value="{{$data->description}}">

                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image" id="image" required="">


                                    @if($data->image)
                                        <img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" height="50px">
                                    @endif
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="detail" class="form-label">Detail</label>
                                    <textarea name="detail" id="detail">{{$data->detail}}</textarea>

                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="star" class="form-label">Star</label>
                                    <br>
                                    <select class="form-select is-invalid" name="star" id="star" aria-describedby="validationServer04Feedback" required="">

                                        <option value="">Please select star!</option>
                                        @for($i = 1 ; $i <= 5 ; $i++)
                                            <option value="{{$i}}" @if($i == $data->star) selected="selected" @endif>{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea name="address" id="address" class="form-control" required="">{{$data->address}}</textarea>

                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="number" name="phone" id="phone" class="form-control" required="" value="{{$data->phone}}">

                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="fax" class="form-label">Fax</label>
                                    <input type="number" name="fax" id="fax" class="form-control" required="" value="{{$data->fax}}">

                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" required="" value="{{$data->email}}">

                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" name="city" id="city" class="form-control" required="" value="{{$data->city}}">

                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="country" class="form-label">Country</label>
                                    <input type="text" name="country" id="country" class="form-control" required="" value="{{$data->country}}">

                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="location" class="form-label">Location</label>
                                    <input type="text" name="location" id="location" class="form-control" required="" value="{{$data->location}}">

                                </div>
                                <div class="col-12">
                                    <button class="btn btn-default btnMavi" type="submit">Update Hotel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

        </div>

    </section>

@endsection
@section('footerjs')

    <script>
        CKEDITOR.replace( 'detail' );
    </script>

@endsection
