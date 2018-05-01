<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Sungterbit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/logreg.css');?>">
    <script src="<?php echo base_url('js/jquery-3.3.1.min.js');?>"></script>
    <script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('login.js');?>"></script>
</head>
<body>
<div class="container h-100 logreg">
    <div class="row h-100 justify-content-center align-items-center">
        <form class="col-12" id='logr'>
            <div class='ks'>
                <h1>Login</h1>
                <form method="POST" action="<?php echo site_url('Welcome/login'); ?>">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input  name="username" type="text" class="form-control" id="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="pass" type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <input type="submit" class='btn primover' Value="Log In">
                </form>
                <?php echo $this->session->flashdata('info'); ?>
                <div class='msge'><div>or</div>register <a href='<?php echo site_url("Register");?>'>here</a></div>
            </div>
        </form>

    </div>
</div>
</body>
</html>