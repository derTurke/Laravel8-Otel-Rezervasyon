@extends('layouts.admin')

@section('title','Admin Panel Setting Edit Page')

@section('headerjs')
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@endsection

@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Edit Setting</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('admin_home')}}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active">Edit Setting</li>

                </ol>
            </nav>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form class="row g-3 needs-validation was-validated" novalidate="" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs nav-primary" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#general" role="tab" aria-selected="true">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class="bx bxs-home font-18 me-1"></i>
                                </div>
                                <div class="tab-title">General</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#smtp-info" role="tab" aria-selected="false">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class="bx bxs-envelope-open font-18 me-1"></i>
                                </div>
                                <div class="tab-title">SMTP Information</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#social" role="tab" aria-selected="false">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class="bx bxl-twitter font-18 me-1"></i>
                                </div>
                                <div class="tab-title">Social Media</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#about-us" role="tab" aria-selected="false">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class="bx bxs-message-rounded font-18 me-1"></i>
                                </div>
                                <div class="tab-title">About Us</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#contact-info" role="tab" aria-selected="false">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class="bx bxs-contact font-18 me-1"></i>
                                </div>
                                <div class="tab-title">Contact</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#references-info" role="tab" aria-selected="false">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class="bx bxs-notepad font-18 me-1"></i>
                                </div>
                                <div class="tab-title">References</div>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab-content py-3">
                    <div class="tab-pane fade active show" id="general" role="tabpanel">
                        <div class="col-md-12">
                            <input type="hidden" id="id" name="id" value="{{$data->id}}">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required="" value="{{$data->title}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="keywords" class="form-label">Keywords</label>
                            <input type="text" class="form-control" name="keywords" id="keywords" required="" value="{{$data->keywords}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" id="description" required="" value="{{$data->description}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="company" class="form-label">Company</label>
                            <input type="text" class="form-control" name="company" id="company" required="" value="{{$data->company}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" name="address" required>{{$data->address}}</textarea>
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone" required="" value="{{$data->phone}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="fax" class="form-label">Fax</label>
                            <input type="text" class="form-control" name="fax" id="fax" required="" value="{{$data->fax}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select is-invalid" name="status" id="status" aria-describedby="validationServer04Feedback" required="">
                                @if($data->status)
                                    <option>{{$data->status}}</option>
                                @endif
                                <option value="">Please select status!</option>
                                <option>False</option>
                                <option>True</option>
                            </select>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="smtp-info" role="tabpanel">
                        <div class="col-md-12">
                            <label for="smtpserver" class="form-label">SMTP Server</label>
                            <input type="text" class="form-control" name="smtpserver" id="smtpserver" required="" value="{{$data->smtpserver}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="smtpemail" class="form-label">SMTP Email</label>
                            <input type="text" class="form-control" name="smtpemail" id="smtpemail" required="" value="{{$data->smtpemail}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="smtppassword" class="form-label">SMTP Password</label>
                            <input type="text" class="form-control" name="smtppassword" id="smtppassword" required="" value="{{$data->smtppassword}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="smtpport" class="form-label">SMTP Port</label>
                            <input type="text" class="form-control" name="smtpport" id="smtpport" required="" value="{{$data->smtpport}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="social" role="tabpanel">
                        <div class="col-md-12">
                            <label for="facebook" class="form-label">Facebook</label>
                            <input type="text" class="form-control" name="facebook" id="facebook" required="" value="{{$data->facebook}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="twitter" class="form-label">Twitter</label>
                            <input type="text" class="form-control" name="twitter" id="twitter" required="" value="{{$data->twitter}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                        <div class="col-md-12">
                            <label for="instagram" class="form-label">Instagram</label>
                            <input type="text" class="form-control" name="instagram" id="instagram" required="" value="{{$data->twitter}}">
                            <div class="valid-feedback">Successful!</div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="about-us" role="tabpanel">
                        <div class="col-md-12">
                            <label for="aboutus" class="form-label">About Us</label>
                            <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact-info" role="tabpanel">
                        <div class="col-md-12">
                            <label for="contact" class="form-label">Contact</label>
                            <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="references-info" role="tabpanel">
                        <div class="col-md-12">
                            <label for="references" class="form-label">References</label>
                            <textarea id="references" name="references">{{$data->references}}</textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">Update Setting</button>
                </div>
            </div>
        </div>
        </form>
    </div>

@endsection

@section('footerjs')
    <script>
        CKEDITOR.replace('aboutus');
        CKEDITOR.replace('contact');
        CKEDITOR.replace('references');
    </script>
@endsection
