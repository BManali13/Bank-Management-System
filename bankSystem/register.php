<form action="action.php" method="post">
  <input type="hidden" name="register_action" value="yes">

  <div class="row">
    <div class="col-sm-12">
      <div class="col-sm-6">
        <label for="fullname"><b>Full Name</b></label>
        <input type="text" class="form-control" placeholder="Enter Full Name" name="fullname" id="fullname" required>
      </div>
      <div class="col-sm-6">
        <label for="contact"><b>Contact Number</b></label>
        <input type="number" class="form-control" placeholder="Enter Contact Number" name="contact" id="contact" required>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <div class="col-sm-6">
        <label for="dob"><b>Date of Birth</b></label>
        <input type="date" class="form-control" placeholder="Enter Date of Birth" name="dob" id="dob" required>
      </div>
      <div class="col-sm-6">
        <label for="gender"><b>Gender</b></label>
        <select name="gender" class="form-control" required>
          <option value="">Select Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <div class="col-sm-6">
        <label for="address"><b>Address</b></label>
        <textarea type="address" class="form-control" placeholder="Enter Address" name="address" id="address" required></textarea>
      </div>
      <div class="col-sm-6">
        <label for="email"><b>Email</b></label>
        <input type="text" class="form-control" placeholder="Enter Email" name="email" id="email" required>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <div class="col-sm-6">
        <label for="psw"><b>Password</b></label>
        <input type="text" class="form-control" placeholder="Enter Password" name="psw" id="psw" required>
      </div>
      <div class="col-sm-6">
        <label for="psw-repeat"><b>Username</b></label>
        <input type="text" class="form-control" placeholder="Enter Username" name="username" id="username" required>
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
      <center><button type="submit" class="btn btn-success form-control">Submit</button></center>
    </div>
    <div class="col-sm-1"></div>
  </div>
  <br>
  <div class="row">
    <div class="col-sm-12">
      <div class="col-sm-4"></div>
      <div class="col-sm-6"><p>Already have an account? <a href="index.php">Sign in</a></p></div>
    </div>
  </div>
</form>