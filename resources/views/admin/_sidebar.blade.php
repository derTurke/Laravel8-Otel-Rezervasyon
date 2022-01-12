<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <h4 class="logo-text">Otel Admin Panel</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('admin_home')}}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li class="">
            <a href="javascript:;" class="has-arrow" aria-expanded="false">
                <div class="parent-icon"><i class="bx bx-alarm"></i>
                </div>
                <div class="menu-title">Reservation</div>
            </a>
            <ul class="mm-collapse">
                <li> <a href="{{route('admin_reservation',['slug' => 'New'])}}"><i class="bx bx-right-arrow-alt"></i><i class="badge text-white bg-danger float-end">New</i></a>
                </li>
                <li> <a href="{{route('admin_reservation',['slug' => 'Accepted'])}}"><i class="bx bx-right-arrow-alt"></i><i class="badge text-white bg-primary float-end">Accepted</i></a>
                </li>
                <li> <a href="{{route('admin_reservation',['slug' => 'Canceled'])}}"><i class="bx bx-right-arrow-alt"></i><i class="badge text-white bg-warning float-end">Canceled</i></a>
                </li>
                <li> <a href="{{route('admin_reservation',['slug' => 'Completed'])}}"><i class="bx bx-right-arrow-alt"></i><i class="badge text-white bg-success float-end">Completed</i></a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{route('admin_category')}}">
                <div class="parent-icon"><i class='bx bx-category'></i>
                </div>
                <div class="menu-title">Categories</div>
            </a>

        </li>
        <li>
            <a href="{{route('admin_hotel')}}">
                <div class="parent-icon"><i class='bx bx-building'></i>
                </div>
                <div class="menu-title">Hotels</div>
            </a>

        </li>
        <li>
            <a href="{{route('admin_user')}}">
                <div class="parent-icon"><i class='bx bx-face'></i>
                </div>
                <div class="menu-title">Users</div>
            </a>

        </li>
        <li>
            <a href="{{route('admin_message')}}">
                <div class="parent-icon"><i class='bx bx-message'></i>
                </div>
                <div class="menu-title">Messages</div>
            </a>

        </li>
        <li>
            <a href="{{route('admin_comment')}}">
                <div class="parent-icon"><i class='bx bx-comment'></i>
                </div>
                <div class="menu-title">Comments</div>
            </a>

        </li>
        <li>
            <a href="{{route('admin_faq')}}">
                <div class="parent-icon"><i class='bx bx-align-middle'></i>
                </div>
                <div class="menu-title">FAQ</div>
            </a>

        </li>
        <li>
            <a href="{{route('admin_setting')}}">
                <div class="parent-icon"><i class='bx bx-cog'></i>
                </div>
                <div class="menu-title">Setting</div>
            </a>

        </li>
    </ul>
    <!--end navigation-->
</div>
