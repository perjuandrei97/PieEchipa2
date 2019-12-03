<!DOCTYPE html>

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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Olimpiada Nationala</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <link rel="stylesheet" href="style2.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Olimpiada Nationala</h3>
            </div>

            <div class="tab">
				<button class="tablinks" onclick="openCity(event, 'Acasa')" id="defaultOpen">Acasa</button>
				<button class="tablinks" onclick="openCity(event, 'Candidati')">Candidati</button>
				<button class="tablinks" onclick="openCity(event, 'Subiecte')">Subiecte</button>
				<button class="tablinks" onclick="openCity(event, 'Rezultate')">Rezultate</button>
				<button class="tablinks" onclick="openCity(event, 'Contact')">Contact</button>
				<button class="tablinks" onclick="openCity(event, 'Autentificare')">Autentificare</button>
				<button class="tablinks" onclick="openCity(event, 'Inregistrare')">Inregistrare</button>
			</div>

        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
					<h3>Parteneri oficiali</h3>
					<img src="imagini/1.png" alt="" style="max-height: 100px; max-width:25%;">
					<img src="imagini/2.png" alt="" style="max-height: 100px; max-width:25%;">
					<img src="imagini/3.png" alt="" style="max-height: 100px; max-width:25%;">
					<img src="imagini/4.png" alt="" style="max-height: 100px; max-width:25%;">
				</div>
            </nav>

            <div id="Acasa" class="tabcontent">
				<h4>Despre Olimpiade</h4>								
				<p>&nbsp&nbsp&nbsp&nbspOlimpiadele și concursurile sunt competiții școlare pe discipline de studiu/domenii de pregătire, interdisciplinare și transdisciplinare, care au ca obiectiv general stimularea elevilor cu performanțe școlare înalte sau care au interes și aptitudini deosebite în domeniul științific, tehnico-aplicativ, cultural-artistic, civic şi în cel sportiv. Olimpiadele şi concursurile școlare promovează valorile culturale și etice fundamentale, spiritul de fair-play, competitivitatea și comunicarea interpersonală. Indiferent de domeniul lor sau de premiul oferit, aceste competiţii şcolare stimulează creativitatea şi gândirea critică, oferă motivația atât de necesară în procesul de învățare și ajută la identificarea și dezvoltarea talentelor, abilităților și cunoștințelor, contribuind la dezvoltarea personală și profesională a elevilor. </p>
				<p>&nbsp&nbsp&nbsp&nbspParticiparea la competițiile școlare este deschisă tuturor elevilor. Fiecare persoană are dreptul să primească o educaţie care dezvoltă abilitățile sale la întregul său potenţial. Garantarea acestui drept implică asigurarea egalităţii de șanse, oferind pentru fiecare persoană ajutor şi resurse în funcție de caracteristicile şi nevoile individuale. Identificarea şi susţinerea copiilor şi tinerilor capabili de performanţe şcolare înalte reprezintă o parte integrantă a politicilor educaţionale promovate de Ministerul Educaţiei.</p>
				<br>
				<h4>Locatii de concurs</h4>
				<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="765" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d13316.902417519965!2d28.043071028520988!3d45.43889682712427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e3!4m0!4m5!1s0x40b6de4f88124925%3A0xbdac409e8bda86a6!2sFacultatea%20de%20Automatic%C4%83%2C%20Calculatoare%2C%20Inginerie%20Electric%C4%83%20%C8%99i%20Electronic%C4%83%2C%20Strada%20%C8%98tiin%C8%9Bei%202%2C%20Gala%C8%9Bi%20800146%2C%20Rom%C3%A2nia!3m2!1d45.445675!2d28.052374!5e0!3m2!1sro!2sde!4v1575368635453!5m2!1sro!2sde" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div>
			</div>

			<div id="Candidati" class="tabcontent">
				<center>
					<h3>Candidați</h3><br>
					<div class="center"><input align="center" type="text" id="myInput" onkeyup="myFunction()" placeholder="Cautare participanti ..." title="Selectati un criteriu si cautati"><br><br></div>
				</center>
				<table id="myTable" align="center">
					<tr>
						<th>Cod</th>
						<th>Nume</th>
						<th>Prenume</th>
						<th>Clasa</th>
						<th>Scoala</th>
						<th>Judet</th>
						<th>Localitate</th>
					</tr>
					<?php
						foreach($conn->query($sql) as $row){
							echo"<tr>";
							echo "<td>".$row["cod"]."</td>";
							echo "<td>".$row["nume_candidati"]."</td>";
							echo "<td>".$row["prenume_candidati"]."</td>";
							echo "<td>".$row["clasa_candidati"]."</td>";
							echo "<td>".$row["scoala_candidati"]."</td>";
							echo "<td>".$row["judet_candidati"]."</td>";
							echo "<td>".$row["localitate_candidati"]."</td>";
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
			</div>

			<div id="Subiecte" class="tabcontent">
			  <h3>Tokyo</h3>
			  <p>Tokyo is the capital of Japan.</p>
			</div>
			
			<div id="Rezultate" class="tabcontent">
				<center>
					<h3>Rezultate</h3>
				</center>
				<br>
				<table align="center">
					<tr>
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
					</tr>
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
				</table>
			</div>
			
			<div id="Contact" class="tabcontent">
				<div class="row">
					<div class="col-md-7">
						<div name="mesaj">
							<center><b><h4>Trimite un mesaj</h4></b></center><br>
							<center>
								<div class="row">
									<div class="col-md-4"><label>Subiect: </label></div>
									<div class="col-md-8"><input type="text" name="subiect" class="form-control" placeholder="introduceti subiect" maxlength="35" size="20" required=""/></div><br><br><br>
									<div class="col-md-4"><label>Nume: </label></div>
									<div class="col-md-8"><input type="text" name="nume" class="form-control" placeholder="introduceti nume" maxlength="45" size="30" required=""/></div><br><br><br>
									<div class="col-md-4"><label>Prenume: </label></div>
									<div class="col-md-8"><input type="text" name="prenume" class="form-control" placeholder="introduceti prenume" maxlength="45" size="30" required=""/></div><br><br><br>
									<div class="col-md-4"><label>Telefon: </label></div>
									<div class="col-md-8"><input type="text" name="telefon" class="form-control" placeholder="introduceti telefon" pattern="[0-9]{10}" maxlength="10" size="30" required=""/></div><br><br><br>
									<div class="col-md-4"><label>Email: </label></div>
									<div class="col-md-8"><input type="text" name="email" class="form-control" placeholder="introduceti email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" maxlength="45" size="30" required=""/></div><br><br><br>
									<div class="col-md-4"><label>Mesaj: </label></div>
									<div class="col-md-8"><textarea rows="6" id="message" name="mesaj" class="form-control rounded-left rounded-right" placeholder="introduceti mesaj" maxlength="1000" cols="40" required=" border-left:none;"></textarea></div><br><br>
								
									<div class="col-md-12"><button class="btn btn-primary" style="margin-top:30px;">Trimitere</button></div>
								</div>
							</center>
						</div>
					</div>
					<div class="col-md-5">
						<div name="contact">
							<center><b><h4>Adresa de contact</h4></b></center><br>
							<h4>Bucuresti</h4>
							<h6><a href="https://goo.gl/maps/QAtm3PEiqtnJrU6t9" target="_blank">Splaiul Unirii 165, clădirea Timpuri Noi Square 2, etaj 1, București, România (apasa pentru a vedea in Google Maps)</a></h6>
							<h6>Telefon: +40 762 944 822</h6>
							<h6>Email: contact@olimpiadanationala.ro</h6><br>
							<h4>Galati</h4>
							<h6><a href="https://goo.gl/maps/pojq5u8uP2jkePQh7" target="_blank">Strada Morilor 137, Galati, România (apasa pentru a vedea in Google Maps)</a></h6>
							<h6>Telefon: +40 748 008 008</h6>
							<h6>Email: contact@olimpiadanationala.ro</h6><br>
							<h4>Social media</h4>
							<a href="https://www.facebook.com" target="_blank" class="fa fa-facebook"></a>
							<a href="https://www.twitter.com" target="_blank" class="fa fa-twitter"></a>
							<a href="https://www.linkedin.com" target="_blank" class="fa fa-linkedin"></a>
							<a href="https://www.instagram.com" target="_blank" class="fa fa-instagram"></a>
						</div>
					</div>
				</div>
			</div>
			
			<div id="Autentificare" class="tabcontent">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="form-control rounded-left rounded-right"; style="border: 1px solid #dddddd; margin-top:120px; height:350px; background: #fafafa";>
							<br><center><b><h4>Logare</h4></b></center><br>
							<center>
								<form class="form-group" method="post" action="login.php">
									<div class="row">
										<div class="col-md-2"></div>
										<div class="col-md-2"><label>Username: </label></div>
										<div class="col-md-6"><input type="text" name="username_login" class="form-control" placeholder="introduceti nume de utilizator" maxlength="35" size="20" required=""/></div><br><br><br>
										<div class="col-md-2"></div>
										<div class="col-md-2"></div>
										<div class="col-md-2"><label>Parola: </label></div>
										<div class="col-md-6"><input type="password" name="parola_login" class="form-control" placeholder="introduceti parola" maxlength="45" size="30" required=""/></div><br><br><br>
										<div class="col-md-2"></div>
										
										<div class="col-md-12"><button class="btn btn-primary" name="login_submit" id="inputbtn" type="submit" style="margin-top:10px;">Logare</button></div>
									</div>
								</form>
							</center>
						</div>
					</div>
				</div>
			</div>
			
			<div id="Inregistrare" class="tabcontent">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div name="formular" action="registrationcomisie.php" method="post">
							<h6>ATENTIE! Doar cadrele didactice care fac parte din comisie isi pot crea un cont.</h6><br>
							<center><b><h4>Creeaza un cont nou</h4></b></center><br>
							<center>
								<div class="row">
									<div class="col-md-4"><label>Nume: </label></div>
									<div class="col-md-8"><input type="text" name="nume_comisie" class="form-control" placeholder="introduceti nume" maxlength="45" size="30" required=""/></div><br><br><br>
									<div class="col-md-4"><label>Prenume: </label></div>
									<div class="col-md-8"><input type="text" name="prenume_comisie" class="form-control" placeholder="introduceti prenume" maxlength="45" size="30" required=""/></div><br><br><br>
									<div class="col-md-4"><label>Email: </label></div>
									<div class="col-md-8"><input type="text" name="email_comisie" class="form-control" placeholder="introduceti email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" maxlength="45" size="30" required=""/></div><br><br><br>
									<div class="col-md-4"><label>Telefon: </label></div>
									<div class="col-md-8"><input type="text" name="telefon_comisie" class="form-control" placeholder="introduceti telefon" pattern="[0-9]{10}" maxlength="10" size="30" required=""/></div><br><br><br>
									<div class="col-md-4"><label>Utilizator: </label></div>
									<div class="col-md-8"><input type="text" name="username_comisie" class="form-control" placeholder="introduceti nume de utilizator" maxlength="45" size="30" required=""/></div><br><br><br>
									<div class="col-md-4"><label>Parola: </label></div>
									<div class="col-md-8"><input type="password" name="parola_comisie" class="form-control" placeholder="introduceti parola" maxlength="45" size="30" required=""/></div><br><br><br>
									<div class="col-md-4"><label>Invitatie: </label></div>
									<div class="col-md-8"><input type="text" name="invitatie_comisie" class="form-control" placeholder="introduceti invitatia" maxlength="45" size="30" required=""/></div><br><br><br>
										
									<div class="col-md-12"><button class="btn btn-primary" style="margin-top:30px;">Inregistrare</button></div>
								</div>
							</center>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
	
	<script>
	function openCity(evt, cityName) {
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

	// Get the element with id="defaultOpen" and click on it
	document.getElementById("defaultOpen").click();
	</script>
	
</body>
</html>