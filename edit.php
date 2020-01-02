<html>
<body>
<?php
$cod=filter_input(INPUT_POST, 'cod');
$nume_candidati=filter_input(INPUT_POST, 'nume_candidati');
$prenume_candidati=filter_input(INPUT_POST, 'prenume_candidati');
$clasa_candidati=filter_input(INPUT_POST, 'clasa_candidati');
$scoala_candidati=filter_input(INPUT_POST, 'scoala_candidati');
$judet_candidati=filter_input(INPUT_POST, 'judet_candidati');
$localitate_candidati=filter_input(INPUT_POST, 'localitate_candidati');
$proba1=filter_input(INPUT_POST, 'proba1');
$proba2=filter_input(INPUT_POST, 'proba2');
$proba3=filter_input(INPUT_POST, 'proba3');
$servername = "127.0.0.1";
$username = "root";
$password = "";
$myDB="7YNzXacPRV";
try {
     $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // use exec() because no results are returned
   $sql = "SELECT * FROM rezultate";
$conn->query($sql);
    }catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    $conn = null;
    }
    if($conn->query($sql)==TRUE){
    	
    
    }else{echo "nu s-a sters".$conn->error;}
    
?>
</body>
</html>