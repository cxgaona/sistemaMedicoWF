<div class="row">
	<div class="col-md-12">
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Nuevo Paciente</h4>
  </div>
  <div class="card-content table-responsive">

		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=addpacient" role="form">

  <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Numero de Cedula</h4>
    <div class="col-md-6">
      <input type="text" name="cedula" class="form-control" id="cedula" placeholder="Cedula">
    </div>
  </div>
  <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Nombres</h4>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Apellidos</h4>
    <div class="col-md-6">
      <input type="text" name="lastname"  class="form-control" id="lastname" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Genero</h4>
    <div class="col-md-6">
<label class="checkbox-inline" style="color:black; font-size: 32;">
  <input type="radio" id="inlineCheckbox1" name="gender" required value="h"> Hombre
</label>
<label class="checkbox-inline" style="color:black; font-size: 32;">
  <input type="radio" id="inlineCheckbox2" name="gender" required value="m"> Mujer
</label>
<label class="checkbox-inline" style="color:black; font-size: 32;">
  <input type="radio" id="inlineCheckbox3" name="gender" required value="o"> Otros
</label>
    </div>
  </div>

  <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Fecha de Nacimiento</h4>
    <div class="col-md-6">
      <input type="date" name="day_of_birth" class="form-control"  id="calendario" placeholder="Fecha de Nacimiento">
    </div>
  </div>
  <!--
<div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Edad</h4>
    <div class="col-md-6">
      <input type="text" name="address" class="form-control"  id="edadCalculada" placeholder="">
    </div>
  </div>
-->
  <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Direccion</h4>
    <div class="col-md-6">
      <input type="text" name="address" class="form-control"  id="address1" placeholder="Direccion">
    </div>
  </div>
  <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Email</h4>
    <div class="col-md-6">
      <input type="text" name="email" class="form-control" id="email1" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Telefono</h4>
    <div class="col-md-6">
      <input type="text" name="phone" class="form-control" id="phone1" placeholder="Telefono">
     
    </div>
  </div>
   <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Nombre de Referencia</h4>
    <div class="col-md-6">
      <input type="text" name="refpa" class="form-control" id="refpa" placeholder="Nombre de Referencia">
    </div>
  </div>
   <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Numero de Referencia</h4>
    <div class="col-md-6">
      <input type="text" name="numref" class="form-control" id="numref" placeholder="Numero de Referencia">
    </div>
  </div>

   <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Diag</h4>
    <div class="col-md-6">
      <input type="text" name="diag" class="form-control" id="diag" placeholder="diag">
    </div>
  </div>


   <!--
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Enfermedad</label>
    <div class="col-md-6">
      <textarea name="sick" class="form-control" id="sick" placeholder="Enfermedad"></textarea>
    </div>
  </div>
 
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Medicamentos</label>
    <div class="col-md-6">
      <textarea name="medicaments" class="form-control" id="sick" placeholder="Medicamentos"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Alergia</label>
    <div class="col-md-6">
      <textarea name="alergy" class="form-control" id="sick" placeholder="Alergia"></textarea>
    </div>
  </div>
 -->

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">

      <br><button type="submit" class="btn btn-primary">Agregar Paciente</button>
    </div>
  </div>
</form>
</div>
</div>
	</div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $("#calendario").datepicker();
  $('#calendario').change(function(){
      $.ajax({
        type:"POST",
        data:"fecha=" + $('#calendario').val(),
        url:"core/app/view/php/calcularEdad.php",
        success:function(r){
          $('#edadCalculada').text(r + " años");
        }
      });
    });
  });
</script>