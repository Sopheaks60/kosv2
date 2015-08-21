
<!DOCTYPE html>
<!--
Template Name: Admin Lab Dashboard build with Bootstrap v2.3.1
Template Version: 1.3
Author: Mosaddek Hossain
Website: http://thevectorlab.net/
-->

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title> Khmer Point Of Sale </title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="<?php echo $this->config->base_url();?>resource/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo $this->config->base_url();?>resource/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo $this->config->base_url();?>resource/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="<?php echo $this->config->base_url();?>resource/css/style.css" rel="stylesheet" />
	<link href="<?php echo $this->config->base_url();?>resource/css/style_responsive.css" rel="stylesheet" />
	<link href="<?php echo $this->config->base_url();?>resource/css/style_default.css" rel="stylesheet" id="style_color" />

	<link href="<?php echo $this->config->base_url();?>resource/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php echo $this->config->base_url();?>resource/assets/uniform/css/uniform.default.css" />
	<link href="<?php echo $this->config->base_url();?>resource/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="<?php echo $this->config->base_url();?>resource/assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
	<!-- BEGIN HEADER -->
	<div id="header" class="navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="<?php echo $this->config->base_url();?>index.php/homes">
				    <img src="<?php echo $this->config->base_url();?>resource/img/logo.png" alt="Admin Lab" />
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="arrow"></span>
				</a>
				<!-- END RESPONSIVE MENU TOGGLER -->
				<div id="top_menu" class="nav notify-row">
                    <!-- BEGIN NOTIFICATION -->
					<ul class="nav top-menu">
                        <!-- BEGIN SETTINGS -->
                        <!--<li class="dropdown">
                            <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="index.html#" data-original-title="Settings">
                                <i class="icon-cog"></i>
                            </a>
                        </li>-->
                        <!-- END SETTINGS -->
                        <!-- BEGIN INBOX DROPDOWN -->
                        <!--<li class="dropdown" id="header_inbox_bar">
                            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-envelope-alt"></i>
                                <span class="badge badge-important">5</span>
                            </a>
                            <ul class="dropdown-menu extended inbox">
                                <li>
                                    <p>You have 5 new messages</p>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img src="<?php echo $this->config->base_url();?>resource/img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Dulal Khan</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, this is an example messages please check
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img src="<?php echo $this->config->base_url();?>resource/img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Rafiqul Islam</span>
									<span class="time">10 mins</span>
									</span>
									<span class="message">
									 Hi, Mosaddek Bhai how are you ?
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img src="<?php echo $this->config->base_url();?>resource/img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Sumon Ahmed</span>
									<span class="time">3 hrs</span>
									</span>
									<span class="message">
									    This is awesome dashboard templates
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img src="<?php echo $this->config->base_url();?>resource/img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Dulal Khan</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, this is an example messages please check
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">See all messages</a>
                                </li>
                            </ul>
                        </li>-->
                        <!-- END INBOX DROPDOWN -->
						<!-- BEGIN NOTIFICATION DROPDOWN -->
						<!--<li class="dropdown" id="header_notification_bar">
							<a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">

							<i class="icon-bell-alt"></i>
							<span class="badge badge-warning">7</span>
							</a>
							<ul class="dropdown-menu extended notification">
								<li>
									<p>You have 7 new notifications</p>
								</li>
								<li>
									<a href="index.html#">
									<span class="label label-important"><i class="icon-bolt"></i></span>
									Server #3 overloaded.
									<span class="small italic">34 mins</span>
									</a>
								</li>
								<li>
									<a href="index.html#">
									<span class="label label-warning"><i class="icon-bell"></i></span>
									Server #10 not respoding.
									<span class="small italic">1 Hours</span>
									</a>
								</li>
                                <li>
                                    <a href="index.html#">
                                        <span class="label label-important"><i class="icon-bolt"></i></span>
                                        Database overloaded 24%.
                                        <span class="small italic">4 hrs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="label label-success"><i class="icon-plus"></i></span>
                                        New user registered.
                                        <span class="small italic">Just now</span>
                                    </a>
                                </li>
								<li>
									<a href="index.html#">
									<span class="label label-info"><i class="icon-bullhorn"></i></span>
									Application error.
									<span class="small italic">10 mins</span>
									</a>
								</li>
								<li>
									<a href="index.html#">See all notifications</a>
								</li>
							</ul>
						</li>-->
						<!-- END NOTIFICATION DROPDOWN -->

					</ul>
                </div>
                    <!-- END  NOTIFICATION -->
                <div class="top-nav ">
                    <ul class="nav pull-right top-menu" >
                        <!-- BEGIN SUPPORT -->
                        <!--<li class="dropdown mtop5">

                            <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="index.html#" data-original-title="Chat">
                                <i class="icon-comments-alt"></i>
                            </a>
                        </li>
                        <li class="dropdown mtop5">
                            <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="index.html#" data-original-title="Help">
                                <i class="icon-headphones"></i>
                            </a>
                        </li>-->
                        <!-- END SUPPORT -->
						<!-- BEGIN USER LOGIN DROPDOWN -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo $this->config->base_url();?>resource/img/avatar1_small.jpg" alt="">
                                <span class="username"><?php echo $this->session->userdata('username');?></span>
							<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<!--<li><a href="index.html#"><i class="icon-user"></i> My Profile</a></li>
								<li><a href="index.html#"><i class="icon-tasks"></i> My Tasks</a></li>
								<li><a href="index.html#"><i class="icon-calendar"></i> Calendar</a></li>
								<li class="divider"></li>-->
								<li><a href="<?php echo $this->config->base_url();?>index.php/logins/logout"><i class="icon-key"></i> <?php echo $this->lang->line('logout');?></a></li>
							</ul>
						</li>
						<!-- END USER LOGIN DROPDOWN -->
					</ul>
					<!-- END TOP NAVIGATION MENU -->
				</div>
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
