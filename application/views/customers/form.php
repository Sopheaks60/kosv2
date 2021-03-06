		<!-- BEGIN PAGE -->
		<div id="main-content">
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<h3 class="page-title">
							<?php echo $this->lang->line('customer');?>
						</h3>
						<ul class="breadcrumb">
							<li><a href="<?php echo $this->config->base_url();?>index.php/homes"><i class="icon-home"></i></a><span class="divider">&nbsp;</span></li>
							<li><a href="<?php echo $this->config->base_url();?>index.php/customers"><?php echo $this->lang->line('customer');?></a><span class="divider">&nbsp;</span></li>
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
				            <h4><i class="icon-reorder"></i><?php echo $this->lang->line('edit').$this->lang->line('customer');?></h4>
				        </div>
					<div class="widget-body">
					<?php
						if($id >= 1){
							foreach($customer as $rows){
								echo form_open('customers/save');
										echo '<div class="form-group">';
										echo form_label($this->lang->line('name'),
													'customer_name',
													array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
												);
										echo '<div class="col-sm-9 col-md-9 col-lg-10">';
											echo form_input(array(
														'name'=>'customer_name',
														'placeholder'=>'សន​ ចរិយា',
														'value'=>$rows->customer_name)
													);
										echo '</div></div>';

										echo '<div class="form-group">';
											echo form_label($this->lang->line('customer_type'),
														'customer_type',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_dropdown('customer_type', $ctype, $rows->customer_type);
											echo '</div></div>';

										echo '<div class="form-group">';
										echo form_label($this->lang->line('company'),
													'customer_company',
													array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
												);
										echo '<div class="col-sm-9 col-md-9 col-lg-10">';
											echo form_input(array(
														'name'=>'customer_company',
														'placeholder'=>'Khmer Blue Berry',
														'value'=>$rows->customer_company)
													);
										echo '</div></div>';

										echo '<div class="form-group">';
										echo form_label($this->lang->line('address'),
													'customer_address',
													array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
												);
										echo '<div class="col-sm-9 col-md-9 col-lg-10">';
											echo form_input(array(
														'name'=>'customer_address',
														'placeholder'=>'Phnom Penh',
														'value'=>$rows->customer_address)
													);
										echo '</div></div>';

										echo '<div class="form-group">';
										echo form_label($this->lang->line('phone'),
													'customer_phone',
													array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
												);
										echo '<div class="col-sm-9 col-md-9 col-lg-10">';
											echo form_input(array(
														'name'=>'customer_phone',
														'placeholder'=>'012 812 812',
														'value'=>$rows->customer_phone)
													);
										echo '</div></div>';

										echo '<div class="form-group">';
										echo form_label($this->lang->line('email'),
													'customer_email',
													array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
												);
										echo '<div class="col-sm-9 col-md-9 col-lg-10">';
											echo form_input(array(
														'name'=>'customer_email',
														'placeholder'=>'test@gmail.com',
														'value'=>$rows->customer_email)
													);
										echo '</div></div>';


										echo '<div class="form-group">';
										echo form_label($this->lang->line('note'),
													'customer_note',
													array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
												);
										echo '<div class="col-sm-9 col-md-9 col-lg-10">';
											echo form_input(array(
														'name'=>'customer_note',
														'placeholder'=>'test',
														'value'=>$rows->customer_note)
													);
										echo '</div></div>';

										echo form_submit(array(
													'name'=>'submit',
													'id'=>'submit',
													'value'=>$this->lang->line('edit'),
													'class'=>' btn btn-primary')
												);		
								echo form_close();
							}
						}else{
							echo form_open('customers/save');
										echo '<div class="form-group">';
										echo form_label($this->lang->line('name'),
													'customer_name',
													array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
												);
										echo '<div class="col-sm-9 col-md-9 col-lg-10">';
											echo form_input(array(
														'name'=>'customer_name',
														'placeholder'=>'សន​ ចរិយា',
														'value'=>'')
													);
										echo '</div></div>';

										echo '<div class="form-group">';
											echo form_label($this->lang->line('customer_type'),
														'customer_type',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_dropdown('customer_type', $ctype, $this->lang->line('retail'));
											echo '</div></div>';

										echo '<div class="form-group">';
										echo form_label($this->lang->line('company'),
													'customer_company',
													array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
												);
										echo '<div class="col-sm-9 col-md-9 col-lg-10">';
											echo form_input(array(
														'name'=>'customer_company',
														'id'=>'customer_company',
														'placeholder'=>'Khmer Blue Berry',
														'value'=>'')
													);
										echo '</div></div>';

										echo '<div class="form-group">';
										echo form_label($this->lang->line('address'),
													'customer_address',
													array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
												);
										echo '<div class="col-sm-9 col-md-9 col-lg-10">';
											echo form_input(array(
														'name'=>'customer_address',
														'placeholder'=>'Phnom Penh',
														'value'=>'')
													);
										echo '</div></div>';

										echo '<div class="form-group">';
										echo form_label($this->lang->line('phone'),
													'customer_phone',
													array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
												);
										echo '<div class="col-sm-9 col-md-9 col-lg-10">';
											echo form_input(array(
														'name'=>'customer_phone',
														'placeholder'=>'012 812 812',
														'value'=>'')
													);
										echo '</div></div>';

										echo '<div class="form-group">';
										echo form_label($this->lang->line('email'),
													'customer_email',
													array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
												);
										echo '<div class="col-sm-9 col-md-9 col-lg-10">';
											echo form_input(array(
														'name'=>'customer_email',
														'placeholder'=>'test@gmail.com',
														'value'=>'')
													);
										echo '</div></div>';

										echo '<div class="form-group">';
										echo form_label($this->lang->line('note'),
													'customer_note',
													array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
												);
										echo '<div class="col-sm-9 col-md-9 col-lg-10">';
											echo form_input(array(
														'name'=>'customer_note',
														'placeholder'=>'test',
														'value'=>'')
													);
										echo '</div></div>';

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



