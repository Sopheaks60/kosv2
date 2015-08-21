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
							<li><a href="<?php echo $this->config->base_url();?>index.php/items"><?php echo $this->lang->line('item');?></a><span class="divider">&nbsp;</span></li>
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
				            <h4><i class="icon-reorder"></i><?php echo $this->lang->line('edit').$this->lang->line('item');?></h4>
				          
				        </div>
					<div class="widget-body">
										<?php
						if($id >= 1){
							foreach($item as $rows){
								echo form_open('items/save');
										echo '<div class="form-group">';
											echo form_label($this->lang->line('item_code'),
														'item_name',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_input(array(
															'name'=>'item_code',
															'placeholder'=>'',
															'value'=>$rows->item_code)
														);
											echo '</div></div>';

										echo '<div class="form-group">';
											echo form_label($this->lang->line('item_name'),
														'item_name',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_input(array(
															'name'=>'item_name',
															'placeholder'=>'',
															'value'=>$rows->item_name)
														);
											echo '</div></div>';

										echo '<div class="form-group">';
											echo form_label($this->lang->line('category_name'),
														'category_name',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_dropdown('category_id', $category, $rows->category_id);
											echo '</div></div>';

										echo '<div class="form-group">';
											echo form_label($this->lang->line('supplier_name'),
														'supplier_name',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_dropdown('supplier_id', $supplier, $rows->supplier_id);
											echo '</div></div>';

										echo '<div class="form-group">';
											echo form_label($this->lang->line('cost'),
														'cost',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_input(array(
															'name'=>'item_cost',
															'placeholder'=>'',
															'value'=>$rows->item_cost)
														);
											echo '</div></div>';

										echo '<div class="form-group">';
											echo form_label($this->lang->line('price'),
														'price',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_input(array(
															'name'=>'item_price',
															'placeholder'=>'',
															'value'=>$rows->item_price)
														);
											echo '</div></div>';

										echo '<div class="form-group">';
											echo form_label($this->lang->line('qty'),
														'qty',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_input(array(
															'name'=>'item_qty',
															'placeholder'=>'',
															'value'=>$rows->item_qty)
														);
											echo '</div></div>';

										echo '<div class="form-group">';
											echo form_label($this->lang->line('re-order'),
														're-order',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_input(array(
															'name'=>'item_reorder',
															'placeholder'=>'',
															'value'=>$rows->item_reorder)
														);
											echo '</div></div>';

										echo '<div class="form-group">';
											echo form_label($this->lang->line('unit_name'),
														'unit_name',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_dropdown('unit_id', $unit, $rows->unit_id);
											echo '</div></div>';

										echo '<div class="form-group">';
											echo form_label($this->lang->line('note'),
														'note',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_textarea(array(
															'name'=>'item_note',
															'placeholder'=>'',
															'value'=>$rows->item_note)
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
						}else{
								echo form_open('items/save');
										echo '<div class="form-group">';
											echo form_label($this->lang->line('code'),
														'code',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_input(array(
															'name'=>'item_code',
															'placeholder'=>'',
															'value'=>'')
														);
											echo '</div></div>';

										echo '<div class="form-group">';
											echo form_label($this->lang->line('name'),
														'name',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_input(array(
															'name'=>'item_name',
															'placeholder'=>'',
															'value'=>'')
														);
											echo '</div></div>';

										echo '<div class="form-group">';
											echo form_label($this->lang->line('category_name'),
														'category_name',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_dropdown('category_id', $category, '');
											echo '</div></div>';

										echo '<div class="form-group">';
											echo form_label($this->lang->line('supplier_name'),
														'supplier_name',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_dropdown('supplier_id', $supplier, '');
											echo '</div></div>';

										echo '<div class="form-group">';
											echo form_label($this->lang->line('cost'),
														'cost',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_input(array(
															'name'=>'item_cost',
															'placeholder'=>'',
															'value'=>'')
														);
											echo '</div></div>';

										echo '<div class="form-group">';
											echo form_label($this->lang->line('price'),
														'price',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_input(array(
															'name'=>'item_price',
															'placeholder'=>'',
															'value'=>'')
														);
											echo '</div></div>';

										echo '<div class="form-group">';
											echo form_label($this->lang->line('qty'),
														'qty',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_input(array(
															'name'=>'item_qty',
															'placeholder'=>'',
															'value'=>'')
														);
											echo '</div></div>';

										echo '<div class="form-group">';
											echo form_label($this->lang->line('re-order'),
														're-order',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_input(array(
															'name'=>'item_reorder',
															'placeholder'=>'',
															'value'=>'')
														);
											echo '</div></div>';

										echo '<div class="form-group">';
											echo form_label($this->lang->line('unit_name'),
														'unit_name',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_dropdown('unit_id', $unit, '');
											echo '</div></div>';

										echo '<div class="form-group">';
											echo form_label($this->lang->line('note'),
														'note',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_textarea(array(
															'name'=>'item_note',
															'placeholder'=>'',
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




