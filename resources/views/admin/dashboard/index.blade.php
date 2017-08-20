@extends('admin.layout')

@section('title','dashboard')



 @section('content')
     <div class="container">
         <div class="row">
             <div class="col-md-8 col-md-offset-2">
                 <div class="panel panel-default">
                     <div class="panel-heading">Dashboard</div>

                     <div class="panel-body">
                         <h1>NestHub Host Dashboard</h1>

                     </div>
                     <a href="{{route ('building.index')}}" class="btn btn-lg btn-block btn-primary btn-h1-style" > Listing </a>
                 </div>
             </div>
         </div>
     </div>
 @endsection