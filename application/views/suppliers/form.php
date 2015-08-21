		<!-- BEGIN PAGE -->
		<div id="main-content">
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<h3 class="page-title">
							<?php echo $this->lang->line('supplier');?>
						</h3>
						<ul class="breadcrumb">
							<li><a href="<?php echo $this->config->base_url();?>index.php/homes"><i class="icon-home"></i></a><span class="divider">&nbsp;</span></li>
							<li><a href="<?php echo $this->config->base_url();?>index.php/suppliers"><?php echo $this->lang->line('supplier');?></a><span class="divider">&nbsp;</span></li>
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
				            <h4><i class="icon-reorder"></i><?php echo $this->lang->line('edit').$this->lang->line('supplier');?></h4>
				            
				        </div>
					<div class="widget-body">
					<?php
						if($id >= 1){
							foreach($supplier as $rows){
								echo form_open('suppliers/save');
										echo '<div class="form-group">';
										echo form_label($this->lang->line('name'),
													'supplier_name',
													array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
												);
										echo '<div class="col-sm-9 col-md-9 col-lg-10">';
											echo form_input(array(
														'name'=>'supplier_contact',
														'placeholder'=>'សន​ ចរិយា',
														'value'=>$rows->supplier_contact)
													);
										echo '</div></div>';

										echo '<div class="form-group">';
										echo form_label($this->lang->line('company'),
													'supplier_company',
													array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
												);
										echo '<div class="col-sm-9 col-md-9 col-lg-10">';
											echo form_input(array(
														'name'=>'supplier_company',
														'placeholder'=>'Khmer Blue Berry',
														'value'=>$rows->supplier_company)
													);
										echo '</div></div>';

										echo '<div class="form-group">';
										echo form_label($this->lang->line('address'),
													'supplier_address',
													array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
												);
										echo '<div class="col-sm-9 col-md-9 col-lg-10">';
											echo form_input(array(
														'name'=>'supplier_address',
														'placeholder'=>'Phnom Penh',
														'value'=>$rows->supplier_address)
													);
										echo '</div></div>';

										echo '<div class="form-group">';
										echo form_label($this->lang->line('phone'),
													'supplier_phone',
													array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
												);
										echo '<div class="col-sm-9 col-md-9 col-lg-10">';
											echo form_input(array(
														'name'=>'supplier_phone',
														'placeholder'=>'012 812 812',
														'value'=>$rows->supplier_phone)
													);
										echo '</div></div>';

										echo '<div class="form-group">';
										echo form_label($this->lang->line('email'),
													'supplier_email',
													array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
												);
										echo '<div class="col-sm-9 col-md-9 col-lg-10">';
											echo form_input(array(
														'name'=>'supplier_email',
														'placeholder'=>'test@gmail.com',
														'value'=>$rows->supplier_email)
													);
										echo '</div></div>';


										echo '<div class="form-group">';
										echo form_label($this->lang->line('note'),
													'supplier_note',
													array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
												);
										echo '<div class="col-sm-9 col-md-9 col-lg-10">';
											echo form_input(array(
														'name'=>'supplier_note',
														'placeholder'=>'test',
														'value'=>$rows->supplier_note)
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
							echo form_open('suppliers/save');
										echo '<div class="form-group">';
										echo form_label($this->lang->line('name'),
													'supplier_name',
													array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
												);
										echo '<div class="col-sm-9 col-md-9 col-lg-10">';
											echo form_input(array(
														'name'=>'supplier_contact',
														'placeholder'=>'សន​ ចរិយា',
														'value'=>'')
													);
										echo '</div></div>';

										echo '<div class="form-group">';
										echo form_label($this->lang->line('company'),
													'supplier_company',
													array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
												);
										echo '<div class="col-sm-9 col-md-9 col-lg-10">';
											echo form_input(array(
														'name'=>'supplier_company',
														'placeholder'=>'Khmer Blue Berry',
														'value'=>'')
													);
										echo '</div></div>';

										echo '<div class="form-group">';
										echo form_label($this->lang->line('address'),
													'supplier_address',
													array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
												);
										echo '<div class="col-sm-9 col-md-9 col-lg-10">';
											echo form_input(array(
														'name'=>'supplier_address',
														'placeholder'=>'Phnom Penh',
														'value'=>'')
													);
										echo '</div></div>';

										echo '<div class="form-group">';
										echo form_label($this->lang->line('phone'),
													'supplier_phone',
													array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
												);
										echo '<div class="col-sm-9 col-md-9 col-lg-10">';
											echo form_input(array(
														'name'=>'supplier_phone',
														'placeholder'=>'012 812 812',
														'value'=>'')
													);
										echo '</div></div>';

										echo '<div class="form-group">';
										echo form_label($this->lang->line('email'),
													'supplier_email',
													array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
												);
										echo '<div class="col-sm-9 col-md-9 col-lg-10">';
											echo form_input(array(
														'name'=>'supplier_email',
														'placeholder'=>'test@gmail.com',
														'value'=>'')
													);
										echo '</div></div>';

										echo '<div class="form-group">';
										echo form_label($this->lang->line('note'),
													'supplier_note',
													array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
												);
										echo '<div class="col-sm-9 col-md-9 col-lg-10">';
											echo form_input(array(
														'name'=>'supplier_note',
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





