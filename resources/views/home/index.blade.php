@extends('layouts.home')

@section('title',$setting->title)

@section('description')
{{$setting->description}}
@endsection

@section('keywords',$setting->keywords)


@section('content')
    @include('home._slider')

    <section id="anasayfaEkip">
        <div class="container">

            <div class="row">
                <div class="col-lg-8"><div class="row">
                        <div class="col-lg-12 anasayfaSectionKucukBaslik">
                            <h3>
                                Sizin için öneriler
                            </h3>
                        </div>
                        <div class="col-lg-12 anasayfaSectionBaslik">
                            <h2>Sizin için önerilen oteller</h2>
                        </div>
                    </div></div>
                <div class="col-lg-4 text-center">
                    <button type="button" class="btn btn-default anasayfaSectionBtn">Tüm Otelleri Gör</button>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-one owl-carousel owl-theme">
                        @foreach($picked as $rs)
                            @php
                                $avgcomment = \App\Http\Controllers\HomeController::avgcomment($rs->id);
                                $countcomment = \App\Http\Controllers\HomeController::countcomment($rs->id);
                            @endphp
                            <div class="item">
                                <img src="{{Storage::url($rs->image)}}" width="200" height="200" style="border-radius: 0" alt="">
                                <h4 style="height: 80px">{{$rs->title}}</h4>
                                <small>
                                    <i class="fa @if((int)$avgcomment < 1) fa-star-o empty @else fa-star @endif"></i>
                                    <i class="fa @if((int)$avgcomment < 2) fa-star-o empty @else fa-star @endif"></i>
                                    <i class="fa @if((int)$avgcomment < 3) fa-star-o empty @else fa-star @endif"></i>
                                    <i class="fa @if((int)$avgcomment < 4) fa-star-o empty @else fa-star @endif"></i>
                                    <i class="fa @if((int)$avgcomment < 5) fa-star-o empty @else fa-star @endif"></i>
                                    <i>({{$countcomment}})</i>
                                </small>
                                <br>
                                <br>
                                <a href="{{route('hotel',['id' => $rs->id])}}" class="ekipBtn">DETAYLI BİLGİ</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>



        </div>

    </section>
    <section id="anasayfaHaberler">
        <div class="container">

            <div class="row">
                <div class="col-lg-8"><div class="row">
                        <div class="col-lg-12 anasayfaSectionKucukBaslik">
                            <h3>
                                Oteller
                            </h3>
                        </div>
                        <div class="col-lg-12 anasayfaSectionBaslik">
                            <h2>Bugünün otelleri</h2>
                        </div>
                    </div></div>
                <div class="col-lg-4 text-center">
                    <button type="button" class="btn btn-default anasayfaSectionBtn">Tüm Otelleri Gör</button>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-one owl-carousel owl-theme">
                        @foreach($daily as $rs)
                            @php
                                $avgcomment = \App\Http\Controllers\HomeController::avgcomment($rs->id);
                                $countcomment = \App\Http\Controllers\HomeController::countcomment($rs->id);
                            @endphp
                        <div class="item">
                            <img src="{{Storage::url($rs->image)}}" width="200" height="200" style="border-radius: 0" alt="">
                            <h4 style="height: 80px">{{$rs->title}}</h4>
                            <small>
                                <i class="fa @if((int)$avgcomment < 1) fa-star-o empty @else fa-star @endif"></i>
                                <i class="fa @if((int)$avgcomment < 2) fa-star-o empty @else fa-star @endif"></i>
                                <i class="fa @if((int)$avgcomment < 3) fa-star-o empty @else fa-star @endif"></i>
                                <i class="fa @if((int)$avgcomment < 4) fa-star-o empty @else fa-star @endif"></i>
                                <i class="fa @if((int)$avgcomment < 5) fa-star-o empty @else fa-star @endif"></i>
                                <i>({{$countcomment}})</i>
                            </small>
                            <br>
                            <br>
                            <a href="{{route('hotel',['id' => $rs->id])}}" class="ekipBtn">DETAYLI BİLGİ</a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>



        </div>

    </section>

    <section id="anasayfaEkip">
        <div class="container">

            <div class="row">
                <div class="col-lg-8"><div class="row">
                        <div class="col-lg-12 anasayfaSectionKucukBaslik">
                            <h3>
                                Son eklenenler
                            </h3>
                        </div>
                        <div class="col-lg-12 anasayfaSectionBaslik">
                            <h2>Son eklenen oteller</h2>
                        </div>
                    </div></div>
                <div class="col-lg-4 text-center">
                    <button type="button" class="btn btn-default anasayfaSectionBtn">Tüm Otelleri Gör</button>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-one owl-carousel owl-theme">
                        @foreach($last as $rs)
                            @php
                                $avgcomment = \App\Http\Controllers\HomeController::avgcomment($rs->id);
                                $countcomment = \App\Http\Controllers\HomeController::countcomment($rs->id);
                            @endphp
                            <div class="item">
                                <img src="{{Storage::url($rs->image)}}" width="200" height="200" style="border-radius: 0" alt="">
                                <h4 style="height: 80px">{{$rs->title}}</h4>
                                <small>
                                    <i class="fa @if((int)$avgcomment < 1) fa-star-o empty @else fa-star @endif"></i>
                                    <i class="fa @if((int)$avgcomment < 2) fa-star-o empty @else fa-star @endif"></i>
                                    <i class="fa @if((int)$avgcomment < 3) fa-star-o empty @else fa-star @endif"></i>
                                    <i class="fa @if((int)$avgcomment < 4) fa-star-o empty @else fa-star @endif"></i>
                                    <i class="fa @if((int)$avgcomment < 5) fa-star-o empty @else fa-star @endif"></i>
                                    <i>({{$countcomment}})</i>
                                </small>
                                <br>
                                <br>
                                <a href="{{route('hotel',['id' => $rs->id])}}" class="ekipBtn">DETAYLI BİLGİ</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>



        </div>

    </section>
@endsection
