<?php
/*
echo "sin salto de linea\n >>";
echo "Hola usuario";
echo "como estas?<<\n";

echo "con salto de linea \n";
echo "se uliza barra invertida o diagonal inversa --> '\' \n";
echo "entendio?";

$hola = "hola para las variables es '$' y el nombre osea 'nombre'";
echo $hola;
*/

use function PHPSTORM_META\type;

echo "Hola mundo\n";
/*
Es un comentario de varias lineas
es facil
solo es slash y asterisco
*/

// Variables 

$my_string = "Hola, soy una cadena de texto";
$my_string = "Aqui cambio el valor de la cadena de texto";
echo $my_string . "\n";
echo gettype($my_string) . "\n";

$my_string = 6;
echo $my_string . "\n";
echo gettype($my_string) . "\n";

$my_string = "esto es una cadena de texto";

$my_int = 10;
$my_int = $my_int + 9;
echo $my_int . "\n";
echo $my_int - 2 . "\n";
echo $my_int . "\n";
echo gettype($my_int) . "\n";

$my_double = 7.5;
echo gettype($my_double) . "\n";
echo $my_int + $my_double . "\n";
echo $my_int . $my_int + $my_double /*$my_string*/ . "\n";

$my_bool = true;
echo $my_bool . "\n";
echo gettype($my_bool) . "\n";