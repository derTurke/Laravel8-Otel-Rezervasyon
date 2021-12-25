@auth
<div class="hizmetlerSideMenu">
    <h4>User Panel</h4>
    <ul>
        <li><a href="{{route('myprofile')}}"><i class="fa fa-user" aria-hidden="true"></i> My Profile</a></li>
        <h4></h4>
        <li><a href="{{route('mycomments')}}"><i class="fa fa-comment" aria-hidden="true"></i> My Comments</a></li>
        <h4></h4>
        <li><a href="{{route('user_hotel')}}"><i class="fa fa-building" aria-hidden="true"></i> My Hotels</a></li>
        <h4></h4>
        <li><a href="{{route('user_reservation')}}"><i class="fa fa-clock-o" aria-hidden="true"></i> My Reservation</a></li>
        <h4></h4>
        <li><a href="{{route('logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
        <h4></h4>
        @php
            $userRoles = \Illuminate\Support\Facades\Auth::user()->roles->pluck('name');
        @endphp
        @if($userRoles->contains('admin'))
            <li><a href="{{route('admin_home')}}" target="_blank"><i class="fa fa-wrench" aria-hidden="true"></i> Admin Panel</a></li>
            <h4></h4>
        @endif
    </ul>
</div>
@endauth
