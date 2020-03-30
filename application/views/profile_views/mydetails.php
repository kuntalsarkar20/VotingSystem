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
    <div class="col-sm-11 col-md-6 col-lg-6" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);padding-top: 20px;">
      <br>
      <form action="/action_page.php" method="post">
        <div class="imgcontainer">
          <img src="<?php echo base_url() ?>assets/images/login_avatar.png" alt="Avatar" class="avatar">
        </div>

        <div class="scontainer">
          <label for="uname"><b>Name</b></label>
          <input type="text" placeholder="<?php ?>" name="uname" required disabled>

          <label for="psw"><b>Email</b></label>
          <input type="text" placeholder="" name="psw" required disabled>
              
        </div>
        <br><br>
      </form>
    </div>
  </div>
</div>
</div>
