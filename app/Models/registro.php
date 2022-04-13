<?php
include '../Models/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Formulario de registro</title>
    <link rel="stylesheet" href="estilos.css">
    <script src="../Resources/js/validar.js"></script>
    <link rel="stylesheet" href="../Resources/css/registro.css">
  </head>
  <body>
    <script src="../Resources/js/validar.js"></script>
    <div class="body"></div>
        <div class="grad"></div>
            <div class="header">
                <div>Easy<span> Rock </span>App <br><br>
                <span>Nuevo Usuario</span></div>
            </div>
            <br>
     <form id="formulario" action="" method="post" onsubmit='return validarlo();'>    
      <div class="login">           
            <br><input type="text" id="nombre" name="nombre" class="input" placeholder="Nombre"><br>
            <br><input type="text" id="apellido1" name="apellido1" class="input" placeholder="Primer Apellido"><br>
            <br><input type="text" id="apellido2" name="apellido2" class="input" placeholder="Segundo Apellido"><br>
            <br><input type="text" id="telefono" maxlength="9" name="telefono" class="input" placeholder="Teléfono"><br>
            <br><input type="text" id="correo" name="correo" class="input" placeholder="E-mail"><br>
            <br><input type="password" id="clave1" name="clave1" class="input" placeholder="Contraseña"><br>
            <br><input type="password" id="clave2" name="clave2" class="input" placeholder="Confirmar Contraseña"><br><br>
            Fecha de Nacimiento:<br><input type="date" id="fecha" name="fecha" class="inputFecha"><br>   
            <input id="Registrar" type="submit" value="Registrar" name="Registrar" class="btn-enviar">   
            <h1 id="posicion"></h1>  
      </div>
    </form>
    </div>
  </body>
</html>

<?php
//Si se pulsa el botón de Registrar se recogen los post y se realiza el registro con la función anterior
//Si es correcto el registro te envía al login

if(isset($_REQUEST['Registrar'])){
  try{
    $sql= "USE easyrock";
    $conn->exec($sql);
    $correo= $_POST['correo'];
    $pass= $_POST['clave1'];
    $contrasenaCif = password_hash($pass, PASSWORD_DEFAULT);
    
    $sql2 = $conn->prepare("SELECT * FROM usuarios WHERE correo=:correo");
    $sql2 -> bindParam(":correo", $correo);
    $sql2->execute();
    $count = $sql2->rowCount();
    
    if($count>=1){
      echo "<span style='color:white'>EMAIL EXISTENTE</span><br>";
    }else{
        $sql="INSERT IGNORE INTO usuarios(nombre, apellido1, apellido2, telefono, correo, contrasenia, fecha) VALUES('$_POST[nombre]', '$_POST[apellido1]','$_POST[apellido2]', '$_POST[telefono]','$_POST[correo]', '$contrasenaCif', $_POST[fecha])";
        $execute = $conn->prepare($sql);
        $execute->execute();
        $request= $execute->fetchAll(PDO::FETCH_ASSOC);
        header('Location: ../Models/login.php');
    }
}catch(PDOException $ex){
    echo $ex->getMessage();
    
}

}else{
  
}

?>