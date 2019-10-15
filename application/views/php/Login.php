<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!-------------------------------------------->
  <!-------------------------------------------->
  <div class="col-md-4"></div>
  <div class="col-md-4">
    
    <div class="form" style="margin-top:100px; ">
    <center>
      <img src="<?php echo base_url(); ?>image/logo.png" alt="logo" style="width:70px; height:70px; "/><br/><br/><br/>
    </center>
<!---------------->
<form action="<?php echo base_url('index.php/User/Login_From/'); ?>" method="post">
  <div class="form-group">
    <label for="email">Email Address</label>
    <input name="email" type="email" class="form-control" id="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
  &nbsp; <?php echo $this->session->flashdata('msg'); ?>
</form>
<!----------------->
    </div>
  </div>
  <div class="col-md-4"></div>
  
  <!-------------------------------------------->
  <!-------------------------------------------->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.dataTables.js"></script>
<script>
$(document).ready( function () {
    $('#mytableId').DataTable();
} );
</script>
  </body>
</html>