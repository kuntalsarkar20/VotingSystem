<div class="container">
  <div class="row">
    <?php
  if($this->uri->segment(2)=="password-not-matched"){
    echo '<div class="col-sm-12 col-md-12 col-lg-12" style="background-color: lightblue;" id="showerrormsg">
    <h3>Passwords did not match. Make sure your both passwords are same.<button onclick="closediv()" style="float:right;color:red;">X</button></h3>
  </div>';
  }
  ?>
  <script type="text/javascript">
  function closediv(){
    document.getElementById('showerrormsg').style.display = "none";
  }
</script>
    <div class="col-sm-2 col-md-3 col-lg-3"></div>
    <div class="col-sm-12 col-md-6 col-lg-6" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
      <form action="<?php echo base_url() ?>signup_controller/form_validate" method="post">
        <div class="scontainer">
          <h1>Sign Up</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>

          <label for="email"><b>Your Name</b></label>
          <input type="text" placeholder="Enter Name" name="uname" required>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="uemail" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
          
          
          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

          <div class="clearfix">
            <button type="button" class="sbutton cancelbtn">Cancel</button>
            <button type="submit" class="sbutton signupbtn" name="signup_submit">Sign Up</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>