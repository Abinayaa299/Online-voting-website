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
	 $announce = mysqli_real_escape_string($conn, $_POST['Announcement']);
	$sql = $conn->prepare("INSERT INTO announcement values('$announce');");
	$sql->execute(); 
	  header("Location:http://localhost/voting/elecompage.php");
}
?>
</center>
</body>
</html>
