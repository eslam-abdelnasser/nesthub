@extends('admin.layout')

@section('title', 'Edit Permission')

{{-- start css --}}
@section('css')

@endsection
{{-- end css --}}

@section('content')
    <div class="row">
        <div class="col-md-12 ">
            <div class="portlet light bordered">
                <div class="portlet-body form">
                    {{Form::open(['route' => ['permission.update',$permission->id] , 'method' => 'POST']) }}
                    <div class="form-body">
                        <div class="form-group">
                            <label>Display Name</label>
                            <div class="input-group">
                                                        <span class="input-group-addon input-circle-left">
                                                        </span>
                                <input type="text" name="display_name" id="display_name" class="form-control input-circle-right" placeholder="Name" value="{{$permission->display_name}}"> </div>
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <div class="input-group">
                                                        <span class="input-group-addon input-circle-left">
                                                        </span>
                                <input type="text" name="description" id="description" class="form-control input-circle-right" placeholder="Name" value="{{$permission->description}}"> </div>
                        </div>


                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>

    </div>
    </div>
@endsection


{{-- Start javascript --}}
@section('js')

@endsection

{{-- end javascript --}}