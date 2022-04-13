<?php
include '../Models/conexion.php';
?>
<!doctype html>
<html lang="es">
  <head>
    <title>Formulario registro Easyrock</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <div class="body"></div>
        <div class="grad"></div>
            <div class="header">
                <div>Easy<span> Rock </span>App</div>
            </div>
            <br>
        <div class="login">
            <form action="" method="post">
                <input type="text" placeholder="Su ID de usuario" name="correo"><br>
                <input type="password" placeholder="Contraseña" name="contrasenia"><br><br>
                <input type="checkbox" name="recuerdame"> <span class="recuerdame">Recuérdame</span><br>
                <input class="btn" type="submit" name="btnEnviar" value="Acceder">
                <a href="registro.php"><input class="registrate" type="button" name="registrate" value="No estoy registrado"></a><br><br>
            </form>
    </div>
</body>
</html>

<?php

if (isset($_POST["btnEnviar"])){
    //Recogemos en estas dos variables el usuario y la contraseña
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasenia'];
    

    $sql = "SELECT * FROM usuarios WHERE correo='$correo'"; 
    $query = $conn -> prepare($sql);
    $query -> execute(); 
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if($result){
        $verificacionHash = password_verify($contrasena, $result['contrasenia']);
        if($verificacionHash==1){
        
            //session_start();
            //$_SESSION["usuario"];
            echo "<div class='mensaje'> Bienvenido/a " . $correo . "</div>";
            /*if($_POST["recuerdame"]=="recuerdame"){
                setcookie("usuario", $result["usuario"], time() +600);
                setcookie("contrasena", $result["contrasena"], time() +600);
            }*/
            //header("location: filtro.php");
            //die();
        }
        else{
            echo "<div class='mensaje'> Contraseña incorrecta ";
            print_r($result);
            echo $contrasena;
            echo "</div>";
        }
    }
    else{
        echo "<div class='mensaje'> Usuario incorrecto " . $result["contrasenia"] . "</div>";     
    }
}
?>