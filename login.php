<!DOCTYPE HTML>
<html>
<head><title>Login Page</title></head>
<body>

<?php
session_start();
//oezp48vf
//tb129
//10.13.11.6
//$user=filter_input(INPUT_POST, 'user');
//$pass=filter_input(INPUT_POST, 'pass');
//$rol=filter_input(INPUT_POST, 'rol');
$servername = "127.0.0.1";
$username = "root";
$password = "";
$myDB="7YNzXacPRV";


$con=mysqli_connect($servername,$username,$password,$myDB);

if(isset($_POST['login_submit'])){
	$username=$_POST['username_login'];
	$password=$_POST['parola_login'];
	$query="select * from utilizator where user='$username' and pass='$password';";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)!=0)
	{
		$_SESSION['loggedIN']="true";
		header("Location:test.php");
	}
	else {
		echo "<script>alert('Nume sau parola gresita!')</script>";
	    echo "<script>window.open('test.php','_self')</script>";
	}
}

/* if(isset($_POST['login_inapoi'])){
	header("Location: Welcome.php");
} else {
	try {
		$user = $_POST['utilizator'];
		$pass = $_POST['parola'];
		$conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// use exec() because no results are returned
		$sql = "select rol from utilizator where user='$user' and pass='$pass'";
		foreach($conn->query($sql) as $row){
			$rol = $row['rol'];
			echo "<p>Autentificare cu succes! Bun venit ".$user." ".$row['rol']."</p>"; 
			if($rol=="comisie"){
				header('Location: olimpiadacomisie.php');
			}
			if($rol=="elev"){
				header('Location: OlimpiadaNationala.php');
			}
		}
	} catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
		$conn = null;
    }
} */
?>

</body>
</html>