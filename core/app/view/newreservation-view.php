<?php
$pacients = PacientData::getAll();
$medics = MedicData::getAll();

$statuses = StatusData::getAll();
$payments = PaymentData::getAll();

?>

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
      <h4 class="title">Citas</h4>
  </div>
  <div class="card-content table-responsive">
<h1>Nueva Cita</h1>
<form class="form-horizontal" role="form" method="post" action="./?action=addreservation">
  <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Asunto</h4>
    <div class="col-lg-10">
      <input type="text" name="title" required class="form-control" id="inputEmail1" placeholder="Asunto">
    </div>
  </div>
  <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Paciente</h4>
    <div class="col-lg-10">
<select name="pacient_id" class="form-control" required>
<option value="">-- SELECCIONE --</option>
  <?php foreach($pacients as $p):?>
    <option value="<?php echo $p->id; ?>"><?php echo $p->id." - ".$p->name." ".$p->lastname; ?></option>
  <?php endforeach; ?>
</select>
    </div>
  </div>
  <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Medico</h4>
    <div class="col-lg-10">
<select name="medic_id" class="form-control" required>
<option value="">-- SELECCIONE --</option>
  <?php foreach($medics as $p):?>
    <option value="<?php echo $p->id; ?>"><?php echo $p->id." - ".$p->name." ".$p->lastname; ?></option>
  <?php endforeach; ?>
</select>
    </div>
  </div>
  <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Fecha/Hora</h4>
    <div class="col-lg-5">
      <input type="date" name="date_at" required class="form-control" id="inputEmail1" placeholder="Fecha">
    </div>
    <div class="col-lg-5">
      <input type="time" name="time_at" required class="form-control" id="inputEmail1" placeholder="Hora">
    </div>
  </div>
  <!--
  <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Antecedentes</h4>
    <div class="col-lg-10">
    <textarea class="form-control" name="ante" placeholder="Antecedentes"></textarea>
    </div>
  </div>
  <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Motivo de Consulta</h4>
    <div class="col-lg-10">
    <textarea class="form-control" name="note" placeholder="Motivo de Consulta"></textarea>
    </div>
  </div>
    <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Enfermedad Actual</h4>
    <div class="col-lg-10">
    <textarea class="form-control" name="sick" placeholder="Enfermedad Actual"></textarea>
    </div>
  </div>
      <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Examen Fisico</h4>
    <div class="col-lg-10">
    <textarea class="form-control" name="symtoms" placeholder="Examen Fisico"></textarea>
    </div>
  </div>
        <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Tratamiento</h4>
    <div class="col-lg-10">
    <textarea class="form-control" name="medicaments" placeholder="Tratamiento"></textarea>
    </div>
  </div>
  <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Diagnostico</h4>
    <div class="col-lg-10">
    <textarea class="form-control" name="diag" placeholder="Diagnostico"></textarea>
    </div>
  </div>
-->
  <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Estado de la cita</h4>
    <div class="col-lg-10">
<select name="status_id" class="form-control" required>
  <?php foreach($statuses as $p):?>
    <option value="<?php echo $p->id; ?>"><?php echo $p->name; ?></option>
  <?php endforeach; ?>
</select>
    </div>
  </div>
  <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Estado del pago</h4>
    <div class="col-lg-10">
<select name="payment_id" class="form-control" required>
  <?php foreach($payments as $p):?>
    <option value="<?php echo $p->id; ?>"><?php echo $p->name; ?></option>
  <?php endforeach; ?>
</select>
    </div>
  </div>

    <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Costo</h4>
    <div class="col-lg-10">
<div class="input-group">
  <span class="input-group-addon"><i class="fa fa-usd"></i></span>
  <input type="text" class="form-control" name="price" placeholder="Costo">
</div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">Agregar Cita</button>
    </div>
  </div>
</form>

</div>
</div>