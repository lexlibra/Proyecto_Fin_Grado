function validarlo(){
    var nombre, apellido1, apellido2, telefono, correo, clave1, clave2, fecha, expresion;
    nombre= document.getElementById("nombre").value;
    apellido1= document.getElementById("apellido1").value;
    apellido2= document.getElementById("apellido2").value;
    telefono= document.getElementById("telefono").value;       
    correo= document.getElementById("correo").value;
    clave1= document.getElementById("clave1").value;
    clave2= document.getElementById("clave2").value;
    fecha= document.getElementById ("fecha").value;
    
    telefonoVal =(telefono.length==9);
    expresion= /\w+@\w+\.+[a-z]/;
    contrasenia= (clave1==clave2);

    if(nombre ===""){
        texto = document.getElementById("posicion")
        texto.innerHTML = "Debe rellenar el campo Nombre";                                
        return false;
    }else if(apellido1 === ""){
        texto = document.getElementById("posicion")
        texto.innerHTML = "Debe rellenar el campo de Primer apellido";
        return false;
    }else if(apellido2 === ""){
        texto = document.getElementById("posicion")
        texto.innerHTML = "Debe rellenar el campo de Segundo apellido";
        return false;
    }else if(telefono === ""){
        texto = document.getElementById("posicion")
        texto.innerHTML = "Debe rellenar el campo de teléfono";
        return false;
    }else if(isNaN(telefono)){
        texto = document.getElementById("posicion")
        texto.innerHTML = "Debe de ser numerico";
        return false;
    }else if(!telefonoVal){
        texto = document.getElementById("posicion")
        texto.innerHTML = "No es un número de teléfono válido";
        return false;
    }else if(correo === ""){
        texto = document.getElementById("posicion")
        texto.innerHTML = "Debe rellenar el campo Correo";
        return false;
    }else if(!expresion.test(correo)){
        texto = document.getElementById("posicion")
        texto.innerHTML = "Campo correo erróneo";
        return false;
    }else if(clave1 === ""){
        texto = document.getElementById("posicion")
        texto.innerHTML = "Debe rellenar el campo Clave";
        return false;
    }else if(clave2 === ""){
        texto = document.getElementById("posicion")
        texto.innerHTML = "Debe rellenar el campo Repetir Contraseña";
        return false;
    }else if(!contrasenia){
        texto = document.getElementById("posicion")
        texto.innerHTML = "Las contraseñas deben coincidir";
        return false;
    }else if(fecha === ""){
        texto = document.getElementById("posicion")
        texto.innerHTML = "Debe rellenar el campo Fecha";
        return false;
    }
}