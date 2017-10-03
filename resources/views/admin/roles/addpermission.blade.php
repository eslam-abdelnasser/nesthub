@extends('admin.layout')

@section('title', 'Add Permission')

{{-- start css --}}
@section('css')

@endsection
{{-- end css --}}



@section('content')
    <h4 class="page-title">Role Permission</h4>

    {{Form::open(['route' => ['role_permission.store',$role_id] , 'method' => 'post']) }}
        <div class="form-group">
            <div class="col-md-12">
                @foreach($permissions as $permission)
                <div class="mt-checkbox-inline col-md-3" >


                    <label class="mt-checkbox">
                        <input type="checkbox" id={{$permission->id}} name="permissions[]" value="{{$permission->id}}"> {{$permission->display_name}}
                        <span></span>
                    </label>


                </div>
                @endforeach
                <div class="form-actions col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
@endsection


{{-- Start javascript --}}
@section('js')

@endsection

{{-- end javascript --}}