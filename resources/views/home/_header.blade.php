<div class="headerTopContainer">
    <div class="row">
        <div class="col-lg-4">
            <div class="logo">
                <a href="index.html">
                    <img width="322px" src="{{asset('assets')}}/img/logo.svg" alt="">
                </a>
            </div>
        </div>
        <div class="col-lg-8 visible-lg">

            <div class="headerTopSag">
                <div class="headerTopBtn" style="">
                    <form action="{{route('gethotel')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-10">
                                @livewire('search')
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-default headerTopBtnAra"><span class="glyphicon glyphicon-search"></span></button>
                            </div>
                        </div>
                    </form>
                    @section('footerjs')
                        @livewireScripts
                    @endsection

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid navbarBg">
    <nav class="navbar navbar-default">
        <div class="navbarContainer">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    @include('home._category')



                    <li><a href="{{route('home')}}">Home <span class="sr-only">(current)</span></a></li>

                    <li>
                        <a href="{{route('aboutus')}}">About Us <span class="sr-only">(current)</span></a>
                    </li>
                    <li>
                        <a href="{{route('hotels')}}">Hotels <span class="sr-only">(current)</span></a>
                    </li>
                    <li>
                        <a href="{{route('references')}}">References <span class="sr-only">(current)</span></a>
                    </li>
                    <li>
                        <a href="{{route('hotels')}}">FAQ <span class="sr-only">(current)</span></a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}">Contact <span class="sr-only">(current)</span></a>
                    </li>


                </ul>

                <ul class="nav navbar-nav navbar-right visible-lg">
                    @auth
                        <li class="dropdown" align="right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle-o"></i> {{Auth::user()->name}} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('myprofile')}}"><i class="fa fa-user"></i> My Account</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Logout</a></li>
                            </ul>


                        </li>
                    @endauth
                    @guest
                        <li class="bg-primary" >
                            <a href="/login" class="dropdown-toggle" style="color:#ffffff"><i class="fa fa-sign-in"></i> Login</a>
                        </li>
                        <li>
                            <a href="/register" class="dropdown-toggle" style="background-color:#2d2d2d;color:#ffffff;margin-left:10px;"><i class="fa fa-user-plus"></i> Register</a>
                        </li>
                    @endguest
                </ul>



            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
