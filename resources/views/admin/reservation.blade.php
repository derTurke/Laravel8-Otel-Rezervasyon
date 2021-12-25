@extends('layouts.admin')

@section('title','Admin Panel Reservation Page')


@section('content')
    <div class="row">
        <div class="col-md-8 page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">
                Reservation List
            </div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{route('admin_home')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Reservation</li>
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
                            <th>Hotel</th>
                            <th>Room</th>
                            <th>Name</th>
                            <th>Check-in</th>
                            <th>Check-out</th>
                            <th>Days</th>
                            <th>Total Price</th>
                            <th>Note</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dataList as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td><a href="{{route('hotel',['id' => $rs->hotel_id])}}">{{$rs->hotel->title}}</a></td>
                                <td>{{$rs->room->title}}</td>
                                <td>{{$rs->name}}</td>
                                <td>{{date("d.m.Y",strtotime($rs->checkin))}}</td>
                                <td>{{date("d.m.Y",strtotime($rs->checkout))}}</td>
                                <td>{{$rs->days}}</td>
                                <td>{{$rs->total}} ₺</td>
                                <td>{{$rs->note}}</td>
                                <td>{{$rs->message}}</td>
                                <td>{{$rs->status}}</td>
                                <td>{{date('d.m.Y H:i:s',strtotime($rs->updated_at))}}</td>
                                <td>
                                    <a href="{{route('admin_reservation_edit',['id' => $rs->id, 'slug' => $slug])}}"><i class="bx bx-pencil text-primary font-24"></i></a>
                                    <a href="{{route('admin_reservation_show',['id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><i class='bx bx-show text-warning font-24'></i></a>                                </td>
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
        $(document).ready(function () {
            $('#hotel').DataTable();
        });
    </script>
@endsection
