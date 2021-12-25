@extends('layouts.admin')

@section('title','Admin Panel Comments Page')


@section('content')
    <div class="row">
        <div class="col-md-8 page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">
                Comments List
            </div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{route('admin_home')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Comments</li>
                    </ol>
                </nav>
            </div>

        </div>
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2">
        @include('admin.message')
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="hotel" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Hotel</th>
                            <th>Comment</th>
                            <th>Rate</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($dataList as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td><a href="{{route('admin_user_show',['id' => $rs->user_id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">{{$rs->user->name}}</a></td>
                                    <td>
                                        <a href="{{route('hotel',['id' => $rs->hotel->id])}}" target="_blank">{{$rs->hotel->title}}</a>
                                    </td>
                                    <td>{{$rs->comment}}</td>
                                    <td>{{$rs->rate}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td>{{$rs->created_at}}</td>
                                    <td><a href="{{route('admin_comment_show',['id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=600')"><i class="bx bx-show text-primary font-24"></i></a></td>

                                    <td><a href="{{route('admin_comment_delete',['id' => $rs->id])}}" onclick="return confirm('Delete! Are you sure?')"><i class="bx bx-trash text-danger font-24"></i></a></td>
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
