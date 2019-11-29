<?php $servername = "127.0.0.1";
$username = "root";
$password = "";
$myDB="7YNzXacPRV";
$cauta=filter_input(INPUT_POST, 'cauta');
$cod=filter_input(INPUT_POST, 'cod');
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
$proba1=filter_input(INPUT_POST, 'proba1');
$proba2=filter_input(INPUT_POST, 'proba2');
$proba3=filter_input(INPUT_POST, 'proba3');
try {
     $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // use exec() because no results are returned
    $sql = "select cod,nume_candidati,prenume_candidati,clasa_candidati,scoala_candidati,judet_candidati,localitate_candidati from candidati";
    $query="select cod, nume_candidati, prenume_candidati, clasa_candidati, scoala_candidati, localitate_candidati, judet_candidati, proba1, proba2, proba3, materie.cod_materie as cod_mat, materie.denumire_materie as den_mat from rezultate, materie where rezultate.cod_materie=materie.cod_materie order by cod_mat, nume_candidati";
    $q="select cod,nume_candidati,prenume_candidati,clasa_candidati,scoala_candidati,judet_candidati,localitate_candidati from candidati where nume_candidati='$cauta'";

    }catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    $conn = null;
    }
?>
 
<html>
 <head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <body>
</head>

  <meta charset ="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1 ">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
  text-align: center;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

tr:nth-child(odd) {
  background-color: #ffffff;
}

body {font-family: Arial;
height :100%;
margin: 0;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}


/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 0px solid #ccc;
  border-top: none;
  height:100%;
}

</style>
 </head>
 <body>

 

<div class="container-fluid" style="background-color:black">
<a href="Login.html">
	<button class="btn btn-danger" style="margin-top:20px">Delogare</button>
</a>
<div id="Candidati">
<br>
<center>
<br><br>
<h3 style="color:white">Vizualizare Candidati</h3><br>
<table id="myTable"> 
  <tr>
    <th>Cod</th>
    <th>Nume</th>
    <th>Prenume</th>
    <th>Clasa</th>
    <th>Scoala</th>
    <th>Judet</th>
    <th>Localitate</th>
      
  <?php

    foreach($conn->query($sql) as $row){
    	echo"<tr>";
    	echo "<td>".$row['cod']."</td>";
    		echo "<td>".$row['nume_candidati']."</td>";
    			echo "<td>".$row['prenume_candidati']."</td>";
    				echo "<td>".$row['clasa_candidati']."</td>";
    					echo "<td>".$row['scoala_candidati']."</td>";
    						echo "<td>".$row['judet_candidati']."</td>";
    							echo "<td>".$row['localitate_candidati']."</td>";
    						     
    						echo "</tr>";

}

  ?>
</table>
<br><br><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cauta dupa nume" style="text-align:center" title="Type in a name"><br><br><br>
</center>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 1; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

</script>

<div class="row">
	<div class="span6" style="float: none; margin: 0 auto;">
		<button class="btn btn-light"> <a href="adaugarecandidati.html" style="color:#000000;">Adaugare Candidati</a></button>
		<button class="btn btn-light"> <a href="update.php" style="color:#000000;">Modificare Candidati</a></button>	
		<button class="btn btn-light"> <a href="delete.php" style="color:#000000;">Sterge Candidati</a></button>	
		<button class="btn btn-light"> <a href="filtrarecandidati.php" style="color:#000000;">Filtrare Candidati</a></button>	
		<button class="btn btn-light"> <a href="pdf-candidati.php" style="color:#000000;">Export PDF Candidati</a></button>	
	</div>
</div>
<br><br>
</div>
</div>

<div class="container-fluid" style="background-color:white">
<div id="Rezultate"><br><br><br><br>
	<center>
    <h3>Vizualizeaza Rezultate</h3><br>
    <table id="myTablee"> 
    <th>Cod</th>
    <th>Nume</th>
    <th>Prenume</th>
    <th>Clasa</th>
    <th>Scoala</th>
    <th>Judet</th>
    <th>Localitate</th>
    <th>Proba 1</th>
    <th>Proba 2</th>
    <th>Proba 3</th>
	<th>Materie</th>
      
 <template slot="table-row" slot-scope="props">
    <span v-if="props.column.field == 'action'">
      <button class="myButton" @click="doSomething(props.row)"></button>
    </span>
    <span v-else>
      {{props.formattedRow[props.column.field]}}
    </span>
  </template>
  <?php

    foreach($conn->query($query) as $row){
    	echo"<tr>";
    
    	echo "<td>".$row["cod"]."</td>";
    		echo "<td>".$row["nume_candidati"]."</td>";
    			echo "<td>".$row["prenume_candidati"]."</td>";
    				echo "<td>".$row["clasa_candidati"]."</td>";
    					echo "<td>".$row["scoala_candidati"]."</td>";
    						echo "<td>".$row["localitate_candidati"]."</td>";
    						echo "<td>".$row["judet_candidati"]."</td>";
    							echo "<td>".$row["proba1"]."</td>";
    								echo "<td>".$row["proba2"]."</td>";
    									echo "<td>".$row["proba3"]."</td>";
    									echo "<td>".$row["den_mat"]."</td>";
    						
    						echo "</tr>";
      
}

  ?>
</table><br><br><br>
</center>

<div class="row">
	<div class="span6" style="float: none; margin: 0 auto;">
		<button class="btn btn-dark"> <a href="adaugarerezultate.php" style="color:#ffffff;">Adaugare Rezultate</a></button>
		<button class="btn btn-dark"> <a href="edit.php" style="color:#ffffff;">Modifica Rezultate</a></button>	
		<button class="btn btn-dark"> <a href="deleterez1.php" style="color:#ffffff;">Sterge Rezultate</a></button>	
		<button class="btn btn-dark"> <a href="filtrarerezultate.php" style="color:#ffffff;">Filtrare Rezultate</a></button>	
		<button class="btn btn-dark"> <a href="pdf-rezultate.php" style="color:#ffffff;">Export PDF Rezultate</a></button>	
	</div>
</div>
<br><br>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

 </body>
</html>