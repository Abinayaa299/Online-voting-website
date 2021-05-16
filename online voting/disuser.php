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
	  </p>
      </div>
  </div>
  </div>
  <hr>
  
  <!-- Menu Section -->
  

</body>
</html>
