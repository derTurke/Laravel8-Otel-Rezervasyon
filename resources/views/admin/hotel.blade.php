@extends('layouts.admin')

@section('title','Admin Panel Hotel Page')


@section('content')
    <div class="row">
        <div class="col-md-8 page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">
                Hotel List
            </div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{route('admin_home')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Hotel</li>
                    </ol>
                </nav>
            </div>

        </div>
        <div class="col-md-4">
            <a href="{{route('admin_hotel_create')}}" class="btn btn-dark px-5 float-end"><i class="bx bx-add-to-queue mr-1"></i>Add Hotel</a>
        </div>


    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2">
        <div class="card">
            <div class="card-body">
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
                            <th>Room</th>
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
                                    <td><a href="{{route('admin_image_add',['hotel_id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><i class='bx bx-images text-success font-24'></i></a></td>
                                    <td><a href="{{route('admin_room_add',['hotel_id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><i class='bx bxs-hotel font-24 text-info'></i></a></td>
                                    <td><a href="{{route('admin_hotel_edit',['id' => $rs->id])}}"><i class="bx bx-pencil text-primary font-24"></i></a></td>
                                    <td><a href="{{route('admin_hotel_destroy',['id' => $rs->id])}}" onclick="return confirm('Delete! Are you sure?')"><i class="bx bx-trash text-danger font-24"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
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
