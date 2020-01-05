<!DOCTYPE html>

<?php 

session_start();
$servername = "127.0.0.1";
$username = "root";
$password = "";
$myDB="7YNzXacPRV";

if(!isset($_SESSION['loggedIN'])) {
	$_SESSION['loggedIN']='false';
}
if(isset($_SESSION['loggedIN'])){
	if($_SESSION['loggedIN']=='false'){
		if(isset($_POST['login_submit'])) {
			
			if(login($servername,
			$username, $password, $myDB,
			$_POST['username_login'],
			$_POST['parola_login'])){
				
				$_SESSION['loggedIN']="true";
				header("Location: test.php");
			
			}
		}
	}
}
if(isset($_GET['logout'])){
	
	if($_SESSION['loggedIN']=='true'){
		
		$_SESSION['loggedIN']="false";
		header("Location: test.php");
	}
}

function login($servername, $username, $password, $myDB, $user, $pass) {
	$con=mysqli_connect($servername,$username,$password,$myDB);
	$query="select * from utilizator where user='$user' and pass='$pass';";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)!=0)
	{
		return true;
	}
	else {
		echo "<script>alert('Nume sau parola gresita!')</script>";
		echo "<script>window.open('test.php','_self')</script>";
		return false;
	}
}

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
				<?php
					if($_SESSION['loggedIN']=="true") {
				?>
				<button class="tablinks" onclick="openCity(event, 'Candidati_adaugare')" style="font-size: 14px; margin-left:10px;">Adaugare Candidati</button>
				<button class="tablinks" onclick="openCity(event, 'Candidati_stergere')" style="font-size: 14px; margin-left:10px;">Stergere Candidati</button>
				<button class="tablinks" onclick="openCity(event, 'Candidati_modificare')" style="font-size: 14px; margin-left:10px;">Modificare Candidati</button>
				<a href="pdf-candidati.php" target="_blank">
					<button class="tablinks" style="font-size: 14px; margin-left:10px;">Export Candidati</button>
				</a>
				<?php
					}
				?>
				<button class="tablinks" onclick="openCity(event, 'Subiecte')">Subiecte</button>
				<button class="tablinks" onclick="openCity(event, 'Rezultate')">Rezultate</button>
				<?php
					if($_SESSION['loggedIN']=="true") {
				?>
				<button class="tablinks" onclick="openCity(event, 'Rezultate_adaugare')" style="font-size: 14px; margin-left:10px;">Adaugare Rezultate</button>
				<button class="tablinks" onclick="openCity(event, 'Rezultate_stergere')" style="font-size: 14px; margin-left:10px;">Stergere Rezultate</button>
				<button class="tablinks" onclick="openCity(event, 'Rezultate_modificare')" style="font-size: 14px; margin-left:10px;">Modificare Rezultate</button>
				<a href="pdf-rezultate.php" target="_blank">
					<button class="tablinks" style="font-size: 14px; margin-left:10px;">Export Rezultate</button>
				</a>
				<?php
					}
				?>
				<?php
					if($_SESSION['loggedIN']=="false") {
				?>
				<button class="tablinks" onclick="openCity(event, 'Contact')">Contact</button>
				<button class="tablinks" onclick="openCity(event, 'Intrebari')">Intrebari frecvente</button>
				<button class="tablinks" onclick="openCity(event, 'Autentificare')">Autentificare</button>
				<button class="tablinks" onclick="openCity(event, 'Inregistrare')">Inregistrare</button>
				<?php
					}
				?>
				<?php
					if($_SESSION['loggedIN']=="true") {
				?>
				<a href="test.php?logout=true">
					<button class="tablinks">Delogare</button>
				</a>
				<?php
					}
				?>
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
			
			<div id="Candidati_adaugare" class="tabcontent">
				<form action="adaugarecandidati.php" method="post">
					<center>
						<br><h3>Adaugare Candidati</h3><br>
						<div name="cand" style="width:300px">
							<b style="float:left">Nume:</b>
							<input type="text" style="float:right" name="nume_candidati" value=""  size="20" required /><br><br>
						</div>
						<div name="cand" style="width:300px">
							<b style="float:left">Prenume:</b>
							<input  type="text" style="float:right" name="prenume_candidati" value="" size="20" required /><br><br>
						</div>
						<div name="cand" style="width:300px">
							<b style="float:left">Adresa:</b>
							<input type="text" style="float:right" name="adresa_candidati" value=""  size="20" required /><br><br>
						</div>
						<div name="cand" style="width:300px">
							<b style="float:left">Telefon:</b>
							<input type="text" style="float:right"  name="telefon_candidati"  value="" maxlength="10" size="20" required=""><br><br>
						</div>
						<div name="cand" style="width:300px">
							<b style="float:left">Email:</b>
							<input type="text" style="float:right" name="email_candidati" value=""  size="20" required /><br><br>
						</div>
						<div name="cand" style="width:300px">
							<b style="float:left">Clasa:</b>
							<input type="text" style="float:right" name="clasa_candidati" value="" maxlength="2" size="20" required /><br><br>
						</div>
						<div name="cand" style="width:300px">
							<b style="float:left">Scoala:</b>
							<input type="text" style="float:right" name="scoala_candidati" value=""  size="20" required/><br><br>
						</div>
						<div name="cand" style="width:300px">
							<b style="float:left">Judet:</b>
							<input type="text" style="float:right" name="judet_candidati" value="" size="20" required /><br><br>
						</div>
						<div name="cand" style="width:300px">
							<b style="float:left">Localitate:</b>
							<input type="text" style="float:right" name="localitate_candidati" value=""  size="20" required /><br><br>
						</div>
						<button class="btn btn-primary" style="margin-top:30px;" type="submit">Adaugare</button>
					</center>
				</form>
			</div>
			
			<div id="Candidati_stergere" class="tabcontent">
				<form action="delete.php" method="post">
					<center><br><h3>Stergere Candidati</h3><br></center>
					<table id="tabel_stergere_candidati" align="center">
						<tr>
							<th>Cod</th>
							<th>Nume</th>
							<th>Prenume</th>
							<th>Clasa</th>
							<th>Scoala</th>
							<th>Judet</th>
							<th>Localitate</th>
							<th>Sterge</th>
						</tr>
						
						<?php
							foreach($conn->query($sql) as $row){
								echo"<tr>";
								echo "<form action=delete1.php method=post>";
								echo "<td><input type=text style=width:90px name=cod value='".$row['cod']."'s</td>";
								echo "<td><input type=text style=width:113px name=nume_candidati value=' ".$row['nume_candidati']."'></td>";
								echo "<td><input type=text style=width:154px name=prenume_candidati value=' ".$row['prenume_candidati']."'></td>";
								echo "<td><input type=text style=width:110px name=clasa_candidati value=' ".$row['clasa_candidati']." '></td>";
								echo "<td><input type=text style=width:149px name=scoala_candidati value=  ' ".$row['scoala_candidati']."'></td>";
    		        			echo "<td><input type=text style=width:150px name=judet_candidati value=' ".$row['judet_candidati']." '></td>";
    		        			echo "<td><input type=text style=width:166px name=localitate_candidati value= ' ".$row['localitate_candidati']."'></td>";
    		            		echo "<td><input type=submit name='Sterge' value='Sterge'>";
    			                echo "</form>";
    			                echo "</tr>";
							}
						?>
					</table>
				</form>
			</div>
			
			<div id="Candidati_modificare" class="tabcontent">
				<form action="update.php" method="post">
					<center><br><h3>Modificare Candidati</h3><br></center>
					<table id="tabel_modificare_candidati" align="center">
						<tr>
							<th>Cod</th>
							<th>Nume</th>
							<th>Prenume</th>
							<th>Clasa</th>
							<th>Scoala</th>
							<th>Judet</th>
							<th>Localitate</th>
							<th>Sterge</th>
						</tr>
						
						<?php
							foreach($conn->query($sql) as $row){
								echo"<tr>";
								echo "<form action=update1.php method=post>";
								echo "<td><input type=text style=width:90px name=cod value='".$row['cod']."'s</td>";
								echo "<td><input type=text style=width:113px name=nume_candidati value=' ".$row['nume_candidati']."'></td>";
								echo "<td><input type=text style=width:154px name=prenume_candidati value=' ".$row['prenume_candidati']."'></td>";
								echo "<td><input type=text style=width:110px name=clasa_candidati value=' ".$row['clasa_candidati']." '></td>";
								echo "<td><input type=text style=width:149px name=scoala_candidati value=  ' ".$row['scoala_candidati']."'></td>";
    		        			echo "<td><input type=text style=width:150px name=judet_candidati value=' ".$row['judet_candidati']." '></td>";
    		        			echo "<td><input type=text style=width:166px name=localitate_candidati value= ' ".$row['localitate_candidati']."'></td>";
    		            		echo "<td><input type=submit name='Modifica' value='Modifica'>";
    			                echo "</form>";
    			                echo "</tr>";
							}
						?>
					</table>
				</form>
			</div>


			<div id="Subiecte" class="tabcontent">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div name="subiecte" style="margin-top:100px">
							<div class="row">
								<div class="col-md-4">
									<center><h3>Matematica</h3></center>
									<br><br>
									<center>
										<h5>Gimnaziu</h5>
										<br>
										<a href="subiecte/matematica/clasa a 5-a.pdf" target="_blank">
											<style type="text/css">
												#matematica_clasa5:hover{cursor:pointer;}
											</style>
											Clasa a 5-a
										</a>
										<br>
										<a href="subiecte/matematica/clasa a 6-a.pdf" target="_blank">
											<style type="text/css">
												#matematica_clasa6:hover{cursor:pointer;}
											</style>
											Clasa a 6-a
										</a>
										<br>
										<a href="subiecte/matematica/clasa a 7-a.pdf" target="_blank">
											<style type="text/css">
												#matematica_clasa7:hover{cursor:pointer;}
											</style>
											Clasa a 7-a
										</a>
										<br>
										<a href="subiecte/matematica/clasa a 8-a.pdf" target="_blank">
											<style type="text/css">
												#matematica_clasa8:hover{cursor:pointer;}
											</style>
											Clasa a 8-a
										</a>
										<br><br><br>
										
										<h5>Liceu</h5>
										<br>
										<a href="subiecte/matematica/clasa a 9-a.pdf" target="_blank">
											<style type="text/css">
												#matematica_clasa9:hover{cursor:pointer;}
											</style>
											Clasa a 9-a
										</a>
										<br>
										<a href="subiecte/matematica/clasa a 10-a.pdf" target="_blank">
											<style type="text/css">
												#matematica_clasa10:hover{cursor:pointer;}
											</style>
											Clasa a 10-a
										</a>
										<br>
										<a href="subiecte/matematica/clasa a 11-a.pdf" target="_blank">
											<style type="text/css">
												#matematica_clasa11:hover{cursor:pointer;}
											</style>
											Clasa a 11-a
										</a>
										<br>
										<a href="subiecte/matematica/clasa a 12-a.pdf" target="_blank">
											<style type="text/css">
												#matematica_clasa12:hover{cursor:pointer;}
											</style>
											Clasa a 12-a
										</a>
									</center>
								</div>
								
								<div class="col-md-4">
									<center><h3>Fizica</h3></center>
									<br><br>
									<center>
										<h5>Gimnaziu</h5>
										<br>
											<style type="text/css">
												#fizica_clasa5:hover{cursor:pointer;}
											</style>
											-
										<br>
										<a href="subiecte/fizica/clasa a 6-a.pdf" target="_blank">
											<style type="text/css">
												#fizica_clasa6:hover{cursor:pointer;}
											</style>
											Clasa a 6-a
										</a>
										<br>
										<a href="subiecte/fizica/clasa a 7-a.pdf" target="_blank">
											<style type="text/css">
												#fizica_clasa7:hover{cursor:pointer;}
											</style>
											Clasa a 7-a
										</a>
										<br>
										<a href="subiecte/fizica/clasa a 8-a.pdf" target="_blank">
											<style type="text/css">
												#fizica_clasa8:hover{cursor:pointer;}
											</style>
											Clasa a 8-a
										</a>
										<br><br><br>
										
										<h5>Liceu</h5>
										<br>
										<a href="subiecte/fizica/clasa a 9-a.pdf" target="_blank">
											<style type="text/css">
												#fizica_clasa9:hover{cursor:pointer;}
											</style>
											Clasa a 9-a
										</a>
										<br>
										<a href="subiecte/fizica/clasa a 10-a.pdf" target="_blank">
											<style type="text/css">
												#fizica_clasa10:hover{cursor:pointer;}
											</style>
											Clasa a 10-a
										</a>
										<br>
										<a href="subiecte/fizica/clasa a 11-a.pdf" target="_blank">
											<style type="text/css">
												#fizica_clasa11:hover{cursor:pointer;}
											</style>
											Clasa a 11-a
										</a>
										<br>
										<a href="subiecte/fizica/clasa a 12-a.pdf" target="_blank">
											<style type="text/css">
												#fizica_clasa12:hover{cursor:pointer;}
											</style>
											Clasa a 12-a
										</a>
									</center>
								</div>
								
								<div class="col-md-4">
									<center><h3>Geografie</h3></center>
									<br><br>
									<center>
										<h5>Gimnaziu</h5>
										<br>
										<a href="subiecte/geografie/clasa a 5-a.pdf" target="_blank">
											<style type="text/css">
												#geografie_clasa5:hover{cursor:pointer;}
											</style>
											Clasa a 5-a
										</a>
										<br>
										<a href="subiecte/geografie/clasa a 6-a.pdf" target="_blank">
											<style type="text/css">
												#geografie_clasa6:hover{cursor:pointer;}
											</style>
											Clasa a 6-a
										</a>
										<br>
										<a href="subiecte/geografie/clasa a 7-a.pdf" target="_blank">
											<style type="text/css">
												#geografie_clasa7:hover{cursor:pointer;}
											</style>
											Clasa a 7-a
										</a>
										<br>
										<a href="subiecte/geografie/clasa a 8-a.pdf" target="_blank">
											<style type="text/css">
												#geografie_clasa8:hover{cursor:pointer;}
											</style>
											Clasa a 8-a
										</a>
										<br><br><br>
										
										<h5>Liceu</h5>
										<br>
										<a href="subiecte/geografie/clasa a 9-a.pdf" target="_blank">
											<style type="text/css">
												#geografie_clasa9:hover{cursor:pointer;}
											</style>
											Clasa a 9-a
										</a>
										<br>
										<a href="subiecte/geografie/clasa a 10-a.pdf" target="_blank">
											<style type="text/css">
												#geografie_clasa10:hover{cursor:pointer;}
											</style>
											Clasa a 10-a
										</a>
										<br>
										<a href="subiecte/geografie/clasa a 11-a.pdf" target="_blank">
											<style type="text/css">
												#geografie_clasa11:hover{cursor:pointer;}
											</style>
											Clasa a 11-a
										</a>
										<br>
										<a href="subiecte/geografie/clasa a 12-a.pdf" target="_blank">
											<style type="text/css">
												#geografie_clasa12:hover{cursor:pointer;}
											</style>
											Clasa a 12-a
										</a>
									</center>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2"></div>
				</div>
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
			
			<div id="Rezultate_adaugare" class="tabcontent">
				<form action="adaugarerezultate.php" method="post">
					<center><br><h3>Adaugare Rezultate</h3><br></center>
					<table id="tabel_adaugare_rezultate" align="center">
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
							<th>Materie</th>
							<th>Adauga</th>
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
								echo "<td><input type=submit name='Adauga' value='Adauga'>";
								echo "</tr>";
							}
						?>
					</table>
				</form>
			</div>
			
			<div id="Rezultate_stergere" class="tabcontent">
				<form action="deleterez1.php" method="post">
					<center><br><h3>Stergere Rezultate</h3><br></center>
					<table id="tabel_stergere_rezultate" align="center">
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
							<th>Materie</th>
							<th>Sterge</th>
						</tr>
						
						 <?php
							foreach($conn->query($query) as $row){
								echo"<tr>";
								echo "<form action=deleterez.php method=post>";
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
    		            		echo "<td><input type=submit name='Sterge' value='Sterge'>";
    			                echo "</form>";
    			                echo "</tr>";
							}
						?>
					</table>
				</form>
			</div>
			
			<div id="Rezultate_modificare" class="tabcontent">
				<form action="edit.php" method="post">
					<center><br><h3>Modificare rezultate</h3><br></center>
					<table id="tabel_modificare_rezultate" align="center">
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
							<th>Materie</th>
							<th>Modifica</th>
						</tr>
						
						<?php
							foreach($conn->query($query) as $row){
								echo"<tr>";
								echo "<form action=edit1.php method=post>";
								echo "<td>".$row["cod"]."</td>";
								echo "<td>".$row["nume_candidati"]."</td>";
								echo "<td>".$row["prenume_candidati"]."</td>";
								echo "<td>".$row["clasa_candidati"]."</td>";
								echo "<td>".$row["scoala_candidati"]."</td>";
								echo "<td>".$row["localitate_candidati"]."</td>";
								echo "<td>".$row["judet_candidati"]."</td>";
								echo "<td><input type=text style=width:50px value=' ".$row["proba1"]." '></td>";
								echo "<td><input type=text style=width:50px value=' ".$row["proba2"]." '></td>";
								echo "<td><input type=text style=width:50px value=' ".$row["proba3"]." '></td>";
								echo "<td>".$row["den_mat"]."</td>";
    		            		echo "<td><input type=submit name='Modifica' value='Modifica'>";
    			                echo "</form>";
    			                echo "</tr>";
							}
						?>
					</table>
				</form>
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
								<form class="form-group" method="post" action="test.php">
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
						<form name="formular" action="registrationcomisie.php" method="post">
							<center><h6>ATENTIE! Doar cadrele didactice care fac parte din comisie isi pot crea un cont.</h6><br></center>
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
										
									<div class="col-md-12"><button class="btn btn-primary" name="regist_submit" id="inputbtn" type="submit" style="margin-top:10px;">Inregistrare</button></div>
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