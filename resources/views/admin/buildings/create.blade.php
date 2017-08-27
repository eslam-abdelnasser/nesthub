@extends('admin.layout')

@section('title','Building')

@section('css')

    {!! Html::style('css/parsley.css') !!}
    {!! HTML::style('css/select2.min.css') !!}



@endsection
@section('content')
    <div class="col-md-12">
        <h1> Buildings</h1>
        <p> Create New Building</p>
        <hr>
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
                        <select class="form-control select2-multi" name="categories[]" multiple="multiple">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                        </select>

                        {{Form::label('facilities','Building Facility:')}}
                        <select class="form-control select2-multi" name="facilities[]" multiple="multiple">
                            @foreach($facilities as $facility)
                                <option value="{{$facility->id}}">{{$facility->name}}</option>
                            @endforeach
                        </select>

                        {{Form::label('user','Owner:')}}
                        <select class="form-control select2-multi" name="user" required="">
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>


                        {{Form::label('description','Description:')}}
                          <textarea name="description" cols="50"  rows="10" class="form-control my-editor"></textarea>
                        {{Form::label('highlights','Highlights:')}}
                            <textarea name="highlights" cols="50"  rows="10" class="form-control my-editor"></textarea>
                        {{Form::label('about_us','About us:')}}

                            <textarea name="about_us" cols="50"  rows="10" class="form-control my-editor"></textarea>
                        {{Form::submit(' Add ' , array('class'=>'btn btn-success btn-lg btn-block'
                         ,'style'=> 'margin-top: 20px; margin-bottom: 100px'))}}

                    {!! Form::close() !!}


    </div>


@endsection

@section('js')
{!! Html::script('js/parsley.min.js') !!}
{!! Html::script('js/select2.full.min.js') !!}
<script type="text/javascript">
    $('.select2-multi').select2();
</script>

<script>
    var resizefunc = [];
</script>

@endsection