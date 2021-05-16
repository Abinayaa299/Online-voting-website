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
.bg {
  background-image: url("si.jpg");

  height: 100%; 

  background-position: center;
  background-repeat: no-repeat; 
  background-size: cover;
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
<body background="si.jpg">
<form action="usersignup.php" id="#form" method="POST" name="#form">
<div class="content">
  <div class="container">
    <h1>SIGN UP</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="username"><b>User Name</b></label>
    <input type="text" placeholder="Enter User name" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    
    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <hr>

    <input id='btn' name="submit" type='submit' value='Confirm' class="registerbtn">
    <button type="reset" class="registerbtn">Cancel</button>
  </div>
  <?php
include "usersignupphp.php";
?>
  <div class="container signin">
    <a href="userlogin.php">Already have an account?</a>
  </div>
</div>
</form>

</body>
</html>
