@extends('layouts.home')

@section('title','My Hotels - '.$setting->title)


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
                                                <div class="col-md-10">
                                                    <h3>My Hotels</h3>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="{{route('user_hotel_create')}}" class="ekipBtn float-right">Add Hotel</a>
                                                </div>
                                            </div>
                                            <hr>

                                            @include('home.message')
                                            <div class="table-responsive">
                                                <table id="hotel" class="table table-striped table-bordered" style="width:100%">
                                                    <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Category</th>
                                                        <th>Title(s)</th>
                                                        <th>Star</th>
                                                        <th>Contact Information</th>
                                                        <th>Status</th>
                                                        <th>Image</th>
                                                        <th>Image Gallery</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($dataList as $rs)
                                                        <tr>
                                                            <td>{{$rs->id}}</td>
                                                            <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                                            <td>{{$rs->title}}</td>
                                                            <td>{{$rs->star}}</td>
                                                            <td>
                                                                <strong>Phone: </strong>{{$rs->phone}}<br>
                                                                <strong>Fax: </strong>{{$rs->fax}}<br>
                                                                <strong>Email: </strong>{{$rs->email}}<br>
                                                                <strong>Address: </strong>{{$rs->address}}<br>
                                                                {{$rs->location}}/{{$rs->city}}/{{$rs->country}}
                                                            </td>
                                                            <td>{{$rs->status}}</td>
                                                            <td>
                                                                @if($rs->image)
                                                                    <img src="{{ Storage::url($rs->image)}}" height="50px">
                                                                @endif
                                                            </td>
                                                            <td><a href="{{route('user_image_add',['hotel_id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><i class='glyphicon glyphicon-picture text-success' style="font-size: 2rem"></i></a></td>
                                                            <td><a href="{{route('user_hotel_edit',['id' => $rs->id])}}"><i class="glyphicon glyphicon-pencil text-primary" style="font-size: 2rem"></i></a></td>
                                                            <td><a href="{{route('user_hotel_destroy',['id' => $rs->id])}}" onclick="return confirm('Delete! Are you sure?')"><i class="glyphicon glyphicon-trash text-danger font-24" style="font-size: 2rem"></i></a></td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                        </div>
                    </div>
                </div>

        </div>

    </section>

@endsection
@section('footerjs')
    <script src="{{asset('assets')}}/admin/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#hotel').DataTable();
        } );
    </script>
@endsection
