		<div id="content" class="clearfix ">

<div id="content-header" class="hidden-print">
	<h1><i class="icon fa fa-table"></i> <?php echo $this->lang->line('customer');?></h1>
</div>

<div id="breadcrumb" class="hidden-print">
		<a href="<?php echo $this->config->base_url();?>index.php/customers"><i class="fa fa-home"></i> <?php echo $this->lang->line('dashboard');?> </a><a class="current" href="<?php echo $this->config->base_url();?>index.php/customers"> <?php echo $this->lang->line('customer');?> </a></div>
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
						<h5><?php echo $this->lang->line('add').' '.$this->lang->line('customer');?></h5>

					</div>
					<div class="widget-content nopadding table_holder table-responsive">
					<br/>
					<?php
							foreach($customer as $rows){

										echo '<div style="padding-left:30px;">';
										echo '<span class="col-sm-3 col-md-3 col-lg-2 control-label "><b>'.$this->lang->line('name').'  </b></span> : '.$rows->customer_name.'<hr/>';
										echo '<span class="col-sm-3 col-md-3 col-lg-2 control-label "><b>'.$this->lang->line('company').'  </b></span> : '.$rows->customer_company.'<hr/>';
										echo '<span class="col-sm-3 col-md-3 col-lg-2 control-label "><b>'.$this->lang->line('address').'  </b></span> : '.$rows->customer_address.'<hr/>';
										echo '<span class="col-sm-3 col-md-3 col-lg-2 control-label "><b>'.$this->lang->line('phone').'  </b></span> : '.$rows->customer_phone.'<hr/>';
										echo '<span class="col-sm-3 col-md-3 col-lg-2 control-label "><b>'.$this->lang->line('email').'  </b></span> : '.$rows->customer_email.'<hr/>';
										echo '<span class="col-sm-3 col-md-3 col-lg-2 control-label "><b>'.$this->lang->line('note').'  </b></span> : '.$rows->customer_note.'<hr/>';
										echo '<div>';

							}

					?>
					<br/>				
 					</div>		
 				</div>
			</div>
		</div>
	</div>


