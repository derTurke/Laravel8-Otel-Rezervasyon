@extends('layouts.admin')

@section('title','Admin Panel User Page')


@section('content')
    <div class="row">
        <div class="col-md-8 page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">
                User List
            </div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{route('admin_home')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Users</li>
                    </ol>
                </nav>
            </div>

        </div>
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2">
        <div class="card">
            <div class="card-body">
                @include('admin.message')
                <div class="table-responsive">
                    <table id="hotel" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th></th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Roles</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($dataList as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>
                                        @if($rs->profile_photo_path)
                                            <img src="{{ Storage::url($rs->profile_photo_path) }}" height="50px">
                                        @endif
                                    </td>
                                    <td>{{$rs->name}}</td>
                                    <td>{{$rs->email}}</td>
                                    <td>{{$rs->phone}}</td>
                                    <td>{{$rs->address}}</td>
                                    <td>
                                        @foreach($rs->roles as $row)
                                            {{$row->name}}
                                        @endforeach
                                            <a href="{{route('admin_user_roles',['id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><i class='bx bx-plus-circle text-success font-20'></i></a>
                                    </td>
                                    <td><a href="{{route('admin_user_edit',['id' => $rs->id])}}"><i class="bx bx-pencil text-primary font-24"></i></a></td>
                                    <td><a href="{{route('admin_user_destroy',['id' => $rs->id])}}" onclick="return confirm('Delete! Are you sure?')"><i class="bx bx-trash text-danger font-24"></i></a></td>
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
