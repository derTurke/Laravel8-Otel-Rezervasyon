@extends('layouts.home')

@section('title',$setting->title)

@section('description')
    {{$setting->description}}
@endsection

@section('keywords',$setting->keywords)
@section('content')
    <section class="icSayfaSection">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-3" style="background-color: red">
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            @foreach($dataList as $rs)
                                <div class="col-lg-4" style="">
                                    <div class="anasayfaHizmetBox" style="">
                                        <img src="{{Storage::url($rs->image)}}" width="200" height="200" alt="">
                                        <p style="height: 80px">{{$rs->title}}</p>

                                        <a href="" class="ekipBtn">DETAYLI BİLGİ</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
