<?php
//varibles scope

/*function estudiantes()
{
    $edad = 23;
    echo $edad;
}

estudiantes();*/

/*function estudiante()
{
    $edad= 22;
    return $edad;
}
echo estudiante()*/

$edad =20;
function estudiante()
{
    global $edad;
    $edad = 24;
    echo $edad;
}
estudiante();
echo $edad;
?>