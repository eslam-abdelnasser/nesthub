@extends('admin.layout')

@section('title','Categories')
@section('css')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <h1>Category Section</h1>

            <div class="col-md-8">
                <div class="card-box">
                    <div class="row">
                        <div class="col-sm-12">
                            <form role="form">
                                <div class="form-group contact-search m-b-30" >
                                    <input type="text" id="search" class="form-control" placeholder="Search...">
                                    <button type="submit" class="btn btn-white"><i class="fa fa-search"></i></button>
                                </div> <!-- form-group -->
                            </form>
                        </div>
                    </div>
                <table class="table table-hover mails m-0 table table-actions-bar">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th># Building</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td><a href="{{route('category.show',$category->id)}}"> {{$category->name}}</a></td>
                            <td><span class="label label-info">{{ $category->buildings->count()}} Building</span></td>
                            <td>
                                <a href="{{route ('category.edit',$category->id)}}" class="table-action-btn">
                                    <i class="md md-edit"></i>
                                </a>
                                <a href="{{route ('category.destroy',$category->id)}}" class="table-action-btn">
                                    <i class="md md-close"></i>
                                </a>
                            </td>

                            {{--<td><a href="{{route ('category.edit',$category->id)}}" class="btn btn-default btn-block ">Edit</a></td>--}}
                            {{--<td>--}}
                                {{--{!! Form::open(['route' => ['category.destroy', $category->id ], 'method' => 'DELETE']) !!}--}}
                                {{--{!! Form::submit('Delete' , ['class' => 'btn btn-danger btn-block']) !!}--}}
                                {{--{!! Form::close() !!}--}}
                            {{--</td>--}}

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>

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
        <div class="text-center">
            {!! $categories->links() !!}
        </div>
        <div class="text-center">
            <strong>Page : {{ $categories->currentPage() }} of {{ $categories->lastPage() }}</strong>
        </div>
    </div>

@endsection

@section('js')
    {!! Html::script('js/parsley.min.js') !!}
@endsection