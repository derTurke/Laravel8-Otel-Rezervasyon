<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Hotel Add Room Page</title>
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
                Hotel Add Room
                <hr>
                <form class="row g-3 needs-validation was-validated" novalidate="" action="{{route('user_room_store',['hotel_id' => $data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required="">
                        <div class="valid-feedback">Successful!</div>
                    </div>
                    <div class="col-md-12">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description" required="">
                        <div class="valid-feedback">Successful!</div>
                    </div>
                    <div class="col-md-12">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" required="">
                        <div class="valid-feedback">Successful!</div>
                    </div>
                    <div class="col-md-12">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" id="price" required="">
                        <div class="valid-feedback">Successful!</div>
                    </div>
                    <div class="col-md-12">
                        <label for="adet" class="form-label">Piece</label>
                        <input type="number" class="form-control" name="adet" id="adet" required="">
                        <div class="valid-feedback">Successful!</div>
                    </div>
                    <div class="col-md-12">
                        <label for="type" class="form-label">Type</label>
                        <select class="form-select is-invalid" name="type" id="type" required="">
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
                            <option value="">Please select status!</option>
                            <option>False</option>
                            <option>True</option>
                        </select>
                        <div class="valid-feedback">Successful!</div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Add Room</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="images" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title(s)</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Piece</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rooms as $room)
                        <tr>
                            <td>{{$room->id}}</td>
                            <td>{{$room->title}}</td>
                            <td>{{$room->description}}</td>
                            <td>
                                @if($room->image)
                                    <img src="{{Storage::url($room->image)}}" height="50px">
                                @endif
                            </td>
                            <td>{{$room->price}}</td>
                            <td>{{$room->adet}}</td>
                            <td>{{$room->type}}</td>
                            <td>{{$room->status}}</td>
                            <td>
                                <a href="{{route('user_room_edit',["id" => $room->id,"hotel_id" => $data->id])}}"><i class="bx bx-pencil text-primary font-24"></i></a>
                                <a href="{{route('user_room_destroy',["id" => $room->id,"hotel_id" => $data->id])}}" onclick="return confirm('Delete! Are you sure?')"><i class="bx bx-trash text-danger font-24"></i></a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>

