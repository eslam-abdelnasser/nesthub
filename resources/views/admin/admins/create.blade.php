@extends('admin.layout')
@section('title','Admins')


@section('content')

    <div class="row">
        <div class="col-md-12 ">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <h1>Create New Admin</h1>
                </div>
                <div class="portlet-body form">
                    {{Form::open(['route' => ['admin.store'] , 'method' => 'post' ,'files'=>true]) }}
                    <div class="form-body">
                        <div class="form-group">
                            <label>Name</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-user"></i>
                                </span>
                                <input type="text" name="name" id="name" class="form-control input-circle-right" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-envelope"></i>
                                </span>
                             <input type="text" name="email" id="email" class="form-control input-circle-right" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-lock"></i>
                                </span>
                                <input type="password" name="password" id="password" class="form-control input-circle-right" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-lock"></i>
                                </span>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-circle-right" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-phone"></i>
                                </span>
                                <input type="text" name="phone" id="phone" class="form-control input-circle-right" placeholder="Phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Job Title</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-briefcase"></i>
                                </span>
                                <input type="text" name="job_title" id="job_title" class="form-control input-circle-right" placeholder="Job Title">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group m-b-0">
                            <label class="control-label">File style placeholder</label>
                            <input type="file" name="image_url" id="image_url" class="filestyle" data-placeholder="No file">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>


@endsection

@section('js')
    <script src="{{asset('admin-panel/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}></script>
@endsection