<html>
<body>
<center>

<body bgcolor="pink"></body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voting";
if(isset($_POST['submit'])){
    $pass=$_POST['password'];
	
       
	if($pass=='root'){
		header("Location:http://localhost/voting/elecompage.php");
	}
	else{
		echo '<script type="text/javascript">';
		echo ' alert("Incorrect password")';  //not showing an alert box.
		echo '</script>';
	}

}
?>
</center>
</body>
</html>
