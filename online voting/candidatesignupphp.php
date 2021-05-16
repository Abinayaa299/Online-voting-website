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
	 $username = mysqli_real_escape_string($conn, $_POST['username']);
     $password = mysqli_real_escape_string($conn, $_POST['psw']);
	$pass = mysqli_real_escape_string($conn, $_POST['psw-repeat']);
	$aad = $_SESSION['voteraadhar'];
	if($pass==$password){

	if($conn)
	{
		$user_check_query = "SELECT * FROM candidate WHERE username='$username'";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if($user){
	  echo '<script type="text/javascript">';
echo ' alert("User name already exists!")';  //not showing an alert box.
echo '</script>';
  }
  else
  {
		$sql = $conn->prepare("UPDATE candidate set username='$username',password='$password' where aadharnumber='$aad';");
$sql->execute(); 
	header("Location:http://localhost/voting/candilogin.php");
       
	}
	}
	else
	{
		echo 'insertion failed';
	}
	
	$conn->close();
	}
	else
	{
		echo '<script type="text/javascript">';
echo ' alert("passwords do not match!")';  //not showing an alert box.
echo '</script>';
  
		
	}
}
?>
</center>
</body>
</html>
