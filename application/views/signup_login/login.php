<div class="container">
  <?php
  if($this->uri->segment(2)=="password-not-matched"){
    echo '<div class="col-sm-12 col-md-12 col-lg-12" style="background-color: lightblue;" id="showerrormsg">
    <h3>Passwords did not match. Make sure your both passwords are same.<button onclick="closediv()" style="float:right;color:red;">X</button></h3>
  </div>';
  }
  ?>
  <script type="text/javascript">
  function close(){
    document.getElementById('showerrormsg').style.display = "none";
  }
</script>
  <div class="row">
    <div class="col-sm-2 col-md-3 col-lg-3"></div>
    <div class="col-sm-11 col-md-6 col-lg-6" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
      <br>
      <form action="/action_page.php" method="post">
        <div class="imgcontainer">
          <img src="<?php echo base_url() ?>assets/images/login_avatar.png" alt="Avatar" class="avatar">
        </div>

        <div class="scontainer">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
              
          <button type="submit" class="sbutton signupbtn" style="width:100%;">Login</button>
        </div>

        <div class="scontainer" style="background-color:#f1f1f1">
          <button type="button" class="sbutton logincancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
        <br><br>
      </form>
    </div>
  </div>
</div>
