@extends('layouts.home')

@section('title',$data->title)

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
                    <div class="col-lg-12 anasayfaHakkimizdaText">
                        <h3>Contact Us</h3>
                        <hr>
                        <div class="text-justify">{{$data->address.",".$data->location.",".$data->city.",".$data->country}}</div>
                        <div>{{"Phone: ".$data->phone." | Faks: ".$data->fax}}</div>
                        <div>{{"Email: ".$data->email}}</div>
                    </div>


                </div>
                <div class="col-lg-6 anasayfaHakkimizdaText">
                    <h1>{{$data->title}}</h1>
                    <a href="#comment">{{$countcomment}} Comment(s) {{$avgcomment}}</a>
                    <p class="text-justify">{!!$data->detail!!}</p>
                </div>
            </div>

            <h4 id="comment">Comments</h4>
            <hr>
            <div class="col-md-12">
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

    </section>
@endsection
