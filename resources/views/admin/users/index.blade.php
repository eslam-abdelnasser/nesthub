@extends('admin.layout')
@section('title','Users')


@section('content')

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
                            @foreach($users as $user)
                                @if($user->type == 0)
                                <tr>
                                    <td>
                                        {{$user->id}}
                                    </td>
                                    <td>
                                        <img src="{{$user->image_url}}" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                    </td>

                                    <td>
                                        <a href="{{route('user.show',$user->id)}}"> {{$user->name}}</a>
                                    </td>

                                    <td>
                                        {{$user->email}}
                                    </td>

                                    <td>
                                        {{$user->phone}}
                                    </td>
                                    <td>
                                        <a href="{{route ('user.edit',$user->id)}}" class="table-action-btn">
                                            <i class="md md-edit"></i>
                                        </a>
                                        <a href="{{route ('user.destroy',$user->id)}}" class="table-action-btn">
                                            <i class="md md-close"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endif
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