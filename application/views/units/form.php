		<!-- BEGIN PAGE -->
		<div id="main-content">
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<h3 class="page-title">
							<?php echo $this->lang->line('unit');?>
						</h3>
						<ul class="breadcrumb">
							<li><a href="<?php echo $this->config->base_url();?>index.php/homes"><i class="icon-home"></i></a><span class="divider">&nbsp;</span></li>
							<li><a href="<?php echo $this->config->base_url();?>index.php/units"><?php echo $this->lang->line('unit');?></a><span class="divider">&nbsp;</span></li>
							<li><a href="#"><?php echo $this->lang->line('edit');?></a><span class="divider-last">&nbsp;</span></li>
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
				            <h4><i class="icon-reorder"></i><?php echo $this->lang->line('edit').$this->lang->line('unit');?></h4>
				           
				        </div>
					<div class="widget-body">
					<?php
						if($id >= 1){
							foreach($unit as $rows){
								echo form_open('units/save');
										echo '<div class="form-group">';
											echo '<div class="form-group">';
											echo form_label($this->lang->line('unit_name'),
														'unit_name',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_input(array(
															'name'=>'unit_name',
															'placeholder'=>'កំប៉ុង',
															'value'=>$rows->unit_name)
														);
											echo '</div><br/></div>';
										echo form_submit(array(
													'name'=>'submit',
													'id'=>'submit',
													'value'=>$this->lang->line('add'),
													'class'=>' btn btn-primary')
												);		
								echo form_close();
							}
						}else{
							echo form_open('units/save');
									echo '<div class="form-group">';
										echo '<div class="form-group">';
										echo form_label($this->lang->line('unit_name'),
													'unit_name',
													array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
												);
										echo '<div class="col-sm-9 col-md-9 col-lg-10">';
											echo form_input(array(
														'name'=>'unit_name',
														'placeholder'=>'Can',
														'value'=>'')
													);
										echo '</div><br/></div>';

									echo form_submit(array(
												'name'=>'submit',
												'id'=>'submit',
												'value'=>$this->lang->line('add'),
												'class'=>' btn btn-primary')
											);		
							echo form_close();
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






