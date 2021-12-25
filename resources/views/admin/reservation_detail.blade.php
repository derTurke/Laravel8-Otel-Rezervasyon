<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Hotel Add Image Page</title>
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
                Reservation Detail
                <hr>
                <table class="table">
                    <tr>
                        <th>Id:</th>
                        <td>{{$data->id}}</td>
                    </tr>
                    <tr>
                        <th>Hotel:</th>
                        <td>{{$data->hotel->title}}</td>
                    </tr>
                    <tr>
                        <th>Room:</th>
                        <td>{{$data->room->title}}</td>
                    </tr>
                    <tr>
                        <th>Name:</th>
                        <td>{{$data->name}}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{{$data->email}}</td>
                    </tr>
                    <tr>
                        <th>Phone Number:</th>
                        <td>{{$data->phone}}</td>
                    </tr>
                    <tr>
                        <th>Check-in:</th>
                        <td>{{date("d.m.Y",strtotime($data->checkin))}}</td>
                    </tr>
                    <tr>
                        <th>Check-out:</th>
                        <td>{{date("d.m.Y",strtotime($data->checkin))}}</td>
                    </tr>
                    <tr>
                        <th>Days:</th>
                        <td>{{$data->days}}</td>
                    </tr>
                    <tr>
                        <th>Total Price:</th>
                        <td>{{$data->total}} ₺</td>
                    </tr>
                    <tr>
                        <th>Adults:</th>
                        <td>{{$data->adults}}</td>
                    </tr>
                    <tr>
                        <th>Children:</th>
                        <td>{{$data->children}}</td>
                    </tr>
                    <tr>
                        <th>IP Address:</th>
                        <td>{{$data->ip}}</td>
                    </tr>
                    <tr>
                        <th>Note:</th>
                        <td>{{$data->note}}</td>
                    </tr>
                    <tr>
                        <th>Message:</th>
                        <td>{{$data->message}}</td>
                    </tr>
                    <tr>
                        <th>Status:</th>
                        <td>{{$data->status}}</td>
                    </tr>
                    <tr>
                        <th>Date:</th>
                        <td>{{date('d.m.Y H:i:s',strtotime($data->updated_at))}}</td>
                    </tr>


                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>

