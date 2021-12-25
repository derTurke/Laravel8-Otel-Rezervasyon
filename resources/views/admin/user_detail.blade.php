<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin User Roles Page</title>
    <link href="{{asset('assets')}}/admin/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
    <link href="{{asset('assets')}}/admin/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <link href="{{asset('assets')}}/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet"/>
    <link href="{{asset('assets')}}/admin/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet"/>
    <!-- loader-->
    <link href="{{asset('assets')}}/admin/css/pace.min.css" rel="stylesheet"/>
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
                User Detail
                <hr>
                @include('admin.message')
                <div class="table-responsive">
                    <table id="comment" class="table table-striped table-bordered" style="width:100%">
                        @if($data->profile_photo_path)
                        <tr>
                            <th rowspan="10" align="center" valign="center" class="">

                                <img src="{{\Illuminate\Support\Facades\Storage::url($data->profile_photo_path)}}" height="400" width="250" alt="">
                            </th>
                        </tr>
                        @endif
                        <tr>
                            <th>Id</th>
                            <td>{{$data->id}}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td>{{$data->phone}}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{$data->address}}</td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td>{{$data->created_at}}</td>
                        </tr>
                        <tr>
                            <th>Updated At</th>
                            <td>{{$data->updated_at}}</td>
                        </tr>
                        <tr>
                            <th>Roles</th>
                            <td>
                                <table>
                                    @foreach($data->roles as $row)
                                        <tr>
                                            <td>{{$row->name}}</td>
                                            <td>
                                                <a href="{{route('admin_user_role_delete',['user_id' => $data->id,'role_id' => $row->id])}}"
                                                   onclick="return confirm('Delete! Are you sure?')"><i
                                                        class="bx bx-trash text-danger font-24"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th>Add Role</th>
                            <td>
                                <form action="{{route('admin_user_role_store',['id'=>$data->id])}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <select name="role_id" id="role_id" class="form-select">

                                        @foreach($dataList as $rs)
                                            <option value="{{$rs->id}}">{{$rs->name}}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-primary mt-2">Add Role</button>
                                </form>
                            </td>
                        </tr>

                    </table>
                </div>
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

