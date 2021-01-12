<?php
	require 'conexion.php';
	
	$where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE cedula LIKE _utf8 '%$valor%' OR CONCAT_WS(' ', name, lastname ) like  '%$valor%' OR CONCAT_WS(' ', lastname, name ) like  '%$valor%'";

		}
	}
	$sql = "SELECT * FROM pacient $where";
	$resultado = $db->query($sql);
	
?>
<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		
		<div class="container">
			<div class="row">
				<h2 style="text-align:center">CONTROL DE PACIENTES</h2>
			</div>
			
			<div class="row">
				<a href="index.php?view=newpacient" class="btn btn-primary"><i class='fa fa-male'></i> Nuevo paciente</a>
				
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>Ingrese nombre, cedula o apellido </b><input type="text" id="campo" name="campo" />
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
				</form>
			</div>
			
			<br>
			
			<div class="row table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>CEDULA</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Telefono</th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					
					<tbody>
						<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td><?php echo $row['cedula']; ?></td>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['lastname']; ?></td>
								<td><?php echo $row['phone']; ?></td>
								<td>
									<a href="index.php?view=pacient_history&id= <?php echo $row['id'];?> " class="btn btn-primary btn-xs">Historial</a>
								    <a href="index.php?view=editpacient&id=<?php echo $row['id'];?>" class="btn btn-warning btn-xs">Editar</a>
								    <a href="index.php?view=delpacient&id=<?php echo $row['id'];?>" class="btn btn-danger btn-xs">Eliminar</a>
								    <a href="index.php?view=odontologia&id=<?php echo $row['id'];?>" class="btn btn-info btn-xs">ODONTOLOGIA</a>
							</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
		
	</body>
</html>
	