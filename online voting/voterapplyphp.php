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
		$aad = mysqli_real_escape_string($conn, $_POST['aadnum']);
	 $fname = mysqli_real_escape_string($conn, $_POST['First_Name']);
     $lname = mysqli_real_escape_string($conn, $_POST['Last_Name']);
	 $dat= $_POST['DOB'];
	 $datebi = date("Y-m-d", strtotime($dat));
	  $add = mysqli_real_escape_string($conn, $_POST['address']);
	   $gen = mysqli_real_escape_string($conn, $_POST['gender']);
	     $phno = mysqli_real_escape_string($conn, $_POST['phoneno']);
		$pin=$_POST['pincode'];
		 $email = mysqli_real_escape_string($conn, $_POST['Email']);
	   $edu = mysqli_real_escape_string($conn, $_POST['education']);
	    $ocu = mysqli_real_escape_string($conn, $_POST['occupation']);
		$sql = "SELECT * FROM constituency where pincode='$pin'"; 
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($res);
		$const = mysqli_real_escape_string($conn, $row['constituencyname']);
$_SESSION['voteraadhar']=mysqli_real_escape_string($conn, $_POST['aadnum']);
	$sql = $conn->prepare("INSERT INTO voter(aadharnumber,firstname,lastname,DOB,address,occupation,education,Gender,phonenumber,pincode,emailid,constituency) VALUES ('$aad','$fname','$lname','$datebi','$add','$ocu','$edu','$gen','$phno','$pin','$email','$const');");
$sql->execute(); 
if (isset($_FILES["image"]["name"])) {
$name = $_FILES["image"]["name"];
  $target_dir ="/xampp/htdocs/voting/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);

 
     // Insert record
     $query = $conn->prepare("insert into images(name,aadnum) values('".$name."','$aad');");
     $query->execute(); 
  
     // Upload file
     move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$name);

	  header("Location:http://localhost/voting/usersignup.php");

	$conn->close();
	
}
}
?>
</center>
</body>
</html>
 