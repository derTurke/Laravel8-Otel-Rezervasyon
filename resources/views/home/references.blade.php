@extends('layouts.home')

@section('title',"References - ".$setting->title)

@section('description')
    {{$setting->description}}
@endsection

@section('keywords',$setting->keywords)


@section('content')
<section class="pageTitleBar" style="background-color: #55c2eb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>References</h1>
            </div>
        </div>
    </div>
</section>
    <section id="anasayfaHakkimizda">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 anasayfaHakkimizdaText text-center">

                    {!! $setting->references !!}

                    <p></p>
                </div>
            </div>
        </div>

    </section>
@endsection
