		<div id="content" class="clearfix ">
		
<script type="text/javascript">
	$(document).ready(function() 
	{ 
	    enable_row_selection();
	    enable_search('<?php echo site_url("item_kits/suggest");?>',<?php echo json_encode($this->lang->line("search"));?>);
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
				<div class="col-md-12 center" style="text-align: center;">					
				<div class="btn-group  ">
					<a href="<?php echo $this->config->base_url();?>index.php/item_kits/edit/0" class="btn btn-medium btn-primary" title="<?php echo $this->lang->line('new_item');?>">
						<i class="fa fa-pencil   hidden-lg fa fa-2x tip-bottom" data-original-title="<?php echo $this->lang->line('new_item');?>"></i> 
						<span class="visible-lg"><?php echo $this->lang->line('new_item');?></span>
					</a>															
				</div>
		 </div>
		</div>
	</div>
	<div class="row ">
		<?php
			echo '<div style="margin-left: 15px;">'.form_open('item_kits/index');
			echo '<span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>';
			echo form_input(array(
						'name'=>'search',
						'id'=>'search',
						'placeholder'=>$this->lang->line('item_search'),
						)
					);
			echo form_submit(
					array(
						'name'=>'submitf',
						'value'=>$this->lang->line('search'),
						 'class'=>'btn btn-primary btn-sm',					
					)
				);
			echo form_close().'</div>';
		?>
	</div>
	<input type="text" name="select_inventory" value="" id="select_inventory" style="display:none">	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="widget-box">
					<div class="widget-title">
						<span class="icon">
							<i class="fa fa-th"></i>
						</span>
						<h5><?php echo $this->lang->line('list_title');?></h5>
						<span title="" class="label label-info tip-left" data-original-title="<?php echo $this->lang->line('total_record').' '.$total_item_kit;?>"><?php echo $total_item_kit;?></span>
					</div>
					<div class="widget-content nopadding table_holder table-responsive">
						<table class="table tablesorter table-bordered table-striped table-hover" id="sortable_table">
							<thead>
								<tr>
									<th><?php echo $this->lang->line('item_code');?></th>
									<th><?php echo $this->lang->line('item_name');?></th>
									<th><?php echo $this->lang->line('category');?></th>
									<th><?php echo $this->lang->line('supplier');?></th>
									<th><?php echo $this->lang->line('unit');?></th>
									<th><?php echo $this->lang->line('cost');?></th>
									<th><?php echo $this->lang->line('price');?></th>
									<th><?php echo $this->lang->line('edit');?></th>
								</tr>
							</thead>

							<tbody>
							<?php
								foreach($item_list as $rows){
									echo '<tr style="cursor: pointer;">';
										echo "<td width='10%' style='font-size: 11px;'>".$rows->item_kit_code."</td>";	
										echo "<td width='10%' style='font-size: 11px;'>".$rows->item_kit_name."</td>";
										echo "<td width='10%' style='font-size: 11px;'>".$rows->category_name."</td>";
										echo "<td width='10%' style='font-size: 11px;'>".$rows->supplier_company."</td>";
										echo "<td width='10%' style='font-size: 11px;'>".$rows->unit_name."</td>";
										echo "<td width='10%' style='font-size: 11px;'>".$rows->item_kit_cost."</td>";
										echo "<td width='10%' style='font-size: 11px;'>".$rows->item_kit_price."</td>";
										echo "<td width='10%'  class='rightmost'  style='font-size: 11px;'>";
											echo "<a href='".$this->config->base_url()."index.php/item_kits/edit/".$rows->item_id."'><button class='btn btn-primary btn-sm'>".$this->lang->line('edit').'</button></a> ';	
											echo "<a href='".$this->config->base_url()."index.php/item_kits/delete/".$rows->item_id."'><button class='btn btn-danger btn-sm'>".$this->lang->line('delete').'</button></a>';
										echo "</td>";
									echo '</tr>';
										}
									?>
							</tbody>
						</table>
						<?php echo $paginations;?>			
 					</div>		
				
 				</div>
			</div>
		</div>
	</div>


