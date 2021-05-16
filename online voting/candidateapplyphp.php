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
	 $sql="SELECT * FROM VOTER WHERE aadharnumber='$aad';";
	 $res = mysqli_query($conn, $sql);
mysqli_num_rows($res);
while ($row = mysqli_fetch_array($res)) { 
            $u=mysqli_real_escape_string($conn,$row["username"]);
			$p=mysqli_real_escape_string($conn,$row["password"]);
        } 
     $cons = mysqli_real_escape_string($conn, $_POST['const']);
	$party = mysqli_real_escape_string($conn, $_POST['party']);
		$sql = $conn->prepare("INSERT INTO CANDIDATE(aadharno,constituency,partyname,status,username,password) VALUES('$aad','$cons','$party','not','$u','$p');");
$sql->execute(); 
	header("Location:http://localhost/voting/userpage.php");
       
	

}
?>
</center>
</body>
</html>
