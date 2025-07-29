<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background: linear-gradient( 45deg , #fbac7f, #e5658a);
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password], select, input[type=date], textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

.container {
  margin-left: 25%;
  margin-right: 25%;
}

</style>
</head>
<body>


<form action="/action_page.php">
  <div class="container">
    <center>
      <h1>Register</h1>
      <p>Please fill in this form to create an account.</p>
    </center>
    <hr>

    <label for="fullname"><b>Full Name</b></label>
    <input type="text" placeholder="Enter Full Name" name="fullname" id="fullname" required>

    <label for="contact"><b>Contact Number</b></label>
    <input type="number" placeholder="Enter Contact Number" name="contact" id="contact" required>

    <label for="dob"><b>Date of Birth</b></label>
    <input type="date" placeholder="Enter Date of Birth" name="dob" id="dob" required>

    <label for="gender"><b>Gender</b></label>
    <select name="gender">
      <option value="">Select Gender</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>

    <label for="address"><b>Address</b></label>
    <textarea type="address" placeholder="Enter Address" name="address" id="address" required></textarea>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>

  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>


</body>
</html>
