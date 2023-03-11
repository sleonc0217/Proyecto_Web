
//creamos una función que habilite el botón de registrarse
function HabilitarBoton() {


    //obtenemos los valores de los 3 inputs
    let correo = document.getElementById("emailRegistrar").value;
    let clave = document.getElementById("contrasennaRegistrar").value;
    let claveConfirma = document.getElementById("confirmarContrasenna").value;

    //creamos una variable que ayude a ver si los campos estan vacios
    let vacios= (correo.trim() != "" && clave.trim() != "" && claveConfirma.trim() != "");


    //si clave y la confirmacion de la clave son las mismas y los campos no estan vacios
    if (clave==claveConfirma && vacios == true){
        //entonces el boton se habilita
        btnRegistrar=document.getElementById("btnRegistrarCuenta").disabled = false;
       

        var btnRegistrarCuenta = document.getElementById("btnRegistrarCuenta");
        btnRegistrarCuenta.classList.add("desbloqueo");
        
    }else{
        //si los campos son vacios o la contraseña no es igual a la confirmacion de la contraseña
        //el boton permanece desabilitado
        document.getElementById("btnRegistrarCuenta").disabled = true;
    }


}