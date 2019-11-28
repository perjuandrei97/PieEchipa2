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
  <title>Olimpiada nationala la matematica</title>
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

body {font-family: Arial;
height :100%;
margin: 0;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  display: inline-block;
  margin-top: 20px;
 
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
.list-group-item {
    position: relative;
    display: inline;
    padding: .75rem 1.25rem;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid rgba(0,0,0,.125);
}

</style>

 <body background="imagini/onpic1.jpg" style="text-align: center">


<div name="subiecte">
<div class="container" style="margin-top: 50px" >
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-2">
			<div class="vertical-menu" style="min-width: 0; padding: 0; margin: 0;">
				<button type="button" class="btn btn-secondary aria-haspopup="true" aria-expanded="false" style="width:150px; height:50px; font-size:20px; background-color:#3498DB; border-color:#ffffff; min-width: 0; padding: 0; margin: 0;">
					Matematica
				</button>
						<button type="submit" id="matematica_clasa5" name="matematica_clasa5" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/matematica/clasa a 5-a.pdf">
							<style type="text/css">
								#matematica_clasa5:hover{cursor:pointer;}
							</style>
							Clasa a 5-a
							</a>
						</button>
						
						<button type="submit" id="matematica_clasa6" name="matematica_clasa6" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/matematica/clasa a 6-a.pdf">
							<style type="text/css">
								#matematica_clasa6:hover{cursor:pointer;}
							</style>
							Clasa a 6-a
							</a>
						</button>
						
						<button type="submit" id="matematica_clasa7" name="matematica_clasa7" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/matematica/clasa a 7-a.pdf">
							<style type="text/css">
								#matematica_clasa7:hover{cursor:pointer;}
							</style>
							Clasa a 7-a
							</a>
						</button>
					
						<button type="submit" id="matematica_clasa8" name="matematica_clasa8" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/matematica/clasa a 8-a.pdf">
							<style type="text/css">
								#matematica_clasa8:hover{cursor:pointer;}
							</style>
							Clasa a 8-a
							</a>
						</button>
						
						<button type="submit" id="matematica_clasa9" name="matematica_clasa9" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/matematica/clasa a 9-a.pdf">
							<style type="text/css">
								#matematica_clasa9:hover{cursor:pointer;}
							</style>
							Clasa a 9-a
							</a>
						</button>
						
						<button type="submit" id="matematica_clasa10" name="matematica_clasa10" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/matematica/clasa a 10-a.pdf">
							<style type="text/css">
								#matematica_clasa10:hover{cursor:pointer;}
							</style>
							Clasa a 10-a
							</a>
						</button>
						
						<button type="submit" id="matematica_clasa11" name="matematica_clasa11" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/matematica/clasa a 11-a.pdf">
							<style type="text/css">
								#matematica_clasa11:hover{cursor:pointer;}
							</style>
							Clasa a 11-a
							</a>
						</button>
						
						<button type="submit" id="matematica_clasa12" name="matematica_clasa12" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/matematica/clasa a 12-a.pdf">
							<style type="text/css">
								#matematica_clasa12:hover{cursor:pointer;}
							</style>
							Clasa a 12-a
							</a>
						</button>
				</div>
			</div>
	
			
			<div class="col-md-2">
			<div class="vertical-menu" style="min-width: 0; padding: 0; margin: 0;">
				<button type="button" class="btn btn-secondary aria-haspopup="true" aria-expanded="false" style="width:150px; height:50px; font-size:20px; background-color:#3498DB; border-color:#ffffff; min-width: 0; padding: 0; margin: 0;">
					Fizica
				</button>
						<button type="submit" id="fizica_clasa5" name="fizica_clasa5" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/fizica/clasa a 5-a.pdf">
							<style type="text/css">
								#fizica_clasa5:hover{cursor:pointer;}
							</style>
							Clasa a 5-a
							</a>
						</button>
						
						<button type="submit" id="fizica_clasa6" name="fizica_clasa6" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/fizica/clasa a 6-a.pdf">
							<style type="text/css">
								#fizica_clasa6:hover{cursor:pointer;}
							</style>
							Clasa a 6-a
							</a>
						</button>
						
						<button type="submit" id="fizica_clasa7" name="fizica_clasa7" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/fizica/clasa a 7-a.pdf">
							<style type="text/css">
								#fizica_clasa7:hover{cursor:pointer;}
							</style>
							Clasa a 7-a
							</a>
						</button>
					
						<button type="submit" id="fizica_clasa8" name="fizica_clasa8" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/fizica/clasa a 8-a.pdf">
							<style type="text/css">
								#fizica_clasa8:hover{cursor:pointer;}
							</style>
							Clasa a 8-a
							</a>
						</button>
						
						<button type="submit" id="fizica_clasa9" name="fizica_clasa9" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/fizica/clasa a 9-a.pdf">
							<style type="text/css">
								#fizica_clasa9:hover{cursor:pointer;}
							</style>
							Clasa a 9-a
							</a>
						</button>
						
						<button type="submit" id="fizica_clasa10" name="fizica_clasa10" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/fizica/clasa a 10-a.pdf">
							<style type="text/css">
								#fizica_clasa10:hover{cursor:pointer;}
							</style>
							Clasa a 10-a
							</a>
						</button>
						
						<button type="submit" id="fizica_clasa11" name="fizica_clasa11" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/fizica/clasa a 11-a.pdf">
							<style type="text/css">
								#fizica_clasa11:hover{cursor:pointer;}
							</style>
							Clasa a 11-a
							</a>
						</button>
						
						<button type="submit" id="fizica_clasa12" name="fizica_clasa12" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/fizica/clasa a 12-a.pdf">
							<style type="text/css">
								#fizica_clasa12:hover{cursor:pointer;}
							</style>
							Clasa a 12-a
							</a>
						</button>
				</div>
				</div>
			
			<div class="col-md-2">
			<div class="vertical-menu" style="min-width: 0; padding: 0; margin: 0;">
				<button type="button" class="btn btn-secondary aria-haspopup="true" aria-expanded="false" style="width:150px; height:50px; font-size:20px; background-color:#3498DB; border-color:#ffffff; min-width: 0; padding: 0; margin: 0;">
					Geografie
				</button>
						<button type="submit" id="geografie_clasa5" name="geografie_clasa5" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/geografie/clasa a 5-a.pdf">
							<style type="text/css">
								#geografie_clasa5:hover{cursor:pointer;}
							</style>
							Clasa a 5-a
							</a>
						</button>
						
						<button type="submit" id="geografie_clasa6" name="geografie_clasa6" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/geografie/clasa a 6-a.pdf">
							<style type="text/css">
								#geografie_clasa6:hover{cursor:pointer;}
							</style>
							Clasa a 6-a
							</a>
						</button>
						
						<button type="submit" id="geografie_clasa7" name="geografie_clasa7" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/geografie/clasa a 7-a.pdf">
							<style type="text/css">
								#geografie_clasa7:hover{cursor:pointer;}
							</style>
							Clasa a 7-a
							</a>
						</button>
					
						<button type="submit" id="geografie_clasa8" name="geografie_clasa8" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/geografie/clasa a 8-a.pdf">
							<style type="text/css">
								#geografie_clasa8:hover{cursor:pointer;}
							</style>
							Clasa a 8-a
							</a>
						</button>
						
						<button type="submit" id="geografie_clasa9" name="geografie_clasa9" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/geografie/clasa a 9-a.pdf">
							<style type="text/css">
								#geografie_clasa9:hover{cursor:pointer;}
							</style>
							Clasa a 9-a
							</a>
						</button>
						
						<button type="submit" id="geografie_clasa10" name="geografie_clasa10" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/geografie/clasa a 10-a.pdf">
							<style type="text/css">
								#geografie_clasa10:hover{cursor:pointer;}
							</style>
							Clasa a 10-a
							</a>
						</button>
						
						<button type="submit" id="geografie_clasa11" name="geografie_clasa11" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/geografie/clasa a 11-a.pdf">
							<style type="text/css">
								#geografie_clasa11:hover{cursor:pointer;}
							</style>
							Clasa a 11-a
							</a>
						</button>
						
						<button type="submit" id="geografie_clasa12" name="geografie_clasa12" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/geografie/clasa a 12-a.pdf">
							<style type="text/css">
								#geografie_clasa12:hover{cursor:pointer;}
							</style>
							Clasa a 12-a
							</a>
						</button>
				</div>
			</div>
			
</div>
</div>
</div>
</body>
</html> 

