@extends('admin.layout')

@section('title','Categories')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Category Section</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th># Building</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td><a href="{{route('category.show',$category->id)}}"> {{$category->name}}</a></td>
                            <td>{{ $category->buildings->count()}} Building</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!-- end of information table div -->
            <div class="col-md-3">
                <div class="well">
                    {!! Form::open(['route' => 'category.store'],array('data-parsley-validate'=>'')) !!}
                    <h2>Add New Category</h2>
                    {{Form::label('name','Name:')}}
                    {{Form::text('name',null,array('class' => 'form-control','required'=>''))}}
                    {{Form::submit(' Add New Category ' , array('class'=>'btn btn-success btn-lg btn-block'
                             ,'style'=> 'margin-top: 20px; margin-bottom: 30px'))}}
                </div>
            </div>

        </div>
    </div>

@endsection