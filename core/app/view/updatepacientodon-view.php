<?php

if(count($_POST)>0){
	$user = PacientData::getById($_POST["user_id"]);
	$user->biometria = $_POST["check1"];
	$user->qsanguinea = $_POST["check2"];
	$user->rx = $_POST["check3"];
	$user->otros = $_POST["check4"];
	$user->textarea = $_POST["textarea"];

	$user->textdiagnos1 = $_POST["textdiagnos1"];
	$user->textcie1 = $_POST["textcie1"];
	$user->checkboxpre1 = $_POST["checkboxpre1"];
	$user->checkboxdef1 = $_POST["checkboxdef1"];
	$user->textdiagnos2 = $_POST["textdiagnos2"];
	$user->textcie2 = $_POST["textcie2"];
	$user->checkboxpre2 = $_POST["checkboxpre2"];
	$user->checkboxdef2 = $_POST["checkboxdef2"];
	$user->textdiagnos3 = $_POST["textdiagnos3"];
	$user->textcie3 = $_POST["textcie3"];
	$user->checkboxpre3 = $_POST["checkboxpre3"];
	$user->checkboxdef3 = $_POST["checkboxdef3"];
	$user->textdiagnos4 = $_POST["textdiagnos4"];
	$user->textcie4 = $_POST["textcie4"];
	$user->checkboxpre4 = $_POST["checkboxpre4"];
	$user->checkboxdef4 = $_POST["checkboxdef4"];

	$user->dateaper1 = $_POST["dateaper1"];
	$user->datecon1 = $_POST["datecon1"];
	$user->profesional = $_POST["profesional"];

	$user->txtdiag1 = $_POST["txtdiag1"];
	$user->txtproc1 = $_POST["txtproc1"];
	$user->txtpres1 = $_POST["txtpres1"];
	$user->txtpro1 = $_POST["txtpro1"];
	$user->dat1 = $_POST["dat1"];
	$user->txtdiag2 = $_POST["txtdiag2"];
	$user->txtproc2 = $_POST["txtproc2"];
	$user->txtpres2 = $_POST["txtpres2"];
	$user->txtpro2 = $_POST["txtpro2"];

	$user->txtdiag3 = $_POST["txtdiag3"];
	$user->txtproc3 = $_POST["txtproc3"];
	$user->txtpres3 = $_POST["txtpres3"];
	$user->txtpro3 = $_POST["txtpro3"];
	$user->dat1 = $_POST["dat2"];
	$user->txtdiag4 = $_POST["txtdiag4"];
	$user->txtproc4 = $_POST["txtproc4"];
	$user->txtpres4 = $_POST["txtpres4"];
	$user->txtpro4 = $_POST["txtpro4"];

	$user->txtdiag5 = $_POST["txtdiag5"];
	$user->txtproc5 = $_POST["txtproc5"];
	$user->txtpres5 = $_POST["txtpres5"];
	$user->txtpro5 = $_POST["txtpro5"];
	$user->dat3 = $_POST["dat3"];
	$user->txtdiag6 = $_POST["txtdiag6"];
	$user->txtproc6 = $_POST["txtproc6"];
	$user->txtpres6 = $_POST["txtpres6"];
	$user->txtpro6 = $_POST["txtpro6"];

	$user->txtdiag7 = $_POST["txtdiag7"];
	$user->txtproc7 = $_POST["txtproc7"];
	$user->txtpres7 = $_POST["txtpres7"];
	$user->txtpro7 = $_POST["txtpro7"];
	$user->dat4 = $_POST["dat4"];
	$user->txtdiag8 = $_POST["txtdiag8"];
	$user->txtproc8 = $_POST["txtproc8"];
	$user->txtpres8 = $_POST["txtpres8"];
	$user->txtpro8 = $_POST["txtpro8"];

	$user->txtdiag9 = $_POST["txtdiag9"];
	$user->txtproc9 = $_POST["txtproc9"];
	$user->txtpres9 = $_POST["txtpres9"];
	$user->txtpro9 = $_POST["txtpro9"];
	$user->dat5 = $_POST["dat5"];
	$user->txtdiag10 = $_POST["txtdiag10"];
	$user->txtproc10 = $_POST["txtproc10"];
	$user->txtpres10 = $_POST["txtpres10"];
	$user->txtpro10 = $_POST["txtpro10"];

	$user->diag = $_POST["diag"];
	$user->numref = $_POST["numref"];
	$user->piezas = $_POST["piezas"];
	$user->update();

Core::alert("Actualizado exitosamente!");
print "<script>window.location='index.php?view=pacients';</script>";

}


?>