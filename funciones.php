<?php
//funciones
/*function estudiante($nombre){
    echo "nuevo estudiante $nombre <br>";
}
estudiante('israel');
estudiante('raul');*/

/*function estudiante (
    $nombre ='israel',
    $apellido ='guaman',
    $edad = 22)
{
    echo "el estudiante llamado $nombre con 
    apellido $apellido tiene la edad de $edad";
}*/

/*function suma($a,$b)
{
    $resultado= $a+$b;
    echo $resultado;
}

suma(4,6);*/

//funcion return regresa el resultado
function suma($a,$b)
{
    return $a + $b;
}

$resultado = suma(4,8);
echo $resultado;

?>