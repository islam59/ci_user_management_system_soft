	<!-------------------------------------------->
<div class="row">
<div class="col-md-3">
<div class="panel panel-info">
  <div class="panel-heading">ADD USER</div>
  <div class="panel-body">
<!------->
<form action="<?php echo base_url('index.php/User/AddNewUser/'); ?>" method="post">
	<input name="username" type="text" class="form-control" placeholder="Name !"><br/>
	<input name="email" type="email" class="form-control" placeholder="Email !"><br/>
	<input name="phone" type="text" class="form-control" placeholder="Phone !"><br/>
	<select name="type" class="form-control">
		<option value="">Uesr Type</option>
		<option value="ADMIN">ADMIN</option>
		<option value="USER">USER</option>
	</select><br/>
	<textarea name="address" class="form-control" placeholder="Address"></textarea><br/>
	<button type="submit" name="submit" class="btn btn-primary ">User Option</button>
</form>
<!------->
  </div>
</div>
</div>
<div class="col-md-9">
<div class="panel panel-info">
  <div class="panel-heading">USER OPTIONS !</div>
  <div class="panel-body" style="color:black;">
<!------->
<table class="table" id="mytableId" style="color:black;">
    <thead>
        <tr>
            <th>USER ID</th>
            <th>USER DETAILS</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
<?php 
	//var_dump($userlist); 
	foreach ($userlist as $userData) {
?>
        <tr>
            <td style="font-weight: bold;">
				USER-<?php echo $userData->user_id; ?><br/>
				<?php echo $userData->type; ?>
			</td>
            <td>
				<strong><?php echo $userData->username; ?></strong>
				 <?php echo $userData->email; ?> | <?php echo $userData->phone; ?><br/>
				<?php echo $userData->address; ?>
			</td>
            <td>
<?php       
  $type = $this->session->userdata('type');   
  $selfid = $this->session->userdata('user_id');   
  if($type == 'ADMIN'){
?>
		<a href="<?php echo base_url('index.php/User/User_Profile/'.$userData->user_id); ?>" class="btn btn-warning btn-sm">Edit</a>
		<a href="<?php echo base_url('index.php/User/DeleteUserById/'.$userData->user_id); ?>" class="btn btn-danger btn-sm">Remove</a>
<?php 
  }else{
?>
		<a href="<?php echo base_url('index.php/User/User_Profile/'.$userData->user_id); ?>" class="btn btn-warning btn-sm">Edit</a>
<?php 
  }
?>           	

			</td>
        </tr>
<?php 
	}
?>    	



    </tbody>
</table>
<!------->
  </div>
</div>
</div>
</div>