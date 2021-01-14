<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Happy template" />
	<meta name="keywords" content="happy, template" />	
	<link rel="stylesheet" href="css/main.css" type="text/css" />
        <script src="scripts/jquery-2.1.4.js"></script>
        <script src="scripts/angular.js"></script>
        <link href="css/estilosOdontograma.css" rel="stylesheet" type="text/css"/>
	<title>Clinica Odontologica</title>
</head>
<body ng-app="app" >
        <?php
        session_start();
        if ($_SESSION['codper'] != null) {
            $user = $_SESSION['codper'];
            $nombre = null;

            $link = mysqli_connect("localhost","id15896132_smilemed");
            mysqli_select_db($link, "bd_odontograma");
            $result = mysqli_query($link, "select * from persona where cod_persona = $user");
            while ($row = mysqli_fetch_row($result)) {
                $nombre = $row[1];
            }
        }
        else
        {
            header("location:login.php");
        }
        
        
        ?>
	<div class="wrap">
		<div>
			<div id="detallelogo">
				<h1><a href="#">SMILE-MED ODONTOLOGIA</a></h1>
			</div>
			<div id="detallesuser">
				<h3><?php echo "Bienvenido $nombre"  ?></h3><br/>
				<a href="login.php">Cerrar secion</a>
			</div>
		</div>
		
            <div id="menu" ng-controller="dientes">
			<center><ul>
				<!--<li><a href="#">Inicio</a></li>-->
                                <li><a href="registrar_paciente.php">Registrar Paciente</a></li>
                                <li><a href="odontograma.php">Registrar Odontograma</a></li>
				<!--<li><a href="#">Comparar Odontogramas</a></li>-->
			</ul></center>
		</div>
            <div id="text" >
                <form method="POST" id="form1">
                    <table>
                        <tr>
                            <td>Buscar por Cedula</td>
                            <td><input type="text" id="txtbuscar" name="txtbuscar"/></td>
                            <td colspan="3"><input type="button" id="btnbuscar" name="btnbuscar" value="Buscar" /></td>
                        </tr>
                        <tr><!--
                            <td>Nombre</td>
                            <td><input type="text" id="txtnombre" disabled value="" name="txtnombre"/><input type="hidden" id="txtcodigo" value=""/></td>
                            <td>apellido paterno</td>
                            <td><input type="text" id="txtapellidopaterno" disabled value="" name="txtapellidopaterno"/></td>
                            <td>apellido materno</td>
                            <td><input type="text" id="txtapellidomaterno" disabled value="" name="txtapellidomaterno"/></td>
                        </tr>-->
                    </table>
                </form> </div>
                <odontogramageneral></odontogramageneral>
            </div>

		<div>
			<img src="images\2.jpg" width="600" height="205">
		</div>
         <table border="2" style="width: 100%">
                <tr>
                    <td>
                        Sesion y Fecha
                    </td>
                    <td>Diagnosticos y complicaciones <br></td>
                    <td>Procedimientos</td>
                    <td>Prescripciones</td>
                    <td>Codigo</td>
                </tr>
                    <tr>
                        <th>Sesion 1</th>
                        <td><input type="text" style="width: 340px;" name="txtdiag1" id="txtdiag1" /></td>
                        <td><input type="text" style="width: 340px;" name="txtproc1" id="txtproc1" /></td>
                        <td><input type="text" style="width: 340px;" name="txtpres1" id="txtpres1" /></td>
                        <td><input type="text" name="txtcod1" id="txtcod1" /></td>
                    </tr>
                    <tr>
                        <td>Fecha <input type="date" name="dat1" id="dat1" /></td>
                        <td><input type="text" style="width: 340px;" name="txtdiag2" id="txtdiag2" /></td>
                        <td><input type="text" style="width: 340px;" name="txtproc2" id="txtproc2" /></td>
                        <td><input type="text" style="width: 340px;" name="txtpres2" id="txtpres2" /></td>
                        <td><input type="text" name="txtcod2" id="txtcod2" /></td>
                    </tr>
                    <tr>
                        <th>Sesion 2</th>
                        <td><input type="text" style="width: 340px;" name="txtdiag3" id="txtdiag3" /></td>
                        <td><input type="text" style="width: 340px;" name="txtproc3" id="txtproc3" /></td>
                        <td><input type="text" style="width: 340px;" name="txtpres3" id="txtpres3" /></td>
                        <td><input type="text" name="txtcod3" id="txtcod3" /></td>
                    </tr>
                    <tr>
                        <td>Fecha <input type="date" name="dat2" id="dat2" /></td>
                        <td><input type="text" style="width: 340px;" name="txtdiag4" id="txtdiag4" /></td>
                        <td><input type="text" style="width: 340px;" name="txtproc4" id="txtproc4" /></td>
                        <td><input type="text" style="width: 340px;" name="txtpres4" id="txtpres4" /></td>
                        <td><input type="text" name="txtcod4" id="txtcod4" /></td>
                    </tr>
                    <tr>
                        <th>Sesion 3</th>
                        <td><input type="text" style="width: 340px;" name="txtdiag5" id="txtdiag5" /></td>
                        <td><input type="text" style="width: 340px;" name="txtproc5" id="txtproc5" /></td>
                        <td><input type="text" style="width: 340px;" name="txtpres5" id="txtpres5" /></td>
                        <td><input type="text" name="txtcod5" id="txtcod5" /></td>
                    </tr>
                    <tr>
                        <td>Fecha <input type="date" name="dat3" id="dat3"/></td>
                        <td><input type="text" style="width: 340px;" name="txtdiag6" id="txtdiag6" /></td>
                        <td><input type="text" style="width: 340px;" name="txtproc6" id="txtproc6" /></td>
                        <td><input type="text" style="width: 340px;" name="txtpres6" id="txtpres6" /></td>
                        <td><input type="text" name="txtcod6" id="txtcod6" /></td>
                    </tr>
                    <tr>
                        <th>Sesion 4</th>
                        <td><input type="text" style="width: 340px;" name="txtdiag7" id="txtdiag7" /></td>
                        <td><input type="text" style="width: 340px;" name="txtproc7" id="txtproc7" /></td>
                        <td><input type="text" style="width: 340px;" name="txtpres7" id="txtpres7" /></td>
                        <td><input type="text" name="txtcod7" id="txtcod7" /></td>
                    </tr>                    
                    <tr>
                     <tr>
                        <td>Fecha <input type="date" name="dat4" id="dat4"/></td>
                        <td><input type="text" style="width: 340px;" name="txtdiag8" id="txtdiag8" /></td>
                        <td><input type="text" style="width: 340px;" name="txtproc8" id="txtproc8" /></td>
                        <td><input type="text" style="width: 340px;" name="txtpres8" id="txtpres8" /></td>
                        <td><input type="text" name="txtcod8" id="txtcod8" /></td>
                    </tr>
                    <tr>
                        <th>Sesion 5</th>
                        <td><input type="text" style="width: 340px;" name="txtdiag9" id="txtdiag9" /></td>
                        <td><input type="text" style="width: 340px;" name="txtproc9" id="txtproc9" /></td>
                        <td><input type="text" style="width: 340px;" name="txtpres9" id="txtpres9" /></td>
                        <td><input type="text" name="txtcod9" id="txtcod9" /></td>
                    </tr>                    
                    <tr>
                     <tr>
                        <td>Fecha <input type="date" name="dat5" id="dat5"/></td>
                        <td><input type="text" style="width: 340px;" name="txtdiag10" id="txtdiag10" /></td>
                        <td><input type="text" style="width: 340px;" name="txtproc10" id="txtproc10" /></td>
                        <td><input type="text" style="width: 340px;" name="txtpres10" id="txtpres10" /></td>
                        <td><input type="text" name="txtcod10" id="txtcod10" /></td>
                    </tr>
                    <tr>
                        <th>Sesion 6</th>
                        <td><input type="text" style="width: 340px;" name="txtdiag11" id="txtdiag11" /></td>
                        <td><input type="text" style="width: 340px;" name="txtproc11" id="txtproc11" /></td>
                        <td><input type="text" style="width: 340px;" name="txtpres11" id="txtpres11" /></td>
                        <td><input type="text" name="txtcod11" id="txtcod11" /></td>
                    </tr>                    
                    <tr>
                     <tr>
                        <td>Fecha <input type="date" name="dat6" id="dat6"/></td>
                        <td><input type="text" style="width: 340px;" name="txtdiag12" id="txtdiag12" /></td>
                        <td><input type="text" style="width: 340px;" name="txtproc12" id="txtproc12" /></td>
                        <td><input type="text" style="width: 340px;" name="txtpres12" id="txtpres12" /></td>
                        <td><input type="text" name="txtcod12" id="txtcod12" /></td>
                    </tr>
                    <tr>
                        <th>Sesion 7</th>
                        <td><input type="text" style="width: 340px;" name="txtdiag13" id="txtdiag13" /></td>
                        <td><input type="text" style="width: 340px;" name="txtproc13" id="txtproc13" /></td>
                        <td><input type="text" style="width: 340px;" name="txtpres13" id="txtpres13" /></td>
                        <td><input type="text" name="txtcod13" id="txtcod13" /></td>
                    </tr>                    
                    <tr>
                     <tr>
                        <td>Fecha <input type="date" name="dat7" id="dat7"/></td>
                        <td><input type="text" style="width: 340px;" name="txtdiag14" id="txtdiag14" /></td>
                        <td><input type="text" style="width: 340px;" name="txtproc14" id="txtproc14" /></td>
                        <td><input type="text" style="width: 340px;" name="txtpres14" id="txtpres14" /></td>
                        <td><input type="text" name="txtcod14" id="txtcod14" /></td>
                    </tr>
                    <tr>
                        <th>Sesion 8</th>
                        <td><input type="text" style="width: 340px;" name="txtdiag15" id="txtdiag15" /></td>
                        <td><input type="text" style="width: 340px;" name="txtproc15" id="txtproc15" /></td>
                        <td><input type="text" style="width: 340px;" name="txtpres15" id="txtpres15" /></td>
                        <td><input type="text" name="txtcod15" id="txtcod15" /></td>
                    </tr>                    
                    <tr>
                     <tr>
                        <td>Fecha <input type="date" name="dat8" id="dat8"/></td>
                        <td><input type="text" style="width: 340px;" name="txtdiag16" id="txtdiag16" /></td>
                        <td><input type="text" style="width: 340px;" name="txtproc16" id="txtproc16" /></td>
                        <td><input type="text" style="width: 340px;" name="txtpres16" id="txtpres16" /></td>
                        <td><input type="text" name="txtcod16" id="txtcod16" /></td>
                    </tr>
                    <tr>
                        <th>Sesion 9</th>
                        <td><input type="text" style="width: 340px;" name="txtdiag17" id="txtdiag17" /></td>
                        <td><input type="text" style="width: 340px;" name="txtproc17" id="txtproc17" /></td>
                        <td><input type="text" style="width: 340px;" name="txtpres17" id="txtpres17" /></td>
                        <td><input type="text" name="txtcod17" id="txtcod17" /></td>
                    </tr>                    
                    <tr>
                     <tr>
                        <td>Fecha <input type="date" name="dat9" id="dat9"/></td>
                        <td><input type="text" style="width: 340px;" name="txtdiag18" id="txtdiag18" /></td>
                        <td><input type="text" style="width: 340px;" name="txtproc18" id="txtproc18" /></td>
                        <td><input type="text" style="width: 340px;" name="txtpres18" id="txtpres18" /></td>
                        <td><input type="text" name="txtcod18" id="txtcod18" /></td>
                    </tr>
                    <tr>
                        <th>Sesion 10</th>
                        <td><input type="text" style="width: 340px;" name="txtdiag19" id="txtdiag19" /></td>
                        <td><input type="text" style="width: 340px;" name="txtproc19" id="txtproc19" /></td>
                        <td><input type="text" style="width: 340px;" name="txtpres19" id="txtpres19" /></td>
                        <td><input type="text" name="txtcod19" id="txtcod19" /></td>
                    </tr>                    
                    <tr>
                     <tr>
                        <td>Fecha <input type="date" name="dat10" id="dat10"/></td>
                        <td><input type="text" style="width: 340px;" name="txtdiag20" id="txtdiag20" /></td>
                        <td><input type="text" style="width: 340px;" name="txtproc20" id="txtproc20" /></td>
                        <td><input type="text" style="width: 340px;" name="txtpres20" id="txtpres20" /></td>
                        <td><input type="text" name="txtcod20" id="txtcod20" /></td>
                    </tr>
                    <tr>
                        <th>Sesion 11</th>
                        <td><input type="text" style="width: 340px;" name="txtdiag21" id="txtdiag21" /></td>
                        <td><input type="text" style="width: 340px;" name="txtproc21" id="txtproc21" /></td>
                        <td><input type="text" style="width: 340px;" name="txtpres21" id="txtpres21" /></td>
                        <td><input type="text" name="txtcod21" id="txtcod21" /></td>
                    </tr>                    
                    <tr>
                     <tr>
                        <td>Fecha <input type="date" name="dat11" id="dat11"/></td>
                        <td><input type="text" style="width: 340px;" name="txtdiag22" id="txtdiag22" /></td>
                        <td><input type="text" style="width: 340px;" name="txtproc22" id="txtproc22" /></td>
                        <td><input type="text" style="width: 340px;" name="txtpres22" id="txtpres22" /></td>
                        <td><input type="text" name="txtcod22" id="txtcod22" /></td>
                    </tr>
                    <tr>
                        <th>Sesion 12</th>
                        <td><input type="text" style="width: 340px;" name="txtdiag23" id="txtdiag23" /></td>
                        <td><input type="text" style="width: 340px;" name="txtproc23" id="txtproc23" /></td>
                        <td><input type="text" style="width: 340px;" name="txtpres23" id="txtpres23" /></td>
                        <td><input type="text" name="txtcod23" id="txtcod23" /></td>
                    </tr>                    
                    <tr>
                     <tr>
                        <td>Fecha <input type="date" name="dat12" id="dat12"/></td>
                        <td><input type="text" style="width: 340px;" name="txtdiag24" id="txtdiag24" /></td>
                        <td><input type="text" style="width: 340px;" name="txtproc24" id="txtproc24" /></td>
                        <td><input type="text" style="width: 340px;" name="txtpres24" id="txtpres24" /></td>
                        <td><input type="text" name="txtcod24" id="txtcod24" /></td>
                    </tr>
                        <td colspan="1"><center><input type="submit" name="boton" id="btnguardar" value="Guardar"/><input type="submit" name="boton"  id="btnactualizar" value="Actualizar"/></center>
                        </td>
                    </tr>
                        </table>
	</div>
