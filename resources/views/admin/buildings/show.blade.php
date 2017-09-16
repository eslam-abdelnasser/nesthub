@extends('admin.layout')
<?php $buildingname = htmlspecialchars($building->name)?>

@section('title',"$buildingname")

@section('css')
    {!! Html::style('css/parsley.css') !!}
    {!! HTML::style('css/select2.min.css') !!}

@endsection


@section('content')

    <div class="container" style="margin-bottom: 50px">
        <div class="row">
            <div class="col-md-12">
                @foreach($building->building_images->chunk(4) as $image_set)
                    <div class="row">
                        @foreach($image_set as $image)
                            <div class="col-md-3">
                                <form method="post" action="/image/{{$image->id}}">
                                    <input type="hidden" name="_method" value="DELETE"/>
                                    {!! csrf_field() !!}
                                    <button type="submit" class="btn-danger">Delete</button>
                                    <a href="#">
                                        <img src="{{asset('buildings/images/'. $image->image_url  )}}" alt="" style="max-height: 200px ;max-width: 200px;margin-bottom: 1em">
                                    </a>
                                    </form>
                            </div>
                        @endforeach

                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container" style="margin-bottom: 50px">

        <h1>{{$building->name}}</h1>
        <h2 class="fa fa-map-marker" > {{$building ->address}}</h2><br>
        <i class="fa fa-mobile-phone"> {{$building ->phone}}</i>
        <br><br><br>
        <h3>welcome</h3><hr>
        <p class="lead">{!! nl2br($building->description) !!}  </p>
        <br><br><br>
        <h3>Location</h3>
        <hr>
        <p> add the location API</p>
        <br><br><br>
        <h3>Offices</h3>
        <hr>
        <strong>office number : {{$building->offices->count()}}</strong>
        <br><br><br>
        <h3>Facilities</h3>
        <hr>
        <ul>
            @foreach($building->facilities as $facility)
                <li>{{$facility->name}}</li>
            @endforeach
        </ul>
    </div>

    <form id="addImage" class="dropzone" method="POST" action="/building/{{$building->id}}/photos">
        {{csrf_field()}}
    </form>






@endsection

@section('js')
    {!! Html::script('js/parsley.min.js') !!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/dropzone.js"></script>
    <script>
        Dropzone.options.addImage ={
            paramName: 'image',
            maxFilesize: 3,
            acceptedFiles: '.jpg, .jpeg, .png, .dmp'
        }
    </script>

@stop