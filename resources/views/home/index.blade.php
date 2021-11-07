@extends('layouts.home')

@section('title',$setting->title)

@section('description')
{{$setting->description}}
@endsection

@section('keywords',$setting->keywords)


@section('content')
    @include('home._slider')
    <section id="anasayfaHakkimizda">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">


                    <div id="hakkimizdaSlider" class="carousel slide carousel-fade" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <img src="assets/img/slide-hakkimizda-1.jpg" alt="Los Angeles" style="width:100%;">

                            </div>

                            <div class="item">
                                <img src="assets/img/slide-hakkimizda-1.jpg" alt="Chicago" style="width:100%;">

                            </div>

                            <div class="item">
                                <img src="assets/img/slide-hakkimizda-1.jpg" alt="New York" style="width:100%;">

                            </div>

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
                <div class="col-lg-5 anasayfaHakkimizdaText">
                    <h1></h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravid.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.. <span><a href="#">Devamını Oku</a></span></p>
                    <div class="row">
                        <div class="col-lg-6 col-xs-6">
                            <div class="anasayfaHakkimizdaBox">
                                <p class="anasayfaHakkimizdaBoxSayi">
                                    1000+
                                </p>
                                <p class="anasayfaHakkimizdaBoxP">
                                    Lorem ipsum
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-6">
                            <div class="anasayfaHakkimizdaBox">
                                <p class="anasayfaHakkimizdaBoxSayi">
                                    1000+
                                </p>
                                <p class="anasayfaHakkimizdaBoxP">
                                    Lorem ipsum
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-6">
                            <div class="anasayfaHakkimizdaBox">
                                <p class="anasayfaHakkimizdaBoxSayi">
                                    1000+
                                </p>
                                <p class="anasayfaHakkimizdaBoxP">
                                    Lorem ipsum
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-6">
                            <div class="anasayfaHakkimizdaBox">
                                <p class="anasayfaHakkimizdaBoxSayi">
                                    1000+
                                </p>
                                <p class="anasayfaHakkimizdaBoxP">
                                    Lorem ipsum
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="anasayfaHizmet">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center anasayfaSectionKucukBaslik">
                    <h3>
                        Hizmetlerimiz
                    </h3>
                </div>
                <div class="col-lg-12 text-center anasayfaSectionBaslik">
                    <h2>Lorem Ipsum Hizmetlerimiz</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="anasayfaHizmetBox">
                        <img src="assets/img/hizmet-icon.jpg" alt="">
                        <h4>Lorem İpsum</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore </p>
                        <a href="#">DETAYLI BİLGİ</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="anasayfaHizmetBox">
                        <img src="assets/img/hizmet-icon.jpg" alt="">
                        <h4>Lorem İpsum</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore </p>
                        <a href="#">DETAYLI BİLGİ</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="anasayfaHizmetBox">
                        <img src="assets/img/hizmet-icon.jpg" alt="">
                        <h4>Lorem İpsum</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore </p>
                        <a href="#">DETAYLI BİLGİ</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="anasayfaHizmetBox">
                        <img src="assets/img/hizmet-icon.jpg" alt="">
                        <h4>Lorem İpsum</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore </p>
                        <a href="#">DETAYLI BİLGİ</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="anasayfaHizmetBox">
                        <img src="assets/img/hizmet-icon.jpg" alt="">
                        <h4>Lorem İpsum</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore </p>
                        <a href="#">DETAYLI BİLGİ</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="anasayfaHizmetBox">
                        <img src="assets/img/hizmet-icon.jpg" alt="">
                        <h4>Lorem İpsum</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore </p>
                        <a href="#">DETAYLI BİLGİ</a>
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
                                Ekibimiz
                            </h3>
                        </div>
                        <div class="col-lg-12 anasayfaSectionBaslik">
                            <h2>Lorem Ipsum Doktorlarımız</h2>
                        </div>
                    </div></div>
                <div class="col-lg-4 text-center">
                    <button type="button" class="btn btn-default anasayfaSectionBtn">Tüm Ekibimizi Gör</button>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-one owl-carousel owl-theme">
                        <div class="item">
                            <img src="" alt="">
                            <h4></h4>
                            <p></p>
                            <a href="#" class="ekipBtn"></a>
                        </div>
                        <div class="item">
                            <img src="" alt="">
                            <h4></h4>
                            <p></p>
                            <a href="#" class="ekipBtn">DETAYLI BİLGİ</a>
                        </div>
                        <div class="item">
                            <img src="" alt="">
                            <h4></h4>
                            <p></p>
                            <a href="#" class="ekipBtn">DETAYLI BİLGİ</a>
                        </div>
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
                                Blog
                            </h3>
                        </div>
                        <div class="col-lg-12 anasayfaSectionBaslik">
                            <h2>Son Haberler</h2>
                        </div>
                    </div></div>
                <div class="col-lg-4 text-center">
                    <a href="#" type="button" class="btn btn-default anasayfaSectionBtn">Tüm Haberleri Gör</a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-two owl-carousel owl-theme">
                        <div class="item">
                            <a href="#">
                                <div class="haberImg">
                                    <img src="assets/img/haber-img-1.jpg" alt="">
                                </div>
                                <h5>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                </p>
                            </a>

                        </div>

                        <div class="item">
                            <a href="#">
                                <div class="haberImg">
                                    <img src="assets/img/haber-img-1.jpg" alt="">
                                </div>
                                <h5>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                </p>
                            </a>

                        </div>

                        <div class="item">
                            <a href="#">
                                <div class="haberImg">
                                    <img src="assets/img/haber-img-1.jpg" alt="">
                                </div>
                                <h5>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                </p>
                            </a>

                        </div>

                        <div class="item">
                            <a href="#">
                                <div class="haberImg">
                                    <img src="assets/img/haber-img-1.jpg" alt="">
                                </div>
                                <h5>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                </p>
                            </a>

                        </div>

                        <div class="item">
                            <a href="#">
                                <div class="haberImg">
                                    <img src="assets/img/haber-img-1.jpg" alt="">
                                </div>
                                <h5>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                </p>
                            </a>

                        </div>

                    </div>
                </div>
            </div>

        </div>


    </section>
@endsection
