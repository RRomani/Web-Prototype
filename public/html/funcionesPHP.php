<?php 
  /*
    Descripción: guarda los datos proporcionados por el usuario en variables SESSION.
    Parámetros de entrada: identificador del usuario (string), contraseña (string).
    Valor de retorno: -
  */
  function iniciarSesion($usuario, $contrasena) {
    session_start();
    $_SESSION['nombreUsuario'] = $usuario;
    $_SESSION['contrasena'] = $contrasena;
  }

  /*
    Descripción: elimina el contenido de la variable usuario de SESSION.
    Parámetros de entrada: -
    Valor de retorno: -
  */
  function cerrarSesion() {
    session_start();
    unset($_SESSION['nombreUsuario']);
    unset($_SESSION['contrasena']);
    session_destroy();
  }

  /*
    Descripción: comprueba que el usuario sea correcto
    Parámetros de entrada: -
    Valor de retorno: true (correcto) o false (incorrecto).
  */
  function comprobarSesionIniciada() {
    if (isset($_SESSION['nombreUsuario']) && ($_SESSION['nombreUsuario'] == "anonim" || $_SESSION['nombreUsuario'] == "anonim@hotmail.com") && $_SESSION['contrasena'] == 'anonim'){
      return true;
    }
    return false;
  }
?>