<nav class="navbar navbar-expand-lg navbar-dark" id='navd'>
  <a class="navbar-brand" href="./beranda.html">Sungterbit</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav mr-auto">
<li class="nav-item <?php if($active=="b")echo "active";?>">
        <a class="nav-link" href="./beranda.php" >Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($active=="p")echo "active";?>" href="./profile.php">Profile</a>
      </li>

    </ul>
    <ul class="navbar-nav">
	  <li class="nav-item <?php if($active=="s")echo "active";?>">
        <a class="nav-link" href="./settings.php">Settings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='<?php echo site_url("dashboard/logout");?>'>Logout</a>
      </li>
    </ul>
	</div>
</nav>