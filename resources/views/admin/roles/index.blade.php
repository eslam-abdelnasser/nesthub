@extends('admin.layout')

@section('title','Roles')
@section('css')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <h1>Roles Section</h1>

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
                            <th>Role Name</th>
                            <th>Display Name</th>
                            <th>Permission</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{$role->name}}</td>
                                <td>{{$role->display_name}}</td>
                                <td>
                                    <a href="{{route('role.permission',$role->id)}}" title="Add permissions" class=><i class="md md-add"></i></a>
                                    <a href="{{route('role.view.permission',$role->id)}}" title="View permissions" class=><i class="md md-list"></i></a>
                                </td>
                                <td>
                                    <a href="{{route ('roles.edit',$role->id)}}" class="table-action-btn">
                                        <i class="md md-edit"></i>
                                    </a>
                                    <a href="{{route ('roles.destroy',$role->id)}}" class="table-action-btn">
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
                    {!! Form::open(['route' => 'roles.store'],array('data-parsley-validate'=>'')) !!}
                    <h2>Add New Facility</h2>
                    {{Form::label('name','Role Name:')}}
                    {{Form::text('name',null,array('class' => 'form-control','required'=>'' , 'style'=>'margin-bottom: 20px'))}}

                    {{Form::label('display_name','Display Name:')}}
                    {{Form::text('display_name',null,array('class' => 'form-control','required'=>'' , 'style'=>'margin-bottom: 20px'))}}

                    {{Form::label('description','Role Description:')}}
                    {{Form::text('description',null,array('class' => 'form-control','required'=>'' , 'style'=>'margin-bottom: 20px'))}}

                    {{Form::submit(' Add New Facility ' , array('class'=>'btn btn-success btn-lg btn-block'
                             ,'style'=> 'margin-top: 20px; margin-bottom: 30px'))}}
                </div>
            </div>
        </div>

        <div class="text-center">
            {!! $roles->links() !!}
        </div>
        <div class="text-center">
            <strong>Page : {{ $roles->currentPage() }} of {{ $roles->lastPage() }}</strong>
        </div>
    </div>

@endsection
@section('js')
    {!! Html::script('js/parsley.min.js') !!}

@endsection