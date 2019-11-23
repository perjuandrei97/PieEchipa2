<!DOCTYPE HTML>
<html>
<head><title>Login Page</title></head>
<body>

<?php
//oezp48vf
//tb129
//10.13.11.6
$user=filter_input(INPUT_POST, 'user');
$pass=filter_input(INPUT_POST, 'pass');
$rol=filter_input(INPUT_POST, 'rol');
$servername = "127.0.0.1";
$username = "root";
$password = "";
$myDB="7YNzXacPRV";


$con=mysqli_connect($servername,$username,$password,$myDB);

if(isset($_POST['login_submit'])){
	$username=$_POST['utilizator'];
	$password=$_POST['parola'];
	$query="select * from utilizator where user='$username' and pass='$password';";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		header("Location:OlimpiadaNationala.php");
	}
	else {
		echo "<script>alert('Nume sau parola gresita!')</script>";
	    echo "<script>window.open('login.html','_self')</script>";
}
}

if(isset($_POST['login_inapoi'])){
	header("Location:Welcome.html");
}


/*try {
     $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // use exec() because no results are returned
    $sql = "select rol from utilizator where user='$user' and pass='$pass'";
    foreach($conn->query($sql) as $row){
       // print_r($row);
    echo "Autentificare cu succes!Bun venit ".$user; 
    if($row['rol']=='comisie'){
sleep(3);
  echo "Autentificare cu succes!Bun venit ".$user; 
  
header('Location:olimpiadacomisie.php');
 }
   }
   }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    $conn = null;
    }
 
    
?>
<p>Veti fi redirectat in 3 secunde..</p>
<script>
var timer = setTimeout(function(){window.location.href='OlimpiadaNationala.php'},3000);
</script> */

?>
</body>
</html>