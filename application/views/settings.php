<?php $active="s"; include ('header.php');?>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</head>
<body>
<?php include ('navbar.php');?>
<div class='con setti'>
<h1>Settings</h1>
<form method="POST" action="<?php echo site_url('Profile/editProfile')."/".$user['username']; ?>">
<div class='row'>
<div class='col-md-auto'>
<label for="exampleFormControlFile1">Profile Picture</label>
<div class="form-group">
    
	<img src='<?php echo base_url('img/dondo.jpg');?>' class='rounded' style='margin-bottom: 10px;'>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  </div>
  <div class='col'>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value='<?php echo $profile['email']?>'>
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Full name" value="<?php echo $profile['name']?>">
  </div>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" aria-describedby="username" placeholder="Username" value="<?php echo $user['username']?>" disabled>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" disabled>
  </div>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Bio</label>
    <textarea class="form-control" name="bio" id="exampleFormControlTextarea1" rows="3" ><?php echo $profile['bio']?></textarea>
  </div>
  <button type="submit" class="btn prima">Update</button>
  </div>
  
  </div>
</form>
</div>
<?php include ('footer.php'); ?>