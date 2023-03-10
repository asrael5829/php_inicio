<?php 
//variables globales
//globals disponibles en cualquier momento
/*$n1 = 6;
$n2 = 4;
function sumar()
{
    $GLOBALS['s'] = $GLOBALS['n1'] + $GLOBALS['n2'];
}
sumar();
echo $s;*/

//_server tenemos datos de informacion de donde se encuentra el archivo
//server_name tipo de servidor local
//http_referer direccion de enlace
/*echo $_SERVER['PHP_SELF'];
echo $_SERVER['SERVER_NAME'];
echo $_SERVER['HTTP_REFERER'];
*/
$numero = $_GET['numero'];
echo "el numero es: ". $numero;
?>