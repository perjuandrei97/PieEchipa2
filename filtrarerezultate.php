<!DOCTYPE html>
<html>
<head>
<title>Filtrare Rezultate</title>
    <meta charset="utf-8"/>
    <title>Table Dropdown Filter</title>
    <link href="w3.css" rel="stylesheet"/>
    <style>
        .container{width:1253px;margin:30px auto;}
        thead select{border: 1px solid #ffffff;width:100%;}
    </style>
</head>
<body background="img.jpg">
<center>
<h3>Filtrare Rezultate</h3>

    <div class="container">
        <table id="mytable" class="w3-table-all">
            <thead>
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
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "remotemysql.com";
				$username = "7YNzXacPRV";
				$password = "9Mx89MjGuI";
				$myDB="7YNzXacPRV";
              $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
                $stmt = $conn->prepare("select * from rezultate");
                $stmt->execute();
                while($row = $stmt->fetch()){
                ?>
                <tr>
                    <td><?php echo $row['cod'] ?></td>
                    <td><?php echo $row['nume_candidati'] ?></td>
                    <td><?php echo $row['prenume_candidati'] ?></td>
                    <td><?php echo $row['clasa_candidati'] ?></td>
                    <td><?php echo $row['scoala_candidati'] ?></td>
                    <td><?php echo $row['judet_candidati'] ?></td>
                    <td><?php echo $row['localitate_candidati'] ?></td>
                    <td><?php echo $row['proba1'] ?></td>
                    <td><?php echo $row['proba2'] ?></td>
                    <td><?php echo $row['proba3'] ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
<input type="button" onclick="location.href='olimpiadacomisie.php';" value=" Intoarce-te la Pagina Principala" />
    <script src="jquery.min.js"></script>
    <script src="ddtf.js"></script>
    <script>
        $('#mytable').ddTableFilter();
    </script>
    </center>
</body>
</html>