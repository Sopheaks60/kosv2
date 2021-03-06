		<!-- BEGIN PAGE -->
		<div id="main-content">
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<h3 class="page-title">
							<?php echo $this->lang->line('setting');?>
						</h3>
						<ul class="breadcrumb">
							<li><a href="<?php echo $this->config->base_url();?>index.php/homes"><i class="icon-home"></i></a><span class="divider">&nbsp;</span></li>
							<li><a href="<?php echo $this->config->base_url();?>index.php/settings"><?php echo $this->lang->line('setting');?></a><span class="divider-last">&nbsp;</span></li>
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
				            <h4><i class="icon-reorder"></i><?php echo $this->lang->line('edit').$this->lang->line('employee');?></h4>
				            <span class="tools">
				                <a href="javascript:;" class="icon-chevron-down"></a>
				                <a href="javascript:;" class="icon-remove"></a>
				            </span>
				        </div>
					<div class="widget-body">
					<?php
						echo form_open('settings/save');

							// Item Per Page
							echo '<div class="form-group">';
								echo form_label($this->lang->line('setting_item_per_page').'(10, 25, 50, 100)',
										'supplier_name',
										array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label '));
								echo '<div class="col-sm-9 col-md-9 col-lg-10">';
									echo form_input(array(
												'name'=>$item_per_page,
												'placeholder'=>'10',
												'value'=>$item_per_page_val));
							echo '</div></div>';

							// Shop or Company Name
							echo '<div class="form-group">';
								echo form_label($this->lang->line('shop_name'),
										'supplier_name',
										array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label '));
								echo '<div class="col-sm-9 col-md-9 col-lg-10">';
									echo form_input(array(
												'name'=>$shop_name,
												'placeholder'=>'សេវាកម្ម​ខ្មែរ',
												'value'=>$shop_name_val));
							echo '</div></div>';

							// Shop Contacat or Phone
							echo '<div class="form-group">';
								echo form_label($this->lang->line('shop_contact'),
										'supplier_name',
										array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label '));
								echo '<div class="col-sm-9 col-md-9 col-lg-10">';
									echo form_textarea(array(
												'name'=>$shop_contact,
												'placeholder'=>'012 812 812',
												'rows'=>2,
												'cols'=>30,
												'value'=>$shop_contact_val));
							echo '</div></div>';

							// Shop or Company Address
							echo '<div class="form-group">';
								echo form_label($this->lang->line('shop_address'),
										'supplier_name',
										array('class'=>'col-sm-3 col-md-3 col-lg-2 control-label '));
								echo '<div class="col-sm-9 col-md-9 col-lg-10">';
									echo form_textarea(array(
												'name'=>$shop_address,
												'placeholder'=>'ផ្លូវ ភូមិ សង្កាត់ ខ័ណ្ឌ រាជធានី​ភ្នំពេញ',
												'rows'=>4,
												'cols'=>30,
												'value'=>$shop_address_val));
							echo '</div></div>';

							echo form_submit(array(
										'name'=>'submit',
										'id'=>'submit',
										'value'=>$this->lang->line('save'),
										'class'=>' btn btn-primary'));
						echo form_close();
						//echo $shop_name.'='.$shop_name_val

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









