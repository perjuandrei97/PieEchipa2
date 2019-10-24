 <!DOCTYPE HTML>
<html>
<head>
<title>Registration Page</title>
</head>
<body>
<?php 

$nume_comisie=filter_input(INPUT_POST, 'nume_comisie');
$prenume_comisie=filter_input(INPUT_POST, 'prenume_comisie');
$telefon_comisie=filter_input(INPUT_POST, 'telefon_comisie');
$email_comisie=filter_input(INPUT_POST, 'email_comisie');
$username_comisie=filter_input(INPUT_POST, 'username_comisie');
$parola_comisie=filter_input(INPUT_POST, 'parola_comisie');
$servername = "remotemysql.com";
$username = "7YNzXacPRV";
$password = "9Mx89MjGuI";
$myDB="7YNzXacPRV";

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
window.location.href='login.html'},5000);
</script>
</body>
</html>