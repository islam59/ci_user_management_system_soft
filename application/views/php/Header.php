<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Aims-Bills</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/jquery.dataTables.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background:#024850; ">
 <div class="container" style="background:#509; color:white; ">
	<!-------------------------------------------->
	<!-------------------------------------------->
<h1 style="font-weight:bold; font-size:70px;">AIMS-365</h1>
<nav class="navbar navbar-default row" style="background:transparent; border:0px; background:#0ff; border-radius:0px; ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url('index.php/Apps/'); ?>">Dashboard</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url('index.php/Apps/invoice_list/'); ?>">Invoice</a></li>
        <li><a href="<?php echo base_url('index.php/Apps/customer_list/'); ?>">Customer</a></li>
        <li><a href="<?php echo base_url('index.php/Apps/service'); ?>">Services</a></li>
<?php       
  $type = $this->session->userdata('type');   
  if($type == 'ADMIN'){
?>
    <li><a href="<?php echo base_url('index.php/User/User_Option/'); ?>">User Option</a></li>
<?php 
  }else{
?>
    <li><a href="<?php echo base_url('index.php/User/User_Profile/'); ?><?php echo $this->session->userdata('user_id')?>">Profile</a></li>
<?php     
  }
?>
     
        <li><a href="<?php echo base_url('index.php/User/Logout/'); ?>">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-------------------------------------------->

