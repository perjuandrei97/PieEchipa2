 <!DOCTYPE HTML>
<html>
<head>
<title>Pagina de Contact</title>
</head>
<body>

<?php 
$subiect=filter_input(INPUT_POST, 'subiect');
$nume=filter_input(INPUT_POST, 'nume');
$prenume=filter_input(INPUT_POST, 'prenume');
$telefon=filter_input(INPUT_POST, 'telefon');
$email=filter_input(INPUT_POST, 'email');
$mesaj=filter_input(INPUT_POST, 'mesaj');
$servername = "remotemysql.com";
$username = "7YNzXacPRV";
$password = "9Mx89MjGuI";
$myDB="7YNzXacPRV";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO
   contact(subiect,nume,prenume,telefon,email,mesaj)
    VALUES ('$subiect','$nume','$prenume','$telefon','$email','$mesaj')";
     // use exec() because no results are returned
    $conn->exec($sql);
   
    echo ""; 
   }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
<style>
.button{
display: button;
width:20%;
border : none;
background-color: #42f4d4;
font-size: 16px;
}
</style>
<br><br>
<br><center><p>Formularul a fost trimis cu succes.Alegeti ce doriti sa faceti in continuare:</p><br><br>

<button class ="button" onclick="window.location.href='OlimpiadaNationala.php'">Intoarcere la Pagina Principala</button>
<button class ="button" onclick="window.location.href='Welcome.html'">Intoarcere la Meniu</button></center><br><br>
<center><img src="intrebare.jpg" width="300" height="300"></center>

</body>
</html>