
<?php



if(Session::getUID()!=""){
		print "<script>window.location='index.php?view=home';</script>";
}

?>
<label id="uno">Odontologia</label>
<label id="dos">Medicina General</label>
<label id="tres">Gineco Obstetricia</label>
<br>

<style>
body {
  background-image: url('img/portada.jpg');
  background-repeat: no-repeat;
  background-attachment: auto;
  background-size: cover;
}
label{
	font-size: 24px;
	font-family: Verdana;
}
#uno{
	margin: 0px 150px;
}
#dos{
	margin: 0px 150px;
}
#tres{
	margin: 0px 150px;
}
</style>
<div class="container">

<br><div class="row" >
    	<div class="col-md-4 col-md-offset-4">
    	<?php if(isset($_COOKIE['password_updated'])):?>
    		<div class="alert alert-success">
    		<p><i class='glyphicon glyphicon-off'></i> Se ha cambiado la contraseña exitosamente !!</p>
    		<p>Pruebe iniciar sesion con su nueva contraseña.</p>

    		</div>
    	<?php setcookie("password_updated","",time()-18600);
    	 endif; ?>

<div class="card" >
  <div class="card-header" data-background-color="blue" >
      <h4 class="title">ACCEDER A SISTEMA SMILEMED</h4>
  </div>
  <div class="card-content table-responsive" >
			    	<form accept-charset="UTF-8" role="form" method="post" action="index.php?view=processlogin">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Usuario" name="mail" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
			    		</div>
			    		<input class="btn btn-primary btn-block" type="submit" value="Iniciar Sesion">
			    	</fieldset>
			      	</form>
			      	</div>
			      	</div>
		</div>
	</div>
</div>
