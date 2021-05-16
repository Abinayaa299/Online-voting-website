 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
  width: 100%;
  align: center;
}

* {
  box-sizing: border-box;
}
.container {
  padding: 16px;
  background-color: white;
}

input[type=text], input[type=password] {
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
.content {
  max-width: 500px;
  margin: auto;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.registerbtn {
  background-color: #4CAF50;
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
a {
  color: dodgerblue;
}
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body background="nv.png">

<form action="voterapplyphp.php" method="POST" enctype="multipart/form-data">
<div class="content">
  <div class="container">
    <h1>Application</h1>
    <p>Please fill in this form to apply to vote.</p>
    <hr>

    <label for="Aadhar number"><b>Aadhar Number</b></label>
    <input type="text" placeholder="Enter aadhar number" name="aadnum" required>


    <label for="First Name"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="First_Name" required>
    <label for="Last Name"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="Last_Name" required>
    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter address" name="address" required>
	<label for="pincode"><b>Pin code</b></label>
    <input type="text" placeholder="Enter pincode" name="pincode" required>

    <label for="Gender"><b>Gender</b></label><br>
    <input type="radio" name="gender" value="male" checked> Male<br>
    <input type="radio" name="gender" value="female"> Female<br>
    <input type="radio" name="gender" value="other"> Others<br><br>
    <label for="phoneno"><b>Phone number</b></label>
    <input type="text" placeholder="Enter phone number" name="phoneno" required>
    
    <label for="occupation"><b>Occupation</b></label></br></br>
    <select name="occupation"> 
  <option value="agriculture">Agriculture</option>
  <option value="government">Government Employee</option>
  <option value="private">Private Employee</option>
  <option value="self">Self Employee</option>
  <option value="student">Student</option>
  <option value="unemployed">Unemployed</option>
  <option value="business">Business</option>
  <option value="others">Others</option>
</select></br></br>
    <label for="education"><b>Education</b></label></br></br>
     <select name="education">
  <option value="below10">secondary School</option>
  <option value="above10">Higher Secondary School</option>
  <option value="bachelors">Bachelors</option>
  <option value="masters">Masters</option>
  <option value="phd">PHD</option>
</select></br></br>
    
    <label for="dob"><b>Enter date of birth</b></label></br></br>
    <input type="date" name="DOB" required></br></br>
    <label for="email"><b>Enter Email id</b></label>
    <input type="text" name="Email" required>
	<label for="photo"><b>Upload recent photo</b></label>
	<input type="file" name="image"/>
    <hr>

    <input id='btn' name="submit" type='submit' value='Next page' class="registerbtn">
    <button type="reset" class="registerbtn">Cancel</button>
  </div>
  <?php
include "voterapplyphp.php";
?>
  
</div>
</form>

</body>
</html>
