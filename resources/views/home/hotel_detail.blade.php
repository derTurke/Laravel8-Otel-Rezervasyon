@extends('layouts.home')

@section('title',$data->title)

@section('description')
    {{$data->description}}
@endsection

@section('keywords',$data->keywords)


@section('content')
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
                        <div class="text-justify">{{$data->address.",".$data->location.",".$data->city.",".$data->country}}</div>
                        <div>{{"Phone: ".$data->phone." | Faks: ".$data->fax}}</div>
                        <div>{{"Email: ".$data->email}}</div>
                    </div>


                </div>
                <div class="col-lg-6 anasayfaHakkimizdaText">
                    <h1>{{$data->title}}</h1>
                    <p class="text-justify">{!!$data->detail!!}</p>
                </div>
            </div>
        </div>

    </section>
@endsection
