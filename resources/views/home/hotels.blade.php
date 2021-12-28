@extends('layouts.home')

@section('title','Hotels - '.$setting->title)

@section('description')
    {{$setting->description}}
@endsection

@section('keywords',$setting->keywords)


@section('content')
    <section class="pageTitleBar" style="background-color: #55c2eb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Hotels</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="icSayfaSection">
        <div class="container-fluid">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        @foreach($dataList as $rs)
                            <div class="col-lg-4" style="">
                                <div class="anasayfaHizmetBox" style="">
                                    <img src="{{Storage::url($rs->image)}}" width="200" height="200" alt="">
                                    <p style="height: 80px">{{$rs->title}}</p>

                                    <a href="{{route('hotel',['id' => $rs->id])}}" class="ekipBtn">DETAYLI BİLGİ</a>
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
