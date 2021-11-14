@foreach($children as $subcategory)
    @if(count($subcategory->children))
        <li class="dropdown-submenu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$subcategory->title}} <span class="caret"></span></a>
            <ul class="dropdown-menu">
                @include('home.categorytree',['children' => $subcategory->children])
            </ul>
        </li>

    @else
        <li>
            <a href="{{route('categoryhotel',['id' => $subcategory->id])}}">{{$subcategory->title}}</a>
        </li>
    @endif
@endforeach
