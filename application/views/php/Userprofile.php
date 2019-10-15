	<!-------------------------------------------->
<div class="row">
<div class="col-md-3">
<div class="panel panel-info">
  <div class="panel-heading">Change Password</div>
  <div class="panel-body">
<!------->
<form class="form" action="<?php echo base_url('index.php/User/User_Password_Update/'); ?><?php echo $userData->user_id; ?>" method="post"><br/>
	<input type="password" name="old_password" class="form-control" placeholder="Old Password"><br/>
	<input type="password" name="password" class="form-control" placeholder="New Password"><br/>
	<input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password"><br/>
	<button type="submit" class="btn btn-primary">Change Password</button>
      &nbsp; <?php echo $this->session->flashdata('pmsg'); ?>
</form>
<!------->
  </div>
</div>
</div>
<div class="col-md-9">
<div class="panel panel-info">
  <div class="panel-heading">USER PROFILE OPTIONS !</div>
  <div class="panel-body" style="color:black;">
<!------->
<form class="form-horizontal" action="<?php echo base_url('index.php/User/User_Profile_Update/'); ?><?php echo $userData->user_id; ?>" method="post">
  <div class="form-group">
    <label for="username" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-10">
      <input name="username" type="text" class="form-control" id="username" value="<?php echo $userData->username; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input name="email" type="email" class="form-control" id="email" value="<?php echo $userData->email; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="phone" class="col-sm-2 control-label">Phone</label>
    <div class="col-sm-10">
      <input name="phone" type="text" class="form-control" id="phone" value="<?php echo $userData->phone; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="type" class="col-sm-2 control-label">Type</label>
    <div class="col-sm-10">
<?php     	
	$type = $this->session->userdata('type');  	
	if($type == 'ADMIN'){
?>
      <select name="type" id="type" class="form-control">
      	<option value="">Select Type</option>
      	<option value="ADMIN" <?php if($userData->type == 'ADMIN'){ echo 'selected'; }?> >ADMIN</option>
      	<option value="USER" <?php if($userData->type == 'USER'){ echo 'selected'; }?> >USER</option>
      </select>
<?php 
	}else{
?>
<input name="type" type="text" class="form-control" id="inputEmail3" value="<?php echo $userData->type; ?>" readonly />
<?php 		
	}
?>


    </div>
  </div>
  <div class="form-group">
    <label for="address" class="col-sm-2 control-label">Address</label>
    <div class="col-sm-10">
      <textarea name="address" id="address" class="form-control"><?php echo $userData->address; ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Update Profile</button>
      &nbsp; <?php echo $this->session->flashdata('msg'); ?>
    </div>
  </div>
</form>
<!------->
  </div>
</div>
</div>
</div>