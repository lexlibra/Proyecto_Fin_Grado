<!DOCTYPE html>
<html>
	<head>
		<title>app 3</title>
		<meta charset="UTF-8" />
		<meta name="description" content="Ejemplos de clase" /> 
		<meta name="author" content="Iván Jiménez" />
		<link rel="stylesheet" type="text/css" href="estilos.css" />
		<style type ="text/css">
			@import url('https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap');
/*
            *:hover {
				color:lime;
			}

            body{
                background-color: black;
                background-image: url(../Resources/pictures/micro2.webp);
                background-repeat: no-repeat;
                width: 100px;
                height: 200px;                     
            }
*/
			#panel_menu {
				position: absolute;
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
            #panel_menu :hover {
				color:lime;
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
			span {
				margin-top:40px;
				display: block;
			}
            img{
                width: 60px;
                height: 60px;
            }
            .divprincipal{
                border:2px black solid;
                border-radius: 2px;
                width: 1250px;
                height: 780px;
                position: fixed;
                left: 70px;
                top:0%;
                background-color: lightseagreen;
            }
            .divsecundario{
                border:2px black solid;
                border-radius: 20px;
                width: 900px;
                height: 700px;
                position: fixed;
                left: 360px;
                top:25px;
                background-color: white;
            }
            a{
                text-decoration: none;
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
	<body style="font-family: Mochiy Pop P One">
		<div id="panel_menu">
			<div id="btn_contraer" onclick="cambia_estado()"><img src="../Resources/pictures/icon-menu-desplegable.png"></div>			
			<div id="btn_expandir" onclick="cambia_estado()"><img src="../Resources/pictures/icon-menu-desplegable.png"></div>
            <span>EASYROCK</span>
			<a href="../Views/app3.php"><span>Página de inicio &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../Resources/pictures/icon-pagina-de-inicio.png"></span></a>
            <a href="../Views/app_data.php"><span>Datos personales &nbsp;&nbsp;&nbsp;&nbsp;<img src="../Resources/pictures/icon-perfil-personal.png"></span></a>
			<a href="../Views/app_reserva.php"><span>Tus reservas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../Resources/pictures/icon-reserva.png"></span></a>
			<a href="../Views/app_locales.php"><span>Lista de locales &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../Resources/pictures/icon-locales.png"></span></a>
            <span>Sobre nosotros &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../Resources/pictures/icon-nosotros.png"></span>
			<a href="../Models/login.php"><span>Cierre de sesión &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../Resources/pictures/icon-cerrar-sesion-rojo.png"></span></a>			
		</div>
        <div class="divprincipal">
            <div class="divsecundario">
                <h2>¿Quíenes somos?</h2>
				<h4>Somos los primeros en unir tu gran afición por la música </h4>
				<h4>con la posibilidad de hacerte oir </h4>
				<h4>Gracias a esta aplicación podrás encontrar a solo un click </h4>
				<h4>todos los locales de ensayo que estén cerca de tí. </h4>


            </div>
        </div>

	</body>
</html>