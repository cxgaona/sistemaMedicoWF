<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<h1><title>SMILEMED</title></h1>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Happy template" />
	<meta name="keywords" content="happy, template" />	
	<link rel="stylesheet" href="css/main.css" type="text/css" />
        <script src="scripts/jquery-2.1.4.js"></script>
        <script src="scripts/angular.js"></script>
        <link href="css/estilosOdontograma.css" rel="stylesheet" type="text/css"/>
	
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
		<div id="cabecera">
			<div id="detallelogo">
				<h1><a href="#">SMILEMED</a></h1>
			</div>
			<div id="detallesuser">
				<h3><?php echo "Bienvenido $nombre"  ?></h3><br/>
				<a href="login.php">Cerrar secion</a>
			</div>
		</div>
		
            <div id="menu" ng-controller="dientes">
			<center><ul>
				<li><a href="#">Inicio</a></li>
                                <li><a href="registrar_paciente.php">Registrar Paciente</a></li>
                                <li><a href="odontograma.php">Registrar Odontograma</a></li>
				<li><a href="#">Comparar Odontogramas</a></li>
			</ul></center>
		</div>
            <div id="text" >
                
            </div>

		<div>
			
		</div>
	</div>

	<div id="footer">
		<div class="wrap">
			<div><img src="img/2.jpg" width="600" height="205"><p>Una linda sonrisa a tu alcanse</p></div>
			<div id="copyright">
				
			</div>
			<div class="clear"></div>
		</div>
	</div>

</body>
</html>