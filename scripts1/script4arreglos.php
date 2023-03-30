<?php
//Crea un arreglo que me cargue los meses de un año y los visualicemos a posteriori en una lista ordenada de HTML
// echo "<ol>";
// $months = [
//   "Enero",
//   "Febrero",
//   "Marzo",
//   "Abril",
//   "Mayo",
//   "Junio",
//   "Julio",
//   "Agosto",
//   "Septiembre",
//   "Octubre",
//   "Noviembre",
//   "Diciembre",
// ];

// for($i=0; $i < count($months); $i++) {
//   $year = $months[$i];
//   echo "<li>$year</li>"; 
// }
// // echo "<li>$year[0]</li>";
// echo "</ol>";


// Xurxo:

define('MESES', [
  "Enero",
  "Febrero",
  "Marzo",
  "Abril",
  "Mayo",
  "Junio",
  "Julio",
  "Agosto",
  "Septiembre",
  "Octubre",
  "Noviembre",
  "Diciembre",
]);

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meses año</title>
</head>
<body>
  <ol>
    <?php 
    foreach(MESES as $mes):
    ?>
    <li><?=$mes?></li>
    <?php
    endforeach;
    ?>
  </ol>
</body>
</html>