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

if (isset($_POST['submit'])){
		 $user = mysqli_real_escape_string($conn, $_POST['username']);
	 $pass = mysqli_real_escape_string($conn, $_POST['psw']);

	if($conn)
	{
		echo 'insertion successful';
		$user_check_query = "SELECT * FROM candidate WHERE username='$user' AND password='$pass'";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if($user){
	  header("Location:http://localhost/voting/candidatepage.php");
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
