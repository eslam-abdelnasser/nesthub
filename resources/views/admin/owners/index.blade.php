@extends('admin.layout')
@section('title','Owners')


@section('content')

    <div class="container">
        <h1>Nesthub Owners </h1>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                {{--<th>Building Name</th>--}}
                <th>Company name</th>
                <th>Company website</th>
                <th>Status</th>
                <th></th>
            </tr>
            </thead>

            <tbody>
            @foreach($owners as $owner)
                <tr>
                    <td>{{$owner->id}}</td>
                    <td><a href="{{route('owner.show',$owner->id)}}"> {{$owner->name}}</a></td>
                    <td>{{$owner->email}}</td>
                    <td>{{$owner->phone}}</td>
                    {{--<td><a href="{{route('building.show',$owner->buildings->id)}}"> {{$owner->buildings->count()}}</a></td>--}}
                    <td>{{$owner->company_name}}</td>
                    <td>{{$owner->company_website}}</td>
                @if($owner->status == 0)
                        <td>Active</td>
                    @else
                        <td>InActive</td>
                    @endif
                    <td>
                        {!! Form::open(['route' => ['owner.destroy', $owner->id ], 'method' => 'DELETE']) !!}
                        {!! Form::submit('Delete' , ['class' => 'btn btn-danger btn-block']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection