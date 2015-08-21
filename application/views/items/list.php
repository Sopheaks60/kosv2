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
							<li><a href="<?php echo $this->config->base_url();?>index.php/customers"><?php echo $this->lang->line('customer');?></a><span class="divider-last">&nbsp;</span></li>
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
				            <h4><i class="icon-reorder"></i><?php echo $this->lang->line('customer');?></h4>
				           
				        </div>
					<div class="widget-body">
						<a href="<?php echo $this->config->base_url();?>index.php/items/edit/0"><button id="sample_editable_1_new" class="btn green">
							<?php echo $this->lang->line('add');?> <i class="icon-plus"></i>
						</button></a><br/><br/>
						<table class="table table-striped table-bordered myTable" id="myTable" data-page-length='25'>
							<thead>
								<tr>
									<th><?php echo $this->lang->line('item_code');?></th>
									<th><?php echo $this->lang->line('item_name');?></th>
									<th><?php echo $this->lang->line('category');?></th>
									<th><?php echo $this->lang->line('supplier');?></th>
									<th><?php echo $this->lang->line('unit');?></th>
									<th><?php echo $this->lang->line('cost');?></th>
									<th><?php echo $this->lang->line('price');?></th>
									<th><?php echo $this->lang->line('qty');?></th>
									<th><?php echo $this->lang->line('re-order');?></th>
									<th><?php echo $this->lang->line('edit');?></th>
								</tr>
							</thead>

							<tbody>
							<?php
								foreach($item_list as $rows){
									echo '<tr style="cursor: pointer;">';
										echo "<td width='10%' style='font-size: 11px;'>".$rows->item_code."</td>";	
										echo "<td width='10%' style='font-size: 11px;'>".$rows->item_name."</td>";
										echo "<td width='10%' style='font-size: 11px;'>".$rows->category_name."</td>";
										echo "<td width='10%' style='font-size: 11px;'>".$rows->supplier_company."</td>";
										echo "<td width='10%' style='font-size: 11px;'>".$rows->unit_name."</td>";
										echo "<td width='10%' style='font-size: 11px;'>".$rows->item_cost."</td>";
										echo "<td width='10%' style='font-size: 11px;'>".$rows->item_price."</td>";
										echo "<td width='10%' style='font-size: 11px;'>".$rows->item_qty."</td>";
										echo "<td width='10%' style='font-size: 11px;'>".$rows->item_reorder."</td>";
										echo "<td width='10%'  class='rightmost'  style='font-size: 11px;'>";
											echo "<a href='".$this->config->base_url()."index.php/items/edit/".$rows->item_id."'><button class='btn btn-primary btn-sm'>".$this->lang->line('edit').'</button></a> ';	
											echo "<a href='".$this->config->base_url()."index.php/items/delete/".$rows->item_id."'><button class='btn btn-danger btn-sm'>".$this->lang->line('delete').'</button></a>';
										echo "</td>";
									echo '</tr>';
										}
									?>
							</tbody>
						</table>
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


