<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Comment Update Page</title>
    <link href="{{asset('assets')}}/admin/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
    <link href="{{asset('assets')}}/admin/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/admin/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="{{asset('assets')}}/admin/css/pace.min.css" rel="stylesheet" />
    <script src="{{asset('assets')}}/admin/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
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
                Comment Detail
                <hr>
                @include('admin.message')
                <form class="row g-3 needs-validation was-validated" novalidate="" action="{{route('admin_comment_update',['id' => $data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="table-responsive">
                        <table id="comment" class="table table-striped table-bordered" style="width:100%">
                            <tbody>
                                <tr>
                                    <th>Id</th> <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th>Name</th> <td>{{$data->user->name}}</td>
                                </tr>
                                <tr>
                                    <th>Hotel</th> <td>{{$data->hotel->title}}</td>
                                </tr>
                                <tr>
                                    <th>Comment</th> <td>{{$data->comment}}</td>
                                </tr>
                                <tr>
                                    <th>Rate</th> <td>{{$data->rate}}</td>
                                </tr>
                                <tr>
                                    <th>Ip</th> <td>{{$data->ip}}</td>
                                </tr>
                                <tr>
                                    <th>Created Date</th> <td>{{$data->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Updated Date</th> <td>{{$data->updated_at}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        <div class="col-md-4">
                                            <select name="status" class="form-control">
                                                <option selected>{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td>
                                        <button type="submit" class="btn btn-primary">Update Comment</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<script src="{{asset('assets')}}/js/jquery.min.js"></script>
<script src="{{asset('assets')}}/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/js/dropdownHover.js"></script>


<script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/js/owl.carouselStart.js"></script>
</body>
</html>

