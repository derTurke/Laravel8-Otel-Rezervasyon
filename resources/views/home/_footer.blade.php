<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footerLogo">
                    <a href="{{route('home')}}" class="" style="color: white; padding: 5px;font-size: 2.1rem;">
                        <span><i class="fa fa-building" style="margin-right: 5px"></i>{{$setting->title}}</span>
                    </a>
                    <p class="footerLogoText">{{$setting->company}}</p>
                    <div class="footerLogoIletisim">
                        <i class="glyphicon glyphicon-phone" style="font-size: 3rem;margin-right: 15px"></i>
                        <p>{{$setting->phone}}</p>
                    </div>
                    <div class="footerLogoIletisim">
                        <i class="glyphicon glyphicon-map-marker" style="font-size: 3rem;margin-right: 15px"></i>
                        <p>{{$setting->address}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footerMenu">
                    <div class="footerMenuBaslik">
                        <p>Hızlı Erişim</p>
                    </div>
                    <ul>
                        <li><a href="{{route('home')}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Home</a></li>
                        <li><a href="{{route('aboutus')}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> About Us</a></li>
                        <li><a href="{{route('hotels')}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Hotels</a></li>
                        <li><a href="{{route('references')}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> References</a></li>
                        <li><a href="{{route('faq')}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footerMenu">
                    <div class="footerMenuBaslik">
                        <p>Hızlı Erişim</p>
                    </div>
                    <ul>
                        <li><a href="{{route('contact')}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Contact</a></li>
                        @auth
                            <li><a href="{{route('myprofile')}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> My Account</a></li>
                            <li><a href="{{route('logout')}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Logout</a></li>
                        @else
                            <li><a href="/login"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Login</a></li>
                            <li><a href="/register"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Register</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="row">
                    <div class="col-lg-12 footerSagSosyal">
                        @if($setting->facebook != null)<a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>@endif
                        @if($setting->twitter != null)<a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>@endif
                        @if($setting->instagram != null)<a href="{{$setting->instagram}}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>@endif
                        <a href="{{route('contact')}}"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row footerCopy">
            <div class="col-lg-6">
                <p style="margin-top: 5px;">
                All rights reserved | {{$setting->company}}
                </p>
            </div>
            <div class="col-lg-6 text-right">
                <a class="yukariBtn" href="#" style="background-color: #55c2eb; color: white; border-radius: 10px; padding: 15px"><i class="fa fa-arrow-up" style="font-size: 2rem"></i></a>
            </div>
        </div>
    </div>
</footer>





<script src="{{asset('assets')}}/js/jquery.min.js"></script>
<script src="{{asset('assets')}}/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/js/dropdownHover.js"></script>


<script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/js/owl.carouselStart.js"></script>
