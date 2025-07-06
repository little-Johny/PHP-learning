<?php
$nombre = 'Johny';
$apellido = 'Molano';

// Declaracion de la funcion
function joinFullName($name, $lastName) {
  echo $name.' '.$lastName."\n";
};

// Llamado de la funcion
joinFullName($nombre, $apellido);


function addedNumberValue($array) {
  $total = 0;
  for ($i=0; $i < count($array); $i++) { 
    $total = $total + $array[$i];
  }

  var_dump($total);
};
$arraycito = [1,2,3,4];
addedNumberValue($arraycito);
addedNumberValue([1,2,3]);

?>