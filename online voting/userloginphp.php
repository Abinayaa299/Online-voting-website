<html>
<body>
<center>

<body bgcolor="pink"></body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voting";
$conn=mysqli_connect($servername,$username,$password,$dbname);
session_start();
if (isset($_POST['submit'])){
		 $user = mysqli_real_escape_string($conn, $_POST['username']);
	 $pass = mysqli_real_escape_string($conn, $_POST['psw']);
	
	if($conn)
	{
		echo 'insertion successful';
		$user_check_query = "SELECT * FROM voter WHERE username='$user' AND password='$pass'";
  $result = mysqli_query($conn, $user_check_query);

mysqli_num_rows($result);
	if($row = mysqli_fetch_array($result)) { 
			$_SESSION['voteraadhar']=mysqli_real_escape_string($conn,$row["aadharnumber"]);
	
	  header("Location:http://localhost/voting/userpage.php");
  }
  else
  {
	echo '<script type="text/javascript">';
echo ' alert("Invalid user name or password !")';  //not showing an alert box.
echo '</script>';
  }
	$conn->close();
	}
}
?>
</center>
</body>
</html>
