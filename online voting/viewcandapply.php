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
	 $sql="SELECT * FROM CANDIDATE WHERE status='not';";
	 $res = mysqli_query($conn, $sql);
mysqli_num_rows($res);
	while ($row = mysqli_fetch_array($res)) { 
		$a=mysqli_real_escape_string($conn,$row["aadharno"]);
		$sql1="SELECT * FROM VOTER WHERE aadharnumber='$a';";
	 $res1 = mysqli_query($conn, $sql1);
mysqli_num_rows($res1);
	while ($row1 = mysqli_fetch_array($res1)) { ?>
		<label><b>Aadhar Number :</b></label><?php echo $row1["aadharnumber"];?><br>
		<label><b>First Name :</b></label><?php echo $row1["firstname"];?><br>
		<label><b>Last Name :</b></label><?php echo $row1["lastname"];?><br>
		<label><b>Date of birth :</b></label><?php echo $row1["DOB"];?><br>
		<label><b>Address :</b></label><?php echo $row1["address"];?><br>
		<label><b>Occupation :</b></label><?php echo $row1["occupation"];?><br>
		<label><b>Education :</b></label><?php echo $row1["education"];?><br>
		<label><b>Gender :</b></label><?php echo $row1["Gender"];?><br>
		<label><b>Phone Number :</b></label><?php echo $row1["phonenumber"];?><br>
		<label><b>Email id :</b></label><?php echo $row1["emailid"];?><br>
		<label><b>Voting constituency :</b></label><?php echo $row1["constituency"];?><br>
<?php	}
?>
	<label><b>Standing constituency :</b></label><?php echo $row["constituency"];?><br>
	<label><b>Party Name :</b></label><?php echo $row["partyname"];?><br>
	<hr>
<?php	}
?>
</center>
</body>
</html>