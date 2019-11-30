<?php $servername = "127.0.0.1";
$username = "root";
$password = "";
$myDB="7YNzXacPRV";
try {
     $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // use exec() because no results are returned
    $sql = "select cod,nume_candidati,prenume_candidati,clasa_candidati,scoala_candidati,judet_candidati,localitate_candidati from candidati";
    $query="select cod, nume_candidati, prenume_candidati, clasa_candidati, scoala_candidati, localitate_candidati, judet_candidati, proba1, proba2, proba3, materie.cod_materie as cod_mat, materie.denumire_materie as den_mat from rezultate, materie where rezultate.cod_materie=materie.cod_materie order by cod_mat, nume_candidati";
  }catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    $conn = null;
    }
?>

<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<meta charset ="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1 ">
	
<style>
.fa {
  padding: 20px;
  font-size: 20px;
  width:50px;
  height:50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}
</style>
</head>
<body style="background-color:#60809f;" onload="startTime()">
	<center>
		<div class="container" id="txt" style="background-color:#e6e6e6; width:900px;">
		</div>
	</center>
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
</script>
 
 <div class="container" style="background-color:#e6e6e6; height:250px; width:900px; text-align:center;">
	<br>
	<h1><center><i>Olimpiada națională</i></center></h1>
<br><br>
<center> 
		<div class="g-heading-v9 text-center g-mb-30">
			<a class="logo inline">
				<div class="text-center" style="opacity:.8;">
					<img src="imagini/1.png" alt="" style="max-height: 100px; max-width:90%;">
					<img src="imagini/2.png" alt="" style="max-height: 100px; max-width:90%;">
					<img src="imagini/3.png" alt="" style="max-height: 100px; max-width:90%;">
					<img src="imagini/4.png" alt="" style="max-height: 100px; max-width:90%;">
				</div>	
			</a>
		</div>
	</center>
</div>
<br>

<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-3">
		<div name="subiecte" style="background-color:#e6e6e6; height:250px; text-align:center; background:url('imagini/cardback.jpg');  background-size: 100% auto;">
			<a href="home-subiecte.php">
				<button type="button" class="btn btn-info" style="margin-top:110px">Subiecte</button>
			</a>
		</div>
	</div>
	<div class="col-md-3">
		<div name="rezultate" style="background-color:#e6e6e6; height:250px; text-align:center; background:url('imagini/rezultate.jpg');  background-size: 100% auto;">
			<a href="home-rezultate.php">
				<button type="button" class="btn btn-info" style="margin-top:110px">Rezultate</button>
			</a>
		</div>
	</div>
</div>

<br>
<div class="container" style="background-color:#e6e6e6; height:1300px; width:900px">
<center>
<br><br>
<h3>Despre Olimpiade</h3>						
<p>Olimpiadele și concursurile sunt competiții școlare pe discipline de studiu/domenii de pregătire, interdisciplinare și transdisciplinare, care au ca obiectiv general stimularea elevilor cu performanțe școlare înalte sau care au interes și aptitudini deosebite în domeniul științific, tehnico-aplicativ, cultural-artistic, civic şi în cel sportiv. Olimpiadele şi concursurile școlare promovează valorile culturale și etice fundamentale, spiritul de fair-play, competitivitatea și comunicarea interpersonală. Indiferent de domeniul lor sau de premiul oferit, aceste competiţii şcolare stimulează creativitatea şi gândirea critică, oferă motivația atât de necesară în procesul de învățare și ajută la identificarea și dezvoltarea talentelor, abilităților și cunoștințelor, contribuind la dezvoltarea personală și profesională a elevilor. </p>
<p>Participarea la competițiile școlare este deschisă tuturor elevilor. Fiecare persoană are dreptul să primească o educaţie care dezvoltă abilitățile sale la întregul său potenţial. Garantarea acestui drept implică asigurarea egalităţii de șanse, oferind pentru fiecare persoană ajutor şi resurse în funcție de caracteristicile şi nevoile individuale. Identificarea şi susţinerea copiilor şi tinerilor capabili de performanţe şcolare înalte reprezintă o parte integrantă a politicilor educaţionale promovate de Ministerul Educaţiei.</p>
<br><br>	
<h3>Locatii de concurs</h3>
<div class="mapouter"><div class="gmap_canvas"><iframe width="848" height="765" id="gmap_canvas" src="https://maps.google.com/maps?q=Romania&t=&z=7&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:765px;width:848px;}.gmap_canvas {overflow:hidden;background:none!important;height:765px;width:848px;}</style></div>
</center>
</div>

<div class="container" style="background-color:#0E3667; height:330px; width:900px; color:white">
<center>
<br><br>
Contact:
<br><br>
Adresa: Strada Domneasca, numarul 150, Galati, Romania
<br>
Telefon: 074 800 8008
<br>
Email: olimpiadanationala@info.com
<br><br>
Social media:
<br>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-instagram"></a>
</center>
<a href="Login.html" style="float:right; color:white">Login</a><br>
<a href="registrationcomisie.html" style="float:right; color:white">Inregistrare</a>
</div>


<p id="demo"></p>
	<script>
	function myFunction() {
	  var codunic = prompt("Te rugam sa introduci codul unic.");
	  if (codunic === '123') {
		  window.location.href='registrationcomisie.html';
	  }
	  else {
		  alert("Cod unic gresit!");
	  }
	  document.getElementById("demo").innerHTML = text;
	}
	</script>
	
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

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>