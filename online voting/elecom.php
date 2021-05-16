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

}

input[type=text]:focus, input[type=password]:focus {
  align: center;
  background-color: #0000ff;
  outline: none;
}

hr {
  align: center;
  border: 1px solid #0000ff;
  margin-bottom: 25px;
}
button {
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
  background-color: #0000ff;
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
<body class="body" background="ec1.jpg">
<form action="elecom.php" method="post" align="center">
<div class="content">
  <div class="container" align="center">
    <h1 align="center">ELECTION COMMISSION</h1>
    <hr>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    

    <div class="clearfix">
      <input type="submit" name="submit" />
    </div>
	<?php
include "elecomphp.php";
?>
</div>
</div>
</form>
</body>
</html>
