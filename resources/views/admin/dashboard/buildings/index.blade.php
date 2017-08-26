@extends('admin.layout')

@section('title','BuildingList')

@section('content')

    <div class="container">

    <div class="row">
        <div class="col-md-10">
            <h1> Listings</h1>
            <p> View all your Nesthub listings</p>
        </div>
        <div class="col-md-2">
            <a href="{{route ('building.create')}}" class="btn btn-lg btn-block btn-primary btn-h1-style" > Add Building </a>
        </div>

        <div class="col-md-12">
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($buildings as $building)

                    <tr>
                        <td><a href="{{route('building.show',$building->id)}}"> {{$building->name}}</a></td>
                        <td>{{ $building->address }}</td>
                        <td>{{ $building->phone }}</td>
                        <td><a href="{{route ('building.edit',$building->id)}}" class="btn btn-default">Edit</a></td>
                        <td><a href="#" class="btn btn-primary">Add Office</a></td>

                    </tr>

                @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {!! $buildings->links() !!}
            </div>
            <div class="text-center">
                <strong>Page : {{ $buildings->currentPage() }} of {{ $buildings->lastPage() }}</strong>
            </div>
        </div>
    </div>
</div>

@endsection