		<div id="content" class="clearfix ">
<script>
/*$(document).ready(function()
{			
	$( "#search" ).click(function() {
		$('#tables > tbody:last').append("<tr></tr>");
	});
});*/
	$(document).ready(function() 
	{ 
	    enable_row_selection();
	    enable_search('<?php echo site_url("items/suggest");?>',<?php echo json_encode($this->lang->line("search"));?>);
	}); 
</script>
<div id="content-header" class="hidden-print">
	<h1><i class="icon fa fa-table"></i> <?php echo $this->lang->line('item_kit');?></h1>
</div>

<div id="breadcrumb" class="hidden-print">
		<a href="<?php echo $this->config->base_url();?>index.php/homes"><i class="fa fa-home"></i> <?php echo $this->lang->line('dashboard');?> </a><a class="current" href="<?php echo $this->config->base_url();?>index.php/item_kits"> <?php echo $this->lang->line('item_kit');?> </a></div>
<div class="clear"></div>

<div class="pull-right">
		<div class="row">
		</div>
	</div>
	<div class="row ">
	</div>
	<input type="text" name="select_inventory" value="" id="select_inventory" style="display:none">	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="widget-box">
					<div class="widget-title">
						<span class="icon">
							<i class="fa fa-th"></i>
						</span>
						<h5><?php echo $this->lang->line('add').' '.$this->lang->line('item');?></h5>
					</div>
					<div class="widget-content nopadding table_holder table-responsive">
						<?php
							echo '<div style="margin-left: 0px;">'.form_open('item_kits/save_item_kit_item');
							echo '<span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>';
							echo form_input(array(
										'name'=>'search',
										'id'=>'search',
										'placeholder'=>$this->lang->line('item_search'),
										)
									);
							echo form_submit(
									array(
										'id' => 'search',
										'name'=>'submitf',
										'value'=>$this->lang->line('add'),
										 'class'=>'btn btn-primary btn-sm',					
									)
								);
							echo form_close().'</div>';
						?>
						<div class="widget-content nopadding table_holder table-responsive">
							<table id="tables" class="table tablesorter table-bordered table-striped table-hover" id="sortable_table" >
								<thead>
									<tr>
										<th><?php echo $this->lang->line('item_code');?></th>
										<th><?php echo $this->lang->line('item_name');?></th>
										<th><?php echo $this->lang->line('unit');?></th>
										<th><?php echo $this->lang->line('qty');?></th>
										<th><?php echo $this->lang->line('edit');?></th>
									</tr>
								</thead>
								<tbody>
								<?php
									//echo '<tr>';
									foreach($items as $rows){
										echo '<tr style="cursor: pointer;">';
											echo "<td width='10%' style='font-size: 11px;'>".$rows->item_code."</td>";	
											echo "<td width='10%' style='font-size: 11px;'>".$rows->item_name."</td>";
											echo "<td width='10%' style='font-size: 11px;'>".$rows->unit_name."</td>";
											echo "<td width='10%' style='font-size: 11px;'>".form_input(array('name'=>'qty'.$rows->item_id,'value'=>$rows->qty))."</td>";
											echo "<td width='10%'  class='rightmost'  style='font-size: 11px;'>";
												echo "<a href='".$this->config->base_url()."index.php/item_kits/edit/".$rows->item_id."'><button class='btn btn-primary btn-sm'>".$this->lang->line('edit').'</button></a> ';
												echo "<a href='".$this->config->base_url()."index.php/item_kits/delete/".$rows->item_id."'><button class='btn btn-danger btn-sm'>".$this->lang->line('delete').'</button></a>';
											echo "</td>";
										echo '</tr>';
											}
										//echo "</tr>";
										?>
								</tbody>
							</table>
						</div>
						<br/>

					<?php
						if($id >= 1){
							foreach($item as $rows){
								echo form_open('item_kits/save');
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
											echo '</div></div><br/><br/>';

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
											echo '</div></div><br/><br/>';

										echo '<div class="form-group">';
											echo form_label($this->lang->line('category'),
														'category_name',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_dropdown('category_id', $category, $rows->category_id);
											echo '</div></div><br/><br/>';

										echo '<div class="form-group">';
											echo form_label($this->lang->line('supplier_name'),
														'supplier',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_dropdown('supplier_id', $supplier, $rows->supplier_id);
											echo '</div></div><br/><br/>';

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
											echo '</div></div><br/><br/>';

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
											echo '</div></div><br/><br/>';

										echo '<div class="form-group">';
											echo form_label($this->lang->line('unit'),
														'unit_name',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_dropdown('unit_id', $unit, $rows->unit_id);
											echo '</div></div><br/><br/>';


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
											echo '</div></div><br/><br/>';

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
											echo '</div></div><br/><br/>';

										echo '<div class="form-group">';
											echo form_label($this->lang->line('category'),
														'category_name',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_dropdown('category_id', $category, '');
											echo '</div></div><br/><br/>';

										echo '<div class="form-group">';
											echo form_label($this->lang->line('supplier'),
														'supplier_name',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_dropdown('supplier_id', $supplier, '');
											echo '</div></div><br/><br/>';

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
											echo '</div></div><br/><br/>';

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
											echo '</div></div><br/><br/>';

										echo '<div class="form-group">';
											echo form_label($this->lang->line('unit'),
														'unit_name',
														array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label ')
													);
											echo '<div class="col-sm-9 col-md-9 col-lg-10">';
												echo form_dropdown('unit_id', $unit, '');
											echo '</div></div><br/><br/>';

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
											echo '</div></div><br/><br/>';

									echo form_submit(array(
												'name'=>'submit',
												'id'=>'submit',
												'value'=>$this->lang->line('add'),
												'class'=>' btn btn-primary')
											);		
							echo form_close();
						}

					//print_r($item_kit_items);
					
					?>	
		
 					</div>		
 				</div>
			</div>
		</div>
	</div>


