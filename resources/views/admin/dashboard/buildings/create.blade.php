@extends('admin.layout')

@section('title','BuildingList')


@section('content')
    <div class="col-md-10">
        <h1> Buildings</h1>
        <p> Create New Building</p>
    </div>

    <div class="container">

                    {!! Form::open(['route' => 'building.store'],array('data-parsley-validate'=>'')) !!}
                        {{Form::label('name','Name:')}}
                        {{Form::text('name',null,array('class' => 'form-control','required'=>''))}}
                        {{Form::label('phone','Phone Number:')}}
                        {{Form::text('phone',null,array('class' => 'form-control','required'=>''))}}
                        {{Form::label('address','Address:')}}
                        {{Form::text('address',null,array('class' => 'form-control','required'=>''))}}
                        {{Form::label('working_time','Working Time:')}}
                        {{Form::text('working_time',null,array('class' => 'form-control','required'=>''))}}

                        {{Form::label('categories','Building Category:')}}
                        <select class="form-control" name="categories[]" multiple="multiple">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                        </select>

                        {{Form::label('description','Description:')}}
                        {{Form::textarea('description',null,array('class' => 'form-control','required'=>''))}}
                        {{Form::label('highlights','Highlights:')}}
                        {{Form::textarea('highlights',null,array('class' => 'form-control','required'=>''))}}
                        {{Form::label('about_us','About us:')}}
                        {{Form::textarea('about_us',null,array('class' => 'form-control','required'=>''))}}
                        {{Form::submit(' Add ' , array('class'=>'btn btn-success btn-lg btn-block'
                         ,'style'=> 'margin-top: 20px; margin-bottom: 100px'))}}

                    {!! Form::close() !!}

    </div>
@endsection

@section('scripts')
{!! Html::style('js/parsley.min.js') !!}
@endsection