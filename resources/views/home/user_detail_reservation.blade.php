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
                                <a href="{{ route('user_reservation') }}" class="btn btn-default headerTopBtnAra"><span class="glyphicon glyphicon-arrow-left" style="margin-top: 10px;"></span></a>
                            </div>
                            <div class="col-md-11">
                                <h3>Detail Reservation</h3>
                            </div>
                        </div>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Id:</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th>Hotel:</th>
                                    <td><a href="{{route('hotel',['id' => $data->hotel_id])}}">{{$data->hotel->title}}</a></td>
                                </tr>
                                <tr>
                                    <th>Room:</th>
                                    <td>{{$data->room->title}}</td>
                                </tr>
                                <tr>
                                    <th>Name:</th>
                                    <td>{{$data->name}}</td>
                                </tr>
                                <tr>
                                    <th>Email:</th>
                                    <td>{{$data->email}}</td>
                                </tr>
                                <tr>
                                    <th>Phone Number:</th>
                                    <td>{{$data->phone}}</td>
                                </tr>
                                <tr>
                                    <th>Check-in:</th>
                                    <td>{{date("d.m.Y",strtotime($data->checkin))}}</td>
                                </tr>
                                <tr>
                                    <th>Check-out:</th>
                                    <td>{{date("d.m.Y",strtotime($data->checkin))}}</td>
                                </tr>
                                <tr>
                                    <th>Days:</th>
                                    <td>{{$data->days}}</td>
                                </tr>
                                <tr>
                                    <th>Total Price:</th>
                                    <td>{{$data->total}} ₺</td>
                                </tr>
                                <tr>
                                    <th>Adults:</th>
                                    <td>{{$data->adults}}</td>
                                </tr>
                                <tr>
                                    <th>Children:</th>
                                    <td>{{$data->children}}</td>
                                </tr>
                                <tr>
                                    <th>IP Address:</th>
                                    <td>{{$data->ip}}</td>
                                </tr>
                                <tr>
                                    <th>Note:</th>
                                    <td>{{$data->note}}</td>
                                </tr>
                                <tr>
                                    <th>Message:</th>
                                    <td>{{$data->message}}</td>
                                </tr>
                                <tr>
                                    <th>Status:</th>
                                    <td>{{$data->status}}</td>
                                </tr>
                                <tr>
                                    <th>Date:</th>
                                    <td>{{date('d.m.Y H:i:s',strtotime($data->updated_at))}}</td>
                                </tr>


                            </table>
                        </div>
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
