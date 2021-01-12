<?php $user = PacientData::getById($_GET["id"]);?>
<div class="row">
  <div class="col-md-12">

<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Editar Paciente</h4>
  </div>
  <div class="card-content table-responsive">
    <form class="form-horizontal" method="post" id="addproduct" action="index.php?view=updatepacient" role="form">
      <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Cedula</h4>
    <div class="col-md-6">
      <input type="text" name="cedula" value="<?php echo $user->cedula;?>" class="form-control" id="cedula" placeholder="Cedula">
    </div>
  </div>
  <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Nombre</h4>
    <div class="col-md-6">
      <input type="text" name="name" value="<?php echo $user->name;?>" class="form-control" id="name" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Apellido</h4>
    <div class="col-md-6">
      <input type="text" name="lastname" value="<?php echo $user->lastname;?>" required class="form-control" id="lastname" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Genero</h4>
    <div class="col-md-6">
<label class="checkbox-inline" style="color:black; font-size: 32;">
  <input type="radio" id="inlineCheckbox1" name="gender" required <?php if($user->gender=="h"){ echo "checked"; }?> value="h"> Hombre
</label>
<label class="checkbox-inline" style="color:black; font-size: 32;">
  <input type="radio" id="inlineCheckbox2" name="gender" required <?php if($user->gender=="m"){ echo "checked"; }?> value="m"> Mujer
</label>
<label class="checkbox-inline" style="color:black; font-size: 32;">
  <input type="radio" id="inlineCheckbox3" name="gender" required <?php if($user->gender=="o"){ echo "checked"; }?> value="o"> Otros
</label>
    </div>
  </div>

  <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Fecha de Nacimiento</h4>
    <div class="col-md-6">
      <input type="date" name="day_of_birth" class="form-control" value="<?php echo $user->day_of_birth; ?>"  id="address1" placeholder="Fecha de Nacimiento">
    </div>
  </div>

  <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Direccion</h4>
    <div class="col-md-6">
      <input type="text" name="address" value="<?php echo $user->address;?>" class="form-control" id="username" placeholder="Direccion">
    </div>
  </div>
  <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Email</h4>
    <div class="col-md-6">
      <input type="text" name="email" value="<?php echo $user->email;?>" class="form-control" id="email" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Telefono</h4>
    <div class="col-md-6">
      <input type="text" name="phone"  value="<?php echo $user->phone;?>"  class="form-control" id="inputEmail1" placeholder="Telefono">
    </div>
  </div>
  <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Nombre de Referencia</h4>
    <div class="col-md-6">
      <input type="text" name="refpa"  value="<?php echo $user->refpa;?>"  class="form-control" id="inputEmail1" placeholder="Nombre de Referencia">
    </div>
  </div>

  <div class="form-group">
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">Telefono de Referencia</h4>
    <div class="col-md-6">
      <input type="text" name="numref"  value="<?php echo $user->numref;?>"  class="form-control" id="inputEmail1" placeholder="Telefono de Referencia">
    </div>
  </div>



  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="user_id" value="<?php echo $user->id;?>">
      <button type="submit" class="btn btn-primary">Actualizar Paciente</button>
    </div>
  </div>
</form>
</div>
</div>
  </div>
</div>