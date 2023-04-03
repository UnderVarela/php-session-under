<?php
declare(strict_types = 1);

//crea una función que cada vez que la llamemos realice un salto de línea en html

/**
 * Funcion que realiza un salto de linea.
 * el :void es para indicar que la funcion no devuelve nada.
 * Si pones la palabra 'return'(en vez de echo) hay que cambiar el : void por : string
 */
function saltoLinea () : void {
	echo "<br>";
}

?>

<span>Hola</span> <?=saltoLinea()?>Mundo cruel

<?php
//crea una función que muestre por pantalla un mensaje personalizado como parámetro
// mixed te dice que dentro del $mensaje puede ir cualquier cosa (string, numero, etc, etc)
function alert (mixed $mensaje) : void {
	if(gettype($mensaje) === 'array') 
		echo join(',', $mensaje);
	else 
		echo $mensaje;
}

alert(2);






//Modifica la función que viene a continuación para que a partir de un parámetro númerico
//(entre 1 y 7) devuelva el día de la semana
function getDia(int $dia): string {
	$array = ["lunes","martes","miércoles","jueves","viernes","sábado","domingo"];
	return $array[$dia-1]?? 'Día no válido';
	}
	
echo getDia(1);