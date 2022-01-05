<div class="container-fluid sliderContainer ">

    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        @php
            $counter = 1;
        @endphp
        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            @foreach($slider as $rs)

            <div class="item @if($counter == 1) active @endif">
                <img src="{{Storage::url($rs->image)}}" alt="{{$rs->title}}" style="width:100%;">
                <div class="carousel-caption">
                    <h3>{{$rs->title}}</h3>
                    <a href="{{route('hotel',['id' => $rs->id])}}" class="btn btn-default sliderBtn" style="background-color: #55c2eb">İNCELE</a>
                </div>
            </div>
                @php
                $counter = $counter + 1;
                @endphp
            @endforeach


           <!-- <div class="item">
                <img src="/img/slider-img-1.jpg" alt="New York" style="width:100%;">
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                </div>-->

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