<!--
	<div id="footer">
		<div class="wrap">
			<div><p>Una linda sonrisa a tu alcanse</p></div>
			<div id="copyright">
				
			</div>
			<div class="clear"></div>
		</div>
	</div>-->

        <!-- Angular Modulos-->
        <script type="text/javascript" src="scripts/modulos/app.js"></script>
        <!-- Angular Controladores-->
        <script type="text/javascript" src="scripts/controladores/controller.js"></script>
        <!--Angular Directives-->
        <script type="text/javascript" src="scripts/directivas/canvasodontograma.js"></script>
        <script type="text/javascript" src="scripts/directivas/opcionescanvas.js"></script>
        <script type="text/javascript" src="scripts/directivas/odontogramaGeneral.js"></script>
        
        <script>
            $btnbuscar = $('#btnbuscar');
            $txtbuscar = $('#txtbuscar');
            $txtnombre = $('#txtnombre');
            $txtapellidopaterno = $('#txtapellidopaterno');
            $txtapellidomaterno = $('#txtapellidomaterno');
            $txtcodigo = $('#txtcodigo');
            $btnbuscar.click(function(){
                $.ajax({
                    url:'odontogramaRegistros.php',
                    dataType:'json',
                    type:'POST',
                    data:{dni:$txtbuscar.val()},
                    success:function(data)
                    {
                        $txtnombre.val(data[0].nombre);
                        $txtapellidopaterno.val(data[0].apellido_paterno);
                        $txtapellidomaterno.val(data[0].apellido_materno);
                        $txtcodigo.val(data[0].cod_persona);
                    }
                });
            });
        </script>
</body>
</html>