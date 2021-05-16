<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;
width: 100%;
align: center;}
* {box-sizing: border-box}
input[type=text], input[type=password] {
 align: center; 
 width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  align: center;
  background-color: #ddd;
  outline: none;
}

hr {
  align: center;
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}
.loginbtn {
  padding: 14px 20px;
  background-color: #f44336;
}
.loginbtn, .signupbtn {
  float: left;
  width: 50%;
}
.container {
  padding: 16px;
  align: center;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
  
}
.content {
  max-width: 500px;
  margin: auto;
}

@media screen and (max-width: 90px) {
  .loginbtn, .signupbtn {
     width: 50%;
  }
}
</style>
<body background="vimg.jpg" style="background-size:1270px;">

<form action="userlogin.php" id="#form" method="post" name="#form" align="center">
<div class="content">
  <div class="container" align="center">
    <h1 align="center">USER LOGIN</h1>
    <hr>

    <label for="email"><b>USERNAME &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
    <input type="text" placeholder="Enter username" name="username" required>
    <br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    

    <div class="clearfix">
      <input id='btn' name="submit" type='submit' value='Login' class="loginbtn">
     <a href="usersignup.php">Don't have an account?</a>
    </div>
	<?php
include "userloginphp.php";
?>
</div>
</div>
</form>
</body>
</html>

