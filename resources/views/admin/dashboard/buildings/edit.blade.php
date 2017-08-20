@extends('admin.layout')

@section('title','BuildingList')

@section('content')

    <div class="col-md-10">
        <h1> Buildings</h1>
        <p> Create New Building</p>
    </div>

<div class="container">
    <div class="row">
        {!! Form::model($building,['route' => ['building.update',$building->id],'method'=>'PUT']
            ,array('data-parsley-validate'=>'')) !!}
        {{Form::label('name','Name:')}}
        {{ Form::text('name',null,["class"=>'form-control','required'=>'']) }}
        {{Form::label('phone','Phone Number:')}}
        {{ Form::text('phone',null,["class"=>'form-control','required'=>'']) }}
        {{Form::label('address','Address:')}}
        {{ Form::text('address',null,["class"=>'form-control','required'=>'']) }}
        {{Form::label('working_time','Working Time:')}}
        {{ Form::text('working_time',null,["class"=>'form-control','required'=>'']) }}
        {{Form::label('categories','Building Category:')}}
        {{Form::select('categories[]',$categories,null,['class'=>'form-control','multiple'=>'multiple'])}}

        {{Form::label('description','Description:')}}
        {{ Form::textarea('description',null,["class"=>'form-control','required'=>'']) }}
        {{Form::label('highlights','HighLights:')}}
        {{ Form::textarea('highlights',null,["class"=>'form-control','required'=>'']) }}
        {{Form::label('about_us','About us:')}}
        {{ Form::textarea('about_us',null,["class"=>'form-control','required'=>'']) }}

        {{Form::submit(' Update ' , array('class'=>'btn btn-success btn-lg '
             ,'style'=> 'margin-top: 20px; margin-bottom: 100px'))}}

        {!! Form::close() !!}

    </div>
</div>


@endsection