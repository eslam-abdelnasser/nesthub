@extends('admin.layout')

@section('title', 'Permission')

{{-- start css --}}
@section('css')

@endsection
{{-- end css --}}

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-bell-o"></i>Permissions Table </div>

                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-striped table-bordered table-advance table-hover">
                            <thead>
                            <tr>
                                <th class="hidden-xs">
                                    <i class="fa fa-user"></i> Name
                                </th>

                                <th>Display name</th>
                                <th>Description</th>
                                <th>Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($permissions as $permission)
                                <tr>
                                    <td class="highlight">
                                        {{$permission->name}}
                                    </td>

                                    <td class="highlight">
                                        {{$permission->display_name}}
                                    </td>
                                    <td class="highlight">
                                        {{$permission->description}}
                                    </td>
                                    <td>
                                        <a href="{{route ('permission.edit',$permission->id)}}" class="btn btn-outline btn-circle btn-sm purple">
                                            <i class="fa fa-edit"></i> Edit </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>

        <div class="text-center">
            {!! $permissions->links() !!}
        </div>
        <div class="text-center">
            <strong>Page : {{ $permissions->currentPage() }} of {{ $permissions->lastPage() }}</strong>
        </div>
@endsection


{{-- Start javascript --}}
@section('js')

@endsection

{{-- end javascript --}}