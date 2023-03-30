<?php
//Crea un arreglo asociativo donde se guarde la información de un perro donde constará su nombre, su raza, y su edad

$perro = [
  "Nombre" => "Lily",
  "Raza" => "Shi Tzu",
  "Edad" => 5
];

//cambia a posteriori el nombre del perro y muéstralo por pantalla 

$perro['nombre'] = 'Lasy';
print('Mi perro se llama '.$perro['nombre']);

echo '<br>', 'Todos los datos:',join(', ',$perro);