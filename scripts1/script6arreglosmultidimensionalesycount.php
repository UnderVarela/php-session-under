<?php
//crea un arreglo multidimensional que guarde la información de un listado de amigos y sus teléfonos

$colegas = array (
  array("Fulanito",4563456),
  array("Meganito",563456),
  array("Zutanito",4537365),
  array("Zurullito",32345245),
);

//muestra con count() el número de amigos que tiene tu listado

echo 'Tengo '.count($colegas).' '.'colegas';


// Xurxo:

const LISTADO = [
  [
    'nombre' => 'David',
    'telefonos' => 345672
  ],
  [
    'nombre' => 'Pepa',
    'telefonos' => 58796587
  ]
  ];

  echo "<br> Solo tengo ",count(LISTADO)," amigos y mi mejor amigo es ", LISTADO[0]['nombre'];