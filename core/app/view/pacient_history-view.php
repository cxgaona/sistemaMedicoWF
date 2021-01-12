<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">
<!--<div class="btn-group pull-right">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-download"></i> Descargar <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="report/clients-word.php">Word 2007 (.docx)</a></li>
  </ul>
</div>
-->
</div>
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">HISTORIA CLINICA DEL PACIENTE</h4>
  </div>
  <div class="card-content table-responsive">
	<!--<a href="index.php?view=newpacient" class="btn btn-default"><i class='fa fa-male'></i> Nuevo Paciente</a>
	<a href="index.php?view=buscarpacientecedula" class="btn btn-default"><i class='fa fa-male'></i> Buscar Paciente</a>-->
	

		<?php

		 $user = PacientData::getById($_GET["id"]);
		 
			// si hay usuarios
			?>
			
			<table class="table table-bordered table-hover">
			<thead>
			<th>Cedula de identidad</th>	
			<th>Nombre completo</th>
			<th>Direccion</th>
			<th>Email</th>
			<th>Telefono</th>
			<th>Fecha de nacimiento</th>
			<th>Nombre de referencia</th>
			<th>Numero de referencia</th>
			<th>Operaciones</th>
			<th></th>
			<a href="index.php?view=pacients" class="btn btn-info btn-lg">Volver</a>
			<br>
			<br>
			

			<th></th>
			</thead>
				<tr>
				<td><?php echo $user->cedula; ?></td>	
				<td><?php echo $user->lastname." ".$user->name; ?></td>
				<td><?php echo $user->address; ?></td>
				<td><?php echo $user->email; ?></td>
				<td><?php echo $user->phone; ?></td>
				<td><?php echo $user->day_of_birth; ?></td>
				<td><?php echo $user->refpa; ?></td>
				<td><?php echo $user->numref; ?></td>
				<td style="width:100px;">
				<a href="index.php?view=editpacient&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="index.php?view=delpacient&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">Eliminar</a>
				
				</td>
				</tr>
			</table>
			<br>
			</div>
			</div>
			
	</div>
</div>