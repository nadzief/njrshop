<div class="page-footer">
    <div class="page-footer-inner">
         2017 Copyrights &copy; Nadzief Hyuga Enterprise &trade; <a href="http://nadzief-hyuga.blogspot.com" title="Nadzief Hyuga" target="_blank">Nadzief Hyuga </a>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>

</body>

</html>
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery-migrate.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery.blockui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery.cokie.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/uniform/jquery.uniform.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/scripts/metronic.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/layout/scripts/layout.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/layout/scripts/quick-sidebar.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/layout/scripts/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/pages/scripts/index.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/pages/scripts/tasks.js"></script>
<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url() ?>assets/DataTables/media/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/DataTables/media/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>assets/DataTables/media/js/dataTables.bootstrap.js"></script>

<script type="text/javascript">
  jQuery(document).ready(function() {    
    Metronic.init(); // init metronic core componets
    Layout.init(); // init layout
    QuickSidebar.init(); // init quick sidebar
    Demo.init(); // init demo features
    Index.init();   
    Index.initDashboardDaterange();
    Index.initJQVMAP(); // init index page's custom scripts
    Index.initCalendar(); // init index page's custom scripts
    Index.initCharts(); // init index page's custom scripts
    Index.initChat();
    Index.initMiniCharts();
    Tasks.initDashboardWidget();
  });

  $(document).ready(function(){
    $(".preloader").fadeOut();
  });
</script>