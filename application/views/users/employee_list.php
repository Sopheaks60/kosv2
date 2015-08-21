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
						<a href="<?php echo $this->config->base_url();?>index.php/employees/edit/0"><button id="sample_editable_1_new" class="btn green">
							<?php echo $this->lang->line('add');?> <i class="icon-plus"></i>
						</button></a><br/><br/>
						<table class="table table-striped table-bordered myTable" id="myTable" data-page-length='25'>
							<thead>
								<tr>
									<th><?php echo $this->lang->line('name');?></th>
									<th><?php echo $this->lang->line('phone');?></th>
									<th><?php echo $this->lang->line('languages');?></th>
									<th><?php echo $this->lang->line('input_username');?></th>
									<th><?php echo $this->lang->line('edit');?></th>
								</tr>
							</thead>

							<tbody>
							<?php
								foreach($emp_list as $rows){
									echo '<tr style="cursor: pointer;">';
										echo "<td width='10%' style='font-size: 11px;'>".$rows->name."</td>";
										echo "<td width='10%' style='font-size: 11px;'>".$rows->phone."</td>";
										echo "<td width='20%' style='font-size: 11px;'>".$rows->lang."</td>";
										echo "<td width='20%' style='font-size: 11px;'>".$rows->username."</td>";
										echo "<td width='10%'  class='rightmost'  style='font-size: 11px;'>";
											echo "<a href='".$this->config->base_url()."index.php/employees/view/".$rows->uid."'><button class='btn btn-primary btn-sm'>".$this->lang->line('view').'</button></a> ';	
											echo "<a href='".$this->config->base_url()."index.php/employees/edit/".$rows->uid."'><button class='btn btn-primary btn-sm'>".$this->lang->line('edit').'</button></a> ';	
											echo "<a href='".$this->config->base_url()."index.php/employees/delete/".$rows->uid."'><button class='btn btn-danger btn-sm'>".$this->lang->line('delete').'</button></a>';
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



