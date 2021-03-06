
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
							<li><a href="<?php echo $this->config->base_url();?>index.php/customers""><?php echo $this->lang->line('customer');?></a><span class="divider-last">&nbsp;</span></li>
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
						<a href="<?php echo $this->config->base_url();?>index.php/customers/edit/0"><button id="sample_editable_1_new" class="btn green">
							<?php echo $this->lang->line('add');?> <i class="icon-plus"></i>
						</button></a><br/><br/>

						<table class="table table-striped table-bordered myTable" id="myTable" data-page-length='25'>
									<thead>
										<tr>
											<th><?php echo $this->lang->line('code');?></th>
											<th><?php echo $this->lang->line('name');?></th>
											<th><?php echo $this->lang->line('customer_type');?></th>
											<th><?php echo $this->lang->line('company');?></th>
											<th><?php echo $this->lang->line('address');?></th>
											<th><?php echo $this->lang->line('phone');?></th>
											<th><?php echo $this->lang->line('email');?></th>
											<th><?php echo $this->lang->line('edit');?></th>
										</tr>
									</thead>

									<tbody>
									<?php
										foreach($customer_list as $rows){
											echo '<tr style="cursor: pointer;" class="odd gradeX">';
												echo "<td width='10%' style='font-size: 11px;'>CUS0000".$rows->customer_id."</td>";	
												echo "<td width='10%' style='font-size: 11px;'>".$rows->customer_name."</td>";
												echo "<td width='10%' style='font-size: 11px;'>".$this->lang->line($rows->customer_type)."</td>";
												echo "<td width='10%' style='font-size: 11px;'>".$rows->customer_company."</td>";
												echo "<td width='20%' style='font-size: 11px;'>".$rows->customer_address."</td>";
												echo "<td width='20%' style='font-size: 11px;'>".$rows->customer_phone."</td>";
												echo "<td width='10%' style='font-size: 11px;'>".$rows->customer_email."</td>";
												echo "<td width='10%'  class='rightmost'  style='font-size: 11px;'>";
													echo "<a href='".$this->config->base_url()."index.php/customers/edit/".$rows->customer_id."'><button class='btn btn-primary btn-sm'>".$this->lang->line('edit').'</button></a> ';	
													echo "<a href='".$this->config->base_url()."index.php/customers/delete/".$rows->customer_id."'><button class='btn btn-danger btn-sm'>".$this->lang->line('delete').'</button></a>';
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

