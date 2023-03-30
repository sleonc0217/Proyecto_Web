window.addEventListener('load', function() {
    // Obtener referencia al input type password
    var passwordInput = document.getElementById('contrasenna');
    
    // Establecer el valor del input type password en una cadena vacía
    passwordInput.value = '';
  });




  function habilitarBotonXcontrasennas() {
    const contrasenna = document.getElementById('contrasenna');
    const verificarContrasenna = document.getElementById('verificarContrasenna');
    const btnActualizarUsuario = document.getElementById('btnActualizarUsuario');
  
    if (contrasenna.value && contrasenna.value === verificarContrasenna.value) {
      btnActualizarUsuario.disabled = false;
    } else {
      btnActualizarUsuario.disabled = true;
    }
  }