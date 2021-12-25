@extends('layouts.home')

@section('title',"FAQ - ".$setting->title)
@section('footerjs')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#accordion" ).accordion();
        } );
    </script>
@endsection
@section('content')
    <section class="pageTitleBar" style="background-color: #55c2eb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Frequently asked question</h1>
                </div>
            </div>
        </div>
    </section>
    <section id="anasayfaHakkimizda">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 anasayfaHakkimizdaText">
                    <div id="accordion">
                    @foreach($dataList as $rs)
                            <h3>{{$rs->question}}</h3>
                            <div>
                                {!! $rs->answer !!}
                            </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection

