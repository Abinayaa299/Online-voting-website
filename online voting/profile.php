<html>
<body>
<center>

<body></body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voting";
session_start();
$conn=mysqli_connect($servername,$username,$password,$dbname);
$aad = $_SESSION['voteraadhar'];
$sql = "select name from images where aadnum='$aad'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

$image = $row['name'];
$image_src = "".$image;


?>

<img src='<?php echo $image ; ?>' width=500 height=500>
</center>
</body>
</html>
