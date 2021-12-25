@extends('layouts.home')

@section('title','My Reservation - '.$setting->title)


@section('content')
    <section class="icSayfaSection" style="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    @include('home.usermenu')

                </div>
                <div class="col-lg-9">
                    <div class="iletisimFormu">
                        <h3>My Reservation</h3>
                        <hr>
                        @include('home.message')
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
                                    <th>Show</th>

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
                                        <td><a href="{{route('user_detail_reservation',['id' => $rs->id])}}"><i class="glyphicon glyphicon-eye-open"></i></a></td>
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
