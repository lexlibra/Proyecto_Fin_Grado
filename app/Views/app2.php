<!DOCTYPE html>
<html>
	<head>
		<title>app2</title>
		<meta charset="UTF-8" />
		<meta name="description" content="Ejemplos de clase" /> 
		<meta name="author" content="Iván Jiménez" />
		<link rel="stylesheet" type="text/css" href="estilos.css" />
		<style type ="text/css">
            body{
                background-color: black;
            }
			@import url('https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap');
			div.contenedor {
				position:absolute;
				overflow: hidden;
				left: 20px;
				top: 20px;
				right: 20px;
				bottom: 20px;
				background-color: lightgoldenrodyellow;
				color: white;
				transition: background-color 2s;
			}

			div.boton {
				position: absolute;
				left: -130px;
				width: 150px;
				text-align: left;
				padding: 16px;
				border-top-right-radius: 20px;
				border-bottom-right-radius: 20px;
				border: 2px solid black;
				overflow: hidden;
				color: white;
				cursor: pointer;
				z-index: 20;
				transition: left 1s;
			}
			
			#btn01 {
				top: 20px;
				background-color: purple;
			}
			#btn02 {
				top: 90px;
				background-color: blue;
			}
			#btn03 {
				top: 160px;
				background-color: green;
			}
			#btn04 {
				top:230px;
				background-color: grey;
			}
            #btn05 {
				top:300px;
				background-color: skyblue;
			}
			
			div.boton:hover {
				left: 0px;
			}

            img{
                width: 25px;
                height: 25px;
            }
			

		</style>
		<script>
			function cambia_color(elemento) {
				// Obtenemos el color del elemento seleccionado
				const nuevo_color = window.getComputedStyle(elemento).backgroundColor;
				// Aplicamos el color al contenedor
				document.getElementById("interior").style.backgroundColor = nuevo_color;			
			}
		</script>
	</head>
	<body style="font-family: Mochiy Pop P One">
		<div class="contenedor">
			<div id="btn01" class="boton" onclick="cambia_color(this)">Datos personales &nbsp;&nbsp;<img src="../Resources/pictures/icon-pagina-de-inicio.png"></div>
			<div id="btn02" class="boton" onclick="cambia_color(this)">Tus reservas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../Resources/pictures/icon-reserva.png"></div>
			<div id="btn03" class="boton" onclick="cambia_color(this)">Sobre nosotros &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../Resources/pictures/icon-nosotros.png"></div>
			<div id="btn04" class="boton" onclick="cambia_color(this)">Nuestros locales &nbsp;&nbsp;<img src="../Resources/pictures/icon-locales.png"></div>
            <div id="btn05" class="boton" onclick="cambia_color(this)">Cierre de sesion &nbsp;&nbsp;&nbsp;<img src="../Resources/pictures/icon-cierre-sesion.png"></div>
			<div id="interior" class="contenedor" style="background-color: white; left: 180px; padding:5px">EASYROCK</div>
		</div>
	</body>
</html>