		<!-- BEGIN PAGE -->
		<div id="main-content">
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<h3 class="page-title">
							<?php echo $this->lang->line('employee');?>
						</h3>
						<ul class="breadcrumb">
							<li><a href="<?php echo $this->config->base_url();?>index.php/homes"><i class="icon-home"></i></a><span class="divider">&nbsp;</span></li>
							<li><a href="<?php echo $this->config->base_url();?>index.php/employees""><?php echo $this->lang->line('employee');?></a><span class="divider-last">&nbsp;</span></li>
							<li><a href="#"><?php echo $this->lang->line('view');?></a><span class="divider-last">&nbsp;</span></li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div id="page" class="dashboard">
     
					<!-- BEGIN SQUARE STATISTIC BLOCKS-->
                    <div class="square-state">
                        <div class="row-fluid">
				<div class="widget">
				        <div class="widget-title">
				            <h4><i class="icon-reorder"></i><?php echo $this->lang->line('employee');?></h4>
				            
				        </div>
					<div class="widget-body">
						
					<?php
							foreach($emp as $rows){

										echo '<div style="padding-left:30px;">';
										echo '<span class="col-sm-3 col-md-3 col-lg-2 control-label "><b>'.$this->lang->line('name').'  </b></span> : '.$rows->name.'<hr/>';
										echo '<span class="col-sm-3 col-md-3 col-lg-2 control-label "><b>'.$this->lang->line('input_username').'  </b></span> : '.$rows->username.'<hr/>';
										echo '<span class="col-sm-3 col-md-3 col-lg-2 control-label "><b>'.$this->lang->line('input_password').'  </b></span> : {'.$rows->password.'}<hr/>';
										echo '<span class="col-sm-3 col-md-3 col-lg-2 control-label "><b>'.$this->lang->line('address').'  </b></span> : '.$rows->address.'<hr/>';
										echo '<span class="col-sm-3 col-md-3 col-lg-2 control-label "><b>'.$this->lang->line('phone').'  </b></span> : '.$rows->phone.'<hr/>';
										echo '<span class="col-sm-3 col-md-3 col-lg-2 control-label "><b>'.$this->lang->line('email').'  </b></span> : '.$rows->email.'<hr/>';
										echo '<span class="col-sm-3 col-md-3 col-lg-2 control-label "><b>'.$this->lang->line('languages').'  </b></span> : '.$rows->lang.'<hr/>';
										echo '<span class="col-sm-3 col-md-3 col-lg-2 control-label "><b>'.$this->lang->line('note').'  </b></span> : '.$rows->note.'<hr/>';
										echo '<div>';

							}

					?>
				</div>
                        </div>

                    </div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->




