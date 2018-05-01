<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register | Sungterbit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/logreg.css');?>">
    <script src="<?php echo base_url('js/jquery-3.3.1.min.js');?>"></script>
    <script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
</head>
<body>
<!--<div  style="width: 24em;margin: 6em auto 0;">
    <div style="border: .125em solid #222; padding: 1em;">
        <h1>Register</h1>
        <br><br>
        <strong>Username :</strong>
        <input name="username" type="text" required>
        <br><br>
        <strong>Email :</strong>
        <input name="email" type="text" required>
        <br><br>
        <strong>Password :</strong>
        <input name="psw" type="password" required>
        <br><br>
        <button><a href="login.html">Register</a></button>
    </div>
</div>-->
<div class="container h-100 logreg">
    <div class="row h-100 justify-content-center align-items-center">
        <form class="col-12" id='logr' method="POST" action="<?php echo site_url('Register/add_User'); ?>">
            <div class='ks'>
                <h1>Register</h1>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input name="username" type="text" class="form-control" id="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" placeholder="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="pass" type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <input type="submit" class='btn primover' Value="Register">
            </div>
        </form>

    </div>
</div>
</body>
</html>