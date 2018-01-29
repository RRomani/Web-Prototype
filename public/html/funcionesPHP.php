<?php 
  /*
    Descripción: guarda los datos proporcionados por el usuario en variables SESSION.
    Parámetros de entrada: identificador del usuario (string), tipo de usuario (string) y contraseña (string).
    Valor de retorno: -
  */
  function iniciarSesion($usuario, $contrasena) {
    session_start();
    $_SESSION['nombreUsuario'] = $usuario;
    $_SESSION['contrasena'] = $contrasenaEncriptada;
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
    Descripción: comprueba que el usuario haya iniciado sesión.
    Parámetros de entrada: -
    Valor de retorno: true (ha iniciado sesión) o false (no ha iniciado sesión).
  */
  function comprobarSesionIniciada() {
    session_start();
    if (isset($_SESSION['nombreUsuario'])) {
      return true;
    }
    return false;
  }
?>