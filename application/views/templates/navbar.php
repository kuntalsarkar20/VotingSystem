<?php
$loginbtn="Log In";
if(isset($_SESSION['username'])){
  $loginbtn=$_SESSION['username'];
}
?>
<nav class="navbar navbar-inverse" style="background-color: #00e600;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php echo base_url() ?>" style="color:white;">OpPoll</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url() ?>" style="color:white;">Home</a></li>
        <li><a href="#" style="color:white;">Create a Poll</a></li>
        <li><a href="#" style="color:white;">Vote Now</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url() ?>signup" style="color:white;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="<?php echo base_url() ?>login" style="color:white;"><span class="glyphicon glyphicon-log-in"></span> <?php echo $loginbtn; ?></a></li>
      </ul>
    </div>
  </div>
</nav>