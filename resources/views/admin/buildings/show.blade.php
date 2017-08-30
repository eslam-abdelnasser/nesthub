@extends('admin.layout')
<?php $buildingname = htmlspecialchars($building->name)?>

@section('title',"$buildingname")

@section('css')
    {!! Html::style('css/parsley.css') !!}
    {!! HTML::style('css/select2.min.css') !!}

@endsection


@section('content')

    <div class="col-md-8 col-md-offset-2">

        <h1>{{$building->name}}</h1>
        <p class="lead">{!! $building->description !!}  </p>
        <strong>office number : {{$building->offices->count()}}</strong>
    </div>

    <div class="row" >
        <div class="col-md-12">
            <h1 style="margin-top: 100px">Office Section</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Office Type</th>
                        <th># Desks</th>
                        <th>Price</th>
                        <th>area</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                @foreach($building->offices as $office)
                    <tr>
                        <td>{{ $office->id }}</td>
                        @if($office->office_type == 0)
                            <td>Private Office</td>
                        @elseif($office->office_type == 1)
                            <td>Fixed Office</td>
                        @else
                            <td>Hot Desk</td>
                        @endif
                        <td>{{ $office->desk_number}} Desk</td>
                        <td>{{ $office->price}} LE</td>
                        <td>{{ $office->Area}} FT</td>
                        <td><a href="{{route ('office.edit',$office->id)}}" class="btn btn-default btn-block ">Edit</a></td>
                        <td>
                            {!! Form::open(['route' => ['office.destroy', $office->id], 'method' => 'DELETE']) !!}
                            {!! Form::submit('Delete' , ['class' => 'btn btn-danger btn-block']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div><!-- end of information table div -->
    </div>



    <div class="row">
        <div id="office-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px">
            {{Form::open(['route' => ['office.store',$building->id] , 'method' => 'post']) }}
            <div class="container">
                <div>
                    {{Form::label('office_type','Office Type')}}
                    <select class="form-control select2-multi" name="office_type" required="">
                        <option value=0>Private Office</option>
                        <option value=1>Fixed Office</option>
                        <option value=2>Hot Desk</option>
                    </select>
                </div>
                <div>
                    {{Form::label('desk_number','DESKS AVAILABLE')}}
                    {{Form::text('desk_number',null,['class' => 'form-control']) }}
                </div>
                <div>
                    {{Form::label('min_rental_per_month','MIN RENTAL TERM')}}
                    {{Form::text('min_rental_per_month',null,['class' => 'form-control']) }}
                </div>
                <div>
                    {{Form::label('max_rental_per_month','MAX RENTAL TERM')}}
                    {{Form::text('max_rental_per_month',null,['class' => 'form-control']) }}
                </div>
                <div>
                    {{Form::label('price','PRICE')}}
                    {{Form::text('price',null,['class' => 'form-control']) }}
                </div>
                <div>
                    {{Form::label('Area','SQUARE FOOTAGE')}}
                    {{Form::text('Area',null,['class' => 'form-control']) }}

                    {{Form::label('feature','Features:')}}
                    <textarea name="feature" cols="50"  rows="10" class="form-control my-editor"></textarea>

                    {{Form::submit('Add Office', ['class' => 'btn btn-success btn-block' ,
                     'style' => 'margin-top:20px;'])}}
                </div>

            </div>
        </div>
    </div>

@endsection

@section('js')
    {!! Html::script('js/parsley.min.js') !!}
@endsection