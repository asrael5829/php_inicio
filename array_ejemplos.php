<?php
$cursos = array ('python<br>', 'java<br>','php<br>','html<br>','css<br>');
$cursos[5]='javascript<br>';
echo count($cursos);

$semana[0]='lunes<br>';
$semana[1]='martes<br>';
$semana[2]='miercoles<br>';
$semana[3]='jueves';
$semana[4]='viernes<br>';
$semana[5]='sabado<br>';
$semana[6]='domingo<br>';
echo 'cantidad de elementos: ' .count($semana);
for ($i=0; $i < count($semana); $i++) { 
    echo $semana[$i];
    if($semana[$i]=='jueves'){
        echo 'curso de php';
    }
}

$amigos = array('jose<br>','maria<br>','raul<br>','sara<br>','pedro<br>','camila<br>','david<br>');
$posicion = count($amigos) -2;
echo $amigos[$posicion];
//ordenar de manera alfabetica
//arsort para mantener la posicion
//rsort para ordenar al revez
//asort para ordenar
arsort($amigos);
print_r($amigos);
?>