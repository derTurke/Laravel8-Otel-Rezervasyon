<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Hotel Update Room Page</title>
    <link href="{{asset('assets')}}/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/css/app.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/css/icons.css" rel="stylesheet">
</head>
<body>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <div class="card">
        <div class="card-body">
            <div class="p-4 border rounded">
                Hotel Update Room
                <hr>
                <form class="row g-3 needs-validation was-validated" novalidate="" action="{{route('user_room_update',['id' => $data->id,'hotel_id' => $hotel_id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$data->title}}" required="">
                        <div class="valid-feedback">Successful!</div>
                    </div>
                    <div class="col-md-12">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{$data->description}}" required="">
                        <div class="valid-feedback">Successful!</div>
                    </div>
                    <div class="col-md-12">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" required="">
                        <div class="valid-feedback">Successful!</div>
                        @if($data->image)
                            <img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" height="50px">
                        @endif
                    </div>
                    <div class="col-md-12">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" id="price" required="" value="{{$data->price}}">
                        <div class="valid-feedback">Successful!</div>
                    </div>
                    <div class="col-md-12">
                        <label for="adet" class="form-label">Piece</label>
                        <input type="number" class="form-control" name="adet" id="adet" required="" value="{{$data->adet}}">
                        <div class="valid-feedback">Successful!</div>
                    </div>
                    <div class="col-md-12">
                        <label for="type" class="form-label">Type</label>
                        <select class="form-select is-invalid" name="type" id="type" required="">
                            <option selected>{{$data->type}}</option>
                            <option value="">Please select type!</option>
                            <option>Single Bed</option>
                            <option>Double Bed</option>
                            <option>Three Bed</option>
                            <option>Family Room</option>
                            <option>Suit</option>
                        </select>
                        <div class="valid-feedback">Successful!</div>
                    </div>
                    <div class="col-md-12">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select is-invalid" name="status" id="status" required="">
                            <option>{{$data->status}}</option>
                            <option value="">Please select status!</option>
                            <option>False</option>
                            <option>True</option>
                        </select>
                        <div class="valid-feedback">Successful!</div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Update Room</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

