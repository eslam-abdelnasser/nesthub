@extends('admin.layout')

@section('title','Facilities')
@section('css')
    {!! Html::style('css/parsley.css') !!}
    {!! HTML::style('css/select2.min.css') !!}
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <h1>Facility Section</h1>

            <div class="col-lg-8">
                <div class="card-box">
                    <div class="row">
                        <div class="col-sm-12">
                            <form role="form">
                                <div class="form-group contact-search m-b-30" >
                                    <input type="text" id="search" class="form-control" placeholder="Search...">
                                    <button type="submit" class="btn btn-white"><i class="fa fa-search"></i></button>
                                </div> <!-- form-group -->
                            </form>
                        </div>
                    </div>

                    <table class="table table-hover mails m-0 table table-actions-bar">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Facility Name</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th># Building</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($facilities as $facility)
                            <tr>
                                <td>{{ $facility->id }}</td>
                                <td><a href="{{route('facility.show',$facility->id)}}"> {{$facility->name}}</a></td>
                                @if($facility->type == 0)
                                    <td><span class="label label-purple">business</span></td>
                                @else
                                    <td><span class="label label-info">Additional</span></td>
                                @endif
                                @if($facility->status == 0)
                                    <td><span class="label label-success">ON</span></td>
                                @else
                                    <td><span class="label label-danger">OFF</span></td>
                                @endif
                                <td>{{ $facility->buildings->count()}} Building</td>
                                <td>
                                    <a href="{{route ('facility.edit',$facility->id)}}" class="table-action-btn">
                                        <i class="md md-edit"></i>
                                    </a>
                                    <a href="{{route ('facility.destroy',$facility->id)}}" class="table-action-btn">
                                        <i class="md md-close"></i>
                                    </a>
                                </td>

                                {{--<td><a href="{{route ('facility.edit',$facility->id)}}" class="btn btn-default btn-block ">Edit</a></td>--}}
                                {{--<td>--}}
                                {{--{!! Form::open(['route' => ['facility.destroy', $facility->id ], 'method' => 'DELETE']) !!}--}}
                                {{--{!! Form::submit('Delete' , ['class' => 'btn btn-danger btn-block']) !!}--}}
                                {{--{!! Form::close() !!}--}}
                                {{--</td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!-- end of information table div -->

            <div class="col-lg-4">
                <div class="well">
                    {!! Form::open(['route' => 'facility.store'],array('data-parsley-validate'=>'')) !!}
                    <h2>Add New Facility</h2>
                    {{Form::label('name','Name:')}}
                    {{Form::text('name',null,array('class' => 'form-control','required'=>'' , 'style'=>'margin-bottom: 20px'))}}

                    {{Form::label('type','Type:')}}
                    <select class="form-control select2-multi" name="type" required="" style="margin-bottom: 50px">
                        <option value=0>Business</option>
                        <option value=1>Additional</option>
                    </select>
                    {{Form::label('status','Status:')}}
                    <select class="form-control select2-multi" name="status" required="" style="margin-bottom: 50px">
                        <option value=0>Enable</option>
                        <option value=1>Disable</option>
                    </select>

                    {{Form::submit(' Add New Facility ' , array('class'=>'btn btn-success btn-lg btn-block'
                             ,'style'=> 'margin-top: 20px; margin-bottom: 30px'))}}
                </div>
            </div>
        </div>

        <div class="text-center">
            {!! $facilities->links() !!}
        </div>
        <div class="text-center">
            <strong>Page : {{ $facilities->currentPage() }} of {{ $facilities->lastPage() }}</strong>
        </div>
    </div>

@endsection
@section('js')
    {!! Html::script('js/parsley.min.js') !!}

@endsection