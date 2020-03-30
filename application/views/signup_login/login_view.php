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

         <label for="usrname">Username</label>
            <input type="text" id="usrname" name="uemail" required>

            <label for="psw">Password</label>
            <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            <p>&nbsp;</p>
            <input type="submit" value="Submit" name="login">
        <br><br>
      </form>
      <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
    </div>
  </div>
</div>
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
