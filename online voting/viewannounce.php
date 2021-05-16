
<html>
<body>
<center>

<body background="an.jpg">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voting";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$sql = "SELECT * FROM announcement"; 
$res = mysqli_query($conn, $sql);
mysqli_num_rows($res);
while ($row = mysqli_fetch_array($res)) { 
?>
	<br>
	<br>
	<br><b><?php
            echo $row["announcement"];?>
			</b><br>
			<br>
			<br>
			<hr>
<?php
        } 
		?>
		</body>
</html>
