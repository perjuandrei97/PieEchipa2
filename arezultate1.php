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
    $conn = null ;
    }
    
    
  if(isset($_POST['Adauga'])){
    
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
$q="SELECT nume_candidati,prenume_candidati ,clasa_candidati ,scoala_candidati ,judet_candidati ,localitate_candidati,proba1,proba2,proba3 FROM candidati";
  $sql = "INSERT INTO rezultate(nume_candidati,prenume_candidati,clasa_candidati,scoala_candidati,judet_candidati,localitate_candidati,proba1,proba2,proba3)
    VALUES ('$nume_candidati','$prenume_candidati','$clasa_candidati','$scoala_candidati','$judet_candidati','$localitate_candidati','$proba1','$proba2','$proba3')";
  
echo $sql;

$conn->exec($sql);
 header('Location:olimpiadacomisie.php');

  }else{
      echo"eroare";}
?>