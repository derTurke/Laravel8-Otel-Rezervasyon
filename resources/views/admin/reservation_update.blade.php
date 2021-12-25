@extends('layouts.admin')

@section('title','Admin Panel Reservation Update Page')

@section('headerjs')
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@endsection

@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Edit Reservation</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('admin_home')}}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{route('admin_reservation',['slug' => $slug])}}">Reservation</a>
                    </li>
                    <li class="breadcrumb-item active">Edit Reservation</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="p-4 border rounded">
                    <form class="row g-3 needs-validation was-validated" novalidate="" action="{{route('admin_reservation_update',['id' => $data->id, 'slug' => $slug])}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="col-md-12">
                            <label for="user_id" class="form-label">User</label>
                            <input type="text" class="form-control" id="user_id" name="user_id" required="" disabled value="{{$data->user_id.' - '.$data->user->name}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="hotel_id" class="form-label">Hotel ID</label>
                            <input type="text" class="form-control" name="hotel_id" id="hotel_id" required="" disabled value="{{$data->hotel->title}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="room_id" class="form-label">Room ID</label>
                            <input type="text" class="form-control" name="room_id" id="room_id" required="" disabled value="{{$data->room->title}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>

                        <div class="col-md-12">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" required="" value="{{$data->name}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required="" value="{{$data->email}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="number" name="phone" id="phone" class="form-control" required="" value="{{$data->phone}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="checkin" class="form-label">Check-in</label>
                            <input type="date" name="checkin" id="checkin" class="form-control" required="" disabled value="{{date("Y-m-d",strtotime($data->checkin))}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="checkout" class="form-label">Check-out</label>
                            <input type="date" name="checkout" id="checkout" class="form-control" required="" disabled value="{{date("Y-m-d",strtotime($data->checkout))}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="days" class="form-label">Days</label>
                            <input type="text" name="days" id="days" class="form-control" required="" disabled value="{{$data->days}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="total" class="form-label">Total Price</label>
                            <input type="text" name="total" id="total" class="form-control" required="" disabled value="{{$data->total}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="adults" class="form-label">Adults</label>
                            <input type="text" name="adults" id="adults" class="form-control" required="" value="{{$data->adults}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="children" class="form-label">Children</label>
                            <input type="text" name="children" id="children" class="form-control" required="" value="{{$data->children}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="ip" class="form-label">IP Address</label>
                            <input type="text" name="ip" id="ip" class="form-control" required="" disabled value="{{$data->ip}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="note" class="form-label">Note</label>
                            <textarea name="note" id="note" class="form-control" disabled required="">{{$data->note}}</textarea>
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" id="message" class="form-control"  required="">{{$data->message}}</textarea>
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select is-invalid" name="status" id="status" aria-describedby="validationServer04Feedback" required="">
                                <option>{{$data->status}}</option>
                                <option>New</option>
                                <option>Accepted</option>
                                <option>Canceled</option>
                                <option>Completed</option>
                            </select>
                        </div>



                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Update Reservation</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footerjs')
    <script>
        CKEDITOR.replace('detail');
    </script>
@endsection
