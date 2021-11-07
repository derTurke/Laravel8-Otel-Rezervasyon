<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets')}}/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="mb-2">
        @include('admin.message')
    </div>
    <h5 class="mt-3">Number {{$data->id}} Message Detail</h5>

    <form action="{{route('admin_message_update',['id' => $data->id])}}" method="post">
        @csrf
        <table id="hotel" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th><td>{{$data->id}}</td>
                </tr>
                <tr>
                    <th>Name & Surname</th><td>{{$data->name}}</td>
                </tr>
                <tr>
                    <th>Email</th><td>{{$data->email}}</td>
                </tr>
                <tr>
                    <th>Phone</th><td>{{$data->phone}}</td>
                </tr>
                <tr>
                    <th>Subject</th><td>{{$data->subject}}</td>
                </tr>
                <tr>
                    <th>Message</th><td>{{$data->message}}</td>
                </tr>
                <tr>
                    <th>Ip</th><td>{{$data->ip}}</td>
                </tr>
                <tr>
                    <th>Admin Note</th>
                    <td>
                        <textarea name="note" id="note" cols="5" class="form-control">{{$data->note}}</textarea>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <button type="submit" class="btn btn-primary">Update Message</button>
                    </td>
                </tr>
            </thead>

        </table>

    </form>
    <script src="{{asset('assets')}}/admin/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="{{asset('assets')}}/admin/js/jquery.min.js"></script>
</div>
</body>
</html>








