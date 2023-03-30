<?php
//crea un arreglo que guarde la información de los meses del año (Enero, Febrero, Marzo...) y los muestre posteriormente en una lista ordenada de html

echo "<ol>";
$months = [
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
];

foreach($months as $key => $value):
  echo "<li>$value</li>";
endforeach; 


echo "</ol>";