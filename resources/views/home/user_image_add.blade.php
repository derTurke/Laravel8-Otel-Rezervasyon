<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Hotel Add Image Page</title>
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
                Image Gallery
                <hr>
                <form class="row g-3 needs-validation was-validated" novalidate="" action="{{route('user_image_store',['hotel_id' => $data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required="">
                        <div class="valid-feedback">Successful!</div>
                    </div>
                    <div class="col-md-12">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" id="image" required="">
                        <div class="valid-feedback">Successful!</div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Add Image</button>
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
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($images as $image)
                        <tr>
                            <td>{{$image->id}}</td>
                            <td>{{$image->title}}</td>
                            <td>
                                @if($image->image)
                                    <img src="{{Storage::url($image->image)}}" height="50px">
                                @endif
                            </td>
                            <td>
                                <a href="{{route('user_image_destroy',["id" => $image->id,"hotel_id" => $data->id])}}" onclick="return confirm('Delete! Are you sure?')"><i class="bx bx-trash text-danger font-24"></i></a>
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

