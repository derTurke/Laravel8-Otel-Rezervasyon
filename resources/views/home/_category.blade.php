@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp
<li>
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
    <ul class="dropdown-menu">
        @foreach($parentCategories as $rs)
        <li class="dropdown-submenu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$rs->title}} <span class="caret"></span></a>
            <ul class="dropdown-menu">
                @if(count($rs->children))
                    @include('home.categorytree',['children' => $rs->children])
                @endif
            </ul>
        </li>
        @endforeach

    </ul>
</li>
