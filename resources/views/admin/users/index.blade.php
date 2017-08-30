@extends('admin.layout')
@section('title','Users')


@section('content')

    <div class="container">
        <h1>Nesthub Users </h1>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Company name</th>
                <th>Company website</th>
                <th>Type</th>
                <th>Status</th>
                <th></th>
            </tr>
            </thead>

            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td><a href="{{route('user.show',$user->id)}}"> {{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->company_name}}</td>
                    <td>{{$user->company_website}}</td>
                    @if($user->type == 0)
                        <td>User</td>
                    @else
                        <td>Owner</td>
                    @endif
                    @if($user->status == 0)
                        <td>Active</td>
                    @else
                        <td>InActive</td>
                    @endif
                    <td>
                        {!! Form::open(['route' => ['user.destroy', $user->id ], 'method' => 'DELETE']) !!}
                        {!! Form::submit('Delete' , ['class' => 'btn btn-danger btn-block']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection