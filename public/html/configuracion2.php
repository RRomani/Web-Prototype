<!DOCTYPE html>
<html>
<title>Configuración</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="../../logo.jpg">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
  .w3-bar,h1,button {font-family: "Montserrat", sans-serif}

  .center {
    text-align: center;
  }


  .pagination {
    display: inline-block;
  }

  .pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
    margin: 0 4px;
  }

  .pagination a.active {
    background-color: red;
    color: white;
    border: 1px solid red;
  }
  .pagination a:hover:not(.active) {background-color: #ddd;}
</style>
<body>

  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-red w3-card w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <!--<a href="#" class="w3-bar-item w3-button"><img src="logo.jpg" alt="Home" width="25%"></a> -->
      <a href="../../index2.php" class="w3-bar-item w3-button w3-padding-large">Inicio</a>
      <a href="debates2.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Foro</a>
      <a href="denuncias2.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Denuncias</a>
      <a href="trueques2.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Trueques</a>
      <a href="chat2.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Chat</a>
      <div class="w3-display-right">
        <div class="w3-xxlarge w3-cell">
          <a href="configuracion2.php"><i class="material-icons w3-xxlarge w3-blue">person</i></a>
        </div>
        <div class="w3-cell">
          <a href="../../index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-blue w3-cell">Cerrar Sesión</a>
        </div>
      </div>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
      <a href="debates2.html" class="w3-bar-item w3-button w3-padding-large">Foro</a>
      <a href="denuncias2.html" class="w3-bar-item w3-button w3-padding-large">Denuncias</a>
      <a href="trueques2.html" class="w3-bar-item w3-button w3-padding-large">Trueques</a>
      <a href="chat2.html" class="w3-bar-item w3-button w3-padding-large">Chat</a>
      <a href="../../index.php" class="w3-bar-item w3-button w3-padding-large right">Cerrar Sesión</a>
    </div>
  </div>

  <!-- Header with carousel

  <header class="w3-container w3-red" style="padding:128px 16px">

    <div class="w3-content w3-display-container" style="max-width:500px">
      <img class="mySlides" src="public/img/img_cornella_1.jpg" style="width:100%">
      <img class="mySlides" src="public/img/img_cornella_2.jpg" style="width:100%">
      <img class="mySlides" src="public/img/img_cornella_3.jpg" style="width:100%">
      <div class="w3-display-bottom w3-large w3-container w3-padding-16 w3-black">
        <h4 class="w3-xlarge">Home</h4>
        <p class="w3-large">Descubre que esta pasando a tu alrededor</p>
      </div>
    </div>  
  </header>
-->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
	<?php
		if (true){
			echo "<div class='w3-cell-row w3-mobile'>";
			echo "<div class='w3-container w3-cell w3-mobile'><h1 class='w3-center w3-margin w3-jumbo'>Área personal</h1>";
			echo "<p class='w3-xlarge w3-center'>Edita tu información</p></div>";

			echo "<div class='w3-container w3-cell w3-mobile'><div class='w3-card-4 w3-dark-grey w3-center' style='width:50%'>";
			echo "<div class='w3-container w3-center'><h3>Usuario</h3>";
			echo "<img src='../img/img_avatar3.png' alt='Avatar' style='width:80%'><h5>anonim</h5>";
			echo "</div></div></div></div>";
		}else{
			echo "<h1 class='w3-margin w3-jumbo w3-mobile'>Cornellà de Llobregat</h1>";
			echo "<p class='w3-xlarge w3-mobile'>Descubre que esta pasando a tu alrededor</p>";
		}
	?>
</header>

<form action="configuracion2.php" class="w3-container w3-card-4 w3-pale-blue w3-text-teal w3-margin w3-hover-shadow w3-animate-bottom">
  <h2 class="w3-center">Edita el campo que desees</h2>
 
  <div class="w3-row w3-section">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
      <div class="w3-rest">
        <input class="w3-input w3-border w3-hover-blue w3-border w3-border-blue w3-text-blue" name="nombre" type="text" value="anonim Gutierrez">
      </div>
  </div>

  <div class="w3-row w3-section">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
      <div class="w3-rest">
        <input class="w3-input w3-border w3-hover-blue w3-border w3-border-blue w3-text-blue" name="nickname" type="text" value="anonim">
      </div>
  </div>

  <div class="w3-row w3-section">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
      <div class="w3-rest">
        <input class="w3-input w3-border w3-hover-blue w3-border w3-border-blue w3-text-blue" name="movil" type="text" value="685420345">
      </div>
  </div>

  <div class="w3-row w3-section">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-car"></i></div>
      <div class="w3-rest">
        <input class="w3-input w3-border w3-hover-blue w3-border w3-border-blue w3-text-blue" name="direccion" type="text" value="C/ Josep Maria Verdaguer, 2, 4º 1ra">
      </div>
  </div>
  
  <div class="w3-container w3-row">
    <div class="w3-col w3-container" style="width:35%"></div>
    <button class="w3-button w3-block w3-col w3-section w3-light-blue w3-ripple w3-padding w3-center w3-border w3-round-xlarge" style="width: 30%">Guardar</button>
    <div class="w3-col w3-container" style="width:35%"></div>
  </div>
</form>
<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-center w3-opacity">  
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

/*
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
   x[i].style.display = "none";  
 }
 myIndex++;
 if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
  }
  */
</script>

</body>
</html>