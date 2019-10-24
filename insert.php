<?php
$servername = "remotemysql.com";
$username = "7YNzXacPRV";
$password = "9Mx89MjGuI";
$myDB="7YNzXacPRV";
try {
     $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // use exec() because no results are returned
  
    }catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    $conn = null;
    }

if(isset($_POST["item_name"]))
{
 $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
 $order_id = uniqid();
 for($count = 0; $count < count($_POST["nume_candidati"]); $count++)
 {  
  $query = "INSERT INTO rezultate 
   (nume_candidati, prenume_candidati, clasa_candidati) 
  VALUES (:nume_candidati,  :prenume_candidati, :clasa_candidati)
  ";
  $statement = $conn->prepare($query);
  $statement->execute(
   array(
    ':nume_candidati'   => $nume_candidati,
    ':prenume_candidati'  => $_POST["prenume_candidati"][$count], 
    ':clasa_candidati' => $_POST["clasa_candidati"][$count], 
    
   )
  );
 }
 $result = $statement->fetchAll();
 if(isset($result))
 {
  echo 'ok';
 }
}

?>
