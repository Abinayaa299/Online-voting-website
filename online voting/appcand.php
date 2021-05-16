<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voting";
session_start();
$conn=mysqli_connect($servername,$username,$password,$dbname);

		$sql1="SELECT * FROM CANDIDATE where status='not';";
	 $res1 = mysqli_query($conn, $sql1);
mysqli_num_rows($res1);
$count=1;
?>
<!-- Sidebar (hidden by default) -->


<!-- Top menu -->
  
<!-- !PAGE CONTENT! -->

<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <?php
  while ($row1 = mysqli_fetch_array($res1))
  {
	  $aad = mysqli_real_escape_string($conn, $row1['aadharno']);
	  $sql = "select name from images where aadnum='$aad'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$sql2 = "select * from voter where aadharnumber='$aad'";
$result2 = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_array($result2);
$image = $row['name'];
$image_src = "".$image;
  if($count%4==1)
  { ?>
  <div cl`ass="w3-row-padding w3-padding-16 w3-center" id="food">
  <?php } ?>
    <div class="w3-quarter">
      <img src='<?php echo $image ; ?>'  alt="no image" width="200" height="200">
        <h3><?php echo $row2["firstname"];?></h3>
	  <h3><?php echo $row2["aadharnumber"];?></h3>
	  <form action="appcand.php" method="POST">
    <input id='btn' name="submit<?php echo $count; ?>" type='submit' value='View' class="loginbtn">
	<?php 
	
	if(isset($_POST["submit".$count])){
		$_SESSION['user']=$row2["aadharnumber"];
		
	header("Location:http://localhost/voting/appindcand.php");
	}
	?>
	</form>
	
    </div>
    <?php
	$count = $count + 1;
  if($count%4==1)
	  
  { ?>
  </div>
  <?php 
  } 
	
  }
  ?>
  </div>

  <!-- Pagination -->
  
<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
