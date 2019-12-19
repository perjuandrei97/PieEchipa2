 <!DOCTYPE HTML>
<html>
<head>
<title>Registration Page</title>
</head>
<body>
<?php 

$servername = "127.0.0.1";
$username = "root";
$password = "";
$myDB="7YNzXacPRV";

$con=mysqli_connect($servername,$username,$password,$myDB);

if(isset($_POST['regist_submit'])){
	$nume=$_POST['nume_comisie'];
	$prenume=$_POST['prenume_comisie'];
	$email=$_POST['email_comisie'];
	$telefon=$_POST['telefon_comisie'];
	$username=$_POST['username_comisie'];
	$parola=$_POST['parola_comisie'];
	$query="insert into comisie(nume_comisie,prenume_comisie,email_comisie,telefon_comisie,username_comisie,parola_comisie)values('$nume','$prenume','$email','$telefon','$username','$parola')";
	$query2="insert into utilizator(user,pass) VALUES('$username','$parola')";
	$result=mysqli_query($con,$query);
	$result2=mysqli_query($con, $query2);
	if($result && $result2){ 
		echo "<script>alert('Comisie adaugata');</script>";
		echo "<script>window.open('test.php', '_self')</script>";
	} 
}

if(isset($_POST['inapoi_comisie'])){
	header("Location: test.php");
}

/*
try {
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO comisie(nume_comisie,prenume_comisie,email_comisie,telefon_comisie,username_comisie,parola_comisie,rol_comisie)
    VALUES ('$nume_comisie','$prenume_comisie','$telefon_comisie','$email_comisie','$username_comisie','$parola_comisie','comisie')";
    $query="INSERT INTO utilizator(user,pass,rol) VALUES('$username_comisie','$parola_comisie','comisie')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $conn->exec($query);
   
    echo "Autentificare cu succes!Bun venit ".$username_comisie; 
    
   }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
<p>Veti fi redirectat in 5 secunde..</p>
<script>
var timer = setTimeout(function(){
window.location.href='OlimpiadaNationala.php'},5000);
</script>

*/

?>
</body>
</html>