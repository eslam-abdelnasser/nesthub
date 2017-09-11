@extends('admin.layout')

@section('title','Categories')


@section('css')

    {!! Html::style('css/parsley.css') !!}
    {!! HTML::style('css/select2.min.css') !!}

@endsection

@section('content')
    <div class="col-md-12">
        <h1> Category</h1>
        <h2> Update Categoty "{{$category->name}}"</h2>
    </div>
    <div class="container">
        <div class="row">
            {!! Form::model($category,['route' => ['category.update',$category->id],'method'=>'PUT'] ,array('data-parsley-validate'=>'')) !!}
            {{Form::label('name','Name:')}}
            {{ Form::text('name',null,["class"=>'form-control','required'=>'']) }}
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
