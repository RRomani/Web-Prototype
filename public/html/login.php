<!DOCTYPE html>
<html>
<title>LOGIN</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
  .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
  .fa-anchor,.fa-coffee {font-size:200px}
</style>
<body class="w3-pale-blue">
  <?php
    // Import del archivo funciones.php
  include 'funcionesPHP.php';
  if (isset($_POST['submit'])){
    iniciarSesion($_POST["nombreUsuario"],$_POST["contrasena"]);

    if (comprobarSesionIniciada()){
        // Redirigimos al usuario que haya iniciado sesion correctamente
      header('Location: ../../index2.php');
    }else{
      $msg = "Error en los datos introducidos.";
    }
  }
  ?>
  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-red w3-card w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <!--<a href="#" class="w3-bar-item w3-button"><img src="logo.jpg" alt="Home" width="25%"></a> -->
      <a href="../../index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">
        <img src="../../logo.png" style="width: 20%;">
      </a>
      <a href="../../index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Inicio</a>
      <a href="" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-disabled">Foro</a>
      <a href="" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-disabled">Denuncias</a>
      <a href="" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-disabled">Trueques</a>
      <a href="" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-disabled">Chat</a>
      <div class="w3-display-right">
        <a href="login.php" class="w3-bar-item w3-button w3-padding-large w3-white w3-hover-white">Login</a>
        <a href="registro.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Registro</a>
      </div>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
      <a href="../../index.php" class="w3-bar-item w3-button w3-padding-large">Inicio</a>
      <a href="" class="w3-bar-item w3-button w3-padding-large w3-disabled">Foro</a>
      <a href="" class="w3-bar-item w3-button w3-padding-large w3-disabled">Denuncias</a>
      <a href="" class="w3-bar-item w3-button w3-padding-large w3-disabled">Trueques</a>
      <a href="" class="w3-bar-item w3-button w3-padding-large w3-disabled">Chat</a>
      <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-teal">Login</a>
      <a href="registro.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-teal">Registro</a>
    </div>
  </div>

  <!-- Header -->
  <header class="w3-container w3-red w3-center" style="padding:128px 16px">
    <h1 class="w3-margin w3-jumbo">LOGIN</h1>
    <p class="w3-xlarge">Inicia sesión y aprovecha los servicios que ofrece nuestra página web</p>
  </header>

  <!-- LOG IN -->
  <br>
  <div class="w3-container w3-row w3-animate-left">
    <div class="w3-col w3-container" style="width:20%"></div>
    <div class="w3-col w3-container w3-blue w3-center w3-round-xlarge" style="width:60%"><p>Para iniciar sesión, introduce tu <i>"nickname"</i> o correo y tu contraseña</p></div>
    <div class="w3-col w3-container" style="width:20%"></div>
  </div>
  <br>
  <div class="w3-container w3-center w3-animate-left">
    <form class="w3-bottombar w3-topbar w3-border-teal" method="POST" action="">
      <br>
      <label class="w3-text-teal"><b><i>Nickname</i> o correo</b></label>
      <div class="w3-container w3-row">
        <div class="w3-col w3-container" style="width:30%"></div>
        <input class="w3-col w3-input w3-center w3-round-xlarge w3-border w3-border-blue" style="width:40%" type="text" name="nombreUsuario"></input>
        <div class="w3-col w3-container" style="width:30%"></div>
      </div>
      <br>
      <div class="w3-container w3-row">
        <div class="w3-col w3-container" style="width:30%"></div>
        <label class="w3-col w3-text-teal" style="width:40%"><b>Contraseña</b></label>
        <div class="w3-col w3-container" style="width:30%"></div>
      </div>
      <div class="w3-container w3-row">
        <div class="w3-col w3-container" style="width:30%"></div>
        <input class="w3-col w3-input w3-center w3-round-xlarge w3-border w3-border-blue" style="width:40%" type="password" name="contrasena"></input>
        <div class="w3-col w3-container" style="width:30%"></div>
      </div>
      <br>
      <div class="w3-container w3-row">
        <div class="w3-col w3-container" style="width:45%"></div>
        <button type="submit" value="submit" name="submit" class="w3-col w3-btn w3-light-blue" style="width:10%">Entrar</button>
        <div class="w3-col w3-container" style="width:45%"></div>
      </div>
      <br>
    </form>
  </div>
  <!-- Error -->
  <div class="w3-panel w3-display-container w3-red">
    <?php 
    if(isset($msg)){
      echo "<p class='w3-center'>".$msg."</p>";
    }
    ?>
  </div>
  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-center w3-opacity">  
    <div class="w3-xlarge w3-padding-32">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
  </footer>

  <script>
  // Used to toggle the menu on small screens when clicking on the menu button
  function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else { 
      x.className = x.className.replace(" w3-show", "");
    }
  }
</script>
</body>
</html>