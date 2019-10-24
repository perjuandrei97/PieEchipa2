<html>
<title>Adauga Rezultate</title>
<body background="modrez.jpg">
<center>
<h3>Adauga Rezultate</h3>
</center>
<?php
 $servername = "remotemysql.com";
$username = "7YNzXacPRV";
$password = "9Mx89MjGuI";
$myDB="7YNzXacPRV";
 $nume_candidati=filter_input(INPUT_POST, 'nume_candidati');
$prenume_candidati=filter_input(INPUT_POST, 'prenume_candidati');
$clasa_candidati=filter_input(INPUT_POST, 'clasa_candidati');
$scoala_candidati=filter_input(INPUT_POST, 'scoala_candidati');
$judet_candidati=filter_input(INPUT_POST, 'judet_candidati');
$localitate_candidati=filter_input(INPUT_POST, 'localitate_candidati');
$proba1=filter_input(INPUT_POST, 'proba1');
$proba2=filter_input(INPUT_POST, 'proba2');
$proba3=filter_input(INPUT_POST, 'proba3');
$result=filter_input(INPUT_POST, 'result');

try {
$conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // use exec() because no results are returned
 $sql="SELECT cod,nume_candidati,prenume_candidati,clasa_candidati,scoala_candidati,localitate_candidati,judet_candidati,proba1,proba2,proba3 FROM rezultate";
$conn->query($sql);   
    }catch(PDOException $e)
    {  
    $conn = null;
    }
?>
<table>
<tr>
    <th>Cod</th>
    <th>Nume</th>
    <th>Prenume</th>
    <th>Clasa</th>
    <th>Scoala</th>
    <th>Localitate</th>
    <th>Judet</th>
   <th>Proba1</th>
  <th>Proba2</th>
    <th>Proba3</th>  
    <th>Adauga</th>
      <?php
foreach($conn->query($sql) as $row){
        	echo"<tr>";
        	echo "<form action=arezultate1.php method=post>";
    	    	echo "<td><input type=text name=cod value='".$row['cod']."'></td>";
             		echo "<td><input type=text name=nume_candidati value='".$row['nume_candidati']."'></td>";
    	        		echo "<td><input type=text name=prenume_candidati value='".$row['prenume_candidati']."'></td>";
    	        			echo "<td><input type=text name=clasa_candidati value='".$row['clasa_candidati']."'> </td>";
    		        			echo "<td><input type=text name=scoala_candidati value='".$row['scoala_candidati']."'></td>";
    		        			    echo "<td><input type=text name=localitate_candidati value='".$row['localitate_candidati']."'></td>";
    		        			    	echo "<td><input type=text name=judet_candidati value='".$row['judet_candidati']."'></td>";
    		        					    echo "<td><input type=text name=proba1 value='".$row['proba1']."'></td>";
    		        					         echo "<td><input type=text name=proba2 value='".$row['proba2']."'></td>";
    		        					            echo "<td><input type=text name=proba3 value='".$row['proba3']."'></td>";
    		        					               echo "<td><input type=submit name='Adauga' value='Adauga'>";
    		        	
    			   
    			                        			echo "</tr>";

}

  ?>
</table>

</table>
</body>
</html>