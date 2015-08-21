
	<!-- BEGIN FOOTER -->
	<!--<div id="footer">
		2015 &copy; Admin Lab Dashboard.
		<div class="span pull-right">
			<span class="go-top"><i class="icon-arrow-up"></i></span>
		</div>
	</div>-->
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS -->
	<!-- Load javascripts at bottom, this will reduce page load time -->
	<script src="<?php echo $this->config->base_url();?>resource/js/jquery-1.8.3.min.js"></script>
	<script src="<?php echo $this->config->base_url();?>resource/assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
	<script src="<?php echo $this->config->base_url();?>resource/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo $this->config->base_url();?>resource/assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
	<script src="<?php echo $this->config->base_url();?>resource/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo $this->config->base_url();?>resource/js/jquery.blockui.js"></script>
	<script src="<?php echo $this->config->base_url();?>resource/js/jquery.cookie.js"></script>
	<!-- ie8 fixes -->
	<!--[if lt IE 9]>
	<script src="js/excanvas.js"></script>
	<script src="js/respond.js"></script>
	<![endif]-->
	<script src="<?php echo $this->config->base_url();?>resource/assets/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
	<script src="<?php echo $this->config->base_url();?>resource/assets/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
	<script src="<?php echo $this->config->base_url();?>resource/assets/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
	<script src="<?php echo $this->config->base_url();?>resource/assets/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
	<script src="<?php echo $this->config->base_url();?>resource/assets/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
	<script src="<?php echo $this->config->base_url();?>resource/assets/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
	<script src="<?php echo $this->config->base_url();?>resource/assets/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
	<script src="<?php echo $this->config->base_url();?>resource/assets/jquery-knob/js/jquery.knob.js"></script>
	<script src="<?php echo $this->config->base_url();?>resource/assets/flot/jquery.flot.js"></script>
	<script src="<?php echo $this->config->base_url();?>resource/assets/flot/jquery.flot.resize.js"></script>

	<script src="<?php echo $this->config->base_url();?>resource/assets/flot/jquery.flot.pie.js"></script>
	<script src="<?php echo $this->config->base_url();?>resource/assets/flot/jquery.flot.pie.js"></script>
	<script src="<?php echo $this->config->base_url();?>resource/assets/flot/jquery.flot.stack.js"></script>
	<script src="<?php echo $this->config->base_url();?>resource/assets/flot/jquery.flot.crosshair.js"></script>

	<script type="text/javascript" src="<?php echo $this->config->base_url();?>resource/assets/uniform/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->config->base_url();?>resource/assets/data-tables/jquery.dataTables.js"></script>
	<script type="text/javascript" src="<?php echo $this->config->base_url();?>resource/assets/data-tables/DT_bootstrap.js"></script>

	<script src="<?php echo $this->config->base_url();?>resource/js/jquery.peity.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->config->base_url();?>resource/assets/uniform/jquery.uniform.min.js"></script>
	<script src="<?php echo $this->config->base_url();?>resource/js/scripts.js"></script>
	<script>
		jQuery(document).ready(function() {
			$('#myTable').DataTable({"iDisplayLength": <?php echo $item_per_page;?>});

			// initiate layout and plugins
			App.setMainPage(true);
			App.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
