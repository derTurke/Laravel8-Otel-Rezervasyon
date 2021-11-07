@extends('layouts.home')

@section('title','User Profile')


@section('content')
    <section class="icSayfaSection" style="">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                    @include('home.usermenu')

                    </div>
                    <div class="col-lg-9">
                        <div class="iletisimFormu">
                        @include('profile.show')

                        </div>
                    </div>
                </div>

        </div>

    </section>

@endsection
