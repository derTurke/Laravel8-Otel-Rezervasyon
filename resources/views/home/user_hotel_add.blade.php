@extends('layouts.home')

@section('title','Add Hotel - '.$setting->title)
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
                                    <h3>Add Hotel</h3>
                                </div>
                            </div>
                            <hr>
                            <form class="form-horizontal" novalidate="" action="{{route('user_hotel_store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12 form-group">
                                    <label for="parent_id" class="form-label">Category</label>
                                    <select class="form-control" name="category_id" id="category_id" aria-describedby="parentFeedBack" required="">
                                        <option value="">Please select category!</option>
                                        @foreach($dataList as $rs)
                                            <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" required="">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="keywords" class="form-label">Keywords</label>
                                    <input type="text" class="form-control" name="keywords" id="keywords" required="">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="description" class="form-label">Description</label>
                                    <input type="text" class="form-control" name="description" id="description" required="">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image" id="image" required="">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="detail" class="form-label">Detail</label>
                                    <textarea name="detail" id="detail"></textarea>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="star" class="form-label">Star</label>
                                    <select class="form-control" name="star" id="star" aria-describedby="" required="">
                                        <option value="">Please select star!</option>
                                        <option value="1">1 Star</option>
                                        <option value="2">2 Star</option>
                                        <option value="3">3 Star</option>
                                        <option value="4">4 Star</option>
                                        <option value="5">5 Star</option>
                                    </select>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea name="address" id="address" class="form-control" required=""></textarea>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="number" name="phone" id="phone" class="form-control" required="">

                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="fax" class="form-label">Fax</label>
                                    <input type="number" name="fax" id="fax" class="form-control" required="">

                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" required="">

                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" name="city" id="city" class="form-control" required="">

                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="country" class="form-label">Country</label>
                                    <input type="text" name="country" id="country" class="form-control" required="">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="location" class="form-label">Location</label>
                                    <input type="text" name="location" id="location" class="form-control" required="">

                                </div>
                                <div class="col-12">
                                    <button class="btn btn-default btnMavi" type="submit">Add Hotel</button>
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
