<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
  <meta charset="utf-8" />
  <title><?php echo $this->lang->line('login_title');?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <link href="<?php echo $this->config->base_url();?>resource/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo $this->config->base_url();?>resource/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="<?php echo $this->config->base_url();?>resource/css/style.css" rel="stylesheet" />
  <link href="<?php echo $this->config->base_url();?>resource/css/style_responsive.css" rel="stylesheet" />
  <link href="<?php echo $this->config->base_url();?>resource/css/style_default.css" rel="stylesheet" id="style_color" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body id="login-body">
  <div class="login-header">
      <!-- BEGIN LOGO -->
      <!--<div id="logo" class="center">-->
          <img src="<?php echo $this->config->base_url();?>resource/img/header_logo.png" alt="logo" class="center"/>
      <!--</div>-->
      <!-- END LOGO -->
  </div>

  <!-- BEGIN LOGIN -->
  <div id="login">
    <!-- BEGIN LOGIN FORM -->
    <form id="loginform" class="form-vertical no-padding no-margin" action="<?php echo $this->config->base_url();?>index.php/logins/login" method="POST">
      <div class="lock">
          <i class="icon-lock"></i>
      </div>
      <div class="control-wrap">
          <h4><?php echo $this->lang->line('login_title');?></h4>
          <div class="control-group">
              <div class="controls">
                  <div class="input-prepend">
                      <span class="add-on"><i class="icon-user"></i></span><input name="username" id="username" type="text" placeholder="<?php echo $this->lang->line('input_username');?>" />
                  </div>
              </div>
          </div>
          <div class="control-group">
              <div class="controls">
                  <div class="input-prepend">
                      <span class="add-on"><i class="icon-key"></i></span><input name="password" id="password" type="password" placeholder="<?php echo $this->lang->line('input_password');?>" />
                  </div>
                  <div class="clearfix space5"></div>
              </div>

          </div>
      </div>

      <input type="submit" id="login-btn" class="btn btn-block login-btn" value="<?php echo $this->lang->line('btn_login');?>" />
    </form>
    <!-- END LOGIN FORM -->        

  </div>
  <!-- END LOGIN -->
  <!-- BEGIN COPYRIGHT -->
  <div id="login-copyright">
      2015 &copy; Khmer Service Group
  </div>
  <!-- END COPYRIGHT -->
  <!-- BEGIN JAVASCRIPTS -->
  <script src="<?php echo $this->config->base_url();?>resource/js/jquery-1.8.3.min.js"></script>
  <script src="<?php echo $this->config->base_url();?>resource/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo $this->config->base_url();?>resource/js/jquery.blockui.js"></script>
  <script src="<?php echo $this->config->base_url();?>resource/js/scripts.js"></script>
  <script>
    jQuery(document).ready(function() {  
            //If we have an empty username focus
            if ($("#username").val() == '')
            {
                $("#username").focus();                   
            }
            else
            {
                $("#password").focus();
            }
   
      App.initLogin();
    });
  </script>
  <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
