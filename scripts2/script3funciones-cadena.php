<?php 

# trim()  limpiamos los espacios en blanco por la izquierda y la derecha
# strlen() longitud de un string
# substr() extraemos texto
# strtoupper() pasamos a mayúsculas
# strtolower() pasamos a minúsculas
# strpos() posición / índice de una parte de la cadena

$nombreProfe = "                Xurxo            ";
//con las funciones trim() y strlen() indícame el número de caracteres que tiene tu profesor

$nombreProfe = trim($nombreProfe);
echo $nombreProfe, ' tiene ',strlen($nombreProfe),' caracteres';

// Segunda Parte:

$nombreCompleto	=" Xurxo González Tenreiro";

//crea dos variables y extraeme los valores del nombre por un lado y los apellidos por otro:
//funciones útiles: strlen, strpos, substr, trim

$nombreCompleto = trim($nombreCompleto); // Limpiamos espacios en blanco a izda y derecha.
$primerBlanco = strpos($nombreCompleto, " "); // Indice del primer espacio en blanco.
$nombrePila = substr($nombreCompleto, 0, $primerBlanco);
$apellidos = substr($nombreCompleto, $primerBlanco + 1); // el +1 es porque tiene que empezar a contar despues del espacio en blanco.


echo "<br>Hola!, mi nombre de pila es $nombrePila y mis apellidos son $apellidos";