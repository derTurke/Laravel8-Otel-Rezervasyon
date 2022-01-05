@extends('layouts.home')

@section('title',$data->title." - ".$setting->title)

@section('description')
    {{$data->description}}
@endsection

@section('keywords',$data->keywords)


@section('content')
    @php
        $avgcomment = \App\Http\Controllers\HomeController::avgcomment($data->id);
        $countcomment = \App\Http\Controllers\HomeController::countcomment($data->id);
    @endphp
    <section id="anasayfaHakkimizda">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">


                    <div id="hakkimizdaSlider" class="carousel slide carousel-fade" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{Storage::url($data->image)}}" alt="{{$data->title}}" style="width:100%;">
                            </div>
                            @foreach($image as $rs)
                            <div class="item">
                                <img src="{{Storage::url($rs->image)}}" alt="{{$rs->title}}" style="width:100%;">
                            </div>
                            @endforeach
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#hakkimizdaSlider" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#hakkimizdaSlider" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>


                </div>
                <div class="col-lg-6 anasayfaHakkimizdaText">
                    <h1>{{$data->title}}</h1>
                    <a href="#comment">{{$countcomment}} Comment(s) {{$avgcomment}}</a>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Star</th>
                                <td>{{$data->star}}</td>

                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{$data->address}}</td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td>{{$data->city}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$data->email}}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{$data->phone}}</td>
                            </tr>
                            <tr>
                                <th>Fax</th>
                                <td>{{$data->fax}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Rooms & Price</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Detail</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Comments</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th></th>
                            </thead>
                            <tbody>
                            @foreach($rooms as $room)
                                <tr>
                                    <td>{{$room->title}}</td>
                                    <td>{{$room->description}}</td>
                                    <td>
                                        <img src="{{Storage::url($room->image)}}" alt="" height="125" width="125">
                                    </td>
                                    <td>{{$room->price}} ₺</td>

                                    <form action="{{route('user_new_reservation',['hotel_id' => $data->id, 'room_id' => $room->id])}}">
                                        <td>
                                            <label for="adults">Adults</label>
                                            <input type="number" class="form-control" name="adults" id="adults" value="2">
                                        </td>
                                        <td>
                                            <label for="children">Children</label>
                                            <input type="number" class="form-control" name="children" id="children" value="0">
                                        </td>
                                        <td>
                                            <label for="days">Days</label>
                                            <input type="number" class="form-control" name="days" id="days" value="1">
                                        </td>
                                        <td>
                                            <label for="checkin">Check-in</label>
                                            <input type="date" class="form-control" name="checkin" value="{{date('Y-m-d')}}">
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-default gButton" style="margin-top: 20px">Reserve Room</button>
                                        </td>
                                    </form>


                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    {!! $data->detail !!}
                </div>
                <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                    <div class="col-md-12" style="margin-top: 10px">
                        <div class="row">
                            <div class="col-md-6">
                                @foreach($comments as $rs)
                                    <div><i class="fa fa-user-o"></i>{{$rs->user->name}}</div>
                                    <div><i class="fa fa-clock-o"></i>{{$rs->created_at}}</div>
                                    <div>
                                        <i class="fa @if((int)$rs->rate < 1) fa-star-o empty @else fa-star @endif"></i>
                                        <i class="fa @if((int)$rs->rate < 2) fa-star-o empty @else fa-star @endif"></i>
                                        <i class="fa @if((int)$rs->rate < 3) fa-star-o empty @else fa-star @endif"></i>
                                        <i class="fa @if((int)$rs->rate < 4) fa-star-o empty @else fa-star @endif"></i>
                                        <i class="fa @if((int)$rs->rate < 5) fa-star-o empty @else fa-star @endif"></i>

                                    </div>
                                    <p>{{$rs->comment}}</p>
                                    <hr>
                                @endforeach
                            </div>
                            <div class="col-md-6">
                                <h4 class="text-uppercase">Write Your Comment</h4>
                                @livewire('comment',["id" => $data->id])
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection
