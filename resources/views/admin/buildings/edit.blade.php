@extends('admin.layout')

@section('title','BuildingList')


@section('css')

    {!! Html::style('css/parsley.css') !!}
    {!! HTML::style('css/select2.min.css') !!}

@endsection

@section('content')

    <div class="col-md-12">
        <h1> Buildings</h1>
        <p> Create New Building</p>
    </div>

<div class="container">
    <div class="row">
        {!! Form::model($building,['route' => ['building.update',$building->id],'method'=>'PUT'] ,array('data-parsley-validate'=>'')) !!}
        {{Form::label('name','Name:')}}
        {{ Form::text('name',null,["class"=>'form-control','required'=>'']) }}
        {{Form::label('phone','Phone Number:')}}
        {{ Form::text('phone',null,["class"=>'form-control','required'=>'']) }}
        {{Form::label('address','Address:')}}
        {{ Form::text('address',null,["class"=>'form-control','required'=>'']) }}
        {{Form::label('working_time','Working Time:')}}
        {{ Form::text('working_time',null,["class"=>'form-control','required'=>'']) }}

        {{Form::label('categories','Building Category:' ,['class'=>'form-space-top']) }}
        {{Form::select('categories[]',$categories,null,['class'=>'form-control select2-multi','multiple'=>'multiple']) }}

        {{Form::label('facilities','Building Facility:' ,['class'=>'form-space-top']) }}
        {{Form::select('facilities[]',$facilities,null,['class'=>'form-control select2-multi','multiple'=>'multiple']) }}

        {{Form::label('description','Description:')}}
        <textarea name="description" cols="50"  rows="10" class="form-control my-editor">{{$building->description}}</textarea>
        {{Form::label('highlights','Highlights:')}}
        <textarea name="highlights" cols="50"  rows="10" class="form-control my-editor">{{$building->highlights}}</textarea>
        {{Form::label('about_us','About us:')}}

        <textarea name="about_us" cols="50"  rows="10" class="form-control my-editor">{{$building->about_us}}</textarea>

        {{Form::submit(' Update ' , array('class'=>'btn btn-success btn-lg '
             ,'style'=> 'margin-top: 20px; margin-bottom: 100px'))}}

        {!! Form::close() !!}

    </div>
</div>
@endsection

@section('js')
    {!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/select2.full.min.js') !!}
    <script type="text/javascript">
        $('.select2-multi').select2();

    </script>

@endsection