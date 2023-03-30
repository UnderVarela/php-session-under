<?php
# Con las palabras reseservadas const y define podemos crear constantes

#const -> desde la version 7 de php
#define -> forma clásica

// Crea un array que sea constante donde almacenemos los días de la semana

const DIAS_SEMANA = ['lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo'];

echo join('<br>', DIAS_SEMANA); // join es para convertir el array en string y poder pintarlo