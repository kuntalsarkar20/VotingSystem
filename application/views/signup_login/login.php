<div class="container">
<?php
  if($this->uri->segment(2)=="wrong-credential"){
    echo '<div class="col-sm-12 col-md-12 col-lg-12" style="background-color: lightblue;padding:10px;" id="showerrormsg">
    <button onclick="closediv()" style="float:right;color:red;">X</button>
    <h4>Username or Password is incorrect. Please Check Your details and try again.</h4>
  </div>';
  }
  ?>
  <script type="text/javascript">
  function closediv(){
    document.getElementById('showerrormsg').style.display = "none";
  }
</script>
  <div class="row">
    <div class="col-sm-2 col-md-3 col-lg-3"></div>
    <div class="col-sm-11 col-md-6 col-lg-6" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
      <br>
      <form action="<?php echo base_url() ?>signup_controller/validate_login_details" method="post">
        <div class="imgcontainer">
          <img src="<?php echo base_url() ?>assets/images/login_avatar.png" alt="Avatar" class="avatar">
        </div>

        <div class="scontainer">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uemail" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
              
          <button type="submit" class="sbutton signupbtn" name="login" style="width:100%;">Login</button>
        </div>

        <div class="scontainer" style="background-color:#f1f1f1">
          <a href="<?php echo base_url() ?>"><button type="button" class="sbutton logincancelbtn">Cancel</button></a>
          <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
        </div>
        <br><br>
      </form>
    </div>
  </div>
</div>
