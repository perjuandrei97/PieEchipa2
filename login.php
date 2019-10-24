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
$servername = "remotemysql.com";
$username = "7YNzXacPRV";
$password = "9Mx89MjGuI";
$myDB="7YNzXacPRV";
try {
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
</script>
</body>
</html>