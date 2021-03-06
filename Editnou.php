<?php 
$servername = "127.0.0.1";
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
    $query="select * from rezultate";
    $q="select cod,nume_candidati,prenume_candidati,clasa_candidati,scoala_candidati,judet_candidati,localitate_candidati from candidati where nume_candidati='$cauta'";

    }catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    $conn = null;
    }
?>
 
<html>
 <head>
  <title>Olimpiada nationala</title>
&nbsp&nbsp&nbsp<center><body onload="startTime()">
<div id="txt"></div></center>
<script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script></head>

  <meta charset ="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1 ">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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
 <body background="onpic1.jpg">

 <div class="header">
 <h1><center><i>Olimpiada națională</i></center></h1>
 </div>
<div class="tab">
  <button class="tablinks" onclick="opentab(event, 'Home')">Home</button>
  <button class="tablinks" onclick="opentab(event, 'Candidati')">Candidați</button>
  <button class="tablinks" onclick="opentab(event, 'Subiecte')">Subiecte</button>
   <button class="tablinks" onclick="opentab(event, 'Rezultate')">Rezultate</button>
     <button class="tablinks" onclick="opentab(event, 'Contact')">Contact</button>

</div>


<div id="Home" class="tabcontent">
<center> <strong><h2>Organizatori Oficiali</h2></strong>
 <div class="g-heading-v9 text-center g-mb-30">
							<!--<h2><strong>Organizatori</strong></h2>-->
							<a class="logo inline">
								<div class="text-center" style="opacity:.8;">
									<img src="1.jpg" alt="" style="max-height: 100px; max-width:90%;">
									<img src="2.png" alt="" style="max-height: 100px; max-width:90%;">
									<img src="3.jpeg" alt="" style="max-height: 100px; max-width:90%;">
									<img src="4.jpeg" alt="" style="max-height: 100px; max-width:90%;"></div>	</a></div></center><br><br>
<h3>Despre Olimpiade</h3>								
<p>&nbsp&nbsp&nbsp&nbspOlimpiadele și concursurile sunt competiții școlare pe discipline de studiu/domenii de pregătire, interdisciplinare și transdisciplinare, care au ca obiectiv general stimularea elevilor cu performanțe școlare înalte sau care au interes și aptitudini deosebite în domeniul științific, tehnico-aplicativ, cultural-artistic, civic şi în cel sportiv. Olimpiadele şi concursurile școlare promovează valorile culturale și etice fundamentale, spiritul de fair-play, competitivitatea și comunicarea interpersonală. Indiferent de domeniul lor sau de premiul oferit, aceste competiţii şcolare stimulează creativitatea şi gândirea critică, oferă motivația atât de necesară în procesul de învățare și ajută la identificarea și dezvoltarea talentelor, abilităților și cunoștințelor, contribuind la dezvoltarea personală și profesională a elevilor. </p>
<p>&nbsp&nbsp&nbsp&nbspParticiparea la competițiile școlare este deschisă tuturor elevilor. Fiecare persoană are dreptul să primească o educaţie care dezvoltă abilitățile sale la întregul său potenţial. Garantarea acestui drept implică asigurarea egalităţii de șanse, oferind pentru fiecare persoană ajutor şi resurse în funcție de caracteristicile şi nevoile individuale. Identificarea şi susţinerea copiilor şi tinerilor capabili de performanţe şcolare înalte reprezintă o parte integrantă a politicilor educaţionale promovate de Ministerul Educaţiei.</p>
<p>&nbsp&nbsp&nbsp&nbspParticiparea la competițiile școlare este deschisă tuturor elevilor. Fiecare persoană are dreptul să primească o educaţie care dezvoltă abilitățile sale la întregul său potenţial. Garantarea acestui drept implică asigurarea egalităţii de șanse, oferind pentru fiecare persoană ajutor şi resurse în funcție de caracteristicile şi nevoile individuale. Identificarea şi susţinerea copiilor şi tinerilor capabili de performanţe şcolare înalte reprezintă o parte integrantă a politicilor educaţionale promovate de Ministerul Educaţiei.</p>
<h3>Locatii de concurs</h3>
					<div class="mapouter"><div class="gmap_canvas"><iframe width="848" height="765" id="gmap_canvas" src="https://maps.google.com/maps?q=Romania&t=&z=7&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:765px;width:848px;}.gmap_canvas {overflow:hidden;background:none!important;height:765px;width:848px;}</style></div>
</div>

<div id="Candidati" class="tabcontent">
<br><br>
  <li class="col-md-6"><i class="fa fa-circle"></i> <a href="adaugarecandidati.html" style="color:#000000;">Adaugare Candidati</a></li>	</ul><br><br>
    <li class="col-md-6"><i class="fa fa-circle"></i> <a href="update.php" style="color:#000000;">Modificare Candidati</a></li>	</ul><br><br>
  <br>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cauta dupa nume" title="Type in a name">  
