<div>
    <input wire:model="search" name="search" type="text" class="form-control" list="mylist" placeholder="Search Hotel..." autocomplete="" />
    @if(!empty($query))
        <datalist id="mylist">
            @foreach($dataList as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif

</div>
