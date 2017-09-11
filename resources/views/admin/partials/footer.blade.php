<footer class="footer text-right">
    © 2017. All rights reserved.
</footer>
<!-- Right Sidebar -->
<div class="side-bar right-bar nicescroll">
    <h4 class="text-center">Chat</h4>
    <div class="contact-list nicescroll">
        <ul class="list-group contacts-list">
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{asset('admin-panel/assets/images/users/avatar-1.jpg')}}" alt="">
                    </div>
                    <span class="name">Chadengle</span>
                    <i class="fa fa-circle online"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{asset('admin-panel/assets/images/users/avatar-2.jpg')}}" alt="">
                    </div>
                    <span class="name">Tomaslau</span>
                    <i class="fa fa-circle online"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{asset('admin-panel/assets/images/users/avatar-3.jpg')}}" alt="">
                    </div>
                    <span class="name">Stillnotdavid</span>
                    <i class="fa fa-circle online"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{asset('admin-panel/assets/images/users/avatar-4.jpg')}}" alt="">
                    </div>
                    <span class="name">Kurafire</span>
                    <i class="fa fa-circle online"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{asset('admin-panel/assets/images/users/avatar-5.jpg')}}" alt="">
                    </div>
                    <span class="name">Shahedk</span>
                    <i class="fa fa-circle away"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{asset('admin-panel/assets/images/users/avatar-6.jpg')}}" alt="">
                    </div>
                    <span class="name">Adhamdannaway</span>
                    <i class="fa fa-circle away"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{asset('admin-panel/assets/images/users/avatar-7.jpg')}}" alt="">
                    </div>
                    <span class="name">Ok</span>
                    <i class="fa fa-circle away"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{asset('admin-panel/assets/images/users/avatar-8.jpg')}}" alt="">
                    </div>
                    <span class="name">Arashasghari</span>
                    <i class="fa fa-circle offline"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{asset('admin-panel/assets/images/users/avatar-9.jpg')}}" alt="">
                    </div>
                    <span class="name">Joshaustin</span>
                    <i class="fa fa-circle offline"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{asset('admin-panel/assets/images/users/avatar-10.jpg')}}" alt="">
                    </div>
                    <span class="name">Sortino</span>
                    <i class="fa fa-circle offline"></i>
                </a>
                <span class="clearfix"></span>
            </li>
        </ul>
    </div>
</div>
<!-- /Right-bar -->

</div>
<!-- END wrapper -->



<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{asset('admin-panel/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('admin-panel/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin-panel/assets/js/detect.js')}}"></script>
<script src="{{asset('admin-panel/assets/js/fastclick.js')}}"></script>

<script src="{{asset('admin-panel/assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('admin-panel/assets/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('admin-panel/assets/js/waves.js')}}"></script>
<script src="{{asset('admin-panel/assets/js/wow.min.js')}}"></script>
<script src="{{asset('admin-panel/assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('admin-panel/assets/js/jquery.scrollTo.min.js')}}"></script>

<script src="{{asset('admin-panel/assets/plugins/peity/jquery.peity.min.js')}}"></script>

<!-- jQuery  -->
<script src="{{asset('admin-panel/assets/plugins/waypoints/lib/jquery.waypoints.js')}}"></script>
<script src="{{asset('admin-panel/assets/plugins/counterup/jquery.counterup.min.js')}}"></script>



<script src="{{asset('admin-panel/assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('admin-panel/assets/plugins/raphael/raphael-min.js')}}"></script>

<script src="{{asset('admin-panel/assets/plugins/jquery-knob/jquery.knob.js')}}"></script>

<script src="{{asset('admin-panel/assets/pages/jquery.dashboard.js')}}"></script>

<script src="{{asset('admin-panel/assets/js/jquery.core.js')}}"></script>
<script src="{{asset('admin-panel/assets/js/jquery.app.js')}}"></script>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });

        $(".knob").knob();

    });
</script>

<script type="text/javascript">
    var editor_config = {
        path_absolute : "/",
        selector: "textarea.my-editor",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.open({
                file : cmsURL,
                title : 'Filemanager',
                width : x * 0.8,
                height : y * 0.8,
                resizable : "yes",
                close_previous : "no"
            });
        }
    };

    tinymce.init(editor_config);
</script>

@yield('js')


</body>

</html>