<!DOCTYPE HTML>
<html>
<head>
<title>Invitation</title>
</head>
<body>
<?php 

$servername = "127.0.0.1";
$username = "root";
$password = "";
$myDB="7YNzXacPRV";

$con=mysqli_connect($servername,$username,$password,$myDB);

if(isset($_POST['invite_submit'])){
	$cod=$_POST['cod_invitatie'];
	$query="insert into invitatie (cod_inv) values (MD5('$cod'))";
	$result=mysqli_query($con, $query);
	if($result) {
		echo "<script>alert('Invitatie adaugata! Codul invitatiei: ". $cod ."');</script>";
	} else {
		echo "<script>alert('Invitatia nu a putut fi adaugata!');</script>";
	}
	echo "<script>window.open('test.php', '_self')</script>";
}
?>
</body>
</html>