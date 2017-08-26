@extends('admin.layout')

@section('title'," $facility->name")

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>{{ $facility->name }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Building Name</th>
                    <th>Building Phone</th>
                    <th>Building Categories</th>
                </tr>
                </thead>

                <tbody>
                @foreach($facility->buildings as $building)
                    <tr>
                        <th>{{$building->id}}</th>
                        <td><a href="{{route('building.show',$building->id)}}"> {{$building->name}}</a></td>
                        <td>{{$building->phone}}</td>
                        <td>
                            @foreach($building->facilities as $facility)
                                <span class="label label-default">{{$facility->name}}</span>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection