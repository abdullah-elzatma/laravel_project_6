<script src="{{asset('ControlPanelControl/assets/global/plugins/respond.min.js')}}"></script>
<script src="{{asset('ControlPanelControl/assets/global/plugins/excanvas.min.js')}}"></script>
<![endif]-->
<script src="{{asset('ControlPanelControl/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('ControlPanelControl/assets/global/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{asset('ControlPanelControl/assets/global/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('ControlPanelControl/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('ControlPanelControl/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
<script src="{{asset('ControlPanelControl/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{asset('ControlPanelControl/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('ControlPanelControl/assets/global/plugins/jquery.cokie.min.js')}}" type="text/javascript"></script>
<script src="{{asset('ControlPanelControl/assets/global/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
<script src="{{asset('ControlPanelControl/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="{{asset('ControlPanelControl/assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"></script>
<script type="text/javascript" src="{{asset('ControlPanelControl/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>
<script src="{{asset('ControlPanelControl/assets/global/plugins/bootstrap-markdown/lib/markdown.js')}}" type="text/javascript"></script>
<script src="{{asset('ControlPanelControl/assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js')}}" type="text/javascript"></script>
<script src="{{asset('ControlPanelControl/assets/global/plugins/bootstrap-summernote/summernote.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="{{asset('ControlPanelControl/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('ControlPanelControl/assets/global/scripts/metronic.js')}}" type="text/javascript"></script>
<script src="{{asset('ControlPanelControl/assets/admin/layout/scripts/layout.js')}}" type="text/javascript"></script>
<script src="{{asset('ControlPanelControl/assets/admin/layout/scripts/quick-sidebar.js')}}" type="text/javascript"></script>
<script src="{{asset('ControlPanelControl/assets/admin/layout/scripts/demo.js')}}" type="text/javascript"></script>
<script src="{{asset('ControlPanelControl/assets/admin/pages/scripts/components-editors.js')}}"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        // initiate layout and plugins
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        QuickSidebar.init(); // init quick sidebar
        Demo.init(); // init demo features
        ComponentsEditors.init();
    });
</script>
<!-- END JAVASCRIPTS -->