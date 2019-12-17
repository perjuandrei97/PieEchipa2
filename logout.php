<?php
	session_start();
	$_SESSION['loggedIN']="false";
	header("Location: test.php");
?>
