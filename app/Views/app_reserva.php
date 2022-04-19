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
            #panel_menu :hover{
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
                background-color: lightblue;
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
	<body style="font-family: Mochiy Pop P One" onload="calendario()">
		<div id="panel_menu">
			<div id="btn_contraer" onclick="cambia_estado()"><img src="../Resources/pictures/icon-menu-desplegable.png"></div>			
			<div id="btn_expandir" onclick="cambia_estado()"><img src="../Resources/pictures/icon-menu-desplegable.png"></div>
            <span>EASYROCK</span>
			<a href="../Views/app3.php"><span>Página de inicio &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../Resources/pictures/icon-pagina-de-inicio.png"></span></a>
            <a href="../Views/app_data.php"><span>Datos personales&nbsp;&nbsp;&nbsp;&nbsp;<img src="../Resources/pictures/icon-perfil-personal.png"></span></a>
			<span>Tus reservas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../Resources/pictures/icon-reserva.png"></span>
			<a href="../Views/app_locales.php"><span>Lista de locales &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../Resources/pictures/icon-locales.png"></span></a>
            <a href="../Views/app_nosotros.php"><span>Sobre nosotros &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../Resources/pictures/icon-nosotros.png"></span></a>
			<a href="../Models/login.php"><span>Cierre de sesión &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../Resources/pictures/icon-cerrar-sesion-rojo.png"></span>	</a>		
		</div>
        <div class="divprincipal">
            <div class="divsecundario">
            <details>
            <H1>Calendario</H1>
            <p id="demo"></p>
            </details>
            
            <script>
            function calendario(anyo, mes) {
            document.getElementById("demo").innerHTML="";
            
            var body = document.getElementById ("demo");
            var d = new Date();
            var meses = new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
            var dias = new Array("L","M","X","J","V","S","D");
            
            if (anyo == null) {
                anyo = d.getFullYear();
            } else {
                d.setFullYear(anyo);
            }
            var anyoant = anyo - 1;
            var anyosig = anyo + 1;
            
            if (mes == null) {
                mes = d.getMonth();
            } else {
                d.setMonth(mes);
            }
            
            if (mes == 0) {
                var mesant = 11;
            } else {
                var mesant = mes - 1;
            }
            
            
            if (mes == 11) {
                var messig = 0;
            } else {
                var messig = mes + 1;
            }
            
            var dia = 1;
            
            var table     = document.createElement("table");
            
            var tableRow  = document.createElement("tr");
            
            var tableData = document.createElement("td");
            tableData.setAttribute("colspan", "7");
            var textCell  = document.createTextNode(anyo);
            tableData.appendChild(textCell);
            tableRow.appendChild(tableData);
            table.appendChild(tableRow);
            
            var tableRow  = document.createElement("tr");
            
            var tableData = document.createElement("td");
            tableData.onclick = function(){if (mesant == 11) {calendario(anyoant, mesant);}else{calendario(anyo, mesant);}};
            var textCell  = document.createTextNode("<");
            tableData.appendChild(textCell);
            tableRow.appendChild(tableData);
            
            var tableData = document.createElement("td");
            tableData.setAttribute("colspan", "5");
            var textCell  = document.createTextNode(meses[mes]);
            tableData.appendChild(textCell);
            tableRow.appendChild(tableData);
            
            var tableData = document.createElement("td");
            tableData.onclick = function(){if (messig == 0) {calendario(anyosig, messig);}else{calendario(anyo, messig);}};
            var textCell  = document.createTextNode(">");
            tableData.appendChild(textCell);
            tableRow.appendChild(tableData);
            
            table.appendChild(tableRow);
            
            var tableRow  = document.createElement("tr");
            for (var i = 0; i < 7; i++) {
                var tableData = document.createElement("td");
                var textCell  = document.createTextNode(dias[i]);
                tableData.appendChild(textCell);
                tableRow.appendChild(tableData);
            }
            
            table.appendChild(tableRow);
            d.setDate(dia);
            while (mes == d.getMonth()) {
                var tableRow = document.createElement("tr");
            
                for (var i = 0; i < 7; i++) {
                var tableData = document.createElement("td");
                if (mes != d.getMonth()) {
                    var textCell = document.createTextNode(" ");
                } else {
                    if ((1 + i) < d.getDay()) {
                    var textCell = document.createTextNode(" ");
                    } else {
                    var textCell = document.createTextNode(dia);
                    dia++;
                    d.setDate(dia);
                    }
                }
            
                tableData.appendChild(textCell);
                tableRow.appendChild(tableData);
                }
            
                table.appendChild(tableRow);
            }
            
            table.setAttribute("border", "1");
            
            body.appendChild(table);
            
            }
            
            
            </script>
        </div>

	</body>
</html>