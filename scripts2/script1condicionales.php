<?php 
# if (condicion){
# 	// Instrucciones
# }
# 
# Operadores de comparacion:
# 
# == Igualdad
# < Menor que
# > Mayor que
# <= Menor o igual que
# >= Mayor o igual que
# != Diferente
# ! Negacion
# 
# */


# Operadores de logicos:

# && - Evalua que se cumpla una de las dos condiciones
# ||, OR - Evalua que se cumpla al menos una condicion


# if else
# $verdadero = true;
# $mes = 'Enero';
# 
# if ($verdadero) {
  # 	echo "Verdadero";
  # } else {
    # 	echo "Falso";
    # }
    # 
# if ($mes == 'Diciembre') {
# 	echo "Feliz Navidad";
# } else if($mes == 'Enero'){
  # 	echo "Feliz Año Nuevo";
# } else if ($mes == 'Julio'){
# 	echo "Feliz Julio";
# } else {
  # 	echo "El mes que pusiste no tiene celebracion";
  # }
  
  
  //Crea la estructura de una web en el que se ha de guardar en una variable llamada edad. 
  // Esta variable se encontrará en control de formulario con el mismo nombre.
  // Si el usuario es mayor de edad se mostrará el mensaje "Bienvenido a esta web", en caso contrario un mensaje conforme a que es menor de edad y no puede visitar el sitio. La edad se ha de cargar mediante un formulario
  // $_REQUEST, $_POST, $_GET para capturar el envío del formulario
  // isset() — Determina si una variable está definida y no es null
  ?>

  <!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Ejercicio 1. Mayor edad</title>
  </head>
  <body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
      <fieldset>
        <legend>Mayor de edad</legend>
        <label for="edad">Introduzca su edad</label><br>
        <input type="number" name="edad" required min="0" max="100">
        <button name="submit">Enviar</button>
      </fieldset>
      <?php 
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["edad"])) {
          $edad = $_POST["edad"];
          if ($edad >= 18) {
            echo "Bienvenido a esta web";  
          } else {
            echo "Lo siento, eres menor de edad y no puedes acceder al sitio";
          }
        }
      }
      ?>
    </form>
    
  </body>
  </html>


