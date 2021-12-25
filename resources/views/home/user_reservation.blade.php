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
                            <h3>Reservation Form</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <th>Hotel: </th>
                                                <td>{{$hotel->title}}</td>
                                            </tr>
                                            <tr>
                                                <th>Room: </th>
                                                <td>{{$room->title}}</td>
                                            </tr>
                                            <tr>
                                                <th>Price: </th>
                                                <td>{{$room->price}} ₺</td>
                                            </tr>
                                            <tr>
                                                <th>Check-in: </th>
                                                <td>{{date('d-m-Y',strtotime($checkin))}}</td>
                                            </tr>
                                            <tr>
                                                <th>Days: </th>
                                                <td>{{$days}}</td>
                                            </tr>
                                            <tr>
                                                <th>Check-out: </th>
                                                <td>{{date('d-m-Y',strtotime($checkout))}}</td>
                                            </tr>
                                            <tr>
                                                <th>Total Price: </th>
                                                <td>{{$total}} ₺</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <form class="form-horizontal" action="{{route('user_store_reservation',['hotel_id' => $hotel->id, 'room_id' => $room->id])}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <div class="col-lg-6" style="">
                                        <input type="text" class="form-control" id="iletisimFormuEmail" name="name" placeholder="Name & Surname" value="{{Auth::user()->name}}">
                                    </div>
                                    <div class="col-lg-6" style="">
                                        <input type="email" class="form-control" id="iletisimFormuEmail" name="email" placeholder="Email" value="{{Auth::user()->email}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-6" style="">
                                        <input type="tel" class="form-control" id="iletisimFormuTel" name="phone" placeholder="Phone Number" value="{{Auth::user()->phone}}">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="hidden" name="days" value="{{$days}}">
                                        <input type="hidden" name="checkin" value="{{$checkin}}">
                                        <textarea class="form-control" rows="3" id="iletisimFormuMesaj" name="note" placeholder="Note"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-default btnMavi">Submit Reservation</button>
                                    </div>
                                </div>
                            </form>

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