<br><br>
<h3>Sterge Candidati</h3>
<table id="myTable"> 
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
    	echo "<td>".$row['cod']."</td>";
    		echo "<td>".$row['nume_candidati']."</td>";
    			echo "<td>".$row['prenume_candidati']."</td>";
    				echo "<td>".$row['clasa_candidati']."</td>";
    					echo "<td>".$row['scoala_candidati']."</td>";
    						echo "<td>".$row['judet_candidati']."</td>";
    							echo "<td>".$row['localitate_candidati']."</td>";
    							  echo "<td><a href=delete.php?cod=".$row['cod'].">Sterge</a>";
    						     
    						echo "</tr>";

}

  ?>
</table>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 2; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
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


</div>

<div id="Subiecte" class="tabcontent">
  <h2>&rarr;Subiecte Juniori</h2>
  <h3>Clasa a V-a</h3>
  <li> <p>Olimpiada Matematica  &nbsp;<a href="subiecte5.pdf">click aici<br></a></p></li>
   <h3>Clasa a VI-a</h3>
<li>  <p>Olimpiada Matematica  &nbsp;<a href="subiecte6.pdf">click aici<br></a></p></li>
<br>
<h2>&rarr;Subiecte Seniori</h2>
 <h3>Clasa a VII-a</h3>
<li>  <p>Olimpiada Matematica  &nbsp;<a href="subiecte7.pdf">click aici<br></a></p></li>
 <h3>Clasa a VIII-a</h3>
<li>  <p>Olimpiada Matematica  &nbsp;<a href="subiecte8.pdf">click aici<br></a></p></li>
 <h3>Clasa a IX-a</h3>
<li>  <p>Olimpiada Matematica  &nbsp;<a href="subiecte9.pdf">click aici<br></a></p></li>
 <h3>Clasa a X-a</h3>
<li>  <p>Olimpiada Matematica  &nbsp;<a href="subiecte10.pdf">click aici<br></a></p></li>
 <h3>Clasa a XI-a</h3>
<li>  <p>Olimpiada Matematica  &nbsp;<a href="subiecte11.pdf">click aici<br></a></p></li>
 <h3>Clasa a XII-a</h3>
<li>  <p>Olimpiada Matematica  &nbsp;<a href="subiecte12.pdf">click aici<br></a></p></li>

</div>  

<div id="Rezultate" class="tabcontent"><br>
  <li class="col-md-6"><i class="fa fa-circle"></i> <a href="adaugarerezultate.php" style="color:#000000;">Adaugare Rezultate</a></li>	</ul><br><br>
    <h2>Rezultate</h2>
 <table>
  <tr>
  <th>Edit</th>
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
    	   	echo "<form action=edit1.php method=post>";
    	   	echo "<td><input type=submit name='updatebutton' value='updatebutton'>";
    	    	echo "<td><input type=text name=cod value='".$row['cod']."'s</td>";
             		echo "<td><input type=text name=nume_candidati value=' ".$row['nume_candidati']."'></td>";
    	        		echo "<td><input type=text name=prenume_candidati value=' ".$row['prenume_candidati']."'></td>";
    	        			echo "<td><input type=text name=clasa_candidati value=' ".$row['clasa_candidati']." '></td>";
    		        			echo "<td><input type=text name=scoala_candidati value=  ' ".$row['scoala_candidati']."'></td>";
    		        				echo "<td><input type=text name=judet_candidati value=' ".$row['judet_candidati']." '></td>";
    		        					echo "<td><input type=text name=localitate_candidati value= ' ".$row['localitate_candidati']."'></td>";
    		        					echo "<td><input type=text name=proba1 value= ' ".$row['proba1']."'></td>";
    		        					echo "<td><input type=text name=proba2 value= ' ".$row['proba2']."'></td>";
    		        					echo "<td><input type=text name=proba3 value= ' ".$row['proba3']."'></td>";
    			                				echo "</form>";
    			                        			echo "</tr>";

}

  ?>

</table>

</div>

<div id="Contact" class="tabcontent">
  <h3>Contact</h3>
  <i class="glyphicon glyphicon-earphone g-mr-15"></i>
<li>
  <em>Telefon:</em>
  <strong>074 800 8008</strong><br><br>
   <i class="glyphicon glyphicon-earphone g-mr-15"></i>
   <li>
  <em>Adresa:</em>
  <strong> Strada Domneasca nr 150,Galati,Romania</strong><br><br>
   <li>
    <em>Email:</em>
  <strong>olimpiadanationala@info.com</strong><br><br>
<a href="contact.html">
<br><button class="btn-u btn-block rounded" style="background-color:#336E7B; color:#fff; padding:10px;"><i class="glyphicon icon-pencil g-mr-15" style="color:#fff;"></i>Du-te la formularul de contact</button> </a></li>
</div>
<script>
function opentab(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>


 </body>
</html>