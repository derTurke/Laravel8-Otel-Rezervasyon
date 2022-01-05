@extends('layouts.home')

@section('title','My Comments - '.$setting->title)


@section('content')
    <section class="icSayfaSection" style="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    @include('home.usermenu')

                </div>
                <div class="col-lg-9">
                    <div class="iletisimFormu">
                        <h3>My Comments</h3>
                        <hr>

                        @include('home.message')
                        <div class="table-responsive">
                            <table id="hotel" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Hotel</th>
                                    <th>Comment</th>
                                    <th>Rate</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($dataList as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>
                                            <a href="{{route('hotel',['id' => $rs->hotel->id])}}"
                                               target="_blank">{{$rs->hotel->title}}</a>
                                        </td>
                                        <td>{{$rs->comment}}</td>
                                        <td>{{$rs->rate}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td>{{$rs->created_at}}</td>
                                        <td>
                                            <a href="{{route('destroymycomment',['id' => $rs->id])}}"
                                               onclick="return confirm('Delete! Are you sure?')"><i
                                                    class="fa fa-trash text-danger font-24"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

@endsection
@section('footerjs')
    <script src="{{asset('assets')}}/admin/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#hotel').DataTable();
        });
    </script>
@endsection
