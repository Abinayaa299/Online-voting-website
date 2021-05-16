<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voting";
session_start();
$conn=mysqli_connect($servername,$username,$password,$dbname);
$aad = $_SESSION['user'];
$sql = "select name from images where aadnum='$aad'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$sql2 = "select * from candidate where aadharno='$aad'";
$result2 = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_array($result2);
$sql1="SELECT * FROM VOTER where aadharnumber='$aad';";
	 $res1 = mysqli_query($conn, $sql1);
mysqli_num_rows($res1);
$row1 = mysqli_fetch_array($res1);
$image = $row['name'];
$image_src = "".$image;


?>


<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge">Le Catering</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src='<?php echo $image ; ?>' width="400" height="500">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">PROFILE</h1><br>
      <p class="w3-large">
	  <label><b>Aadhar Number :</b></label><?php echo $row1["aadharnumber"];?><br><br>
		<label><b>First Name :</b></label><?php echo $row1["firstname"];?><br><br>
		<label><b>Last Name :</b></label><?php echo $row1["lastname"];?><br><br>
		<label><b>Date of birth :</b></label><?php echo $row1["DOB"];?><br><br>
		<label><b>Address :</b></label><?php echo $row1["address"];?><br><br>
		<label><b>Occupation :</b></label><?php echo $row1["occupation"];?><br><br>
		<label><b>Education :</b></label><?php echo $row1["education"];?><br><br>
		<label><b>Gender :</b></label><?php echo $row1["Gender"];?><br><br>
		<label><b>Phone Number :</b></label><?php echo $row1["phonenumber"];?><br><br>
		<label><b>Email id :</b></label><?php echo $row1["emailid"];?><br><br>
		<label><b>Voting constituency :</b></label><?php echo $row1["constituency"];?><br><br>
		<label><b>Standing constituency :</b></label><?php echo $row2["constituency"];?><br><br>
		<label><b>Party name :</b></label><?php echo $row2["partyname"];?><br><br>
		<form method="POST" action="votepage.php">
		<input id='btn' name="submit" type='submit' value='Vote' class="loginbtn">
		
	<?php 
	$aa=$_SESSION['voteraadhar'];
	
	if(isset($_POST["submit"])){
		
		$sql3="SELECT * FROM VOTER where aadharnumber='$aa';";
	 $res3 = mysqli_query($conn, $sql3);
mysqli_num_rows($res3);
$row3 = mysqli_fetch_array($res3);
		if($row3['status']=='no'){
		$sql = $conn->prepare("UPDATE voter SET STATUS='yes' WHERE AADHARNUMBER='$aa';");
$sql->execute(); 
		$sql4 = $conn->prepare("INSERT INTO VOTES(aadharno,candaad) VALUES('$aa','$aad');");
$sql4->execute(); 
$sql5 = $conn->prepare("UPDATE CANDIDATE SET votes=votes+1 WHERE aadharno='$aad'");
$sql5->execute(); 
	header("Location:http://localhost/voting/userpage.php");
		}
		else
			echo "Already voted";
	}
	?>
	</form>
	  </p>
      </div>
  </div>
  </div>
  <hr>
  
  <!-- Menu Section -->
  

</body>
</html>
