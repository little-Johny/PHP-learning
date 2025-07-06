<?php

$object = ["name" => "Johny", "age" => 19];
$people = [
  [
    "name" => "Johny",
    "age" => 3
  ],
  [
    "name" => "Andres",
    "age" => 6
  ],
  [
    "name" => "Samuel",
    "age" => 9
  ],
  [
    "name" => "Jusepe",
  ],
];

// echo ("Hola, soy " . $people[0]["name"] . " y tengo " . $people[0]["age"] . " años");

function studentsAge ($students) {
  foreach ($students as $student) {
    if(!isset($student["age"])) {
      echo "El estudiante tendra su juguetes en la bodega de al lado";
      continue;
    }

    $age = $student["age"];

    if ($age < 5) {
      echo "El estudiante con $age años tendrá sus juguetes en la parte inferior de la bodega.<br>";
    } elseif ($age >= 5 && $age < 7) {
      echo "El estudiante con $age años tendrá sus juguetes en la parte media de la bodega.<br>";
    } elseif ($age >= 7) {
      echo "El estudiante con $age años tendrá sus juguetes en la parte alta de la bodega.<br>";
    } else {
      echo "El estudiante tendrá sus juguetes en la bodega de al lado.<br>";
    }
  }
}

studentsAge($people);
?>