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
	$aad= $_POST['aadnum'];
		$sql = $conn->prepare("UPDATE CANDIDATE SET STATUS='approved' WHERE AADHARNO='$aad';");
$sql->execute(); 
	header("Location:http://localhost/voting/elecompage.php");
       
	

}
if (isset($_POST['reject'])){
	$aad= $_POST['aadnum'];
		$sql = $conn->prepare("UPDATE CANDIDATE SET STATUS='rejected' WHERE AADHARNO='$aad';");
$sql->execute(); 
	header("Location:http://localhost/voting/elecompage.php");
       
	

}
?>
</center>
</body>
</html>
