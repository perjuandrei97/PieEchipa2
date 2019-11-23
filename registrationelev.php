 <!DOCTYPE HTML>
<html>
<head>
<title>Registration Page</title>
</head>
<body>

<?php 

$nume_candidati=filter_input(INPUT_POST, 'nume_candidati');
$prenume_candidati=filter_input(INPUT_POST, 'prenume_candidati');
$adresa_candidati=filter_input(INPUT_POST, 'adresa_candidati');
$telefon_candidati=filter_input(INPUT_POST, 'telefon_candidati');
$email_candidati=filter_input(INPUT_POST, 'email_candidati');
$clasa_candidati=filter_input(INPUT_POST, 'clasa_candidati');
$scoala_candidati=filter_input(INPUT_POST, 'scoala_candidati');
$judet_candidati=filter_input(INPUT_POST, 'judet_candidati');
$localitate_candidati=filter_input(INPUT_POST, 'localitate_candidati');
$user_candidati=filter_input(INPUT_POST, 'user_candidati');
$parola_candidati=filter_input(INPUT_POST, 'parola_candidati');
$servername = "127.0.0.1";
$username = "root";
$password = "";
$myDB="7YNzXacPRV";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO candidati (nume_candidati,prenume_candidati,adresa_candidati,telefon_candidati,email_candidati,clasa_candidati,scoala_candidati,judet_candidati,localitate_candidati,user_candidati,parola_candidati,rol_candidati)
    VALUES ('$nume_candidati','$prenume_candidati','$adresa_candidati','$telefon_candidati','$email_candidati','$clasa_candidati','$scoala_candidati','$judet_candidati','$localitate_candidati','$user_candidati','$parola_candidati','elev')";
   $query="INSERT INTO utilizator(user,pass,rol) VALUES('$user_candidati','$parola_candidati','elev')";
   $rez="INSERT INTO rezultate(nume_candidati,prenume_candidati,clasa_candidati,scoala_candidati,localitate_candidati,judet_candidati,proba1,proba2,proba3)VALUES('$nume_candidati','$prenume_candidati','$clasa_candidati','$scoala_candidati','$localitate_candidati','$judet_candidati','0','0','0')";

    // use exec() because no results are returned
    $conn->exec($sql);
    $conn->exec($query);
       $conn->exec($rez);

    echo "Autentificare cu succes! Bun venit ".$user_candidati; 
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
window.location.href='login.html'},5000);
</script>
</body>
</html>