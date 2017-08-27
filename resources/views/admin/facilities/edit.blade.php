@extends('admin.layout')

@section('title','Facilities')
@section('css')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')

    <div class="col-md-12">
        <h1> Category</h1>
        <h2> Update Facility "{{$facility->name}}"</h2>
    </div>
    <div class="container">
        <div class="row">
            {!!Form::model($facility,['route' => ['facility.update',$facility->id],'method'=>'PUT'] ,array('data-parsley-validate'=>'')) !!}
            {{Form::label('name','Name:')}}
            {{Form::text('name',null,["class"=>'form-control','required'=>'']) }}

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

            {{Form::submit(' Update ' , array('class'=>'btn btn-success btn-lg '
                ,'style'=> 'margin-top: 20px; margin-bottom: 100px'))}}

            {!! Form::close() !!}
        </div>
    </div>

@endsection
@section('js')
    {!! Html::script('js/parsley.min.js') !!}
@endsection