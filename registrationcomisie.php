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
	$invitatie=$_POST['invitatie_comisie'];
	
	$query_check_invitatie="select * from invitatie where cod_inv=MD5('$invitatie')";
	$result_check_invitatie=mysqli_query($con, $query_check_invitatie);
	
	if(mysqli_num_rows($result_check_invitatie)>0) {
		$query_check_username="select user from utilizator where user='$username'";
		$res_chk_usr=mysqli_query($con, $query_check_username);
		$query_comisie_code="select * from comisie where email_comisie='$email'";
		$comisie_code_result1=mysqli_query($con, $query_comisie_code);		
		if(mysqli_num_rows($res_chk_usr)>0) {
			echo "<script>alert('Numele de utilizator este deja inregistrat');</script>";
		} else if(mysqli_num_rows($comisie_code_result1)>0){
			echo "<script>alert('Acest email este deja inregistrat $email');</script>";
		} else {
			$insert_comisie="insert into comisie(nume_comisie,prenume_comisie,email_comisie,telefon_comisie)values('$nume','$prenume','$email','$telefon')";
			$result_insert_comisie=mysqli_query($con, $insert_comisie);
			if($result_insert_comisie) {
				$comisie_code_result2=mysqli_query($con, $query_comisie_code);		
				$obj = $comisie_code_result2->fetch_object();
				$comisie_code = $obj->cod;
				$insert_user="insert into utilizator(user,pass, cod_comisie) VALUES('$username',MD5('$parola'), '$comisie_code')";
				$result_insert_user=mysqli_query($con, $insert_user);
				if($result_insert_user) {
					echo "<script>alert('Done!');</script>";
					$query_delete_inv="delete from invitatie where cod_inv=MD5('$invitatie')";
					$result_delete_inv=mysqli_query($con, $query_delete_inv);
				} else {
					echo "<script>alert('Utilizatorul nu a putut fi adaugat!');</script>";
				}
			} else {
				echo "<script>alert('Utilizatorul nu a putut fi adaugat in baza de date');</script>";
			}
		}
	} else {
		echo "<script>alert('Codul invitatiei nu este corect');</script>";
	}
	mysqli_commit($con);
	mysqli_close($con);
}
echo "<script>window.open('test.php', '_self')</script>";

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