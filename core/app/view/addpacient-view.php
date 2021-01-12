<?php
if(count($_POST)>0){
	$user = new PacientData();
	$user->cedula = $_POST["cedula"];
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];
	$user->gender = $_POST["gender"];
	$user->day_of_birth = $_POST["day_of_birth"];
	$user->sick = $_POST["sick"];
	$user->medicaments = $_POST["medicaments"];
	$user->alergy = $_POST["alergy"];
	$user->address = $_POST["address"];
	$user->email = $_POST["email"];
	$user->phone = $_POST["phone"];
	$user->refpa = $_POST["refpa"];
	$user->numref = $_POST["numref"];
	$user->diag = $_POST["diag"];
	$user->add();

print "<script>window.location='index.php?view=pacients';</script>";


}


?>