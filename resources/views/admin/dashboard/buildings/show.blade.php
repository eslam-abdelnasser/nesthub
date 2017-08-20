@extends('admin.layout')

@section('title','BuildingList')


@section('content')

    <div class="col-md-8 col-md-offset-2">

        <h1>{{$building->name}}</h1>
        <p class="lead">{{$building->description}}  </p>
        <hr>
    </div>

@endsection