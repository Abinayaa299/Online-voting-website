<!DOCTYPE html>
<html>
<head>
<style>
img {
  float: left;
}
</style>
</head>
<body>
<h3><center>RESULTS</center></h3>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voting";
session_start();
$conn=mysqli_connect($servername,$username,$password,$dbname);

		$sql1="SELECT * FROM CANDIDATE where status='approved' ORDER BY votes DESC";
	 $res1 = mysqli_query($conn, $sql1);
mysqli_num_rows($res1);

while ($row1 = mysqli_fetch_array($res1))
  {
	  $aad = mysqli_real_escape_string($conn, $row1['aadharno']);
	  $sql = "select name from images where aadnum='$aad'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$sql2="SELECT * FROM VOTER where aadharnumber='$aad'";
	 $res2 = mysqli_query($conn, $sql2);
	 $row2 = mysqli_fetch_array($res2);
$image = $row['name'];
?>
 
<p><img src='<?php echo $image ; ?>' alt="candidate" style="width:170px;height:170px;">
<label><b>Candidate name :</b></label><?php echo $row2['firstname'] ; ?><br><br>
<label><b>Party name :</b></label><?php echo $row1['partyname'] ; ?><br><br>
<label><b>Votes :</b></label><?php echo $row1['votes'] ; ?>
<br><br><br><br><br><br><br>
<br><hr>
  <?php } ?>
</body>
</html>
