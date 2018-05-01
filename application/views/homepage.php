<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sungterbit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css');?>">

    <script src="<?php echo base_url('js/jquery-3.3.1.min.js');?>"></script>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('js/slick-master/slick/slick.css');?>"/>
    <script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('js/slick-master/slick/slick-theme.css');?>"/>
    <link rel="stylesheet" href="<?php echo base_url('css/home.css');?>">
    <script type="text/javascript" src="<?php echo base_url('js/slick-master/slick/slick.min.js');?>"></script>
    <script>
        $(document).ready(function() {


            $('.demo').slick({
                dots: true,
                infinite: true,
                speed: 800,
                fade: true,
                cssEase: 'linear',
                autoplay:true
            });


        });
    </script>

</head>
<body>

<div class="slider demo">
    <div class='isi'><img src="<?php echo base_url('img/3.jpg');?>"><div class='iz'><div class='conta'><h1>Sungterbit</h1><p>Sungterbit is a simple lite microblogging platform</p><a href="<?php echo site_url('Welcome/formLogin')?>">Log in</a></div></div></div>
    <div class='isi'><img src="<?php echo base_url('img/2.jpg');?>"><div class='iz'><div class='conta'><h1>Instant</h1><p>It spreads your messages at real time</p></div></div></div>
    <div class='isi'><img src="<?php echo base_url('img/1.jpg');?>"><div class='iz'><div class='conta'><h1>Wide</h1><p>This social media is wide because anyone can see anyone's post</p></div></div></div>
</div>

</body>
</html>