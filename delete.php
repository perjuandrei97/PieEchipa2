<html>
<head>
<title>Sterge Candidati</title>
<body background="stergepic.jpg">
<center>
<h3>Sterge Candidati</h3>
<?php
$cod=filter_input(INPUT_POST, 'cod');
$nume_candidati=filter_input(INPUT_POST, 'nume_candidati');
$prenume_candidati=filter_input(INPUT_POST, 'prenume_candidati');
$clasa_candidati=filter_input(INPUT_POST, 'clasa_candidati');
$scoala_candidati=filter_input(INPUT_POST, 'scoala_candidati');
$judet_candidati=filter_input(INPUT_POST, 'judet_candidati');
$localitate_candidati=filter_input(INPUT_POST, 'localitate_candidati');
$servername = "remotemysql.com";
$username = "7YNzXacPRV";
$password = "9Mx89MjGuI";
$myDB="7YNzXacPRV";
try {
     $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // use exec() because no results are returned
   $sql = "SELECT * FROM candidati";
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
    <th>Sterge</th>
  <?php

    foreach($conn->query($sql) as $row){
    	echo"<tr>";
    	   	echo "<form action=delete1.php method=post>";
    	    	echo "<td><input type=text name=cod value='".$row['cod']."'s</td>";
             		echo "<td><input type=text name=nume_candidati value=' ".$row['nume_candidati']."'></td>";
    	        		echo "<td><input type=text name=prenume_candidati value=' ".$row['prenume_candidati']."'></td>";
    	        			echo "<td><input type=text name=clasa_candidati value=' ".$row['clasa_candidati']." '></td>";
    		        			echo "<td><input type=text name=scoala_candidati value=  ' ".$row['scoala_candidati']."'></td>";
    		        				echo "<td><input type=text name=judet_candidati value=' ".$row['judet_candidati']." '></td>";
    		        					echo "<td><input type=text name=localitate_candidati value= ' ".$row['localitate_candidati']."'></td>";
    		            					echo "<td><input type=submit name='Sterge' value='Sterge'>";
    			                				echo "</form>";
    			                        			echo "</tr>";

}

  ?>
</table>
</center>
</body>
</html>