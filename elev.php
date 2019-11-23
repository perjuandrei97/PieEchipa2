 <!DOCTYPE HTML>
<html>
<head>
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
    // use exec() because no results are returned
    $conn->exec($sql);
    $conn->exec($query);
   
   
   }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>

</body>
</html>