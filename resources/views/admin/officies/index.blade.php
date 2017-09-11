@extends('admin.layout')

@section('title','Offices')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1> Listings</h1>
                <p> View all your Nesthub Offices</p>
            </div>
            <div class="col-md-2">
                <a href="{{route ('office.create')}}?building={{$building->id}}" class="btn btn-lg btn-block btn-primary btn-h1-style" > Add New Office </a>
            </div>

            <div class="col-md-12">
                <hr>
            </div>
        </div>
        <div class="row" >
            <div class="col-md-12">
                <h1 style="margin-top: 20px">Office Section</h1>
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

    </div>



@endsection