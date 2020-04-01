<div class="container">
  <div class="row">
    <div class="col-sm-2 col-md-3 col-lg-3"></div>
    <div class="col-sm-12 col-md-6 col-lg-6" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
      <form action="<?php echo base_url() ?>signup_controller/form_validate" method="post">
        <div class="scontainer">
          <h1>Create New Poll</h1>
          <p>Please fill in this form to create Poll.</p>
          <hr>

          <label for="email"><b>Poll Title:</b></label>
          <input type="text" placeholder="Enter Poll Title to be displayed" name="poll_title" required>

          <label for="email"><b>Description (Optional):</b></label>
          <input type="text" placeholder="Add a short description about the poll" name="poll_desc">
          
          <label for="email"><b>Select Number of Options:</b></label>
          <select class="form-control" id="sel1" onchange="show_div(this.value)">
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
          <br>
          <div id="show_on_select"></div>

          <div class="row">
            <div class="col-sm-8 col-md-8">
              <label for="email"><b>Poll Starting Date:</b></label>
              <input type="date" name="poll_desc">
            </div>
            <div class="col-sm-4 col-md-4">
              <label for="email"><b>Poll Starting Time:</b></label>
              <input type="time"  style="width: 100%;padding: 15px;margin: 5px 0 22px 0;display: inline-block;border: none;background: #f1f1f1;" name="poll_desc">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8 col-md-8">
              <label for="email"><b>Poll Ending Date:</b></label>
              <input type="date" name="poll_desc">
            </div>
            <div class="col-sm-4 col-md-4">
              <label for="email"><b>Poll Ending Time:</b></label>
              <input type="time"  style="width: 100%;padding: 15px;margin: 5px 0 22px 0;display: inline-block;border: none;background: #f1f1f1;" name="poll_desc">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10 col-md-10">
             
              <label for="email"><b>Publish Results to everyone real time before the Poll Ends?</b></label>
            </div>
            <div class="col-sm-2 col-md-2">
              <label class="switch">
                <input type="checkbox" class="sinput">
                <span class="slider round"></span>
              </label>
            </div>
          </div>

          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

          <div class="clearfix">
            <a href="<?php echo base_url() ?>"><button type="button" class="sbutton cancelbtn">Cancel</button></a>
            <button type="submit" class="sbutton signupbtn" name="signup_submit">Create Poll</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker6').datetimepicker();
        $('#datetimepicker7').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>
<script type="text/javascript">
  document.getElementById("show_on_select").style.display='none';
  function show_div(selected_num) {
    var input_fields="";
    var x = document.getElementById("show_on_select");
    if (selected_num > 0) {
      var i;
      for (i = 0; i < selected_num; i++) {
        input_fields += "<input type='text' placeholder='option text"+i+"'><br>";
      }
      document.getElementById("show_on_select").innerHTML = input_fields;
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
</script>