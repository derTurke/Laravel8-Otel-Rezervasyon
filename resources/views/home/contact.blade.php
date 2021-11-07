@extends('layouts.home')

@section('title',"Contact - ".$setting->title)

@section('description')
    {{$setting->description}}
@endsection

@section('keywords',$setting->keywords)


@section('content')
<section class="pageTitleBar" style="background-color: #55c2eb">
        <div class="container">
            <div class="col-lg-6">
                <h1>Contact</h1>
            </div>
        </div>
</section>
<section class="icSayfaSection">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">

                    <hr>
                    <p>{!! $setting->contact !!}</p>


                </div>
                <div class="col-lg-7">
                    <div class="iletisimFormu">
                        <p>Contact Us</p>
                        <form class="form-horizontal" action="{{route('sendmessage')}}" method="post">
                            @include('home.message')
                            @csrf
                            <div class="form-group">
                                <div class="col-lg-12" style="">
                                    <input type="text" class="form-control" id="iletisimFormuSoyisim" name="name" placeholder="Name & Surname">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-6" style="padding-right: 10px;">
                                    <input type="email" class="form-control" id="iletisimFormuEmail" name="email" placeholder="Email">
                                </div>
                                <div class="col-lg-6" style="padding-left: 10px;">
                                    <input type="tel" class="form-control" id="iletisimFormuTel" name="phone" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12" style="">
                                    <input type="text" class="form-control" id="iletisimFormuKonu" name="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12" style="padding-right: 10px;">
                                    <textarea class="form-control" rows="3" id="iletisimFormuMesaj" name="message" placeholder="Message"></textarea>
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <input type="hidden" name="iletisim" value="10470c3b4b1fed12c3baac014be15fac67c6e815">
                                    <button type="submit" class="btn btn-default btnMavi">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>




                </div>
            </div>
        </div>
    </div>

</section>
@endsection
