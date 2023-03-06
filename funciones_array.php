<?php
$amigos = array('jose<br>','maria<br>','raul<br>','sara<br>','pedro','camila<br>','david<br>');
$compañeros =array('segio<br>','hugo<br>','carla<br>','elias<br>');
//array_chunk divide los arrays
//array_slice elimina el resto del array
//array_merge une los arrays
//array_pop eliminar el ultimo elemento
$buscar = array_search('pedro',$amigos);
print_r($buscar);
$revez = array_reverse($amigos);
print_r($revez);
?>