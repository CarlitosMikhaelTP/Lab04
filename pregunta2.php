<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Obtenemos los valores del formulario
  $nombreApellidoInput = $_POST['nombreApellidoInput'];
  $direccioninput = $_POST['direccioninput'];
  $emailinput = $_POST['emailinput'];
  $edad = $_POST['edad'];
            
  echo " <form><h1>BIENVENIDO</h1> <br> ¡ Hola $nombreApellidoInput <br> Tu dirección es: $direccioninput <br> Tienes $edad y tu correo es $emailinput </form>" ;
}        
?>
