<?php
//https://www.php.net/manual/es/ref.array.php
$tortilla= array(
	"tiempo"=>"5 minutos","ingredientes"=>
	array("huevo","patatas","sal"),"receta"=>
	"Batir un par de huevos, añadir sal a gusto. 
	<br>Pelar unas patatas y dorarlas, mezclar con el huevo y freir"
);



//añade al array ingredientes de la tortilla la cebolla (array_push)

array_push($tortilla['ingredientes'], 'cebolla');

// print_r($tortilla);


//utilizar la functión extract() para extraer las variables y utilizarlas en la tabla siguiente

extract($tortilla);

// pintar ingredientes:
function pintaIngredientes (array $ingredientes): string {
	return join('<br>', $ingredientes);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
  <link rel="shortcut icon" href="#" type="image/x-icon">
	<title>Tortilla</title>
	<style>
		table, td, th {
			border: 1px solid #000;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>
				Tiempo
			</th>
			<th>
				Ingredientes
			</th>
			<th>
				Receta
			</th>
		</tr>
		<tr>
			<td><?=$tiempo?></td>
			<td><?= pintaIngredientes($ingredientes)?></td>
			<td><?=$receta?></td>
		</tr>
		<tr>
			<td colspan="3">Número de ingredientes: <?=count($ingredientes)?></td>
		</tr>
	</table>
</body>
</html>