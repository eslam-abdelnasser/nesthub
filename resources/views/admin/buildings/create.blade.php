@extends('admin.layout')

@section('title','Building')

@section('css')

    {!! Html::style('css/parsley.css') !!}
    {!! HTML::style('css/select2.min.css') !!}



@endsection
@section('content')
    <div class="col-md-12">
        <h1> Buildings</h1>
        <p> Create New Building</p>
        <hr>
    </div>

    <div class="card-box">

        <form method="POST" action="/building" enctype="multipart/form-data" data-parsley-validate="">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" required="">
            </div>

            <div class="form-group">
                <label for="phone">phone:</label>
                <input type="text" name="phone" id="phone" class="form-control" required="">
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" name="address" id="address" class="form-control" required="">
            </div>

            <div class="form-group">
                <label for="working_time">Working Time:</label>
                <input type="text" name="working_time" id="working_time" class="form-control" required="">
            </div>

            <div class="form-group">
                <label for="categories">Building Categories:</label>
                <select class="form-control select2-multi" name="categories[]" multiple="multiple" required="">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label for="facilities">Building Facilities:</label>
                <select class="form-control select2-multi" name="facilities[]" multiple="multiple" required="">
                    @foreach($facilities as $facility)
                        @if($facility-> status == 0){
                        <option value="{{$facility->id}}">{{$facility->name}}</option>
                        }@endif
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label for="user">Building Owner:</label>
                <select class="form-control select2-multi" style="color: black!important;" name="user" required="">
                    @foreach($users as $user)
                        @if($user->type==0){
                        <option value="{{$user->id}}">{{$user->name}}</option>
                        }
                        @endif
                    @endforeach
                </select>
            </div>


            {{Form::label('description','Description:')}}
            <textarea name="description" cols="50"  rows="10" class="form-control my-editor"></textarea>
            {{Form::label('highlights','Highlights:')}}
            <textarea name="highlights" cols="50"  rows="10" class="form-control my-editor"></textarea>
            {{Form::label('about_us','About us:')}}
            <textarea name="about_us" cols="50"  rows="10" class="form-control my-editor"></textarea>


            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block" style= "margin-top: 20px" style=" margin-bottom: 100px">Add</button>
            </div>
        </form>
    </div>


@endsection

@section('js')
{!! Html::script('js/parsley.min.js') !!}
{!! Html::script('js/select2.full.min.js') !!}
<script type="text/javascript">
    $('.select2-multi').select2();
</script>

<script>
    var resizefunc = [];
</script>

@endsection