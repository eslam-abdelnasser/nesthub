@extends('admin.layout')

@section('title','Facilities')
@section('css')
    {!! Html::style('css/parsley.css') !!}
    {!! HTML::style('css/select2.min.css') !!}
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Facility Section</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Facility Name</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th># Building</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($facilities as $facility)
                        <tr>
                            <td>{{ $facility->id }}</td>
                            <td><a href="{{route('facility.show',$facility->id)}}"> {{$facility->name}}</a></td>
                            @if($facility->type == 0)
                                <td>business</td>
                            @else
                                <td>Additional</td>
                            @endif
                            @if($facility->status == 0)
                                <td>ON</td>
                            @else
                                <td>OFF</td>
                            @endif
                            <td>{{ $facility->buildings->count()}} Building</td>
                            <td><a href="{{route ('facility.edit',$facility->id)}}" class="btn btn-default btn-block ">Edit</a></td>
                            <td>
                                {!! Form::open(['route' => ['facility.destroy', $facility->id ], 'method' => 'DELETE']) !!}
                                {!! Form::submit('Delete' , ['class' => 'btn btn-danger btn-block']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!-- end of information table div -->

            <div class="col-md-3">
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