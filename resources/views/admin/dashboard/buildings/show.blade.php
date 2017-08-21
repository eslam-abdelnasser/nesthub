@extends('admin.layout')

@section('title','BuildingList')


@section('content')

    <div class="col-md-8 col-md-offset-2">

        <h1>{{$building->name}}</h1>
        <p class="lead">{{$building->description}}  </p>
        <strong>office number : {{$building->offices->count()}}</strong>
    </div>
    <div class="row">
        <div id="office-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px">
            {{Form::open(['route' => ['office.store',$building->id] , 'method' => 'post']) }}
            <div class="row">
                <div class="col-md-12">
                    {{Form::label('office_type','Office Type')}}
                    <p>0 Private Office </p>
                    <p>1 Fixed Office </p>
                    <p>2 Hot Desk </p>
                    {{Form::text('office_type',null,['class' => 'form-control']) }}
                </div>
                <div class="col-md-12">
                    {{Form::label('desk_number','DESKS AVAILABLE')}}
                    {{Form::text('desk_number',null,['class' => 'form-control']) }}
                </div>
                <div class="col-md-12">
                    {{Form::label('min_rental_per_month','MIN RENTAL TERM')}}
                    {{Form::text('min_rental_per_month',null,['class' => 'form-control']) }}
                </div>
                <div class="col-md-12">
                    {{Form::label('max_rental_per_month','MAX RENTAL TERM')}}
                    {{Form::text('max_rental_per_month',null,['class' => 'form-control']) }}
                </div>
                <div class="col-md-12">
                    {{Form::label('price','PRICE')}}
                    <p>The list price of the office, either per person per month, or per month for the whole office.
                        Do not include VAT in this figure.</p>
                    {{Form::text('price',null,['class' => 'form-control']) }}
                </div>
                <div class="col-md-12">
                    {{Form::label('Area','SQUARE FOOTAGE')}}
                    <p>If exact size is unknown, please provide an estimate</p>
                    {{Form::text('Area',null,['class' => 'form-control']) }}

                    {{Form::submit('Add Office', ['class' => 'btn btn-success btn-block' ,
                     'style' => 'margin-top:20px;'])}}
                </div>

            </div>
        </div>
    </div>

@endsection