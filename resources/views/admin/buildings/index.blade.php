@extends('admin.layout')

@section('title','BuildingList')

@section('content')

    {{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-10">--}}
            {{--<h1> Listings</h1>--}}
            {{--<p> View all your Nesthub Buildings</p>--}}
        {{--</div>--}}
        {{--<div class="col-md-2">--}}
            {{--<a href="{{route ('building.create')}}" class="btn btn-lg btn-block btn-primary btn-h1-style" > Add Building </a>--}}
        {{--</div>--}}

        {{--<div class="col-md-12">--}}
            {{--<hr>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="row">--}}
        {{--<div class="col-md-12">--}}
            {{--<table class="table">--}}
                {{--<thead>--}}
                {{--<th>Name</th>--}}
                {{--<th>Address</th>--}}
                {{--<th>Phone</th>--}}
                {{--<th>Offices</th>--}}
                {{--<th></th>--}}
                {{--<th></th>--}}
                {{--</thead>--}}
                {{--<tbody>--}}
                {{--@foreach($buildings as $building)--}}

                    {{--<tr>--}}
                        {{--<td><a href="{{route('building.show',$building->id)}}"> {{$building->name}}</a></td>--}}
                        {{--<td>{{ $building->address }}</td>--}}
                        {{--<td>{{ $building->phone }}</td>--}}
                        {{--<td>--}}
                            {{--<a href="{{route ('office.show',$building->id)}}" title="View Offices">--}}
                                {{--<i class="glyphicon glyphicon-plus-sign" style="font-size:20px"></i>--}}
                            {{--</a>--}}
                        {{--</td>--}}
                        {{--<td><a href="{{route ('building.edit',$building->id)}}" class="btn btn-default btn-block">Edit</a></td>--}}
                        {{--<td>--}}
                            {{--{!! Form::open(['route' => ['building.destroy', $building->id ], 'method' => 'DELETE']) !!}--}}
                            {{--{!! Form::submit('Delete' , ['class' => 'btn btn-danger btn-block']) !!}--}}
                            {{--{!! Form::close() !!}--}}
                        {{--</td>--}}
                    {{--</tr>--}}

                {{--@endforeach--}}
                {{--</tbody>--}}
            {{--</table>--}}
            {{--<div class="text-center">--}}
                {{--{!! $buildings->links() !!}--}}
            {{--</div>--}}
            {{--<div class="text-center">--}}
                {{--<strong>Page : {{ $buildings->currentPage() }} of {{ $buildings->lastPage() }}</strong>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
        {{----}}
        {{----}}
        {{----}}
{{--</div>--}}



    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Leads</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10">
            <form role="form">
                <div class="form-group contact-search m-b-30">
                    <input type="text" id="search" class="form-control" placeholder="Search...">
                    <button type="submit" class="btn btn-white"><i class="fa fa-search"></i></button>
                </div> <!-- form-group -->
            </form>
        </div>
        <div class="col-md-2">
            <a href="{{route ('building.create')}}" class="btn btn-default btn-md waves-effect waves-light m-b-30" data-animation="fadein" data-plugin="custommodal"
               data-overlaySpeed="200" data-overlayColor="#36404a"><i class="md md-add"></i> Add New</a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            @foreach($buildings as $building)
                <div class="card-box m-b-10">
                    <div class="table-box opport-box container">
                        <div class="table-detail">
                            <img  alt="img" class="img-circle thumb-lg m-r-15" />
                        </div>

                        <div class="table-detail">
                            <div class="member-info">
                                <h4 class="m-t-0"><b><a href="{{route('building.show',$building->id)}}"> {{$building->name}}</a></b></h4>
                                <p class="text-dark m-b-5"><b> </b> <i class="fa fa-mobile-phone"> {{$building ->phone}}</i></p>
                                <p class="text-dark m-b-5"><b> </b> <i class="fa fa-map-marker"> {{$building ->address}}</i></p>

                            </div>
                        </div>

                        <div class="table-detail">
                            @if($building->status == 1)
                                <span class="label label-info">Available</span>
                            @else
                                <span class="label label-danger">Not Available</span>
                            @endif
                        </div>

                        <div class="table-detail">
                            <a href="{{route ('office.show',$building->id)}}" class="btn btn-sm btn-primary waves-effect waves-light">Officies</a>
                            <a href="#" class="btn btn-sm btn-primary waves-effect waves-light">Call</a>
                            <a href="#" class="btn btn-sm btn-primary waves-effect waves-light">Owner</a>
                        </div>

                        <div class="table-detail table-actions-bar">
                            <a href="{{route ('building.edit',$building->id)}}" class="table-action-btn"><i class="md md-edit"></i></a>
                            <a href="{{route ('building.destroy',$building->id)}}" class="table-action-btn"><i class="md md-close"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-lg-4">
            <div class="card-box m-b-0">
                <h4 class=" header-title m-t-0 m-b-20 text-dark">Leads Statics</h4>
                <div id="morris-bar-stacked" style="height: 260px;"></div>

                <div class="p-20">
                    <h4 class="m-b-20 header-title"><b>Activities</b></h4>
                    <div class="nicescroll p-l-r-10" style="max-height: 535px;">
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

                            <div class="time-item">
                                <div class="item-info">
                                    <div class="text-muted"><small>59 minutes ago</small></div>
                                    <p><a href="#" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <div class="text-muted"><small>5 minutes ago</small></div>
                                    <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <div class="text-muted"><small>30 minutes ago</small></div>
                                    <p><a href="#" class="text-info">Lorem</a> commented your post.</p>
                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <div class="text-muted"><small>59 minutes ago</small></div>
                                    <p><a href="#" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <div class="text-muted"><small>5 minutes ago</small></div>
                                    <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
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

    </div>


@endsection