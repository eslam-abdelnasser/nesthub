@extends('admin.layout')

@section('title','BuildingList')

@section('content')

    <div class="row">
        <div id="office-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px ">
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