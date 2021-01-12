<?php $user = PacientData::getById($_GET["id"]);?>
<div class="row">
  <div class="col-md-12">
  <div class="card-header" data-background-color="blue">
    <a href="index.php?view=pacients" class="btn btn-info btn-lg">Volver</a>
      <h4 class="title">AREA DE ODONTOLOGIA-SMILEMED</h4>

    <h4 for="inputEmail1" class="col-lg-1 " style="color:black; font-size: 32;">Graficas</h4>
      <a href="index.php?view=odontograma2" class="btn btn-default"><i class='fa fa-male'></i> Odontograma</a>
    </div>
    <br><br>
<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=updatepacientodon" role="form">

    <h5 for="inputEmail1" class="col-lg-3" style="color:black; font-size: 20;">PLANES DE DIAGNOSTICO, TERAPEUTICO Y EDUCACIONAL</h5>
    <table border="3">
                <tr>
                    <td style="padding: 10px;">BIOMETRIA</td>
                    <td style="padding: 10px; text-align: center;"><input type="checkbox" name="check1" <?php if($user->biometria=="1"){ echo "checked"; }?> value=1 id="check1"></td>
                    <td style="padding: 10px;">QUIMICA SANGUINEA</td>
                    <td style="padding: 10px; text-align: center;"><input type="checkbox" name="check2" <?php if($user->qsanguinea=="1"){ echo "checked"; }?> value=1 id="check2"></td>
                    <td style="padding: 10px;">RAYOS - X</td>
                    <td style="padding: 10px; text-align: center;"><input type="checkbox" name="check3" <?php if($user->rx=="1"){ echo "checked"; }?> value=1 id="check3"></td>
                    <td style="padding: 10px;">OTROS</td>
                    <td style="padding: 10px; text-align: center;"><input type="checkbox" name="check4" <?php if($user->otros=="1"){ echo "checked"; }?> value=1 id="check4"></td>
                </tr>
                <tr>
                  <td colspan="8">Ingrese el tratamiento<input type="text" name="textarea" value="<?php echo $user->textarea;?>" id="textarea" size=200 style="width:1200px"></td>
                </tr>
    </table>
    <br>
    <br>
    <h4 for="inputEmail1" class="col-lg-3" style=" color:black; width:1000px";">DIAGNOSTICO</h4>
    <table border="3" size=200>
        <br>
        <br>
                <tr>
                    <td style="padding: 10px;"></td>
                    <td style="padding: 10px;">DIAGNOSTICO</td>
                    <td style="padding: 10px;">CIE</td>
                    <td style="padding: 10px;">PRE<br>PRESUNTIVO</td>
                    <td style="padding: 10px;">DEF<br>DEFINITIVO</td>
                    <td style="padding: 10px;"></td>
                    <td style="padding: 10px;">DIAGNOSTICO</td>
                    <td style="padding: 10px;">CIE</td>
                    <td style="padding: 10px;">PRE<br>PRESUNTIVO</td>
                    <td style="padding: 10px;">DEF<br>DEFINITIVO</td>
                </tr>
                <tr>
                    <td style="padding: 10px;">1</td>
                    <td style="padding: 10px;"><input type="text" name="textdiagnos1" value="<?php echo $user->textdiagnos1;?>" id="textdiagnos1" size="20"></td>
                    <td style="padding: 10px;"><input type="text" name="textcie1" value="<?php echo $user->textcie1;?>" id="textcie1" size="10"></td>
                    <td style="padding: 10px; text-align: center;"><input type="checkbox" name="checkboxpre1" <?php if($user->checkboxpre1=="1"){ echo "checked"; }?> value=1 id="checkboxpre1"></td>
                    <td style="padding: 10px; text-align: center;"><input type="checkbox" name="checkboxdef1" <?php if($user->checkboxdef1=="1"){ echo "checked"; }?> value=1 id="checkboxdef1"></td>
                    <td style="padding: 10px;">3</td>
                    <td style="padding: 10px;"><input type="text" name="textdiagnos2" value="<?php echo $user->textdiagnos2;?>" id="textdiagnos2" size="20"></td>
                    <td style="padding: 10px;"><input type="text" name="textcie2" value="<?php echo $user->textcie2;?>" id="textcie2" size="10"></td>
                    <td style="padding: 10px; text-align: center;"><input type="checkbox" name="checkboxpre2" <?php if($user->checkboxpre2=="1"){ echo "checked"; }?> value=1 id="checkboxpre2"></td>
                    <td style="padding: 10px; text-align: center;"><input type="checkbox" name="checkboxdef2" <?php if($user->checkboxdef2=="1"){ echo "checked"; }?> value=1 id="checkboxdef2"></td>
                </tr>
                <tr>
                    <td style="padding: 10px;">2</td>
                    <td style="padding: 10px;"><input type="text" name="textdiagnos3" value="<?php echo $user->textdiagnos3;?>" id="textdiagnos3" size="20"></td>
                    <td style="padding: 10px;"><input type="text" name="textcie3" value="<?php echo $user->textcie3;?>" id="textcie3" size="10"></td>
                    <td style="padding: 10px; text-align: center;"><input type="checkbox" name="checkboxpre3" <?php if($user->checkboxpre3=="1"){ echo "checked"; }?> value=1 id="checkboxpre3"></td>
                    <td style="padding: 10px; text-align: center;"><input type="checkbox" name="checkboxdef3" <?php if($user->checkboxdef3=="1"){ echo "checked"; }?> value=1 id="checkboxdef3"></td>
                    <td style="padding: 10px;">4</td>
                    <td style="padding: 10px;"><input type="text" name="textdiagnos4" value="<?php echo $user->textdiagnos4;?>" id="textdiagnos4" size="20"></td>
                    <td style="padding: 10px;"><input type="text" name="textcie4" value="<?php echo $user->textcie4;?>" id="textcie4" size="10"></td>
                    <td style="padding: 10px; text-align: center;"><input type="checkbox" name="checkboxpre4" <?php if($user->checkboxpre4=="1"){ echo "checked"; }?> value=1 id="checkboxpre4"></td>
                    <td style="padding: 10px; text-align: center;"><input type="checkbox" name="checkboxdef4" <?php if($user->checkboxdef4=="1"){ echo "checked"; }?> value=1 id="checkboxdef4"></td>
                </tr>
                
    </table>
    <br>
    <br>
    <table border="2">
                <tr>
                    <td style="padding: 10px;">FECHA DE APERTURA</td>
                    <td style="padding: 10px;"><input type="date" name="dateaper1" value="<?php echo $user->dateaper1;?>" id="dateaper1"></td>
                    <td style="padding: 10px;">FECHA DE CONTROL</td>
                    <td style="padding: 10px;"><input type="date" name="datecon1" value="<?php echo $user->datecon1;?>" id="dateacon1"></td>
                    <td style="padding: 10px;">PROFESIONAL</td>
                    <td style="padding: 10px;"><input type="text" name="profesional" value="<?php echo $user->profesional;?>" id="profesional"></td> 
                </tr>
    </table>
    <h4 for="inputEmail1" class="col-lg-2 control-label" style="color:black; font-size: 32;">TRATAMIENTO</h4>
    <table border="2" style="width: 100%">
                <tr>
                    <td>
                        Sesion y Fecha
                    </td>
                    <td>Diagnosticos y complicaciones <br></td>
                    <td>Procedimientos</td>
                    <td>Prescripciones</td>
                    <td>Profesional</td>
                </tr>
                    <tr>
                        <th>Sesion 1</th>
                        <td><input type="text" name="txtdiag1" value="<?php echo $user->txtdiag1;?>" id="txtdiag1" style="width: 100%;" /></td>
                        <td><input type="text" name="txtproc1" value="<?php echo $user->txtproc1;?>" id="txtproc1" style="width: 100%;" /></td>
                        <td><input type="text" name="txtpres1" value="<?php echo $user->txtpres1;?>" id="txtpres1" style="width: 100%;" /></td>
                        <td><input type="text" name="txtpro1"  value="<?php echo $user->txtpro1;?>"  id="txtpro1"  style="width: 100%;"/></td>
                    </tr>
                    <tr>
                        <td>Fecha <input type="date" name="dat1" value="<?php echo $user->dat1;?>"     id="dat1"  /></td>
                        <td><input type="text" name="txtdiag2"   value="<?php echo $user->txtdiag2;?>" id="txtdiag2" style="width: 100%;" /></td>
                        <td><input type="text" name="txtproc2"   value="<?php echo $user->txtproc2;?>" id="txtproc2" style="width: 100%;" /></td>
                        <td><input type="text" name="txtpres2"   value="<?php echo $user->txtpres2;?>" id="txtpres2" style="width: 100%;" /></td>
                        <td><input type="text" name="txtpro2"    value="<?php echo $user->txtpro2;?>"  id="txtpro2" style="width: 100%;"/></td>
                    </tr>
                    <tr>
                        <th>Sesion 2</th>
                        <td><input type="text" name="txtdiag3" value="<?php echo $user->txtdiag3;?>" id="txtdiag3" style="width: 100%;" /></td>
                        <td><input type="text" name="txtproc3" value="<?php echo $user->txtproc3;?>" id="txtproc3" style="width: 100%;"/></td>
                        <td><input type="text" name="txtpres3" value="<?php echo $user->txtpres3;?>" id="txtpres3" style="width: 100%;"/></td>
                        <td><input type="text" name="txtpro3"  value="<?php echo $user->txtpro3;?>"  id="txtpro3" style="width: 100%;"/></td>
                    </tr>
                    <tr>
                        <td>Fecha <input type="date" name="dat2" value="<?php echo $user->dat2;?>"   id="dat2" /></td>
                        <td><input type="text" name="txtdiag4" value="<?php echo $user->txtdiag4;?>" id="txtdiag4" style="width: 100%;"/></td>
                        <td><input type="text" name="txtproc4" value="<?php echo $user->txtproc4;?>" id="txtproc4" style="width: 100%;"/></td>
                        <td><input type="text" name="txtpres4" value="<?php echo $user->txtpres4;?>" id="txtpres4" style="width: 100%;"/></td>
                        <td><input type="text" name="txtpro4"  value="<?php echo $user->txtpro4;?>"  id="txtpro4" style="width: 100%;"/></td>
                    </tr>
                    <tr>
                        <th>Sesion 3</th>
                        <td><input type="text" name="txtdiag5" value="<?php echo $user->txtdiag5;?>" id="txtdiag5" style="width: 100%;" /></td>
                        <td><input type="text" name="txtproc5" value="<?php echo $user->txtproc5;?>" id="txtproc5" style="width: 100%;"/></td>
                        <td><input type="text" name="txtpres5" value="<?php echo $user->txtpres5;?>" id="txtpres5" style="width: 100%;"/></td>
                        <td><input type="text" name="txtpro5"  value="<?php echo $user->txtpro5;?>"  id="txtpro5" style="width: 100%;"/></td>
                    </tr>
                    <tr>
                        <td>Fecha <input type="date" name="dat3" value="<?php echo $user->dat3;?>"     id="dat3"/></td>
                        <td><input type="text" name="txtdiag6"   value="<?php echo $user->txtdiag6;?>" id="txtdiag6" style="width: 100%;"/></td>
                        <td><input type="text" name="txtproc6"   value="<?php echo $user->txtproc6;?>" id="txtproc6" style="width: 100%;"/></td>
                        <td><input type="text" name="txtpres6"   value="<?php echo $user->txtpres6;?>" id="txtpres6" style="width: 100%;"/></td>
                        <td><input type="text" name="txtpro6"    value="<?php echo $user->txtpro6;?>"  id="txtpro6" style="width: 100%;" /></td>
                    </tr>
                    <tr>
                        <th>Sesion 4</th>
                        <td><input type="text" name="txtdiag7" value="<?php echo $user->txtdiag7;?>" id="txtdiag7" style="width: 100%;"/></td>
                        <td><input type="text" name="txtproc7" value="<?php echo $user->txtproc7;?>" id="txtproc7" style="width: 100%;"/></td>
                        <td><input type="text" name="txtpres7" value="<?php echo $user->txtpres7;?>" id="txtpres7" style="width: 100%;"/></td>
                        <td><input type="text" name="txtpro7"  value="<?php echo $user->txtpro7;?>"  id="txtpro7" style="width: 100%;"/></td>
                    </tr>                    
                    <tr>
                     <tr>
                        <td>Fecha <input type="date" name="dat4" value="<?php echo $user->dat4;?>"     id="dat4"/></td>
                        <td><input type="text" name="txtdiag8"   value="<?php echo $user->txtdiag8;?>" id="txtdiag8" style="width: 100%;"/></td>
                        <td><input type="text" name="txtproc8"   value="<?php echo $user->txtproc8;?>" id="txtproc8" style="width: 100%;"/></td>
                        <td><input type="text" name="txtpres8"   value="<?php echo $user->txtpres8;?>" id="txtpres8" style="width: 100%;"/></td>
                        <td><input type="text" name="txtpro8"    value="<?php echo $user->txtpro8;?>"  id="txtpro8" style="width: 100%;"/></td>
                    </tr>
                    <tr>
                        <th>Sesion 5</th>
                        <td><input type="text" name="txtdiag9" value="<?php echo $user->txtdiag9;?>" id="txtdiag9" style="width: 100%;"/></td>
                        <td><input type="text" name="txtproc9" value="<?php echo $user->txtproc9;?>" id="txtproc9" style="width: 100%;"/></td>
                        <td><input type="text" name="txtpres9" value="<?php echo $user->txtpres9;?>" id="txtpres9" style="width: 100%;"/></td>
                        <td><input type="text" name="txtpro9"  value="<?php echo $user->txtpro9;?>"  id="txtpro9" style="width: 100%;"/></td>
                    </tr>
                    <tr>
                     <tr>
                        <td>Fecha <input type="date" name="dat5" value="<?php echo $user->dat5;?>"      id="dat5"/></td>
                        <td><input type="text" name="txtdiag10"  value="<?php echo $user->txtdiag10;?>" id="txtdiag10" style="width: 100%;"/></td>
                        <td><input type="text" name="txtproc10"  value="<?php echo $user->txtproc10;?>" id="txtproc10" style="width: 100%;"/></td>
                        <td><input type="text" name="txtpres10"  value="<?php echo $user->txtpres10;?>" id="txtpres10" style="width: 100%;"/></td>
                        <td><input type="text" name="txtpro10"   value="<?php echo $user->txtpro10;?>"  id="txtpro10" style="width: 100%;"/></td>
                    </tr>
    </table>
  </div>
   
   <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="user_id" value="<?php echo $user->id;?>">
      <button type="submit" class="btn btn-primary">Guardar la informacion</button>
    </div> 
</form>