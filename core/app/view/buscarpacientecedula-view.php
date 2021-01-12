

<div class="row">
	
	<div class="col-md-12">
<div class="btn-group pull-right">
	</div>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
</div>


<div class="card">

  <div class="card-header" data-background-color="blue">
      <h4 class="title">Busqueda de pacientes</h4>
  </div>

<form class="form-horizontal" role="form">
<input type="hidden" name="view" value="buscarpacientecedula">


  <div class="form-group">
    <div class="col-lg-2">
		<div class="input-group">
		  <span class="input-group-addon"></span>
		  <input required name="PalabraClave" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese cedula" style="display: none;"> 
		  <input name="buscar" type="hidden" class="form-control mb-2" id="inlineFormInput" value="v">
		</div>
    </div>
    
    <div class="col-lg-2">
    <button style="display: none;" class="btn btn-primary btn-block">Buscar</button>
    </div>

  </div>
</form>

		

<div class="container">
 
 <hr>

<div class="row">
  <div class="col-12 col-md-12">
<!-- Contenido -->   



<ul class="list-group">
  <li class="list-group-item">
<form method="post">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Curso</label>
      <input required name="PalabraClave" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese numero de cedula"><i class="fa fa-search"></i>
      <input name="buscar" type="hidden" class="form-control mb-2" id="inlineFormInput" value="v">
    </div>
   
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Buscar Ahora</button>
    </div>
  </div>

</form>
  </li>

</ul>


<?php include 'conexion.php';
	?>
	
 <?php
if(!empty($_POST))
{
      $aKeyword = explode(" ", $_POST['PalabraClave']);
      $query ="SELECT * FROM pacient WHERE cedula like '%" . $aKeyword[0] . "%' OR name like '%" . $aKeyword[0] . "%' OR lastname like '%" . $aKeyword[0] . "%'";
      
     for($i = 1; $i < count($aKeyword); $i++) {
        if(!empty($aKeyword[$i])) {
            $query .= " OR descripcion like '%" . $aKeyword[$i] . "%'";
        }
      }
     
     $result = $db->query($query);

   

     echo "<br>Has buscado la cedula, apellido o nombre:<b>  ". $_POST['PalabraClave']."</b>";  

     if(mysqli_num_rows($result) > 0) {
        
        $row_count=0;
        echo "<br><br>Resultados encontrados: ";

        echo "<br><table class='table table-striped'>";
        echo "<tr><td>"."Nro" . "</td><td>". "CEDULA" . "</td><td>". "NOMBRES" . "</td><td>" . "APELLIDOS" . "</td><td>" . "EDAD" ."</td><td>" . "ID" ."</td><td>"."OPERACION"."</td><td>"."</tr></td>"; 

        While($row = $result->fetch_assoc()) { 
            $row_count++; 
            $ident=$row['id'];
			{
}
			   
	$tiempo = strtotime($row['day_of_birth']); 
    $ahora = time(); 
    $edad = ($ahora-$tiempo)/(60*60*24*365.25); 
    $edad = floor($edad); 
            echo "<tr><td>".$row_count." </td><td>". $row['cedula'] . "</td><td>". $row['name'] . "</td><td>" . $row['lastname'] . "</td><td>" . $edad ."</td><td>".$row['id']."</td><td>".


            "</tr></td>";
                    

        }



        echo "</table>";



        	
	
    }
    else {
        echo "<br>Resultados encontrados: Ninguno";
		
    }
}
 
?>

<!-- codigo de prueba -->


<!-- Fin Contenido --> 

<!-- Fin row -->
<br><br>



<div class="form-row align-items-center">
<div class="col-auto">
<a href="index.php?view=pacient_history&id= <?php echo $ident;?> " class="btn btn-default btn-xs">Historial</a>
<a href="index.php?view=editpacient&id=<?php echo $ident;?>" class="btn btn-warning btn-xs">Editar</a>
<a href="index.php?view=delpacient&id=<?php echo $ident;?>" class="btn btn-danger btn-xs">Eliminar</a>
<a href="index.php?view=odontologia&id=<?php echo $ident;?>" class="btn btn-danger btn-xs">ODONTOLOGIA</a>

</div>
</div>


<!-- Fin container -->
   <!-- <footer class="footer">
      <div class="container">
        
      </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
   <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>



				<!--<a href="index.php?view=pacienthistory&id=<?php echo $fetch_assoc->id;?>" class="btn btn-default btn-xs">Historial</a>
				<a href="index.php?view=editpacient&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="index.php?view=delpacient&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">Eliminar</a>-->

