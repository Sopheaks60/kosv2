	<!-- BEGIN CONTAINER -->
	<div id="container" class="row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div id="sidebar" class="nav-collapse collapse">
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
			<!--<div class="sidebar-toggler hidden-phone"></div>-->
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

			<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
			<div class="navbar-inverse">
				<form class="navbar-search visible-phone">
					<input type="text" class="search-query" placeholder="Search" />
				</form>
			</div>
			<!-- END RESPONSIVE QUICK SEARCH FORM -->
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="sidebar-menu">
				<?php
					foreach($menu as $rows){
						$active = "";
						if($active_menu == $rows->module_name){
							$active = " class='active' ";
						}
						echo '<li><a class="" href="'.$this->config->base_url().'index.php/'.$rows->module_name.'"><span class="icon-box"><i class="'.$rows->module_icon.'"></i></span> '.$this->lang->line($rows->module_lang).'</a></li>';
					}
				?>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
