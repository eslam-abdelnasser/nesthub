@include('admin.partials.header')

@include('admin.partials.navigation')



<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            @include('admin.partials.messages')

            @yield('content')


        </div>
    </div>

</div>





@include('admin.partials.footer')