<html>
<title>Modifica Rezultate</title>
<body background="modrez.jpg">
<center>
<h3>Modifica Rezultate</h3>
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
<table>
<tr>

    <th>Cod</th>
    <th>Nume</th>
    <th>Prenume</th>
    <th>Clasa</th>
    <th>Scoala</th>
    <th>Judet</th>
    <th>Localitate</th>
     <th>Proba1</th>
      <th>Proba2</th>
       <th>Proba3</th>
       <th>Modifica</th>
      <?php

    foreach($conn->query($sql) as $row){
    	echo"<tr>";
    	   	echo "<form action=edit1.php method=post>";
    	  
    	    	echo "<td><input type=text name=cod value='".$row['cod']."'></td>";
             		echo "<td><input type=text name=nume_candidati value=' ".$row['nume_candidati']."'></td>";
    	        		echo "<td><input type=text name=prenume_candidati value=' ".$row['prenume_candidati']."'></td>";
    	        			echo "<td><input type=text name=clasa_candidati value=' ".$row['clasa_candidati']." '></td>";
    		        			echo "<td><input type=text name=scoala_candidati value=  ' ".$row['scoala_candidati']."'></td>";
    		        				echo "<td><input type=text name=judet_candidati value=' ".$row['judet_candidati']." '></td>";
    		        					echo "<td><input type=text name=localitate_candidati value= ' ".$row['localitate_candidati']."'></td>";
    		        					echo "<td><input type=text name=proba1 value= ' ".$row['proba1']."'></td>";
    		        					echo "<td><input type=text name=proba2 value= ' ".$row['proba2']."'></td>";
    		        					echo "<td><input type=text name=proba3 value= ' ".$row['proba3']."'></td>";
    		        					 	echo "<td><input type=submit name='Modifica' value='Modifica'>";
    			                				echo "</form>";
    			                        			echo "</tr>";

}

  ?>
</table>
</center>
</body>
</html>