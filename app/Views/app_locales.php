<!DOCTYPE html>
<?php

include '../Models/conexion.php';

?>
<html>
	<head>
		<title>app 3</title>
		<meta charset="UTF-8" />
		<meta name="description" content="Ejemplos de clase" /> 
		<meta name="author" content="Iván Jiménez" />
		<link rel="stylesheet" type="text/css" href="estilos.css" />
		<style type ="text/css">
			@import url('https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap');

			a, a:visited {
				color: white;
			}

			a:hover{
				color: lime;
			}

			#panel_menu {
				position: fixed;
				top: 0px;
				bottom: 0px;
				left: -200px;
				width: 250px;
				text-align: left;
				padding-left: 30px;
				background-color: black;
				overflow: hidden;
				color: white;
				cursor: pointer;
				z-index: 20;
				transition: left 0.5s;
			}
			
			#btn_expandir , #btn_contraer {
				position: absolute;
				background-color: black;
				right: 5px;
				top:5px;
			}

			#btn_contraer {
				z-index: 1;
			}	
			#btn_expandir {
				z-index: 2;
			}

			.spanMenu {
				margin-top:40px;
				display: block;
                
			}
            .imgMenu{
                width: 60px;
                height: 60px;
            }

            .divprincipal{
                width: 95.2%;
                height: 1080px;
				text-align: center;
				/*background-color: white;*/
				position: absolute;
				left:80px;
				top: -8px;	
				font-family: Myriad Pro;	

            }

            a{
                text-decoration: none;
			}


			.todo{
				width: 100%; 
			}

			.imagenCabecera{
				width:100%;
			}

			table{
				margin-left: auto;
				margin-right: auto;
			}

			td{
				padding-left: 20px;
			}
			.iconitos{
				padding-left:150px;
				padding-right:150px;
			}

			.imagenTabla{
				height: 250px;
				border-radius: 20px;
				box-shadow: 5px 8px 12px black;
			}
			.imagenTablaLogo{
				height: 150px;
			}

			.imagenTabla:hover {
				transition: 2s;
				filter: opacity(0.5);
			}

			.container{
				
			}

			h1{
				font-size:50px;
			}
			h2{
				font-size:30px;
			}

			hr{
				width: 300px;
			}

			.textoCentrado{
				margin-left: auto;
				margin-right: auto;
				width: 1250px;
			}

			.imagenDosColumnas{
				height:500px;
			}

			section {
				width: 100%;
				display: inline-block;
				background: #333;
				height: 50vh;
				text-align: center;
				font-size: 22px;
				font-weight: 700;
				text-decoration: underline;
			}

			.footer-distributed{
				background: #666;
				box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
				box-sizing: border-box;
				width: 100%;
				text-align: left;
				font: bold 16px sans-serif;
				padding: 40px;
			}

			.footer-distributed .footer-left,
			.footer-distributed .footer-center,
			.footer-distributed .footer-right{
				display: inline-block;
				vertical-align: top;
			}

			/* Footer left */

			.footer-distributed .footer-left{
				width: 40%;
			}

			/* The company logo */

			.footer-distributed h3{
				color:  #ffffff;
				margin: 0;
			}

			/* Footer links */

			.footer-distributed .footer-links{
				color:  #ffffff;
				margin: 20px 0 12px;
				padding: 0;
			}

			.footer-distributed .footer-links a{
				display:inline-block;
				line-height: 1.8;
				font-weight:400;
				text-decoration: none;
				color:  inherit;
			}

			.footer-distributed .footer-company-name{
				color:  #222;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
			}

			/* Footer Center */

			.footer-distributed .footer-center{
				width: 35%;
			}

			.footer-distributed .footer-center i{
				background-color:  #33383b;
				color: #ffffff;
				font-size: 25px;
				width: 38px;
				height: 38px;
				border-radius: 50%;
				text-align: center;
				line-height: 42px;
				margin: 10px 15px;
				vertical-align: middle;
			}

			.footer-distributed .footer-center i.fa-envelope{
				font-size: 17px;
				line-height: 38px;
			}

			.footer-distributed .footer-center p{
				display: inline-block;
				color: #ffffff;
				font-weight:400;
				vertical-align: middle;
				margin:0;
			}

			.footer-distributed .footer-center p span{
				display:block;
				font-weight: normal;
				font-size:14px;
				line-height:2;
			}

			.footer-distributed .footer-center p a{
				color:  lightseagreen;
				text-decoration: none;;
			}

			.footer-distributed .footer-links a:before {
				content: "|";
				font-weight:300;
				font-size: 20px;
				left: 0;
				color: #fff;
				display: inline-block;
				padding-right: 5px;
			}

			.footer-distributed .footer-links .link-1:before {
				content: none;
			}

			/* Footer Right */

			.footer-distributed .footer-right{
				width: 20%;
			}

			.footer-distributed .footer-company-about{
				line-height: 20px;
				color:  #92999f;
				font-size: 13px;
				font-weight: normal;
				margin: 0;
			}

			.footer-distributed .footer-company-about span{
				display: block;
				color:  #ffffff;
				font-size: 14px;
				font-weight: bold;
				margin-bottom: 20px;
			}

			.footer-distributed .footer-icons{
				margin-top: 25px;
			}

			.footer-distributed .footer-icons a{
				display: inline-block;
				width: 35px;
				height: 35px;
				cursor: pointer;
				background-color:  #33383b;
				border-radius: 2px;

				font-size: 20px;
				color: #ffffff;
				text-align: center;
				line-height: 35px;

				margin-right: 3px;
				margin-bottom: 5px;
			}


			.spanLogo{
				color: #5379fa !important;
			}


			
		</style>
		<script>
			function cambia_estado(elemento) {
				// Obtenemos el valor de z-index del botón expandir
				if ( document.getElementById("btn_expandir").style.zIndex == 1) {
					// Pasamos a primer plano el botón expandir ">"
					document.getElementById("btn_expandir").style.zIndex = 2;
					document.getElementById("btn_contraer").style.zIndex = 1;
					// Desplazamos hacia la izquierda el panel
					document.getElementById("panel_menu").style.left = "-200px";

				} else {
					// Pasamos a primer plano el botón contraer "<"
					document.getElementById("btn_expandir").style.zIndex = 1;
					document.getElementById("btn_contraer").style.zIndex = 2;
					// Desplazamos hacia la derecha el panel
					document.getElementById("panel_menu").style.left = "0px";					
				}
				var nuevo_color = window.getComputedStyle(elemento).backgroundColor;
				document.getElementById("interior").style.backgroundColor = nuevo_color;			
			}

		</script>
	</head>
	<body class="todo" style="font-family: Mochiy Pop P One">
		<div id="panel_menu">
			<div id="btn_contraer" onclick="cambia_estado()"><img class="imgMenu" src="../Resources/pictures/icon-menu-desplegable.png"></div>			
			<div id="btn_expandir" onclick="cambia_estado()"><img class="imgMenu" src="../Resources/pictures/icon-menu-desplegable.png"></div>
            <span class="spanMenu">EASYROCK</span>
			<a href="../Views/app3.php"><span class="spanMenu">Página de inicio &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img class="imgMenu" src="../Resources/pictures/icon-pagina-de-inicio.png"></a></span>
            <a href="../Views/app_data.php"><span class="spanMenu">Datos personales&nbsp;&nbsp;&nbsp;&nbsp;<img class="imgMenu" src="../Resources/pictures/icon-perfil-personal.png"></span></a>
			<a href="../Views/app_reserva.php"><span class="spanMenu">Tus reservas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img class="imgMenu" src="../Resources/pictures/icon-reserva.png"></span></a>
			<a href="../Views/app_locales.php"><span class="spanMenu">Lista de locales &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img class="imgMenu" src="../Resources/pictures/icon-locales.png"></span></a>
            <a href="../Views/app_nosotros.php"><span class="spanMenu">Sobre nosotros &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img class="imgMenu" src="../Resources/pictures/icon-nosotros.png"></span></a>
			<a href="../Models/login.php"><span class="spanMenu">Cierre de sesión &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img class="imgMenu" src="../Resources/pictures/icon-cerrar-sesion-rojo.png"></span>	</a>		
		</div>
		
        <div class="divprincipal">
		<img class="imagenCabecera" src="../Resources/pictures/fig1_locales.jpg">
		<br>
		<br>
		<h1>LOCALES</h1>
		<br>
		<br>
		<h2>Busca, encuentra y reserva!</h2>
		<hr>
		<br>
        <?php

		$sql="use easyrock;";
		$conn->exec($sql);

		$resultado = "SELECT * from locales";
		$res= $conn->prepare($resultado);
		$res->execute();
		$todo= $res->fetchAll(PDO::FETCH_ASSOC);

		echo "<table>
            	<thead>
                    <tr>
						<th>CODIGO LOCAL</th>
						<th>NOMBRE</th>
						<th>CIUDAD</th>
						<th>LOCALIDAD</th>
						<th>CÓDIGO POSTAL</th>";
							foreach ($todo as $dato =>$result){
			echo "	</tr>
				</thead>
				<tbody>
					<tr>
						<td> " . $result['cod_local'] . "</td>
						<td> " . $result['Nombre'] . " </td>
						<td> " . $result['ciudad'] . " </td>
						<td> " . $result['localidad'] . " </td>
						<td> " . $result['cp'] . " </td><br>
					</tr>
					<tr>";
						} 
						?>
						</tr>
                    </tbody>
                </table>

            </div>
        </div>
		<br>
		<br>
		<br>
		<br>
		<footer class="footer-distributed">
			<div class="footer-left">
				<h3>Easy<span class="spanLogo">Rock</span>App</h3>
				<p class="footer-links">
					<a href="#" class="link-1">Página de Inicio</a>
					<a href="#">Datos Personales</a>
					<a href="#">Tus Reservas</a>
					<a href="#">Lista de Locales</a>
					<a href="#">Sobre Nosotros</a>
					<a href="#">Cierre de sesión</a>
				</p>
				<p class="footer-company-name">Easy Rock S.L. 2022</p>
			</div>
			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>C/ Fermin Caballero 41</span> Madrid, España</p>
				</div>
				<div>
					<i class="fa fa-phone"></i>
					<p>+34 608210200</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">soporte@easyrockapp.com</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>Sobre nosotros</span>
					Easy Rock App es un proyecto de fin de FP realizado por los alumnos Manuel Antonio Reino Diez y Victor López Morales.
				</p>
			</div>
		</footer>
    </div>
	</body>
</html>