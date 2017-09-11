@extends('admin.layout')
@section('title','Owners')


@section('content')

    {{--<div class="container">--}}
        {{--<h1>Nesthub Owners </h1>--}}
        {{--<table class="table">--}}
            {{--<thead>--}}
            {{--<tr>--}}
                {{--<th>#</th>--}}
                {{--<th>Name</th>--}}
                {{--<th>Email</th>--}}
                {{--<th>Phone</th>--}}
                {{--<th>Building Name</th>--}}
                {{--<th>Company name</th>--}}
                {{--<th>Company website</th>--}}
                {{--<th>Status</th>--}}
                {{--<th></th>--}}
            {{--</tr>--}}
            {{--</thead>--}}

            {{--<tbody>--}}
            {{--@foreach($owners as $owner)--}}
                {{--<tr>--}}
                    {{--<td>{{$owner->id}}</td>--}}
                    {{--<td><a href="{{route('owner.show',$owner->id)}}"> {{$owner->name}}</a></td>--}}
                    {{--<td>{{$owner->email}}</td>--}}
                    {{--<td>{{$owner->phone}}</td>--}}
                    {{--<td><a href="{{route('building.show',$owner->buildings->id)}}"> {{$owner->buildings->count()}}</a></td>--}}
                    {{--<td>{{$owner->company_name}}</td>--}}
                    {{--<td>{{$owner->company_website}}</td>--}}
                {{--@if($owner->status == 0)--}}
                        {{--<td>Active</td>--}}
                    {{--@else--}}
                        {{--<td>InActive</td>--}}
                    {{--@endif--}}
                    {{--<td>--}}
                        {{--{!! Form::open(['route' => ['owner.destroy', $owner->id ], 'method' => 'DELETE']) !!}--}}
                        {{--{!! Form::submit('Delete' , ['class' => 'btn btn-danger btn-block']) !!}--}}
                        {{--{!! Form::close() !!}--}}
                    {{--</td>--}}
                {{--</tr>--}}
            {{--@endforeach--}}
            {{--</tbody>--}}
        {{--</table>--}}
    {{--</div>--}}


    <h4 class="page-title">Users</h4>

    <div class="row" style="margin-top: 1em">

        <div class="col-lg-8">
            <div class="card-box">
                <div class="row">
                    <div class="col-sm-8">
                        <form role="form">
                            <div class="form-group contact-search m-b-30" >
                                <input type="text" id="search" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn btn-white"><i class="fa fa-search"></i></button>
                            </div> <!-- form-group -->
                        </form>
                    </div>
                    <div class="col-sm-4" >
                        <a href="#custom-modal" class="btn btn-default btn-md waves-effect waves-light m-b-30" data-animation="fadein" data-plugin="custommodal"
                           data-overlaySpeed="200" data-overlayColor="#36404a"><i class="md md-add"></i> Add Contact</a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover mails m-0 table table-actions-bar">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th></th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($owners as $owner)
                            <tr>
                                <td>
                                    {{$owner->id}}
                                </td>
                                <td>
                                    <img src="{{$owner->image_url}}" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                </td>

                                <td>
                                    <a href="{{route('owner.show',$owner->id)}}"> {{$owner->name}}</a>
                                </td>

                                <td>
                                    {{$owner->email}}
                                </td>

                                <td>
                                    {{$owner->phone}}
                                </td>
                                <td>
                                    <a href="{{route ('owner.edit',$owner->id)}}" class="table-action-btn">
                                        <i class="md md-edit"></i>
                                    </a>
                                    <a href="{{route ('owner.destroy',$owner->id)}}" class="table-action-btn">
                                        <i class="md md-close"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- the table -->

        <div class="col-lg-4">
            <div class="card-box">
                <div class="contact-card">
                    <a class="pull-left" href="#">
                        <img class="img-circle" src="assets/images/users/avatar-6.jpg" alt="">
                    </a>
                    <div class="member-info">
                        <h4 class="m-t-0 m-b-5 header-title"><b>Bill Bertz</b></h4>
                        <p class="text-dark"><i class="md md-business m-r-10"></i><small>Company name</small></p>
                        <div class="m-t-20">
                            <a href="#" class="btn btn-purple waves-effect waves-light btn-sm">Send email</a>
                            <a href="#" class="btn btn-success waves-effect waves-light btn-sm m-l-5">Edit</a>
                            <a href="#" class="btn btn-pink waves-effect waves-light btn-sm m-l-5">Call</a>
                        </div>
                    </div>

                </div>

                <div>
                    <div class="p-20">
                        <h4 class="m-b-20 header-title"><b>Activities</b></h4>
                        <div class="nicescroll p-l-r-10" style="max-height: 555px;">
                            <div class="timeline-2">
                                <div class="time-item">
                                    <div class="item-info">
                                        <div class="text-muted"><small>5 minutes ago</small></div>
                                        <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <div class="text-muted"><small>30 minutes ago</small></div>
                                        <p><a href="#" class="text-info">Lorem</a> commented your post.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- detail -->
    </div>




@endsection