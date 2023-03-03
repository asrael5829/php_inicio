<?php
//INICIO DE PRATICA PHP
//variables
$nombre ='israel';
echo $nombre;

$numero =3;
echo $numero;
echo "este numero es: $numero";
echo 'este numero es: '.$numero;

//constantes
$curso = 'php';
echo $curso;
$curso= 'python';
echo $curso;
define('curso','php');
echo curso;

//condicionales
$numero_uno = 10;
$numero_dos = 10;
if ($numero_uno<$numero_dos) {
    echo 'curso de php';
}
elseif ($numero_uno == $numero_dos) {
    echo "el numero $numero_uno es igual al numero $numero_dos";
}
else {
    echo 'curso de python';
}

//switch
$curso1 ='rubi';
switch ($curso1) {
    case 'php':
        echo 'lunes y martes';
    break;
    case 'java':
        echo 'miercoles';
    break;
    case 'python':
        echo 'jueves';
    break;

    default:
        echo'no existe el curso';
        break;
}

//Ciclo while,do while y for

?>